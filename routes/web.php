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


Route::get('/deputados/{pagina}', 'DeputadosController@index');
Route::get('/deputados/deputado/{id}', 'DeputadosController@show');
Route::get('/deputados/deputado/{id}/despesas/{pagina}', 'GastosController@index');
Route::get('/', function() {
	return view('home.index');
});