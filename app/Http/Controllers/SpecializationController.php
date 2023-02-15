<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\Specialization;

Use App\Repositories\SpecializationRepository;

class SpecializationController extends Controller
{
    public function index(SpecializationRepository $specializationRepo){

        $specialization = $specializationRepo->getAll();

        return view('specialization.list', ['specializationList' => $specialization,
                                            "footerYear" => date("Y"),
                                            "title" => "Moduł Specializacji",
                                            "hrefTitle" => "Specializacje"]);
    }

    public function create(){
        return view('specialization.create', ["footerYear" => date("Y")]);
    }

    public function store(Request $request){
        $specialization = new Specialization;
        $specialization->name = $request->input('name');
        $specialization->save();
        return redirect()->action('SpecializationController@index');
    }

    public function delete(SpecializationRepository $specializationRepo, $id){
        $specialization = $specializationRepo->delete($id);
        return redirect()->action('SpecializationController@index');
    }
}
