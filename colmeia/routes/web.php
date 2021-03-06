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
Route::any('/cadastrar','LoginController@cadastrar');
Route::any('/login','LoginController@login');
Route::post('/panico','LoginController@panico');
Route::any('/reset','LoginController@reset');
Route::any('/long', 'LoginController@long');
Route::any('/verica','LoginController@verifica');
Route::any('/lat', 'LoginController@lat');
Route::any('/nome', 'LoginController@name');
