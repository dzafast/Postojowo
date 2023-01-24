<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\User;

use App\Models\Specialization;

Use App\Repositories\UserRepository;

Use Illuminate\Support\Facades\Auth;

class UserController extends Controller
{
    public function __construct(){
        $this->middleware('auth');
    }

    public function index(UserRepository $userRepo){
        
        if(auth()->check()){
            $user = auth() -> user();
        }

        $statistic = $userRepo->usersStatistic();
        $user = $userRepo->getAllUsers();
        return view('user.list', ["usersList" => $user,
                                    "footerYear" => date("Y"),
                                    "title" => "Moduł Użytkownik",
                                    "hrefTitle" => "Użytkownicy",
                                    "statistic" => $statistic]);
    }

    public function show(UserRepository $userRepo, $id){

        $user = $userRepo->find($id);
        return view('user.show', ["user" => $user,
                                    "footerYear" => date("Y"),
                                    "title" => "Moduł Użytkownik",
                                    "hrefTitle" => "Uzytkownik"]);
    }

    public function create(){   //DODANIE UZYTKOWNIKA

        $specialization = Specialization::all();
        return view('user.create', ["specialization" => $specialization,
                                    "footerYear" => date("Y")]);
    }

    public function store(Request $request ){

        $request -> validate([
            'name' => 'required|max:255',
            'email' => 'required|email|unique:users,email',
            'password' => 'required|min:5',
            'address' => 'required',
            'pesel' => 'required',
            'phone' => 'required',
            'car' => 'required',
        ]);

        $user = new User;
        $user->name = $request->input('name');
        $user->email = $request->input('email');
        $user->password = bcrypt($request->input('password'));
        $user->address = $request->input('address');
        $user->pesel = $request->input('pesel');
        $user->phone = $request->input('phone');
        $user->status = $request->input('status');
        $user->type = $request->input('type');
        $user->car = $request->input('car');
        $user->save();

        $user->specialization()->sync($request->input('specialization'));
        return redirect()->action('UserController@index');
    }

    // EDYCJA I ZMIANA NAZWY UZYTKOWNIKA
    public function edit(UserRepository $userRepo, $id){

        // $user = $userRepo->update(["name" => "Justyna Bartysiak"], $id);  //EDYCJA i zmiana UŻYTKOWNIKA
        
        $user = $userRepo->find($id);
        $specialization = Specialization::all();
        return view('user.edit', ["specialization" => $specialization,
                                    "user" => $user,
                                    "footerYear" => date("Y")]);
    }

    public function delete(UserRepository $userRepo, $id){

        $user = $userRepo->delete($id);
        return redirect('user');
    }

    public function editStore(Request $request ){
        $user = User::find($request->input('id'));
        $user->name = $request->input('name');
        $user->email = $request->input('email');
        $user->address = $request->input('address');
        $user->pesel = $request->input('pesel');
        $user->phone = $request->input('phone');
        $user->status = $request->input('status');
        $user->type = $request->input('type');
        $user->car = $request->input('car');
        $user->save();

        $user->specialization()->sync($request->input('specialization'));
        return redirect()->action('UserController@index');
    }

    // public function destroy(UserRepository $userRepo, $id)
    // {
    //     $user = $userRepo->visits->delete();
    //     $user = $userRepo->delete();
    //     return redirect()->back()->with('message','Task is completely deleted');
    // }
}
