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
    return view('welcome');
});

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

Route::get('/desechos', 'DesechoUnidades@index');
Route::prefix('desechos')->group(function () {
    Route::post('insert', 'DesechoUnidades@insert')->name('insert');
    Route::post('update', 'DesechoUnidades@update')->name('update');
});
