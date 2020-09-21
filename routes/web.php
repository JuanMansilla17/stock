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

Route::get('/productos/{idCategoria}/{idProveedor}/{pocaDisponibilidad}/{descripcion}/list', 'ProductosController@list');
Route::resource('/productos', 'ProductosController');


Route::get('/home', 'HomeController@index')->name('home');

/*Route::get('/categorias','CategoriasController@categorias');

Route::get('/crear','CategoriasController@create');*/