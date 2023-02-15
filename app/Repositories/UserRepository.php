<?php
namespace App\Repositories;

use App\Models\User;

use DB;

//konstruktor
class UserRepository extends BaseRepository{
    public function __construct(User $model){
        $this->model = $model;
    }

    public function getAllUsers(){
        return $this->model->where('type', 'user')->where('status', 'active')->orderBy('name', 'asc')->get();
    }
    // INFORMACJA O ILOSCI AKTYWNYCH UZYTKOWNIKACH
    public function usersStatistic(){
        return DB::table('users')->select(DB::raw('count(*) as user_count, status'))->where('type', 'user')->groupBy('status')->get();
    }
}


?>