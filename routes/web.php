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

//Desde aqui se llama al controlador que tiene esta funcion
//Route::get('/hola3', 'hola@mostrar');
// desde aqui se llamam a la vista

Route::get('/', function () {
	return view('index');
});

Route::resource('customers', 'CustomersController');
