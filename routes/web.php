<?php

use Illuminate\Support\Facades\Route;

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


//Persona
Route::get('/personForm', 'personController@personForm');
Route::post('/savePerson', 'personController@savePerson')->name('savePerson');

//Vehiculo
Route::get('/vehicleForm', 'VehicleController@index');
Route::post('/saveVehicle', 'VehicleController@store')->name('store');

//Vehiculo persona
Route::get('/vehicle_personForm', 'Vehicle_personController@index');
Route::post('/saveVehicle_person', 'Vehicle_personController@store')->name('store');

//Listas
Route::get('/', 'Vehicle_personController@list');

//Eliminar

Route::delete('/delete{id}','Vehicle_personController@delete')->name('delete');


//editar
Route::get('/updatePerson{id}', 'personController@updatePerson')->name('updatePerson');
Route::patch('/update{id}', 'personController@update')->name('update');
