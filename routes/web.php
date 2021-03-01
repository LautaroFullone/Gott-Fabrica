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
    return view('frontend.index');
});

Route::get('/tienda', function () {
    return view('frontend.shop-index');
});

Route::get('/empresarios', function () {
    return view('frontend.empresarios');
});

Route::get('/profesionales', function () {
    return view('frontend.profesionales');
});

Route::get('/novedades', function () {
    return view('frontend.novedades');
});

Route::get('/novedades/{id}', function () {
    return view('frontend.novedades-detail');
});