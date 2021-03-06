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
Route::resource("/experiencia_laboral", "ExperienciaLaboralController")->name('*', 'experiencia_laboral');
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
Route::resource("/beneficios_privados", "BeneficiosPrivadosController")->name('*', 'beneficios_privados');
Route::resource("/representacion", "RepresentacionController")->name('*', 'representacion');
Route::resource("/clientes_principales", "ClientesPrincipalesController")->name('*', 'clientes_principales');
Route::resource("/fideicomisos", "FideicomisosController")->name('*', 'fideicomisos');
Route::resource("/participacion", "ParticipaDecisionController")->name('*', 'participacion');
Route::resource("/cambio_dependencia", "CambioDependenciaController")->name('*', 'cambio_dependencia');
Route::resource("/cambio_domicilio", "CambioDomicilioController")->name('*', 'cambio_domicilio');
Route::resource("/cambio_datos_encargo", "CambioDatosEncargoController")->name('*', 'cambio_datos_encargo');
Route::resource("/cambio_entrega", "CambioEntregaController")->name('*', 'cambio_entrega');
Route::resource("/MCG", "McgDeclaranteController")->name('*', 'MCG');
Route::post("declaracion/iniciar", "DeclaranetController@IniciarDeclaracion");
Route::post("declaracion/continuar", "DeclaranetController@ContinuarDeclaracion");
Route::get("getMunicipiosDomicilio/{id}", "DomicilioDeclaranteController@getMunicipios");
Route::get("getAsentamientosDomicilio/{id}", "DomicilioDeclaranteController@getAsentamientos");
Route::get("getDescripcionInversion/{id}", "InversionesDeclaranteController@getDescripcion");
Route::resource("/index", "IndexController")->name('*', "index");
Route::get("getDependencia/{id}", "McgDeclaranteController@getDependencia");
Route::get("getDireccion/{id}", "McgDeclaranteController@getDireccion");
Route::resource("/donativos", "DonativosController")->name('*', 'donativos');
Route::resource("/intereses_personales", "InteresesController")->name('*', 'intereses_personales');
Route::resource("/viajes", "ViajesController")->name('*', 'viajes');
Route::resource("participaciones", "ParticipacionDeclaracionController")->name("*",'participaciones');
Route::resource("instituciones", "InstitucionController")->name("*",'instituciones');
Route::get("/instituciones/obtener_grado/{grado}","InstitucionController@ObtenerGrado");
Route::post("/datos_pareja_declarante/ajax","DatosParejaController@storeEmpleo")->name("storeEmpleoPareja");
Route::put("/datos_pareja_declarante/destroy_empleo/{id}","DatosParejaController@destroyEmpleo");
Route::get("/datos_pareja_declarante/edit_empleo/{id}","DatosParejaController@editEmpleo");
Route::put("/datos_pareja_declarante/update/{id}","DatosParejaController@updateEmpleo");
Route::get("/declaracion/enviar","DeclaranetController@EnviarDeclaracion");
