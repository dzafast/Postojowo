<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\User;

use App\Models\Specialization;

Use App\Repositories\RentierRepository;

Use Illuminate\Support\Facades\Auth;

class RentierController extends Controller
{
    // public function __construct(){
    //     $this->middleware('auth');
    // }
    public function index(){

        $rentiers = User::where('type', 'rentier')->get();
        return view('rentier.list', ["rentiersList" => $rentiers,
                                    "footerYear" => date("Y"),
                                    "title" => "Moduł Wynajmującego",
                                    "hrefTitle" => "Wynajmujący"]);
    }

    public function listByParkings(RentierRepository $rentierRepo, $id){
        $rentiers = $rentierRepo->parkingToUsers($id);
        return view('rentier.list', ["rentiersList" => $rentiers,
                                    "footerYear" => date("Y"),
                                    "title" => "Moduł Wynajmującego",
                                    "hrefTitle" => "Wynajmujący"]);
    }

    public function listBySpecialization(RentierRepository $rentierRepo, $id){

        $rentiers = $rentierRepo->getUsersBySpecializations($id);
        return view('rentier.list', ["rentiersList" => $rentiers,
                                    "footerYear" => date("Y"),
                                    "title" => "Moduł Użytkownik",
                                    "hrefTitle" => "Użytkownicy"]);
    }

}
