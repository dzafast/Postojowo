<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Validator,Redirect,Response;
use App\Models\{Country,State,City};

class CountryStateCityController extends Controller
{

    public function index()
    {
        $data['countries'] = Country::get(["name","id"]);
        return view('countrystatecity.list',$data, ["hrefTitle" => "Użytkownicy",
                                                    "footerYear" => date("Y"),
                                                    "title" => "Moduł Użytkownik"]);
    }
    
    public function getState(Request $request)
    {
        $data['states'] = State::where("country_id",$request->country_id)
                    ->get(["name","id"]);
        return response()->json($data);
    }

    public function getCity(Request $request)
    {
        $data['cities'] = City::where("state_id",$request->state_id)
                    ->get(["name","id"]);
        return response()->json($data);
    }

}
