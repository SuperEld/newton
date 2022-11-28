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
Route::get('/home', 'EstudiantesController@Listar')->name('home');
Route::resource('estudiantes', 'EstudiantesController');
Route::post('guardar-estudiante', 'EstudiantesController@guardar');
Route::get('ListaEstudiantes', 'EstudiantesController@Listar');
Route::get('ImprimirEstudiante/{id}', 'EstudiantesController@imprimirPdf');

