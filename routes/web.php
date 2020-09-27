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

Route::get('/', function () {
    return view('welcome');
});

Auth::routes();

Route::resource('/categorias', 'CategoriasController');

Route::get('/productos/list', 'ProductosController@list');
Route::resource('/productos', 'ProductosController');

Route::get('/home', 'HomeController@index')->name('home');

//Movimientos
Route::get('/ingreso', 'MovimientosController@ingreso')->name('ingreso');
Route::post('/ingreso/nuevo_ingreso', 'MovimientosController@nuevo_ingreso');
Route::post('/ingreso/actualizar_ingreso', 'MovimientosController@actualizar_ingreso');

Route::get('/egreso', 'MovimientosController@egreso');
Route::post('/egreso/nuevo_egreso', 'MovimientosController@nuevo_egreso');
Route::post('/egreso/actualizar_egreso', 'MovimientosController@actualizar_egreso');


//Prueba AJAX
/*Route::get('/ajax-simple', 'AjaxController@mostrar')->name('mostrar');
Route::get('/ajax-simple/helloWordl', 'AjaxController@helloWordl')->name('helloWordl');
Route::post('/ajax-simple/nombre', 'AjaxController@nombre')->name('nombre');*/