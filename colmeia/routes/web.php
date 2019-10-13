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
    // Insere um novo usuário ao banco de dados:
    $user = \App\user::create([
        'indentifyUser'         => 'Carlos Ferreira',
        'pkEmail'     => 'carlos@especializati.com.br',
        'password'     => bcrypt('SenhaAqui'),
    ]);
//Route::get('/', function () {
    return view('welcome');
});
//Route::post('/cadastrar','CadastrarController@store');
