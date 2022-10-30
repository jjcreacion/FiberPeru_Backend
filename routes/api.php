<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/

Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});

Route::get('tecnicos','App\Http\Controllers\TecnicoController@getTecnicos');

Route::get('tecnicos/{id}','App\Http\Controllers\TecnicoController@getTecnicosId');

Route::post('addtecnicos','App\Http\Controllers\TecnicoController@insertTecnicos');

Route::put('updateTecnicos/{id}','App\Http\Controllers\TecnicoController@updateTecnicos');

Route::delete('deleteTecnicos/{id}','App\Http\Controllers\TecnicoController@deleteTecnicos');

Route::get('epps','App\Http\Controllers\EppsController@getEpps');

Route::get('epps/{id}','App\Http\Controllers\EppsController@getEppsId');

Route::post('addepps','App\Http\Controllers\EppsController@insertEpps');

Route::put('updateepps/{id}','App\Http\Controllers\EppsController@updateEpps');

Route::delete('deleteepps/{id}','App\Http\Controllers\EppsController@deleteEpps');

Route::get('asignaciones','App\Http\Controllers\AsignacionesController@getAsignaciones');

Route::get('asignaciones/{id}','App\Http\Controllers\AsignacionesController@getAsignacionesId');

Route::post('addasignaciones','App\Http\Controllers\AsignacionesController@insertAsignaciones');

Route::put('updateasignaciones/{id}','App\Http\Controllers\AsignacionesController@updateAsignaciones');

Route::delete('deleteasignaciones/{id}','App\Http\Controllers\AsignacionesController@deleteAsignaciones');
