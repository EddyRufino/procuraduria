<?php

Route::get('/', function () {
    return view('home');
});

// Route::get('welcome', function () {
//     return view('welcome');
// })->name('welcome');

Route::resource('usuarios', 'UsersController');
Route::resource('expedientes', 'ExpedienteController');
Route::resource('pendientes', 'PendientesController');
// Route::get('pendientes', 'ExpedienteController@pendientes')->name('expedientes.pendientes');
Route::resource('materias', 'MateriaController');
Route::resource('juzgados', 'JuzgadoController');
Route::resource('procesos', 'ProcesoController');

Route::get('/search', 'ExpedienteController@search')->name('expedientes.search');
Route::get('welcome', 'PendientesController@welcome')->name('welcome');

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
