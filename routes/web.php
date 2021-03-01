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

Route::get('/','WebController@showIndex')->name('/');

Route::get('/tienda', 'WebController@showTienda')->name('tienda');

Route::get('/empresarios', 'WebController@showEmpresarios')->name('empresarios');

Route::get('/profesionales','WebController@showProfecionales')->name('profesionales');

Route::get('/novedades', 'WebController@showNovedades')->name('novedades');

Route::get('/novedades/{id}','WebController@showNovedadesDetalle')->name('novedadesDetalle');

Route::get('/pageNotFound','WebController@showPageNotFound')->name('notFound');

