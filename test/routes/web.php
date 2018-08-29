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
})->name('home');

/*
Route::get('/prueba',function(){
    return view('prueba');
})->name('miPrueba');
*/

//Route::get('/pruebas','PaginasController@prueba')->middleware('admin');

Route::middleware('admin')->group(function(){
    
    Route::get('/pruebas','PaginasController@prueba');
    Route::get('/reportes','PaginasController@prueba');
});