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

Route::get('/proyectos','WebController@showProyectos')->name('proyectos');

Route::get('/sumate','WebController@showSumate')->name('sumate');

Route::get('/reinvencion', 'WebController@showReinvencion')->name('reinvencion');

Route::get('/contract', 'WebController@showContract')->name('contract');

Route::get('/cookies','WebController@showCookie')->name('cookie');

Route::get('/protect','WebController@protect')->name('protect');

Route::get('/terminos','WebController@terminos')->name('terminos');

Route::get('/fabrica-boutique','WebController@showFabricaBoutique')->name('fabrica-boutique');

Route::get('/confirmacion','WebController@showConfirmacion')->name('confirmacion');

Route::get('/disenos','WebController@showDisenos')->name('disenos');

Route::get('/legado','WebController@showLegado')->name('legado');

Route::get('/colaboradores','WebController@showColaboradores')->name('colaboradores');

Route::get('/colecciones','WebController@showColecciones')->name('colecciones');

Route::get('/atencion','WebController@showAtencion')->name('atencion');

Route::get('/producto','WebController@showProducto')->name('producto');
