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
    return redirect('/home');
})->middleware('tiene_sesion');

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

Route::get('/desechos', 'DesechoUnidades@index')->middleware('personal_quimico');
Route::get('/compatibilidad','BitacoraDeCompatibilidadController@index')->middleware('personal_quimico');
Route::get('/compatibilidad/{id}','BitacoraDeCompatibilidadController@view')->middleware('personal_quimico');
Route::prefix('desechos')->group(function () {
    Route::get('insert', 'DesechoUnidades@insert')->name('insert');
    Route::get('show', 'DesechoUnidades@show')->name('show');
});

Route::get('/personales', 'PersonalController@personales')->middleware('administrador');
Route::post('/activar', 'PersonalController@activar')->middleware('administrador');
Route::post('/baja', 'PersonalController@baja')->middleware('administrador');
Route::post('/newUser','PersonalController@create')->middleware('administrador');
