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

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
Route::resource("/datos_declarante", "DatosGeneralesDeclaranteController")->name('*', 'datos_declarante');
Route::resource("/domicilio_declarante", "DomicilioDeclaranteController")->name('*', 'domicilio_declarante');
Route::resource("/datos_curriculares_declarante", "DatosCurricularesDeclaranteController")->name('*', 'datos_curriculares_declarante');
Route::resource("/datos_empleo_declarante", "DatosEmpleoDeclaranteController")->name('*', 'datos_empleo_declarante');
Route::resource("/datos_pareja_declarante", "DatosParejaController")->name('*', 'datos_pareja_declarante');
Route::resource("/datos_dependiente_declarante", "DatosDependienteEconomicoController")->name('*', 'datos_dependiente_declarante');
Route::resource("/experiencia_laboral", "ExperieciaLaboralController")->name('*', 'experiencia_laboral');
Route::resource("/ingreso_neto", "IngresoNetoDeclaranteController")->name('*', 'ingreso_neto');
Route::resource("/servidor_publico", "ServidorPublicoController")->name('*', 'servidor_publico');
Route::resource("/bienes_inmuebles", "BienesInmueblesController")->name('*', 'bienes_inmuebles');
Route::resource("/vehiculos", "VehiculosController")->name('*', 'vehiculos');
Route::resource("/inversiones", "InversionesDeclaranteController")->name('*', 'inversiones');
Route::resource("/adeudos", "AdeudosPasivosDeclaranteController")->name('*', 'adeudos');
Route::resource("/bienes_muebles", "BienesMueblesController")->name('*', 'bienes_muebles');
Route::resource("/prestamos", "PrestamoOComodatoPorTercerosController")->name('*', 'prestamos');
Route::resource("/participacion_empresas", "ParticipacionEnEmpresasSociedadesYAsociacionesController")->name('*', 'participacion_empresas');
Route::resource("/apoyo_beneficio", "ApoyoBeneficioController")->name('*', 'apoyo_beneficio');
