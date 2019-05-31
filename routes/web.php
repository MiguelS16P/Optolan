<?php

use App\Familia;
use App\Articulo;
use App\Role;
use App\User;

//Categorias
Route::get('/nuestros-productos','FamiliaController@index');
Route::get('/{url_familia}/categorias','FamiliaController@get_categorias');
Route::get('/{url_familia}/articulos','FamiliaController@get_articulos');


//Para borrar
Route::get('/url_familias','FamiliaController@crear_url');
//Fin para borrar


//Articulos
Route::resource('/articulos','ArticuloController');

//Inicio
Route::get('/','InicioController@index');

Auth::routes();

Route::get('admin','AdministradorController@index');
