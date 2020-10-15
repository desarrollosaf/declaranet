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

//Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
Route::resource("/datos_declarante", "DatosGeneralesDeclaranteController")->name('*', 'datos_declarante');
Route::resource("/domicilio_declarante", "DomicilioDeclaranteController")->name('*', 'domicilio_declarante');
Route::resource("/datos_curriculares_decarante", "DatosCurricularesDeclaranteController")->name('*', 'datos_curriculares_decarante');
Route::resource("/datos_empleo_decarante", "DatosEmpleoDeclaranteController")->name('*', 'datos_empleo_decarante');
Route::resource("/datos_pareja_decarante", "DatosParejaController")->name('*', 'datos_pareja_decarante');
Route::resource("/datos_dependiente_economico_decarante", "DatosDependienteEconomicoController")->name('*', 'datos_dependiente_economico_decarante');
Route::resource("/experiencia_laboral", "DatosDependienteEconomicoController")->name('*', 'experiencia_laboral');