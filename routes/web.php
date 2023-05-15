<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Redirect;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {
    return view('auth.login');
});

/* Route::middleware([
    'auth:sanctum',
    config('jetstream.auth_session'),
    'verified'
])->group(function () {
    Route::get('/dash', function () {
        return view('dash.index');
    })->name('dash');
});*/
Route::get('/dash','App\Http\Controllers\DashboardController@index')->name('dash.index');

Route::resource('users','App\Http\Controllers\UsersController')->names('users');
Route::resource('porcinos','App\Http\Controllers\PorcinosController')->names('porcinos');
//Route::put('/porcinos/cuarentena/{id}','App\Http\Controllers\PorcinosController@update_cuarentena')->names('porcinos.cuarentena');
Route::put('porcinos/cuarentena/{id}', ['as' => 'porcinos.cuarentena','uses' => 'App\Http\Controllers\PorcinosController@update_cuarentena',]);
Route::put('porcinos/desactivar/{id}', ['as' => 'porcinos.desactivar','uses' => 'App\Http\Controllers\PorcinosController@update_estado',]);
Route::get('/cuarentena','App\Http\Controllers\CuarentenaController@index')->name('cuarentena.index');
Route::put('/cuarentena/{id}', ['as' => 'cuarentena.activar','uses' => 'App\Http\Controllers\CuarentenaController@activar',]);

Route::resource('apariamientos','App\Http\Controllers\ApariamientosController')->names('apariamientos');
Route::resource('razas','App\Http\Controllers\RazasController')->names('razas');
Route::resource('veterianario','App\Http\Controllers\VisitasController')->names('visitas');

Route::get('/produccion','App\Http\Controllers\ProduccionController@index')->name('produccion.index');
