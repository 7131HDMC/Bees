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

/*Route::get('/', function () {
    // Insere um novo usuário ao banco de dados:
    $user = \App\user::create([
        'indentifyUser'         => 'uid',
        'pkEmail'     => 'carlos@especializati.com.br',
        'password'     => '12345678',
        'name' => 'Carlos Ferreira',
    ]);
    */
Route::get('/', 'CadastrarController@store');
//Route::post('/cadastrar','CadastrarController@store');
?>