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


Route::get('/', ['as' => 'raiz', 'uses' => 'Admin\HomeController@raiz']);
Route::get('/home', ['as' => 'home', 'uses' => 'Admin\HomeController@raiz']);

Route::middleware('access.controll.administrador')->group(function () {
   






    //=============User-Start=====================//
    Route::get('admin/users/listar', ['as' => 'admin.users', 'uses' => 'Admin\UserController@index'])->middleware('access.controll.administrador');
    Route::get('admin/users/listar/imprimir', ['as' => 'admin.users.listar.imprimir', 'uses' => 'Admin\UserController@imprimir_lista'])->middleware('access.controll.administrador');
    Route::post('admin/users/salvar', ['as' => 'admin.users.salvar', 'uses' => 'Admin\UserController@salvar'])->middleware('access.controll.administrador');
    Route::get('admin/users/cadastrar', ['as' => 'admin.users.cadastrar', 'uses' => 'Admin\UserController@create'])->middleware('access.controll.administrador');
    Route::get('admin/users/excluir/{id}', ['as' => 'admin.users.excluir', 'uses' => 'Admin\UserController@excluir'])->middleware('access.controll.administrador');
    Route::put('admin/users/atualizar/{id}', ['as' => 'admin.users.atualizar', 'uses' => 'Admin\UserController@atualizar'])->middleware('access.controll.administrador');
    Route::get('admin/users/ver/{id}', ['as' => 'users', 'uses' => 'Admin\UserController@ver'])->middleware('access.controll.administrador');
    Route::get('admin/users/editar/{id}', ['as' => 'admin.users.editar', 'uses' => 'Admin\UserController@editar'])->middleware('access.controll.administrador');
    //=============User-End======================//


    //=============transacao-Start=====================//
    Route::get('admin/transacoes/listar', ['as' => 'admin.transacoes', 'uses' => 'Admin\TransacaoController@index'])->middleware('access.controll.administrador');
    Route::post('admin/transacoes/salvar', ['as' => 'admin.transacoes.salvar', 'uses' => 'Admin\TransacaoController@salvar'])->middleware('access.controll.administrador');
    Route::get('admin/transacoes/cadastrar', ['as' => 'admin.transacoes.cadastrar', 'uses' => 'Admin\TransacaoController@create'])->middleware('access.controll.administrador');
    Route::get('admin/transacoes/excluir/{id}', ['as' => 'admin.transacoes.excluir', 'uses' => 'Admin\TransacaoController@excluir'])->middleware('access.controll.administrador');
    Route::put('admin/transacoes/atualizar/{id}', ['as' => 'admin.transacoes.atualizar', 'uses' => 'Admin\TransacaoController@atualizar'])->middleware('access.controll.administrador');
    
    Route::get('admin/transacoes/editar/{id}', ['as' => 'admin.transacoes.editar', 'uses' => 'Admin\TransacaoController@editar'])->middleware('access.controll.administrador');
    //=============transacoes-End======================//


    //=============transacao-Start=====================//
    Route::get('admin/lojas/listar', ['as' => 'admin.lojas', 'uses' => 'Admin\LojaController@index'])->middleware('access.controll.administrador');
    Route::get('admin/lojas/listar/imprimir', ['as' => 'admin.lojas.listar.imprimir', 'uses' => 'Admin\LojaController@imprimir_lista'])->middleware('access.controll.administrador');
    Route::post('admin/lojas/salvar', ['as' => 'admin.lojas.salvar', 'uses' => 'Admin\LojaController@salvar'])->middleware('access.controll.administrador');
    Route::get('admin/lojas/cadastrar', ['as' => 'admin.lojas.cadastrar', 'uses' => 'Admin\LojaController@create'])->middleware('access.controll.administrador');
    Route::get('admin/lojas/excluir/{id}', ['as' => 'admin.lojas.excluir', 'uses' => 'Admin\LojaController@excluir'])->middleware('access.controll.administrador');
    Route::put('admin/lojas/atualizar/{id}', ['as' => 'admin.lojas.atualizar', 'uses' => 'Admin\LojaController@atualizar'])->middleware('access.controll.administrador');
    
    Route::get('admin/lojas/editar/{id}', ['as' => 'admin.lojas.editar', 'uses' => 'Admin\LojaController@editar'])->middleware('access.controll.administrador');
    //=============lojas-End======================//


});
