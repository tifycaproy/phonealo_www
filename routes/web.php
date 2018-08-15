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

Route::get('/', 'frontend\FrontendController@index');

Route::get('exito', 'frontend\FrontendController@index')->name('exito');

Route::post('recarga_submit', 'frontend\FrontendController@recarga');

Route::post('contacto_submit', 'ContactoControler@contacto')->name('contacto_submit');

Route::get('tarifas', 'frontend\FrontendController@tarifas');

//geolocalizacion
Route::get('locale', function () {
    return \App::getLocale();
});

Route::get('locale/{locale}', function ($locale) {
    \Session::put('locale', $locale);
    return redirect()->back();
});

// LANDING

Route::get('ec', 'landingController@ecuador')->name('ec');
Route::get('cu', 'landingController@cuba')->name('cu');

Route::post('email_landing', 'landingController@email')->name('email_landing');
Route::get('verifica_email', 'landingController@verifica')->name('verifica_email');

// PROGRAMA AMIGO

Route::post('registroAmigo', 'pamigosController@registroAmigo')->name('registroAmigo');
Route::get('verifica_usuario', 'pamigosController@verifica')->name('verifica_usuario');