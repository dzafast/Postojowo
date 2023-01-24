<?php
namespace App\Repositories;

use App\Models\Parking;

//konstruktor
class ParkingRepository extends BaseRepository{
    public function __construct(Parking $model){
        $this->model = $model;
    }
}


?>