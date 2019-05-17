<?php

//Enrrutar




//Categorias
Route::get('/nuestros-productos','FamiliaController@index');
Route::get('/{url_familia}/categorias','FamiliaController@get_categorias');




//Para borrar
Route::get('/url_familias','FamiliaController@crear_url');
//Fin para borrar


//Articulos
Route::get('/{url_familia}/articulos','ArticuloController@get_articulos');
Route::get('/articulos','ArticuloController@index');


//Inicio
Route::get('/','InicioController@index');





