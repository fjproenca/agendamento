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

Route::get('/equipamentos', 'EquipamentosController@index')->name('equipamentos_home');

Route::get('/reserva', 'ReservaController@index')->name('reserva_home');

Route::get('/equipamentos/criar', 'EquipamentosController@create')->name('criar_equipamento');

Route::post('/equipamentos/criar', 'EquipamentosController@store');

Route::get('/equipamentos/exibir/{id_equipamento}', 'EquipamentosController@show')->name('exibir_equipamento');

Route::get('/equipamentos/atualizar/{id_equipamento}', 'EquipamentosController@edit')->name('form_editar_equipamento');

Route::put('/equipamentos/atualizar/{id_equipamento}', 'EquipamentosController@update')->name('atualizar_equipamento');

Route::delete('/equipamentos/excluir/{id_equipamento}', 'EquipamentosController@destroy');

Route::get('/reserva/atualizar/{id_reserva}', 'ReservaController@edit')->name('form_editar_equipamento');