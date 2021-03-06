<?php

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

// Route::get('/home', 'HomeController@index')->name('home');

Route::group(['prefix' => 'admin', 'namespace' => 'Admin','middleware' => ['auth']], function () {
    Route::get('/', 'AdminController@index')->name('dashboard');
    Route::resource('usuarios', 'UsersController', ['as' => 'admin']);
    Route::resource('niveles', 'NivelesController', ['as' => 'admin']);
    Route::resource('ramos', 'RamosController', ['as' => 'admin']);
    Route::resource('ramosProfesor', 'RamosProfesorController', ['as' => 'admin']);
    Route::resource('evaluacionesProfesor', 'EvaluacionesController', ['as' => 'admin']);
    Route::resource('forosProfesor', 'ForosProfesor', ['as' => 'admin']);
    Route::resource('evaluacionesAlumnos', 'EvaluacionesAlumnos', ['as' => 'admin']);
    Route::resource('calendarioAlumnos', 'calendarioAlumnos', ['as' => 'admin']);
    Route::resource('calificacionesAlumnos', 'calificacionesAlumnos', ['as' => 'admin']);
});
