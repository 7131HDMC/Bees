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
Route::any('/', function () {
    return view('welcome');
});
Route::any('/cadastrar','CadastrarController@store');
Route::post('/localizacao','LoginController@store');
Route::post('/reset','LoginController@reset');
Route::any('/long', 'LoginController@long');
Route::any('/verica','LoginController@verifica');
Route::any('/lat', 'LoginController@lat');
