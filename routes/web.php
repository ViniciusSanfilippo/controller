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


Route::get('/editoras', 'EditoraController@index');

Route::get('/editoras/cria', 'EditoraController@cria');

Route::get('/editoras/edita/{editora}','EditoraController@edita');//noa precisa do find no COntroller

Route::post('/editoras', 'EditoraController@armazena');

Route::patch('/editoras/{id}','EditoraController@atualiza');
