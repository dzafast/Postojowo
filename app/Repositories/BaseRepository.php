<?php

namespace App\Repositories;

use Illuminate\Database\Eloquent\Model;

class BaseRepository{

    protected $model;
    //pobranie wszystkich rekordow z tabeli
    public function getAll($column = array('*')){
        return $this->model->get($column);
    }

    //tworzenie rekordow w tabeli
    public function create($data){
        return $this->model->create($data);
    }

    public function update($data, $id){
        return $this->model->where("id",'=',$id)->update($data);
    }

    public function delete($id){
        return $this->model->destroy($id);
    }

    public function find($id){
        return $this->model->find($id);
    }

}

?>