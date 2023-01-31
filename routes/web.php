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
Route::get('/alessio', function () {
    return 'Alessio Piccioli';
});
Route::get('/gennaro', function () {
    return 'Gennaro Manzo';
});
Route::get('/rubens', function () {
    return 'Rubens Garofalo';
});
Route::get('/webmapp', function () {
    return 'Webmapp';
});
Route::get('/peppe', function () {
    return 'Giuseppe Bonfanti';
});