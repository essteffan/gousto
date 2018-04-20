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

    \Carbon\Carbon::createFromFormat('d/m/Y H:i:s', '30/06/2015 17:58:00');
    return view('welcome');
});

