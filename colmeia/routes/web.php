<?php
error_reporting(E_ALL);
ini_set('display_errors', 'On');
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
Route::get('/index', function () {
    return view('welcome');
});
Route::get('/','CadastrarController@store');
