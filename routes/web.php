<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\CountryStateCityController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/
Route::get('/', function(){
    return view('home');
});

Route::get('user', 'UserController@index');

Route::get('user/edit/{id}', 'UserController@edit');

Route::post('user/edit/', 'UserController@editStore');

Route::get('user/create', 'UserController@create');

Route::post('user/', 'UserController@store');

Route::get('user/{id}', 'UserController@show');

Route::get('user/delete/{id}', 'UserController@delete');

Route::get('parking', 'ParkingController@index');

Route::get('rentier', 'RentierController@index');

Route::get('rentier/parking/{id}', 'RentierController@listByParkings');

Route::get('rentier/specialization/{id}', 'RentierController@listBySpecialization');

Route::get('visit', 'VisitController@index');

Route::get('visit/delete/{id}', 'VisitController@delete');

Route::get('specialization', 'SpecializationController@index');

Route::get('specialization/create', 'SpecializationController@create');

Route::post('specialization/', 'SpecializationController@store');

Route::get('specialization/delete/{id}', 'SpecializationController@delete');

Route::get('countrystatecity', [CountryStateCityController::class, 'index']);
Route::post('get-states-by-country', [CountryStateCityController::class, 'getState']);
Route::post('get-cities-by-state', [CountryStateCityController::class, 'getCity']);


Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
