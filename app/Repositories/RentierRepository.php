<?php
namespace App\Repositories;

use App\Models\User;

//konstruktor
class RentierRepository extends BaseRepository{
    public function __construct(User $model){
        $this->model = $model;
    }

    public function getAllUsers(){
        return $this->model->where('type', 'rentier')->where('status', 'active')->orderBy('name', 'asc')->get();
    }

    // PRZEKIEROWANIE Z PARKINGU NA KONKRETNEGO RENTIERA
    public function parkingToUsers($id){
        return $this->model->where('type', 'rentier')->whereHas('parking',
        function($q) use ($id){
            $q->where('parkings.id',$id);
        })->orderBy('name', 'asc')->get();
    }

    // PRZEKIEROWANIE Z SPECIAJIZACJI NA KONKRETNEGO RENTIERA
    public function getUsersBySpecializations($id){
        return $this->model->where('type', 'rentier')->whereHas('specialization', function($q) use ($id){
            $q->where('specializations.id', $id);
        })->orderBy('name', 'asc')->get();
    }
}


?>