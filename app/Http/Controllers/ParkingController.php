<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\Parking;

use App\Repositories\ParkingRepository;

class ParkingController extends Controller
{
    public function index(ParkingRepository $parkingRepo){

        $parking = $parkingRepo->getAll();

        return view('parking.list', ["parkingList" => $parking,
                                    "footerYear" => date("Y"),
                                    "title" => "Moduł Parking",
                                    "hrefTitle" => "Parking"]);
    }
}
