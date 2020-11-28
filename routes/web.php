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



Route::get('/clientes', 'App\Http\Controllers\ClientesController@index');
Route::get('/clientes/Novo', 'App\Http\Controllers\ClientesController@create');
Route::post('/clientes/Novo', 'App\Http\Controllers\ClientesController@store')->name('registrar_produto');
Route::get('/clientes/Ver/{id}', 'App\Http\Controllers\ClientesController@show');
Route::get('/clientes/Editar/{id}', 'App\Http\Controllers\ClientesController@edit');
Route::post('/clientes/Editar/{id}', 'App\Http\Controllers\ClientesController@update')->name('alterar_produto');
Route::get('/clientes/Excluir/{id}', 'App\Http\Controllers\ClientesController@delete');
Route::post('/clientes/Excluir/{id}', 'App\Http\Controllers\ClientesController@destroy')->name('excluir_produto');

Route::get('processos_export','App\Http\Controllers\ClientesController@export');
Route::post('processos_import','App\Http\Controllers\ClientesController@import');

