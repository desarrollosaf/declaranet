<?php

namespace App\Http\Controllers;

use App\LugarUbicacion;
use Illuminate\Http\Request;
use Carbon\Carbon;
use App\Declaracion;
use App\RegimenMatrimonial;


class declaracionesController extends Controller
{
    public function index(Request $request)
    {
        //try{
        $limitereg = $request->input('limite_registros');
        $limitereg = intval($limitereg);
        $datereg = $request->input('fechaCaptura');

        $page = $request->input('pagina');

        $now = Carbon::now('America/Mexico_City')->format('Y-m-d');

        if (empty($limitereg) || $limitereg == 0) {
            $limitereg = 10;
        }

        $titles = Declaracion::where("fecha_declaracion", '>=', $datereg)->with(['regimenMatrimonial', 'domicilio', 'datos_curriculares', 'experiencias_laborales', 'pareja', 'datos_empleo_declarante','BienesMuebles','vehiculos','beneficios_privados','inversiones_cuentas','apoyo_beneficio','DependienteEconomicos','participacion_empresas','clientes','participacion','prestamosComodato','adeudos_pasivos','fueServidorPublico','fideicomisos','representacion','bienes_inmuebles','donativos','intereses','ingresos','participaciones'])->get();

        if ($datereg > $now) {
            return $temparrayp = [
                //paginacion
                'pagination' => ([
                    'pageSize' => $limitereg,
                    'page' => intval($page),
                    'totalRows' => $titles->count(),
                    'hasNextPage' => false,
                ]),
                'results' => [],
            ];

        } else {
            // Valida si la pagina que ingresamos viene vacia por defauld ponemos 1
            if (empty($page) || $page == 0) {
                $page = 1;
            }
            // Valida el numero de pagina
            $totalRegistros = $titles->count();
            $totalPaginas = $totalRegistros / $limitereg;
            $limPage = $page * $limitereg;

            if ($totalPaginas < 1) {
                $totalPaginas = 1;
            }

            if ($limPage >= $totalRegistros) {
                $nextPage = false;
            } else {
                $nextPage = true;
            }

            if ($page > $totalPaginas) {
                return $temparrayp = [
                    'pagination' => ([
                        'pageSize' => $limitereg,
                        'page' => intval($page),
                        'totalRows' => $titles->count(),
                        'hasNextPage' => $nextPage,
                    ]),
                    'results' => [],
                ];
            } else if ($page <= $totalPaginas) {
                // Enpieza a formar el json
                $temparray = array();
                foreach ($titles as $key => $title) {
                    if (count($title->datos_curriculares) == 0) {
                        $datosCurricularesDeclarante["escolaridad"][] = array(
                            'tipoOperacion' => null,
                            'nivel' => ([
                                'clave' => null,
                                'valor' => null,
                            ]),
                            'institucionEducativa' => ([
                                'nombre' => null,
                                'ubicacion' => null,
                            ]),
                            'carreraAreaConocimiento' => null,
                            'estatus' => null,
                            'documentoObtenido' => null,
                            'fechaObtencion' => null,
                        );
                        $datosCurricularesDeclarante["aclaraciones"] = null;
                    } else {
                        $datosCurricularesDeclarante = array();
                        $aclaraciones_datos_curriculares = '';
                        foreach ($title->datos_curriculares as $datosCurriculares) {

                            if (!isset($datosCurriculares->documento->valor)) {
                                $documentoObtenido = null;
                            } else {
                                $documentoObtenido = $datosCurriculares->documento->valor;
                            }

                            if ($datosCurriculares->nivel_id == 4) {
                                $nivelClave = 'BCH';
                                $nivelValor = 'BACHILLERATO';
                            } else if ($datosCurriculares->nivel_id == 10) {
                                $nivelClave = null;
                                $nivelValor = null;
                            } else {
                                $nivelClave = $datosCurriculares->nivel->clave;
                                $nivelValor = $datosCurriculares->nivel->valor;
                            }

                            $datosCurricularesDeclarante["escolaridad"][] = array(
                                'tipoOperacion' => $datosCurriculares->tipoOperaciones->valor,
                                'nivel' => ([
                                    'clave' => $nivelClave,
                                    'valor' => $nivelValor,
                                ]),
                                'institucionEducativa' => ([
                                    'nombre' => $datosCurriculares->institucion_educativa,
                                    'ubicacion' => $datosCurriculares->LugarUbicacionInstitucion->clave,
                                ]),
                                'carreraAreaConocimiento' => $datosCurriculares->carrera_area,
                                'estatus' => $datosCurriculares->estatus->valor,
                                'documentoObtenido' => $documentoObtenido,
                                'fechaObtencion' => $datosCurriculares->fecha_documento,
                            );
                            $aclaraciones_datos_curriculares = $aclaraciones_datos_curriculares . ' ' . $datosCurriculares->observaciones;
                        }
                        $datosCurricularesDeclarante["aclaracionesObservaciones"] = $aclaraciones_datos_curriculares;
                    }

                    if (count($title->experiencias_laborales) == 0) {
                        $aclaraciones_experiencia = null;
                        $ninguno_experiencia = true;
                        $experiencia[] = array(
                            'tipoOperacion' => null,
                            'ambitoSector' => ([
                                'clave' => null,
                                'valor' => null
                            ]),
                            'nivelOrdenGobierno' => null,
                            'ambitoPublico' => null,
                            'nombreEntePublico' => null,
                            'areaAdscripcion' => null,
                            'empleoCargoComision' => null,
                            'funcionPrincipal' => null,
                            'fechaIngreso' => null,
                            'fechaEgreso' => null,
                            'ubicacion' => null,
                        );
                    } else {
                        $ninguno_experiencia = false;
                        $experiencia = array();
                        $aclaraciones_experiencia = '';
                        foreach ($title->experiencias_laborales as $experienciaLaboral) {
                            if($experienciaLaboral->nivel_orden_gobierno_id == null){
                                $nivelOrdenGobierno_experiencia = null;
                            }else{
                                $nivelOrdenGobierno_experiencia = $experienciaLaboral->Nivelordengobiernos->valor;
                            }
                            if($experienciaLaboral->ambito_publico_id == null){
                                $ambitoPublico_experiencia = null;
                            }else{
                                $ambitoPublico_experiencia = $experienciaLaboral->ambito_sectores->valor;
                            }

                            $experiencia[] = array(
                                'tipoOperacion' => $experienciaLaboral->tipoOperacion,
                                'ambitoSector' => ([
                                    'clave' => $experienciaLaboral->ambito_sectores->clave,
                                    'valor' => $experienciaLaboral->ambito_sectores->valor,
                                ]),
                                'nivelOrdenGobierno' => $nivelOrdenGobierno_experiencia,
                                'ambitoPublico' => $ambitoPublico_experiencia,
                                'nombreEntePublico' => $experienciaLaboral->ente_publico,
                                'areaAdscripcion' => $experienciaLaboral->area_adscripcion,
                                'empleoCargoComision' => $experienciaLaboral->cargo_comision,
                                'funcionPrincipal' => $experienciaLaboral->funcion_pricipal,
                                'fechaIngreso' => $experienciaLaboral->fecha_ingreso,
                                'fechaEgreso' => $experienciaLaboral->fecha_egreso,
                                'ubicacion' => $experienciaLaboral->LugarUbicaciones->clave,
                            );
                            $aclaraciones_experiencia = $aclaraciones_experiencia . ' ' . $experienciaLaboral->observaciones;
                        }
                    }
                    $dependientesE = array();
                    if (count($title->DependienteEconomicos) == 0) {
                        $ninguno_dependientes = true;
                        $domicilio_dep_mex = array(
                            'calle' => null,
                            'numeroExterior' => null,
                            'numeroInterior' => null,
                            'coloniaLocalidad' => null,
                            'municipioAlcaldia' => ([
                                'clave' => null,
                                'valor' => null,
                            ]),
                            'entidadFederativa' => ([
                                'clave' => null,
                                'valor' => null,
                            ]),
                            'codigoPostal' => null,
                        );
                        $domicilio_dep_ex = array(
                            'calle' => null,
                            'numeroExterior' => null,
                            'numeroInterior' => null,
                            'ciudadLocalidad' => null,
                            'estadoProvincia' => null,
                            'pais' => null,
                            'codigoPostal' => null,
                        );
                        $dependiente_habita = null;

                        $domicilio_dep_ex = array(
                            'calle' => null,
                            'numeroExterior' => null,
                            'numeroInterior' => null,
                            'ciudadLocalidad' => null,
                            'estadoProvincia' => null,
                            'pais' => null,
                            'codigoPostal' => null,
                        );

                        $dependientesE[] = array(
                            'tipoOperacion' => null,
                            'nombre' => null,
                            'primerApellido' => null,
                            'segundoApellido' => null,
                            'fechaNacimiento' => null,
                            'rfc' => null,
                            'parentescoRelacion' => ([
                                'clave' => null,
                                'valor' => null,
                            ]),
                            'extranjero' => null,
                            'curp' => null,
                            'habitaDomicilioDeclarante' => null,
                            'lugarDondeReside' => null,
                            'domicilioMexico' => null,
                            'domicilioExtranjero' => null,
                            'actividadLaboral' => ([
                                'clave' => null,
                                'valor' => null,
                            ]),
                            'actividadLaboralSectorPublico' => ([
                                'nivelOrdenGobierno' => null,
                                'ambitoPublico' => null,
                                'nombreEntePublico' => null,
                                'areaAdscripcion' => null,
                                'empleoCargoComision' => null,
                                'funcionPrincipal' => null,
                                'salarioMensualNeto' => ([
                                    'valor' => null,
                                    'moneda' => null,
                                ]),
                                'fechaIngreso' => null,
                            ]),
                            'actividadLaboralSectorPrivadoOtro' => ([
                                'nombreEmpresaSociedadAsociacion' => null,
                                'rfc' => null,
                                'empleoCargo' => null,
                                'fechaIngreso' => null,
                                'salarioMensualNeto' => ([
                                    'valor' => null,
                                    'moneda' => null,
                                ]),
                                'proveedorContratistaGobierno'=> null,
                            ]),
                            'actividadLaboralSectorPrivadoOtro' => ([
                                'nombreEmpresaSociedadAsociacion' => null,
                                'rfc' => null,
                                'empleoCargo' => null,
                                'fechaIngreso' => null,
                                'salarioMensualNeto' => ([
                                    'valor' => null,
                                    'moneda' => null,
                                ]),
                            ]),
                            'proveedorContratistaGobierno' => null,
                            'sector' => ([
                                'clave' => null,
                                'valor' => null,
                            ]),
                        );
                        $aclaraciones_dependientes_economicos = null;
                    } else {
                        $aclaraciones_dependientes_economicos = null;
                        foreach ($title->DependienteEconomicos as $DependienteEconomicos) {
                            $aclaraciones_dependientes_economicos = $aclaraciones_dependientes_economicos . ' ' . $DependienteEconomicos->observaciones;
                            if ($DependienteEconomicos->respuesta_id == 1) {
                                $domicilio_dependiente = $title->domicilio;
                                $dependiente_habita = true;
                            } else if ($DependienteEconomicos->respuesta_id == 2) {
                                $domicilio_dependiente = $DependienteEconomicos->domicilio;
                                $dependiente_habita = false;
                            } else {
                                $dependiente_habita = null;
                                $domicilio_dependiente = null;
                            }

                            if ($DependienteEconomicos->dato_laboral == null) {
                                $experiencia_DependienteEconomicos = null;
                                $sector_clave = null;
                                $sector_valor = null;
                                $actividadLaboralSectorPublico = array(
                                    'nivelOrdenGobierno' => null,
                                    'ambitoPublico' => null,
                                    'nombreEntePublico' => null,
                                    'areaAdscripcion' => null,
                                    'empleoCargoComision' => null,
                                    'funcionPrincipal' => null,
                                    'salarioMensualNeto' => ([
                                        'valor' => null,
                                        'moneda' => null,
                                    ]),
                                    'fechaIngreso' => null,
                                );
                                $actividadLaboralSectorPrivadoOtro = array(
                                    'nombreEmpresaSociedadAsociacion' => null,
                                    'rfc' => null,
                                    'empleoCargoComision' => null,
                                    'fechaIngreso' => null,
                                    'salarioMensualNeto' => ([
                                        'valor' => null,
                                        'moneda' => null,
                                    ]),
                                );
                                $proveedorContratistaGobierno = false;

                            } else {
                                $experiencia_DependienteEconomicos = $DependienteEconomicos->dato_laboral;
                                if ($experiencia_DependienteEconomicos[0] == null) {
                                    $experiencia_DependienteEconomicos = null;
                                    $sector_clave = null;
                                    $sector_valor = null;
                                    $actividadLaboralSectorPublico = array(
                                        'nivelOrdenGobierno' => null,
                                        'ambitoPublico' => null,
                                        'nombreEntePublico' => null,
                                        'areaAdscripcion' => null,
                                        'empleoCargoComision' => null,
                                        'funcionPrincipal' => null,
                                        'salarioMensualNeto' => ([
                                            'valor' => null,
                                            'moneda' => null,
                                        ]),
                                        'fechaIngreso' => null,
                                    );
                                    $actividadLaboralSectorPrivadoOtro = array(
                                        'nombreEmpresaSociedadAsociacion' => null,
                                        'rfc' => null,
                                        'empleoCargoComision' => null,
                                        'fechaIngreso' => null,
                                        'salarioMensualNeto' => ([
                                            'valor' => null,
                                            'moneda' => null,
                                        ]),
                                    );
                                    $proveedorContratistaGobierno = false;
                                } else {
                                    if ($experiencia_DependienteEconomicos[0]->sector_id == null || $experiencia_DependienteEconomicos[0]->sector_id == 0) {
                                        $sector_clave = null;
                                        $sector_valor = null;
                                    } else {
                                        $sector_clave = $experiencia_DependienteEconomicos[0]->sectores->clave;
                                        $sector_valor = $experiencia_DependienteEconomicos[0]->sectores->valor;
                                    }
                                $sector_clave = $sector_clave;
                                $sector_valor = $sector_valor;
                                if ($experiencia_DependienteEconomicos[0]->respuesta_id == 1) {
                                    $proveedorContratistaGobierno = true;
                                } else {
                                    $proveedorContratistaGobierno = false;
                                }

                                if ($experiencia_DependienteEconomicos[0]->ambito_sector_id == 1) {
                                    $actividadLaboralSectorPublico = array(
                                        'nivelOrdenGobierno' => $experiencia_DependienteEconomicos[0]->Nivelordengobiernos->valor,
                                        'ambitoPublico' => $experiencia_DependienteEconomicos[0]->ambitoPublicos->valor,
                                        'nombreEntePublico' => $experiencia_DependienteEconomicos[0]->ente_publico,
                                        'areaAdscripcion' => $experiencia_DependienteEconomicos[0]->area_adscripcion,
                                        'empleoCargoComision' => $experiencia_DependienteEconomicos[0]->cargo_comision,
                                        'funcionPrincipal' => $experiencia_DependienteEconomicos[0]->funcion_pricipal,
                                        'salarioMensualNeto' => ([
                                            'valor' => $experiencia_DependienteEconomicos[0]->salario_mensual_neto,
                                            'moneda' => 'MXN',
                                        ]),
                                        'fechaIngreso' => $experiencia_DependienteEconomicos[0]->fecha_ingreso,
                                    );
                                    $actividadLaboralSectorPrivadoOtro = array(
                                        'nombreEmpresaSociedadAsociacion' => null,
                                        'rfc' => null,
                                        'empleoCargoComision' => null,
                                        'fechaIngreso' => null,
                                        'salarioMensualNeto' => ([
                                            'valor' => null,
                                            'moneda' => null,
                                        ]),
                                    );

                                } else {
                                    if ($experiencia_DependienteEconomicos[0]->respuesta_proveedor_id == 1) {
                                        $proveedorContratistaGobierno = false;
                                    } else {
                                        $proveedorContratistaGobierno = true;
                                    }
                                    $actividadLaboralSectorPublico = array(
                                        'nivelOrdenGobierno' => null,
                                        'ambitoPublico' => null,
                                        'nombreEntePublico' => null,
                                        'areaAdscripcion' => null,
                                        'empleoCargoComision' => null,
                                        'funcionPrincipal' => null,
                                        'salarioMensualNeto' => ([
                                            'valor' => null,
                                            'moneda' => null,
                                        ]),
                                        'fechaIngreso' => null,
                                    );
                                    $actividadLaboralSectorPrivadoOtro = array(
                                        'nombreEmpresaSociedadAsociacion' => $experiencia_DependienteEconomicos[0]->nombre_empresa,
                                        'rfc' => $experiencia_DependienteEconomicos[0]->rfc,
                                        'empleoCargoComision' => $experiencia_DependienteEconomicos[0]->cargo_comision,
                                        'fechaIngreso' => $experiencia_DependienteEconomicos[0]->fecha_ingreso,
                                        'salarioMensualNeto' => ([
                                            'valor' => $experiencia_DependienteEconomicos[0]->salario_mensual_neto,
                                            'moneda' => 'MXN',
                                        ]),
                                    );
                                }
                            }
                        }
                            if ($domicilio_dependiente == null) {
                                $ninguno_dependientes = true;
                                $domicilio_dep_mex = array(
                                    'calle' => null,
                                    'numeroExterior' => null,
                                    'numeroInterior' => null,
                                    'coloniaLocalidad' => null,
                                    'municipioAlcaldia' => ([
                                        'clave' => null,
                                        'valor' => null,
                                    ]),
                                    'entidadFederativa' => ([
                                        'clave' => null,
                                        'valor' => null,
                                    ]),
                                    'codigoPostal' => null,
                                );
                                $domicilio_dep_ex = array(
                                    'calle' => null,
                                    'numeroExterior' => null,
                                    'numeroInterior' => null,
                                    'ciudadLocalidad' => null,
                                    'estadoProvincia' => null,
                                    'pais' => null,
                                    'codigoPostal' => null,
                                );
                                $dependiente_habita = null;
                            } else {
                                $ninguno_dependientes = false;
                                if($domicilio_dependiente->municipio_id == null){
                                    $municipioClave = null;
                                    $municipiovalor = null;
                                }else{
                                    $municipioClave = $domicilio_dependiente->municipio_domicilio->clave;
                                    $municipiovalor = $domicilio_dependiente->municipio_domicilio->municipio;
                                }

                                if($domicilio_dependiente->entidad_id == null){
                                    $entidadClave = null;
                                    $entidadvalor = null;
                                }else{
                                    $entidadClave = $domicilio_dependiente->entidad_domicilio->clave;
                                    $entidadvalor = $domicilio_dependiente->entidad_domicilio->entidad;
                                }
                                $domicilio_dep_mex = array(
                                    'calle' => $domicilio_dependiente->calle,
                                    'numeroExterior' => $domicilio_dependiente->num_ext,
                                    'numeroInterior' => $domicilio_dependiente->num_int,
                                    'coloniaLocalidad' => $domicilio_dependiente->colonia,
                                    'municipioAlcaldia' => ([
                                        'clave' => $municipioClave,
                                        'valor' => $municipiovalor,
                                    ]),
                                    'entidadFederativa' => ([
                                        'clave' => $entidadClave,
                                        'valor' => $entidadvalor,
                                    ]),
                                    'codigoPostal' => $domicilio_dependiente->codigo_postal,
                                );
                                $domicilio_dep_ex = array(
                                    'calle' => null,
                                    'numeroExterior' => null,
                                    'numeroInterior' => null,
                                    'ciudadLocalidad' => null,
                                    'estadoProvincia' => null,
                                    'pais' => null,
                                    'codigoPostal' => null,
                                );
                            }

                            if($experiencia_DependienteEconomicos ==  null){
                                $sectorDependientesClave = null;
                                $sectorDependientesValor = null;
                            }else{
                                $sectorDependientesClave = $experiencia_DependienteEconomicos[0]->sectores->clave;
                                $sectorDependientesValor = $experiencia_DependienteEconomicos[0]->sectores->valor;
                            }

                            $dependientesE[] = array(
                                'tipoOperacion' => $DependienteEconomicos->tipoOperaciones->valor,
                                'nombre' => $DependienteEconomicos->nombre,
                                'primerApellido' => $DependienteEconomicos->primer_apellido,
                                'segundoApellido' => $DependienteEconomicos->segundo_apellido,
                                'fechaNacimiento' => $DependienteEconomicos->fecha_nacimiento,
                                'rfc' => $DependienteEconomicos->rfc,
                                'parentescoRelacion' => ([
                                    'clave' => $DependienteEconomicos->relacion->clave,
                                    'valor' => $DependienteEconomicos->relacion->valor,
                                ]),
                                'extranjero' => false,
                                'curp' => $DependienteEconomicos->curp,
                                'habitaDomicilioDeclarante' => $dependiente_habita,
                                'lugarDondeReside' => '',
                                'domicilioMexico' => $domicilio_dep_mex,
                                'domicilioExtranjero' => $domicilio_dep_ex,
                                'actividadLaboral' => ([
                                    'clave' => $sectorDependientesClave,
                                    'valor' => $sectorDependientesValor,
                                ]),
                                'actividadLaboralSectorPublico' => $actividadLaboralSectorPublico,
                                'actividadLaboralSectorPrivadoOtro' => $actividadLaboralSectorPrivadoOtro,
                                'proveedorContratistaGobierno' => $proveedorContratistaGobierno,
                                'sector' => ([
                                    'clave' => $sector_clave,
                                    'valor' => $sector_valor,
                                ]),
                            );
                        }
                    }

                    $bienesInmueblres = array();
                    if (count($title->bienes_inmuebles) > 0) {
                        $ninguno_bienesInmuebles = false;
                        $aclaraciones_bienesImuebles = '';
                        foreach ($title->bienes_inmuebles as $inmuebles) {
                            $aclaraciones_bienesImuebles = $aclaraciones_bienesImuebles . ' ' . $inmuebles->observaciones;
                            $domicilio_inmueble = $inmuebles->domicilio;
                            if ($domicilio_inmueble->asentamiento_id == null) {
                                $colonia = $domicilio_inmueble->colonia;
                            } else {
                                $colonia = $domicilio_inmueble->asentamiento->valor;
                            }

                            if ($inmuebles->tipo_tercero_id == null) {
                                $tipoTerceroInmuebles = null;
                            } else {
                                $tipoTerceroInmuebles = $inmuebles->tipoTercero->valor;
                            }

                            if($inmuebles->ubicacion_inmueble_id == 1){
                                $ubicacion_inmueble_m = array(
                                        'calle' => $domicilio_inmueble->calle,
                                        'numeroExterior' => $domicilio_inmueble->num_ext,
                                        'numeroInterior' => $domicilio_inmueble->num_int,
                                        'coloniaLocalidad' => $colonia,
                                        'municipioAlcaldia' => ([
                                            'clave' => $domicilio_inmueble->municipio_domicilio->clave,
                                            'valor' => $domicilio_inmueble->municipio_domicilio->municipio,
                                        ]),
                                        'entidadFederativa' => ([
                                            'clave' => $domicilio_inmueble->entidad_domicilio->clave,
                                            'valor' => $domicilio_inmueble->entidad_domicilio->entidad,
                                        ]),
                                        'codigoPostal' => $domicilio_inmueble->codigo_postal,
                                );
                                $ubicacion_inmueble_ex = array(
                                    'calle' => null,
                                    'numeroExterior' => null,
                                    'numeroInterior' => null,
                                    'ciudadLocalidad' => null,
                                    'estadoProvincia' => null,
                                    'pais' => null,
                                    'codigoPostal' => null,
                                );
                            }else if($inmuebles->ubicacion_inmueble_id == 2){
                                $ubicacion_inmueble_ex = array(
                                    'calle' => $domicilio_inmueble->calle,
                                    'numeroExterior' => $domicilio_inmueble->num_ext,
                                    'numeroInterior' => $domicilio_inmueble->num_int,
                                    'ciudadLocalidad' => $colonia,
                                    'estadoProvincia' => $domicilio_inmueble->entidad,
                                    'pais' => $domicilio_inmueble->pais,
                                    'codigoPostal' => $domicilio_inmueble->codigo_postal,
                                );
                                $ubicacion_inmueble_m = array(
                                    'calle' => null,
                                    'numeroExterior' => null,
                                    'numeroInterior' => null,
                                    'coloniaLocalidad' => null,
                                    'municipioAlcaldia' => ([
                                        'clave' => null,
                                        'valor' => null,
                                    ]),
                                    'entidadFederativa' => ([
                                        'clave' => null,
                                        'valor' => null,
                                    ]),
                                    'codigoPostal' => null,
                                );
                            }

                            if($inmuebles->tipoOperaciones->valor == "AGREGAR"){
                                $bajaInmuebleClave = null;
                                $bajaInmuebleValor = null;
                            }

                            if($inmuebles->formaAdquisicion->clave == 'DNC' || $inmuebles->formaAdquisicion->clave == 'HRN' || $inmuebles->formaAdquisicion->clave == 'PRM'){
                                $formaPagoInmueble = null;
                                $valorAdquisicionClaveInmueble = null;
                                $valorAdquisicionValorInmueble = null;
                            }else{
                                $formaPagoInmueble = $inmuebles->formaPago->valor;
                                $valorAdquisicionClaveInmueble =  $inmuebles->valor_adquisicion;
                                $valorAdquisicionValorInmueble = $inmuebles->tipoMoneda->clave;
                            }

                            if($inmuebles->tipoTransmisor->valor == 'PERSONA FÍSICA'){
                                $tipoPersonaTransmisorInmuebles = 'FISICA';
                            }else{
                                $tipoPersonaTransmisorInmuebles = 'MORAL';
                            }

                            $bienesInmueblres[] = array(
                                'tipoOperacion' => $inmuebles->tipoOperaciones->valor,
                                'tipoInmueble' => ([
                                    'clave' => $inmuebles->tipoInmueble->clave,
                                    'valor' => $inmuebles->tipoInmueble->valor,
                                ]),
                                'titular' => ([[
                                    'clave' => $inmuebles->titular->clave,
                                    'valor' => $inmuebles->titular->valor,
                                ]]),
                                'porcentajePropiedad' => $inmuebles->porcentaje_propiedad,
                                'superficieTerreno' => ([
                                    'valor' => $inmuebles->superficie_terreno,
                                    'unidad' => 'm2',
                                ]),
                                'superficieConstruccion' => ([
                                    'valor' => $inmuebles->superficie_construccion,
                                    'unidad' => 'm2',
                                ]),
                                'tercero' => ([[
                                    'tipoPersona' => $tipoTerceroInmuebles,
                                    'nombreRazonSocial' => $inmuebles->nombre_razon_tercero,
                                    'rfc' => $inmuebles->rfc_tercero,
                                ]]),
                                'transmisor' => ([[
                                    'tipoPersona' => $tipoPersonaTransmisorInmuebles,
                                    'nombreRazonSocial' => $inmuebles->nombre_razon_transmisor,
                                    'rfc' => $inmuebles->rfc_transmisor,
                                    'relacion' => ([
                                        'clave' => $inmuebles->relacionTransmisor->clave,
                                        'valor' => $inmuebles->relacionTransmisor->valor,
                                    ]),
                                ]]),
                                'formaAdquisicion' => ([
                                    'clave' => $inmuebles->formaAdquisicion->clave,
                                    'valor' => $inmuebles->formaAdquisicion->valor,
                                ]),
                                'formaPago' => $formaPagoInmueble,
                                'valorAdquisicion' => ([
                                    'valor' => $valorAdquisicionClaveInmueble,
                                    'moneda' => $valorAdquisicionValorInmueble
                                ]),
                                'fechaAdquisicion' => $inmuebles->fecha_adquisicion,
                                'datoIdentificacion' => $inmuebles->datos_registro,
                                'valorConformeA' => $inmuebles->valorConforme->valor,
                                'domicilioMexico' => $ubicacion_inmueble_m,
                                'domicilioExtranjero' => $ubicacion_inmueble_ex,
                                'motivoBaja' =>  ([
                                    'clave' => $bajaInmuebleClave,
                                    'valor' => $bajaInmuebleValor,
                                ]),
                            );
                        }
                    } else {
                        $ninguno_bienesInmuebles = true;
                        $aclaraciones_bienesImuebles = null;
                        $bienesInmueblres[] = array(
                            'tipoOperacion' => null,
                            'tipoInmueble' => ([
                                'clave' => null,
                                'valor' => null,
                            ]),
                            'titular' => ([[
                                'clave' => null,
                                'valor' => null,
                            ]]),
                            'porcentajePropiedad' => null,
                            'superficieTerreno' => ([
                                'valor' => null,
                                'unidad' => null,
                            ]),
                            'superficieConstruccion' => ([
                                'valor' => null,
                                'unidad' => null,
                            ]),
                            'tercero' => ([[
                                'tipoPersona' => null,
                                'nombreRazonSocial' => null,
                                'rfc' => null,
                            ]]),
                            'transmisor' => ([[
                                'tipoPersona' => null,
                                'nombreRazonSocial' => null,
                                'rfc' => null,
                                'relacion' => ([
                                    'clave' => null,
                                    'valor' => null,
                                ]),
                            ]]),
                            'formaAdquisicion' => ([
                                'clave' => null,
                                'valor' => null,
                            ]),
                            'formaPago' => null,
                            'valorAdquisicion' => ([
                                'valor' => null,
                                'moneda' => null,
                            ]),
                            'fechaAdquisicion' => null,
                            'datoIdentificacion' => null,
                            'valorConformeA' => null,
                            'domicilioMexico' => ([
                                'calle' => null,
                                'numeroExterior' => null,
                                'numeroInterior' => null,
                                'coloniaLocalidad' => null,
                                'municipioAlcaldia' => ([
                                    'clave' => null,
                                    'valor' => null,
                                ]),
                                'entidadFederativa' => ([
                                    'clave' => null,
                                    'valor' => null,
                                ]),
                                'codigoPostal' => null,
                            ]),
                            'domicilioExtranjero' => ([
                                'calle' => null,
                                'numeroExterior' => null,
                                'numeroInterior' => null,
                                'ciudadLocalidad' => null,
                                'estadoProvincia' => null,
                                'pais' => null,
                                'codigoPostal' => null,
                            ]),
                            'motivoBaja' => ([
                                'clave' => null,
                                'valor' => null,
                            ]),
                        );
                    }
                    if ($title->fueServidorPublico != null) {
                        if ($title->fueServidorPublico->fue_servidor_publico == 1) {
                            $anioAnterior = true;
                            if($title->fueServidorPublico->tipo_de_instrumento_id == null){
                                $servidorInstrumentoClave = null;
                                $servidorInstrumentoValor = null;
                            }else{
                                $servidorInstrumentoClave = $title->fueServidorPublico->TipoInstrumentosInve->clave;
                                $servidorInstrumentoValor = $title->fueServidorPublico->TipoInstrumentosInve->valor;
                            }

                            if($title->fueServidorPublico->tipo_de_bien_id == null){
                                $servidorBienEnajenado = null;
                            }else{
                                $servidorBienEnajenado = $title->fueServidorPublico->TipoBien->valor;
                            }

                            if($title->fueServidorPublico->remuneracion_neta == null){
                                $monedaCargoPublico = null;
                            }else{
                                $monedaCargoPublico = 'MXN';
                            }
                            if($title->fueServidorPublico->otros_ingresos_total == null){
                                $monedaOtrosTotal = null;
                            }else{
                                $monedaOtrosTotal = 'MXN';
                            }
                            if($title->fueServidorPublico->ingreso_por_actividad_ice == null){
                                $monedaICE = null;
                            }else{
                                $monedaICE = 'MXN';
                            }
                            if($title->fueServidorPublico->ingreso_por_actividad_financiera == null){
                                $monedaAFinanciera = null;
                            }else{
                                $monedaAFinanciera = 'MXN';
                            }
                            if($title->fueServidorPublico->ingreso_por_servicios_profesionales == null){
                                $monedaSeProf = null;
                            }else{
                                $monedaSeProf = 'MXN';
                            }
                            if($title->fueServidorPublico->ingreso_por_enajenacion_bienes == null){
                                $monedaEnaBienes = null;
                            }else{
                                $monedaEnaBienes = 'MXN';
                            }
                            if($title->fueServidorPublico->ingreso_otros_no_considerados == null){
                                $monedaOtros = null;
                            }else{
                                $monedaOtros = 'MXN';
                            }
                            if($title->fueServidorPublico->ingreso_neto == null){
                                $monedaIgNetos = null;
                            }else{
                                $monedaIgNetos = 'MXN';
                            }
                            if($title->fueServidorPublico->ingreso_neto_pareja == null){
                                $monedaInPareja = null;
                            }else{
                                $monedaInPareja = 'MXN';
                            }

                            $servidor_anio_anterior = array(
                                'servidorPublicoAnioAnterior' => $anioAnterior,
                                'fechaIngreso' => $title->fueServidorPublico->fecha_inicio,
                                'fechaConclusion' => $title->fueServidorPublico->fecha_conclusion,
                                'remuneracionNetaCargoPublico' => ([
                                    'valor' => $title->fueServidorPublico->remuneracion_neta,
                                    'moneda' => $monedaCargoPublico,
                                ]),
                                'otrosIngresosTotal' => ([
                                    'valor' => $title->fueServidorPublico->otros_ingresos_total,
                                    'moneda' => $monedaOtrosTotal,
                                ]),
                                'actividadIndustialComercialEmpresarial' => ([
                                    'remuneracionTotal' => ([
                                        'valor' => $title->fueServidorPublico->ingreso_por_actividad_ice,
                                        'moneda' => $monedaICE,
                                    ]),
                                    'actividades' => ([[
                                        'remuneracion' => ([
                                            'valor' => $title->fueServidorPublico->ingreso_por_actividad_ice,
                                            'moneda' => $monedaICE,
                                        ]),
                                        'nombreRazonSocial' => $title->fueServidorPublico->nombre_razon_social,
                                        'tipoNegocio' => $title->fueServidorPublico->tipo_de_negocio,
                                    ]]),
                                ]),
                                'actividadFinanciera' => ([
                                    'remuneracionTotal' => ([
                                        'valor' => $title->fueServidorPublico->ingreso_por_actividad_financiera,
                                        'moneda' => $monedaAFinanciera,
                                    ]),
                                    'actividades' => ([[
                                        'remuneracion' => ([
                                            'valor' => $title->fueServidorPublico->ingreso_por_actividad_financiera,
                                            'moneda' => $monedaAFinanciera,
                                        ]),
                                        'tipoInstrumento' => ([
                                            'clave' => $servidorInstrumentoClave,
                                            'valor' => $servidorInstrumentoValor,
                                        ]),
                                    ]]),
                                ]),
                                'serviciosProfesionales' => ([
                                    'remuneracionTotal' => ([
                                        'valor' => $title->fueServidorPublico->ingreso_por_servicios_profesionales,
                                        'moneda' => $monedaSeProf,
                                    ]),
                                    'servicios' => ([[
                                        'remuneracion' => ([
                                            'valor' => $title->fueServidorPublico->ingreso_por_servicios_profesionales,
                                            'moneda' => $monedaSeProf,
                                        ]),
                                        'tipoServicio' => $title->fueServidorPublico->tipo_de_servicio,
                                    ]]),
                                ]),
                                'enajenacionBienes' => ([
                                    'remuneracionTotal' => ([
                                        'valor' => $title->fueServidorPublico->ingreso_por_enajenacion_bienes,
                                        'moneda' => $monedaEnaBienes,
                                    ]),
                                    'bienes' => ([[
                                        'remuneracion' => ([
                                            'valor' => $title->fueServidorPublico->ingreso_por_enajenacion_bienes,
                                            'moneda' => $monedaEnaBienes,
                                        ]),
                                        'tipoBienEnajenado' => $servidorBienEnajenado,
                                    ]]),
                                ]),
                                'otrosIngresos' => ([
                                    'remuneracionTotal' => ([
                                        'valor' => $title->fueServidorPublico->ingreso_otros_no_considerados,
                                        'moneda' => $monedaOtros,
                                    ]),
                                    'ingresos' => ([[
                                        'remuneracion' => ([
                                            'valor' => $title->fueServidorPublico->ingreso_otros_no_considerados,
                                            'moneda' => $monedaOtros,
                                        ]),
                                        'tipoIngreso' => $title->fueServidorPublico->tipo_de_ingreso_no_considerado,
                                    ]]),
                                ]),
                                'ingresoNetoAnualDeclarante' => ([
                                    'valor' => $title->fueServidorPublico->ingreso_neto,
                                    'moneda' => $monedaIgNetos,
                                ]),
                                'ingresoNetoAnualParejaDependiente' => ([
                                    'valor' => $title->fueServidorPublico->ingreso_neto_pareja,
                                    'moneda' => $monedaInPareja,
                                ]),
                                'totalIngresosNetosAnuales' => ([
                                    'valor' =>  $title->fueServidorPublico->ingreso_neto_pareja,
                                    'moneda' => $monedaInPareja,
                                ]),
                                'aclaracionesObservaciones' => $title->fueServidorPublico->observaciones,
                            );
                        } else {
                            $anioAnterior = false;
                            $servidor_anio_anterior = array(
                                'servidorPublicoAnioAnterior' => $anioAnterior,
                                'fechaIngreso' => null,
                                'fechaConclusion' => null,
                                'remuneracionNetaCargoPublico' => ([
                                    'valor' => null,
                                    'moneda' => null,
                                ]),
                                'otrosIngresosTotal' => ([
                                    'valor' => null,
                                    'moneda' => null,
                                ]),
                                'actividadIndustialComercialEmpresarial' => ([
                                    'remuneracionTotal' => ([
                                        'valor' => null,
                                        'moneda' => null,
                                    ]),
                                    'actividades' => ([[
                                        'remuneracion' => ([
                                            'valor' => null,
                                            'moneda' => null,
                                        ]),
                                        'nombreRazonSocial' => null,
                                        'tipoNegocio' => null,
                                    ]]),
                                ]),
                                'actividadFinanciera' => ([
                                    'remuneracionTotal' => ([
                                        'valor' => null,
                                        'moneda' => null,
                                    ]),
                                    'actividades' => ([[
                                        'remuneracion' => ([
                                            'valor' => null,
                                            'moneda' => null,
                                        ]),
                                        'tipoInstrumento' => ([
                                            'clave' => null,
                                            'valor' => null,
                                        ]),
                                    ]]),
                                ]),
                                'serviciosProfesionales' => ([
                                    'remuneracionTotal' => ([
                                        'valor' => null,
                                        'moneda' => null,
                                    ]),
                                    'servicios' => ([[
                                        'remuneracion' => ([
                                            'valor' => null,
                                            'moneda' => null,
                                        ]),
                                        'tipoServicio' => null,
                                    ]]),
                                ]),
                                'enajenacionBienes' => ([
                                    'remuneracionTotal' => ([
                                        'valor' => null,
                                        'moneda' => null,
                                    ]),
                                    'bienes' => ([[
                                        'remuneracion' => ([
                                            'valor' => null,
                                            'moneda' => null,
                                        ]),
                                        'tipoBienEnajenado' => null,
                                    ]]),
                                ]),
                                'otrosIngresos' => ([
                                    'remuneracionTotal' => ([
                                        'valor' => null,
                                        'moneda' => null,
                                    ]),
                                    'ingresos' => ([[
                                        'remuneracion' => ([
                                            'valor' => null,
                                            'moneda' => null,
                                        ]),
                                        'tipoIngreso' => null,
                                    ]]),
                                ]),
                                'ingresoNetoAnualDeclarante' => ([
                                    'valor' => null,
                                    'moneda' => null,
                                ]),
                                'ingresoNetoAnualParejaDependiente' => ([
                                    'valor' => null,
                                    'moneda' => null,
                                ]),
                                'totalIngresosNetosAnuales' => ([
                                    'valor' => null,
                                    'moneda' => null,
                                ]),
                                'aclaracionesObservaciones' => null,
                            );
                        }
                    } else {
                        $anioAnterior = false;
                        $servidor_anio_anterior = array(
                            'servidorPublicoAnioAnterior' => $anioAnterior,
                            'fechaIngreso' => null,
                            'fechaConclusion' => null,
                            'remuneracionNetaCargoPublico' => ([
                                'valor' => null,
                                'moneda' => null,
                            ]),
                            'otrosIngresosTotal' => ([
                                'valor' => null,
                                'moneda' => null,
                            ]),
                            'actividadIndustialComercialEmpresarial' => ([
                                'remuneracionTotal' => ([
                                    'valor' => null,
                                    'moneda' => null,
                                ]),
                                'actividades' => ([[
                                    'remuneracion' => ([
                                        'valor' => null,
                                        'moneda' => null,
                                    ]),
                                    'nombreRazonSocial' => null,
                                    'tipoNegocio' => null,
                                ]]),
                            ]),
                            'actividadFinanciera' => ([
                                'remuneracionTotal' => ([
                                    'valor' => null,
                                    'moneda' => null,
                                ]),
                                'actividades' => ([[
                                    'remuneracion' => ([
                                        'valor' => null,
                                        'moneda' => null,
                                    ]),
                                    'tipoInstrumento' => ([
                                        'clave' => null,
                                        'valor' => null,
                                    ]),
                                ]]),
                            ]),
                            'serviciosProfesionales' => ([
                                'remuneracionTotal' => ([
                                    'valor' => null,
                                    'moneda' => null,
                                ]),
                                'servicios' => ([[
                                    'remuneracion' => ([
                                        'valor' => null,
                                        'moneda' => null,
                                    ]),
                                    'tipoServicio' => null,
                                ]]),
                            ]),
                            'enajenacionBienes' => ([
                                'remuneracionTotal' => ([
                                    'valor' => null,
                                    'moneda' => null,
                                ]),
                                'bienes' => ([[
                                    'remuneracion' => ([
                                        'valor' => null,
                                        'moneda' => null,
                                    ]),
                                    'tipoBienEnajenado' => null,
                                ]]),
                            ]),
                            'otrosIngresos' => ([
                                'remuneracionTotal' => ([
                                    'valor' => null,
                                    'moneda' => null,
                                ]),
                                'ingresos' => ([[
                                    'remuneracion' => ([
                                        'valor' => null,
                                        'moneda' => null,
                                    ]),
                                    'tipoIngreso' => null,
                                ]]),
                            ]),
                            'ingresoNetoAnualDeclarante' => ([
                                'valor' => null,
                                'moneda' => null,
                            ]),
                            'ingresoNetoAnualParejaDependiente' => ([
                                'valor' => null,
                                'moneda' => null,
                            ]),
                            'totalIngresosNetosAnuales' => ([
                                'valor' => null,
                                'moneda' => null,
                            ]),
                            'aclaracionesObservaciones' => null,
                        );
                    }


                    // dd($title->fueServidorPublico->TipoInstrumento);


                    if (count($title->vehiculos) == 0) {
                        $ninguno = true;
                        $aclaraciones_vehiculos = null;
                        $vehiculos_d[] = array(
                            'tipoOperacion' => null,
                            'tipoVehiculo' => ([
                                'clave' => null,
                                'valor' => null,
                            ]),
                            'titular' => ([[
                                'clave' => null,
                                'valor' => null,
                            ]]),
                            'transmisor' => ([[
                                'tipoPersona' => null,
                                'nombreRazonSocial' => null,
                                'rfc' => null,
                                'relacion' => ([
                                    'clave' => null,
                                    'valor' => null,
                                ]),
                            ]]),
                            'marca' => null,
                            'modelo' => null,
                            'anio' => null,
                            'numeroSerieRegistro' => null,
                            'tercero' => ([[
                                'tipoPersona' => null,
                                'nombreRazonSocial' => null,
                                'rfc' => null,
                            ]]),
                            'lugarRegistro' => ([
                                'pais' => null,
                                'entidadFederativa' => ([
                                    'clave' => null,
                                    'valor' => null,
                                ]),
                            ]),
                            'formaAdquisicion' => ([
                                'clave' => null,
                                'valor' => null,
                            ]),
                            'formaPago' => null,
                            'valorAdquisicion' => ([
                                'valor' => null,
                                'moneda' => null,
                            ]),
                            'fechaAdquisicion' => null,
                            'motivoBaja' => ([
                                'clave' => null,
                                'valor' => null,
                            ]),
                        );
                    } else {
                        $aclaraciones_vehiculos = '';
                        $ninguno = false;
                        foreach ($title->vehiculos as $vehiculo) {
                            $aclaraciones_vehiculos = $aclaraciones_vehiculos . ' ' . $vehiculo->v_aclaraciones;
                            if ($vehiculo->tipoDePersona == 1) {
                                $nombre_razon = $vehiculo->v_nombreFisica;
                                $rfc_transmisor = $vehiculo->v_rfcFisica;
                            } else {
                                $nombre_razon = $vehiculo->v_nombreMoral;
                                $rfc_transmisor = $vehiculo->v_rfcMoral;
                            }
                            if ($vehiculo->tipoPersonaTercero == null || empty($vehiculo->tipoPersonaTercero)) {
                                $tipoPersona_tercero = null;
                                $nombreRazonSocial_tercero = null;
                                $rfc_tercero = null;
                            } else {
                                if ($vehiculo->tipoPersonaTercero == 1) {
                                    $tipoPersona_tercero = 'FISICA';
                                    $nombreRazonSocial_tercero = $vehiculo->bieniTerceroNombreF;
                                    $rfc_tercero = $vehiculo->bieniTerceroRfcF;
                                } else {
                                    $tipoPersona_tercero = 'MORAL';
                                    $nombreRazonSocial_tercero = $vehiculo->bieniTerceroNombreM;
                                    $rfc_tercero = $vehiculo->bieniTerceroRfcM;
                                }
                            }

                            if ($vehiculo->tipo_operaciones_id == 1){
                                $motivoBajaVehiculoClave = null;
                                $motivoBajaVehiculoValor = null;
                            }

                            if($vehiculo->tipoAdquisicion->clave == 'DNC' || $vehiculo->tipoAdquisicion->clave == 'HRN' || $vehiculo->tipoAdquisicion->clave == 'PRM'){
                                $formaPagoVehiculo = null;
                                $valorAdquisicionVehiculo = null;
                                $tipoMonedaAdquisicionVehiculo = null;
                            }else{
                                $formaPagoVehiculo = $vehiculo->pago->valor;
                                $valorAdquisicionVehiculo =  $vehiculo->v_valor;
                                $tipoMonedaAdquisicionVehiculo = $vehiculo->tipoMonedas->clave;
                            }

                            if($vehiculo->regimen->valor == 'PERSONA FÍSICA'){
                                $tipoPersonaTransmisorVehiculos = 'FISICA';
                            }else{
                                $tipoPersonaTransmisorVehiculos = 'MORAL';
                            }

                            if($vehiculo->entidades_id == null){
                                $entidadVehiculosClave = null;
                                $entidadVehiculosValor = null;
                            }else{
                                $entidadVehiculosClave = $vehiculo->entidades->clave;
                                $entidadVehiculosValor = $vehiculo->entidades->entidad;
                            }


                            $vehiculos_d[] = array(
                                'tipoOperacion' => $vehiculo->tipoOperacion,
                                'tipoVehiculo' => ([
                                    'clave' => $vehiculo->tipo_vehiculo->clave,
                                    'valor' => $vehiculo->tipo_vehiculo->valor,
                                ]),
                                'titular' => ([[
                                    'clave' => $vehiculo->Titulares->clave,
                                    'valor' => $vehiculo->Titulares->valor,
                                ]]),
                                'transmisor' => ([[
                                    'tipoPersona' => $tipoPersonaTransmisorVehiculos,
                                    'nombreRazonSocial' => $nombre_razon,
                                    'rfc' => $rfc_transmisor,
                                    'relacion' => ([
                                        'clave' => $vehiculo->relacion->clave,
                                        'valor' => $vehiculo->relacion->valor,
                                    ]),
                                ]]),
                                'marca' => $vehiculo->v_marca,
                                'modelo' => $vehiculo->v_modelo,
                                'anio' => $vehiculo->v_ano,
                                'numeroSerieRegistro' => $vehiculo->v_num_serie,
                                'tercero' => ([[
                                    'tipoPersona' => $tipoPersona_tercero,
                                    'nombreRazonSocial' => $nombreRazonSocial_tercero,
                                    'rfc' => $rfc_tercero,
                                ]]),
                                'lugarRegistro' => ([
                                    'pais' => $vehiculo->registro->clave,
                                    'entidadFederativa' => ([
                                        'clave' => $entidadVehiculosClave,
                                        'valor' => $entidadVehiculosValor,
                                    ]),
                                ]),
                                'formaAdquisicion' => ([
                                    'clave' => $vehiculo->tipoAdquisicion->clave,
                                    'valor' => $vehiculo->tipoAdquisicion->valor,
                                ]),
                                'formaPago' => $formaPagoVehiculo,
                                'valorAdquisicion' => ([
                                    'valor' => $valorAdquisicionVehiculo,
                                    'moneda' => $tipoMonedaAdquisicionVehiculo,
                                ]),
                                'fechaAdquisicion' => $vehiculo->v_fecha,
                                'motivoBaja' => ([
                                    'clave' => $motivoBajaVehiculoClave,
                                    'valor' => $motivoBajaVehiculoValor,
                                ]),
                            );
                        }
                    }

                    if (count($title->BienesMuebles) == 0) {
                        $ninguno_muebles = true;
                        $aclaraciones_muebles = null;
                        $muebles[] = array(
                            'tipoOperacion' => null,
                            'titular' => ([[
                                'clave' => null,
                                'valor' => null,
                            ]]),
                            'tipoBien' => ([
                                'clave' => null,
                                'valor' => null,
                            ]),
                            'transmisor' => ([[
                                'tipoPersona' => null,
                                'nombreRazonSocial' => null,
                                'rfc' => null,
                                'relacion' => ([
                                    'clave' => null,
                                    'valor' => null,
                                ]),
                            ]]),
                            'tercero' => ([[
                                'tipoPersona' => null,
                                'nombreRazonSocial' => null,
                                'rfc' => null,
                            ]]),
                            'descripcionGeneralBien' => null,
                            'formaAdquisicion' => ([
                                'clave' => null,
                                'valor' => null,
                            ]),
                            'formaPago' => null,
                            'valorAdquisicion' => ([
                                'valor' => null,
                                'moneda' => null,
                            ]),
                            'fechaAdquisicion' => null,
                            'motivoBaja' => ([
                                'clave' => null,
                                'valor' => null,
                            ]),

                        );
                    } else {
                        $ninguno_muebles = false;
                        $aclaraciones_muebles = '';
                        foreach ($title->BienesMuebles as $mueble) {
                            $aclaraciones_muebles = $aclaraciones_muebles . ' ' . $mueble->aclaraciones;
                            if ($mueble->transmisor_propiedad_id == null || empty($mueble->transmisor_propiedad_id)) {
                                $tipoPersona_transmisor = null;
                                $nombreRazonSocial_transmisor = null;
                                $rfc_transmisor = null;
                            } else if ($mueble->transmisor_propiedad_id == 1) {
                                $tipoPersona_transmisor = 'FISICA';
                                $nombreRazonSocial_transmisor = $mueble->nombre_transmisor;
                                $rfc_transmisor = $mueble->rfc_transmisor;
                            } else {
                                $tipoPersona_transmisor = 'MORAL';
                                $nombreRazonSocial_transmisor = $mueble->denominacion_rs_transmisor;
                                $rfc_transmisor = $mueble->rfc_transmisor;
                            }

                            if ($mueble->tipo_tercero_id == null || empty($mueble->tipo_tercero_id)) {
                                $tipoPersona_tercero = null;
                                $nombreRazonSocial_tercero = null;
                                $rfc_tercero = null;
                            } else if ($mueble->transmisor_propiedad_id == 1) {
                                $tipoPersona_tercero = 'FISICA';
                                $nombreRazonSocial_tercero = $mueble->nombre_tercero;
                                $rfc_tercero = $mueble->rfc_tercero;
                            } else {
                                $tipoPersona_tercero = 'MORAL';
                                $nombreRazonSocial_tercero = $mueble->denominacion_razon;
                                $rfc_tercero = $mueble->rfc_tercero;
                            }

                            if($mueble->forma_pago_id == null){
                                $formaPago_muebles = null;
                            }else{
                                $formaPago_muebles = $mueble->FormaPago->valor;
                            }
                            if($mueble->tipo_moneda_id == null){
                                $moneda_muebles = null;
                            }else{
                               $moneda_muebles = $mueble->TipoMoneda->clave;
                            }

                            if($mueble->tipo_operacion_id == "1"){
                                $motivoBajaMuebleClave = null;
                                $motivoBajaMuebleValor = null;
                            }

                            $muebles[] = array(
                                'tipoOperacion' => $mueble->tipoOperaciones->valor,
                                'titular' => ([[
                                    'clave' => $mueble->TitularBien->clave,
                                    'valor' => $mueble->TitularBien->valor,
                                ]]),
                                'tipoBien' => ([
                                    'clave' => $mueble->TipoBien->clave,
                                    'valor' => $mueble->TipoBien->valor,
                                ]),
                                'transmisor' => ([[
                                    'tipoPersona' => $tipoPersona_transmisor,
                                    'nombreRazonSocial' => $nombreRazonSocial_transmisor,
                                    'rfc' => $rfc_transmisor,
                                    'relacion' => ([
                                        'clave' => $mueble->RelacionTransmisor->clave,
                                        'valor' => $mueble->RelacionTransmisor->valor,
                                    ]),
                                ]]),
                                'tercero' => ([[
                                    'tipoPersona' => $tipoPersona_tercero,
                                    'nombreRazonSocial' => $nombreRazonSocial_tercero,
                                    'rfc' => $rfc_tercero,
                                ]]),
                                'descripcionGeneralBien' => $mueble->descripcion_bien,
                                'formaAdquisicion' => ([
                                    'clave' => $mueble->FormaAdquisicion->clave,
                                    'valor' => $mueble->FormaAdquisicion->valor,
                                ]),
                                'formaPago' => $formaPago_muebles,
                                'valorAdquisicion' => ([
                                    'valor' => $mueble->valor_adquisicion,
                                    'moneda' => $moneda_muebles,
                                ]),
                                'fechaAdquisicion' => $mueble->fecha_adquisicion,
                                'motivoBaja' => ([
                                    'clave' => $motivoBajaMuebleClave,
                                    'valor' => $motivoBajaMuebleValor,
                                ]),
                            );
                        }
                    }
//dd($title->inversiones_cuentas);

                    if (count($title->inversiones_cuentas) == 0) {
                        $ninguno_inversiones = true;
                        $aclaraciones_inversiones = null;
                        $inversiones[] = array(
                            'tipoOperacion' => null,
                            'tipoInversion' => ([
                                'clave' => null,
                                'valor' => null,
                            ]),
                            'subTipoInversion' => ([
                                'clave' => null,
                                'valor' => null,
                            ]),
                            'titular' => ([[
                                'clave' => null,
                                'valor' => null,
                            ]]),
                            'tercero' => ([[
                                'tipoPersona' => null,
                                'nombreRazonSocial' => null,
                                'rfc' => null,
                            ]]),
                            'numeroCuentaContrato' => null,
                            'localizacionInversion' => ([
                                'pais' => null,
                                'institucionRazonSocial' => null,
                                'rfc' => null,
                            ]),
                            'saldoSituacionActual' => ([
                                'valor' => null,
                                'moneda' => null,
                            ]),
                        );
                    } else {
                        $aclaraciones_inversiones = '';
                        $ninguno_inversiones = false;
                        foreach ($title->inversiones_cuentas as $inversion) {
                            $aclaraciones_inversiones = $aclaraciones_inversiones . ' ' . $inversion->aclaraciones_observaciones;
                            if ($inversion->tipo_de_tercero_id == null) {
                                $tipoPersona_tercero = null;
                                $nombreRazonSocial_tercero = null;
                                $rfc_tercero = null;
                            } else {
                                if($inversion->tipoTercero->valor == 'PERSONA FISICA'){
                                    $tipoPersonaTerceroInversiones = 'FISICA';
                                }else{
                                    $tipoPersonaTerceroInversiones = 'MORAL';
                                }
                                $tipoPersona_tercero = $tipoPersonaTerceroInversiones;
                                $nombreRazonSocial_tercero = $inversion->nombre_del_tercero;
                                $rfc_tercero = $inversion->rfc_tercero;
                            }


                            $inversiones[] = array(
                                'tipoOperacion' => $inversion->tipoOperaciones->valor,
                                'tipoInversion' => ([
                                    'clave' => $inversion->tipoInversion->clave,
                                    'valor' => $inversion->tipoInversion->valor,
                                ]),
                                'subTipoInversion' => ([
                                    'clave' => $inversion->subTipoInversiones->clave,
                                    'valor' => $inversion->subTipoInversiones->valor,
                                ]),
                                'titular' => ([[
                                    'clave' => $inversion->nombreTitular->clave,
                                    'valor' => $inversion->nombreTitular->valor,
                                ]]),
                                'tercero' => ([[
                                    'tipoPersona' => $tipoPersona_tercero,
                                    'nombreRazonSocial' => $nombreRazonSocial_tercero,
                                    'rfc' => $rfc_tercero,
                                ]]),
                                'numeroCuentaContrato' => $inversion->numero_cuenta_poliza,
                                'localizacionInversion' => ([
                                    'pais' => $inversion->ubicacionInversion->clave,
                                    'institucionRazonSocial' => $inversion->institucion_razon_social,
                                    'rfc' => $inversion->rfc_titular,
                                ]),
                                'saldoSituacionActual' => ([
                                    'valor' => $inversion->saldo_a_la_fecha,
                                    'moneda' => $inversion->tipoMoneda->clave,
                                ]),
                            );
                        }
                    }

                    if (count($title->adeudos_pasivos) == 0) {
                        $ninguno_adeudos = true;
                        $aclaraciones_adeudos = null;
                        $adeudos[] = array(
                            'tipoOperacion' => null,
                            'titular' => ([[
                                'clave' => null,
                                'valor' => null,
                            ]]),
                            'tipoAdeudo' => ([
                                'clave' => null,
                                'valor' => null,
                            ]),
                            'numeroCuentaContrato' => null,
                            'fechaAdquisicion' => null,
                            'montoOriginal' => ([
                                'valor' => null,
                                'moneda' => null,
                            ]),
                            'saldoInsolutoSituacionActual' => ([
                                'valor' => null,
                                'moneda' => null,
                            ]),
                            'tercero' => ([[
                                'tipoPersona' => null,
                                'nombreRazonSocial' => null,
                                'rfc' => '',
                            ]]),
                            'otorganteCredito' => ([
                                'tipoPersona' => null,
                                'nombreInstitucion' => null,
                                'rfc' => null,
                            ]),
                            'localizacionAdeudo' => ([
                                'pais' => null,
                            ]),
                        );
                    } else {
                        $ninguno_adeudos = false;
                        $aclaraciones_adeudos = '';
                        foreach ($title->adeudos_pasivos as $adeudo) {
                            $aclaraciones_adeudos = $aclaraciones_adeudos . ' ' . $adeudo->aclaraciones_observaciones;
                            if ($adeudo->codeudor_id == null) {
                                $tipoPersona_codeudor = null;
                                $nombreRazonSocial_codeudor = null;
                                $rfc_codeudor = null;
                            } else {
                                if($adeudo->codeudor_id == 1){
                                    $tipoPersonaCodeudorAdeudosT= 'FISICA';
                                }else if($adeudo->codeudor_id == 2) {
                                    $tipoPersonaCodeudorAdeudosT = 'MORAL';
                                }
                                $tipoPersona_codeudor = $tipoPersonaCodeudorAdeudosT;
                                $nombreRazonSocial_codeudor = $adeudo->nombre_codeudor;
                                $rfc_codeudor = $adeudo->rfc_codeudor;
                            }

                            if ($adeudo->tipo_otorgante_id == null) {
                                $tipoPersona_otorgante = null;
                                $nombreRazonSocial_otorgante = null;
                                $rfc_otorgante = null;
                            } else {
                                if($adeudo->tipo_otorgante_id == 1){
                                    $tipoPersonaCodeudorAdeudosO= 'FISICA';
                                }else if($adeudo->tipo_otorgante_id == 2){
                                    $tipoPersonaCodeudorAdeudosO= 'MORAL';
                                }

                                $tipoPersona_otorgante = $tipoPersonaCodeudorAdeudosO;
                                $nombreRazonSocial_otorgante = $adeudo->nombre_otorgante;
                                $rfc_otorgante = $adeudo->rfc_otorgante;
                            }

                            $adeudos[] = array(
                                'tipoOperacion' => $adeudo->tipoOperaciones->valor,
                                'titular' => ([[
                                    'clave' => $adeudo->titularAdeudo->clave,
                                    'valor' => $adeudo->titularAdeudo->valor,
                                ]]),
                                'tipoAdeudo' => ([
                                    'clave' => $adeudo->tipoAdeudo->clave,
                                    'valor' => $adeudo->tipoAdeudo->valor,
                                ]),
                                'numeroCuentaContrato' => $adeudo->numero_cuenta,
                                'fechaAdquisicion' => $adeudo->fecha_adquisicion,
                                'montoOriginal' => ([
                                    'valor' => $adeudo->monto_adeudo,
                                    'moneda' => $adeudo->tipoMoneda->clave,
                                ]),
                                'saldoInsolutoSituacionActual' => ([
                                    'valor' => $adeudo->saldo_insoluto,
                                    'moneda' => $adeudo->tipoMoneda->clave,
                                ]),
                                'tercero' => ([[
                                    'tipoPersona' => $tipoPersona_codeudor,
                                    'nombreRazonSocial' => $nombreRazonSocial_codeudor,
                                    'rfc' => $rfc_codeudor,
                                ]]),
                                'otorganteCredito' => ([
                                    'tipoPersona' => $tipoPersona_otorgante,
                                    'nombreInstitucion' => $nombreRazonSocial_otorgante,
                                    'rfc' => $rfc_otorgante,
                                ]),
                                'localizacionAdeudo' => ([
                                    'pais' => $adeudo->LugarUbicacion->clave,
                                ]),
                            );
                        }
                    }

                    if (count($title->prestamosComodato) == 0) {
                        $ninguno_prestamo = true;
                        $aclaraciones_prestamos = null;
                        $tipoOperacionPrestamo = null;
                        $prestamoComoDato_inmueble[] = array(
                            'tipoInmueble' => ([
                                'clave' => null,
                                'valor' => null,
                            ]),
                            'domicilioMexico' => ([
                                'calle' => null,
                                'numeroExterior' => null,
                                'numeroInterior' => null,
                                'coloniaLocalidad' => null,
                                'municipioAlcaldia' => ([
                                    'clave' => null,
                                    'valor' => null,
                                ]),
                                'entidadFederativa' => ([
                                    'clave' => null,
                                    'valor' => null,
                                ]),
                                'codigoPostal' => null,
                            ]),
                            'domicilioExtranjero' => ([
                                'calle' => null,
                                'numeroExterior' => null,
                                'numeroInterior' => null,
                                'ciudadLocalidad' => null,
                                'estadoProvincia' => null,
                                'pais' => null,
                                'codigoPostal' => null,
                            ]),
                        );

                        $prestamoComoDato_vehiculo[] = array(
                            'tipo' => ([
                                'clave' => null,
                                'valor' => null,
                            ]),
                            'marca' => null,
                            'modelo' => null,
                            'anio' => null,
                            'numeroSerieRegistro' => null,
                            'lugarRegistro' => ([
                                'pais' => null,
                                'entidadFederativa' => ([
                                    'clave' => null,
                                    'valor' => null,
                                ]),
                            ]),
                        );
                    } else {
                        $ninguno_prestamo = false;
                        $aclaraciones_prestamos = '';

                        foreach ($title->prestamosComodato as $prestamo) {
                            $aclaraciones_prestamos = $aclaraciones_prestamos . ' ' . $prestamo->observaciones;
                            // dd($prestamo->tipo_bien_id == 2);
                            if (($prestamo->tipo_bien_id == 2) == true) {
                                $prestamo_inmueble = $prestamo->inmuebles;
                                $prestamo_inm_dom = $prestamo->inmuebles->domicilio;

                                $tipoOperacionPrestamo =$prestamo->tipoOperaciones->valor;

                                $prestamoComoDato_inmueble[] = array(
                                    'tipoInmueble' => ([
                                        'clave' => $prestamo_inmueble->tipoInmueble->clave,
                                        'valor' => $prestamo_inmueble->tipoInmueble->valor,
                                    ]),
                                    'domicilioMexico' => ([
                                        'calle' => $prestamo_inm_dom->calle,
                                        'numeroExterior' => $prestamo_inm_dom->num_ext,
                                        'numeroInterior' => $prestamo_inm_dom->num_int,
                                        'coloniaLocalidad' => $prestamo_inm_dom->colonia,
                                        'municipioAlcaldia' => ([
                                            'clave' => $prestamo_inm_dom->municipio_domicilio->clave,
                                            'valor' => $prestamo_inm_dom->municipio_domicilio->municipio,
                                        ]),
                                        'entidadFederativa' => ([
                                            'clave' => $prestamo_inm_dom->entidad_domicilio->clave,
                                            'valor' => $prestamo_inm_dom->entidad_domicilio->entidad,
                                        ]),
                                        'codigoPostal' => $prestamo_inm_dom->codigo_postal,
                                    ]),
                                    'domicilioExtranjero' => ([
                                        'calle' => null,
                                        'numeroExterior' => null,
                                        'numeroInterior' => null,
                                        'ciudadLocalidad' => null,
                                        'estadoProvincia' => null,
                                        'pais' => null,
                                        'codigoPostal' => null,
                                    ]),
                                );
                            }
                            if (($prestamo->tipo_bien_id == 3) == true) {
                                $prestamo_vehiculo = $prestamo->vehiculos;
                                //  dd($prestamo_vehiculo->tipoTitularD);

                                $tipoOperacionPrestamo = $prestamo->tipoOperaciones->valor;
                                $prestamoComoDato_vehiculo[] = array(
                                    'tipo' => ([
                                        'clave' => $prestamo_vehiculo->tipo_vehiculo->clave,
                                        'valor' => $prestamo_vehiculo->tipo_vehiculo->valor,
                                    ]),
                                    'marca' => $prestamo_vehiculo->v_marca,
                                    'modelo' => $prestamo_vehiculo->v_modelo,
                                    'anio' => $prestamo_vehiculo->v_ano,
                                    'numeroSerieRegistro' => $prestamo_vehiculo->v_num_serie,
                                    'lugarRegistro' => ([
                                        'pais' => $prestamo_vehiculo->registro->clave,
                                        'entidadFederativa' => ([
                                            'clave' => $prestamo_vehiculo->entidades->clave,
                                            'valor' => $prestamo_vehiculo->entidades->entidad,
                                        ]),
                                    ]),
                                );
                            }
                        }
                        if (empty($prestamoComoDato_vehiculo)){
                            $prestamoComoDato_vehiculo[] = array(
                                'tipo' => ([
                                    'clave' => null,
                                    'valor' => null,
                                ]),
                                'marca' => null,
                                'modelo' => null,
                                'anio' => null,
                                'numeroSerieRegistro' => null,
                                'lugarRegistro' => ([
                                    'pais' => null,
                                    'entidadFederativa' => ([
                                        'clave' => null,
                                        'valor' => null,
                                    ]),
                                ]),
                            );
                        }
                        if (empty($prestamoComoDato_inmueble)){
                            $prestamoComoDato_inmueble[] = array(
                                'tipoInmueble' => ([
                                    'clave' => null,
                                    'valor' => null,
                                ]),
                                'domicilioMexico' => ([
                                    'calle' => null,
                                    'numeroExterior' => null,
                                    'numeroInterior' => null,
                                    'coloniaLocalidad' => null,
                                    'municipioAlcaldia' => ([
                                        'clave' => null,
                                        'valor' => null,
                                    ]),
                                    'entidadFederativa' => ([
                                        'clave' => null,
                                        'valor' => null,
                                    ]),
                                    'codigoPostal' => null,
                                ]),
                                'domicilioExtranjero' => ([
                                    'calle' => null,
                                    'numeroExterior' => null,
                                    'numeroInterior' => null,
                                    'ciudadLocalidad' => null,
                                    'estadoProvincia' => null,
                                    'pais' => null,
                                    'codigoPostal' => null,
                                ]),
                            );
                        }
                    }

                    if (count($title->participacion_empresas) == 0) {
                        $aclaraciones_participacion_empresas = null;
                        $ninguno_participacion_empresas = true;
                        $participacion_empresas[] = array(
                            'tipoOperacion' => null,
                            'tipoRelacion' => null,
                            'nombreEmpresaSociedadAsociacion' => null,
                            'rfc' => null,
                            'porcentajeParticipacion' => null,
                            'tipoParticipacion' => ([
                                'clave' => null,
                                'valor' => null,
                            ]),
                            'recibeRemuneracion' => null,
                            'montoMensual' => ([
                                'valor' => null,
                                'moneda' => null,
                            ]),
                            'ubicacion' => ([
                                'pais' => null,
                                'entidadFederativa' => ([
                                    'clave' => null,
                                    'valor' => null,
                                ]),
                            ]),
                            'sector' => ([
                                'clave' => null,
                                'valor' => null,
                            ]),
                        );

                    } else {
                        $ninguno_participacion_empresas = false;
                        $aclaraciones_participacion_empresas = '';
                        foreach ($title->participacion_empresas as $parEmpresas) {
                            if ($parEmpresas->monto_mensual == null) {
                                $moneda = null;
                            } else {
                                $moneda = 'MXN';
                            }
                            if($parEmpresas->titular_operacion_id == null){
                                $tipoRelacion_empresas = null;
                            }else{
                                $tipoRelacion_empresas = $parEmpresas->tipotitularParticipaciones->valor;
                            }
                            $aclaraciones_participacion_empresas = $aclaraciones_participacion_empresas . ' ' . $parEmpresas->observaciones;

                            if($parEmpresas->tipoRespuesta->respuesta == 'Sí'){
                                $recibeRemuneracionEmpresas = true;
                            }else{
                                $recibeRemuneracionEmpresas = false;
                            }

                            $participacion_empresas[] = array(
                                'tipoOperacion' => $parEmpresas->tipoOperaciones->valor,
                                'tipoRelacion' => $tipoRelacion_empresas,
                                'nombreEmpresaSociedadAsociacion' => $parEmpresas->nombre_empresa,
                                'rfc' => $parEmpresas->rfc_empresa,
                                'porcentajeParticipacion' => $parEmpresas->porcentaje,
                                'tipoParticipacion' => ([
                                    'clave' => $parEmpresas->tipoParticipacion->clave,
                                    'valor' => $parEmpresas->tipoParticipacion->valor,
                                ]),
                                'recibeRemuneracion' => $recibeRemuneracionEmpresas,
                                'montoMensual' => ([
                                    'valor' => $parEmpresas->monto_mensual,
                                    'moneda' => $moneda,
                                ]),
                                'ubicacion' => ([
                                    'pais' => $parEmpresas->lugarUbica->clave,
                                    'entidadFederativa' => ([
                                        'clave' => $parEmpresas->Entidad->clave,
                                        'valor' => $parEmpresas->Entidad->entidad,
                                    ]),
                                ]),
                                'sector' => ([
                                    'clave' => $parEmpresas->tipoSector->clave,
                                    'valor' => $parEmpresas->tipoSector->valor,
                                ]),
                            );
                        }
                    }

                    if (count($title->participacion) == 0) {
                        $aclaraciones_tomaDecisiones = null;
                        $ninguno_TomaDecisiones = true;
                        $TomaDecisiones[] = array(
                            'tipoOperacion' => null,
                            'tipoRelacion' => null,
                            'tipoInstitucion' => ([
                                'clave' => null,
                                'valor' => null,
                            ]),
                            'nombreInstitucion' => null,
                            'rfc' => null,
                            'puestoRol' => null,
                            'fechaInicioParticipacion' => null,
                            'recibeRemuneracion' => null,
                            'montoMensual' => ([
                                'valor' => null,
                                'moneda' => null,
                            ]),
                            'ubicacion' => ([
                                'pais' => null,
                                'entidadFederativa' => ([
                                    'clave' => null,
                                    'valor' => null,
                                ]),
                            ]),
                        );

                    } else {
                        $ninguno_TomaDecisiones = false;
                        $aclaraciones_tomaDecisiones = '';
                        foreach ($title->participacion as $decision) {
                            $aclaraciones_tomaDecisiones = $aclaraciones_tomaDecisiones . ' ' . $decision->aclaraciones;
                            if ($decision->remuneracion == null) {
                                $recibeRemuneracion = false;
                            } else if ($decision->remuneracion == 1) {
                                $recibeRemuneracion = true;
                            } else {
                                $recibeRemuneracion = false;
                            }

                            if ($decision->monto_mensual == null) {
                                $moneda = null;
                            } else {
                                $moneda = 'MXN';
                            }
                            $TomaDecisiones[] = array(
                                'tipoOperacion' => $decision->tipoOperacion,
                                'tipoRelacion' => $decision->tipoRelaciones->valor,
                                'tipoInstitucion' => ([
                                    'clave' => $decision->tipoInstituciones->clave,
                                    'valor' => $decision->tipoInstituciones->valor,
                                ]),
                                'nombreInstitucion' => $decision->nombre_institucion,
                                'rfc' => $decision->rfc,
                                'puestoRol' => $decision->puesto_rol,
                                'fechaInicioParticipacion' => $decision->fecha_inicio,
                                'recibeRemuneracion' => $recibeRemuneracion,
                                'montoMensual' => ([
                                    'valor' => $decision->monto_mensual,
                                    'moneda' => $moneda,
                                ]),
                                'ubicacion' => ([
                                    'pais' => $decision->LugarUbicaciones->clave,
                                    'entidadFederativa' => ([
                                        'clave' => $decision->Entidades->clave,
                                        'valor' => $decision->Entidades->entidad,
                                    ]),
                                ]),
                            );
                        }
                    }

                    if (count($title->apoyo_beneficio) == 0) {
                        $ninguno_apoyo = true;
                        $aclaraciones_apoyo = null;
                        $apoyos[] = array(
                            'tipoOperacion' => null,
                            'tipoPersona' => null,
                            'beneficiarioPrograma' => ([
                                'clave' => null,
                                'valor' => null,
                            ]),
                            'nombrePrograma' => null,
                            'institucionOtorgante' => null,
                            'nivelOrdenGobierno' => null,
                            'tipoApoyo' => ([
                                'clave' => null,
                                'valor' => null,
                            ]),
                            'formaRecepcion' => null,
                            'montoApoyoMensual' => ([
                                'valor' => null,
                                'moneda' => null,
                            ]),
                            'especifiqueApoyo' => null,
                        );
                    } else {
                        $ninguno_apoyo = false;
                        $aclaraciones_apoyo = '';
                        foreach ($title->apoyo_beneficio as $apoyo) {
                            $aclaraciones_apoyo = $aclaraciones_apoyo . ' ' . $apoyo->aclaraciones_observaciones;
                            if ($apoyo->monto_mensual == null) {
                                $moneda = null;
                            } else if($apoyo->tipo_de_moneda_id == null){
                                $moneda = null;
                            }else{
                                $moneda = $apoyo->tipoMoneda->clave;
                            }
                            $apoyos[] = array(
                                'tipoOperacion' => $apoyo->tipoOperaciones->valor,
                                'tipoPersona' => null,
                                'beneficiarioPrograma' => ([
                                    'clave' => $apoyo->tipoBeneficiario->clave,
                                    'valor' => $apoyo->tipoBeneficiario->valor,
                                ]),
                                'nombrePrograma' => $apoyo->nombre_programa,
                                'institucionOtorgante' => $apoyo->nombre_institucion,
                                'nivelOrdenGobierno' => $apoyo->nivelGobierno->valor,
                                'tipoApoyo' => ([
                                    'clave' => $apoyo->tipoApoyo->clave,
                                    'valor' => $apoyo->tipoApoyo->valor,
                                ]),
                                'formaRecepcion' => $apoyo->formaRecepcion->valor,
                                'montoApoyoMensual' => ([
                                    'valor' => $apoyo->monto_mensual,
                                    'moneda' => $moneda,
                                ]),
                                'especifiqueApoyo' => $apoyo->especifique_apoyo,
                            );
                        }
                    }

                    if (count($title->representacion) == 0) {
                        $aclaraciones_presentacion = null;
                        $ninguno_representacion = true;
                        $representacion[] = array(
                            'tipoOperacion' => null,
                            'tipoRelacion' => null,
                            'tipoRepresentacion' => null,
                            'fechaInicioRepresentacion' => null,
                            'tipoPersona' => null,
                            'nombreRazonSocial' => null,
                            'rfc' => null,
                            'recibeRemuneracion' => null,
                            'montoMensual' => ([
                                'valor' => null,
                                'moneda' => null,
                            ]),
                            'ubicacion' => ([
                                'pais' => null,
                                'entidadFederativa' => ([
                                    'clave' => null,
                                    'valor' => null,
                                ]),
                            ]),
                            'sector' => ([
                                'clave' => null,
                                'valor' => null,
                            ]),
                        );
                    } else {
                        $ninguno_representacion = false;
                        $aclaraciones_presentacion = '';
                        foreach ($title->representacion as $repre) {
                            $aclaraciones_presentacion = $aclaraciones_presentacion . ' ' . $repre->observaciones;
                            if ($repre->respuesta_id == 1) {
                                $remuneracion = true;
                            } else {
                                $remuneracion = false;
                            }
                            if ($repre->monto_mensual == null) {
                                $moneda = null;
                            } else {
                                $moneda = 'MXN';
                            }
                            if($repre->tipoRegimen->valor == 'PERSONA FÍSICA'){
                                $tipoPersonaRepresentacion = 'FISICA';
                            }else{
                                $tipoPersonaRepresentacion = 'MORAL';
                            }
                            $representacion[] = array(
                                'tipoOperacion' => $repre->tipoOperaciones->valor,
                                'tipoRelacion' => $repre->tipotitularParticipaciones->valor,
                                'tipoRepresentacion' => $repre->tipotipoParticipaciones->valor,
                                'fechaInicioRepresentacion' => $repre->fecha_representacion,
                                'tipoPersona' => $tipoPersonaRepresentacion,
                                'nombreRazonSocial' => $repre->nombre_representante,
                                'rfc' => $repre->rfc_representante,
                                'recibeRemuneracion' => $remuneracion,
                                'montoMensual' => ([
                                    'valor' => $repre->monto_mensual,
                                    'moneda' => $moneda,
                                ]),
                                'ubicacion' => ([
                                    'pais' => $repre->lugarUbicacion->clave,
                                    'entidadFederativa' => ([
                                        'clave' => $repre->entidades->clave,
                                        'valor' => $repre->entidades->entidad,
                                    ]),
                                ]),
                                'sector' => ([
                                    'clave' => $repre->tipoSector->clave,
                                    'valor' => $repre->tipoSector->valor,
                                ]),
                            );
                        }
                    }

                    if (count($title->clientes) == 0) {
                        $aclaraciones_clientes = null;
                        $ninguno_clientesPrincipales = true;
                        $clientesPrincipales[] = array(
                            'tipoOperacion' => '',
                            'realizaActividadLucrativa' => null,
                            'tipoRelacion' => null,
                            'empresa' => ([
                                'nombreEmpresaServicio' => null,
                                'rfc' => null,
                            ]),
                            'clientePrincipal' => ([
                                'tipoPersona' => null,
                                'nombreRazonSocial' => null,
                                'rfc' => null,
                            ]),
                            'sector' => ([
                                'clave' => null,
                                'valor' => null,
                            ]),
                            'montoAproximadoGanancia' => ([
                                'valor' => null,
                                'moneda' => null,
                            ]),
                            'ubicacion' => ([
                                'pais' => null,
                                'entidadFederativa' => ([
                                    'clave' => null,
                                    'valor' => null,
                                ]),
                            ]),
                        );
                    } else {
                        $ninguno_clientesPrincipales = false;
                        $aclaraciones_clientes = '';
                        foreach ($title->clientes as $cliente) {
                            $aclaraciones_clientes = $aclaraciones_clientes . ' ' . $cliente->aclaraciones;

                            if ($cliente->tipo_relaciones_id == null) {
                                $tipoPersonaCliente = null;
                            } else {
                                $tipoPersonaCliente = $cliente->tipoRelaciones->valor;
                            }
                            if ($cliente->regimen_fiscal_id == null) {
                                $tipoPersona_cliPri = null;
                            } else {
                                if($cliente->RegimenFiscal->valor == 'PERSONA FÍSICA'){
                                    $tipoPersona_cliPri = 'FISICA';
                                }else{
                                    $tipoPersona_cliPri = 'MORAL';
                                }
                            }
                            if ($cliente->sectores_id == null) {
                                $cliente_sector_clave = null;
                                $cliente_sector_valor = null;
                            } else {
                                $cliente_sector_clave = $cliente->sectores->clave;
                                $cliente_sector_valor = $cliente->sectores->valor;
                            }
                            if ($cliente->lugar_donde_resides_id == null) {
                                $cliente_ubicacion = null;
                            } else {
                                $cliente_ubicacion = $cliente->lugarDondeReside->clave;
                            }
                            if ($cliente->entidades_id == null) {
                                $cliente_entidad_clave = null;
                                $cliente_entidad_valor = null;
                            } else {
                                $cliente_entidad_clave = $cliente->Entidades->clave;
                                $cliente_entidad_valor = $cliente->Entidades->entidad;
                            }

                            if($cliente->Respuesta->respuesta == 'Sí'){
                                $realizaActividadLucrativaClientes = true;
                            }else{
                                $realizaActividadLucrativaClientes = false;
                            }

                            $clientesPrincipales[] = array(
                                'tipoOperacion' => $cliente->tipoOperacion,
                                'realizaActividadLucrativa' => $realizaActividadLucrativaClientes,
                                'tipoRelacion' => $tipoPersonaCliente,
                                'empresa' => ([
                                    'nombreEmpresaServicio' => $cliente->nombre_empresa,
                                    'rfc' => $cliente->rfc,
                                ]),
                                'clientePrincipal' => ([
                                    'tipoPersona' => $tipoPersona_cliPri,
                                    'nombreRazonSocial' => $cliente->nombre_cliente,
                                    'rfc' => $cliente->rfc_cliente,
                                ]),
                                'sector' => ([
                                    'clave' => $cliente_sector_clave,
                                    'valor' => $cliente_sector_valor,
                                ]),
                                'montoAproximadoGanancia' => ([
                                    'valor' => $cliente->monto_beneficio,
                                    'moneda' => 'MXN',
                                ]),
                                'ubicacion' => ([
                                    'pais' => $cliente_ubicacion,
                                    'entidadFederativa' => ([
                                        'clave' => $cliente_entidad_clave,
                                        'valor' => $cliente_entidad_valor,
                                    ]),
                                ]),
                            );
                        }
                    }

                    if (count($title->beneficios_privados) == 0) {
                        $ninguno_beneficiosPrivados = true;
                        $aclaraciones_beneficios = null;
                        $beneficiosPrivados[] = array(
                            'tipoOperacion' => null,
                            'tipoPersona' => null,
                            'tipoBeneficio' => ([
                                'clave' => null,
                                'valor' => null,
                            ]),
                            'beneficiario' => ([[
                                'clave' => null,
                                'valor' => null,
                            ]]),
                            'otorgante' => ([
                                'tipoPersona' => null,
                                'nombreRazonSocial' => null,
                                'rfc' => null,
                            ]),
                            'formaRecepcion' => null,
                            'especifiqueBeneficio' => null,
                            'montoMensualAproximado' => ([
                                'valor' => null,
                                'moneda' => null,
                            ]),
                            'sector' => ([
                                'clave' => null,
                                'valor' => null,
                            ]),
                        );
                    } else {
                        $ninguno_beneficiosPrivados = false;
                        $aclaraciones_beneficios = '';
                        foreach ($title->beneficios_privados as $beneficios) {
                            $aclaraciones_beneficios = $aclaraciones_beneficios . ' ' . $beneficios->aclaraciones;
                            if ($beneficios->otorgante_id == 1) {
                                $tipoOtorgante = 'FISICA';
                                $nombreRazonSocial = $beneficios->nombre_otorgante;
                                $rfc_otor = $beneficios->rfc_otorgante;
                            } else {
                                $tipoOtorgante = 'MORAL';
                                $nombreRazonSocial = $beneficios->razon_social_otorgante;
                                $rfc_otor = $beneficios->rfc_otorganteM;
                            }
                            if ($beneficios->monto_mensual == null) {
                                $valor = null;
                                $moneda = null;
                            } else {
                                $valor = $beneficios->monto_mensual;
                                $moneda = 'MNX';
                            }
                            if($beneficios->RegimenFiscal->valor == 'PERSONA MORAL'){
                                $tipoPersonaBeneficios = 'MORAL';
                            }else{
                                $tipoPersonaBeneficios = 'FISICA';
                            }
                            $beneficiosPrivados[] = array(
                                'tipoOperacion' => $beneficios->tipoOperacion,
                                'tipoPersona' => $tipoPersonaBeneficios,
                                'tipoBeneficio' => ([
                                    'clave' => $beneficios->tipoBeneficio->clave,
                                    'valor' => $beneficios->tipoBeneficio->valor,
                                ]),
                                'beneficiario' => ([[
                                    'clave' => $beneficios->beneficiariosP->clave,
                                    'valor' => $beneficios->beneficiariosP->valor,
                                ]]),
                                'otorgante' => ([
                                    'tipoPersona' => $tipoOtorgante,
                                    'nombreRazonSocial' => $nombreRazonSocial,
                                    'rfc' => $rfc_otor,
                                ]),
                                'formaRecepcion' => $beneficios->formaRecepcion->valor,
                                'especifiqueBeneficio' => $beneficios->especie,
                                'montoMensualAproximado' => ([
                                    'valor' => $valor,
                                    'moneda' => $moneda,
                                ]),
                                'sector' => ([
                                    'clave' => $beneficios->sectoresP->clave,
                                    'valor' => $beneficios->sectoresP->valor,
                                ]),
                            );
                        }
                    }

                    if (count($title->fideicomisos) == 0) {
                        $ninguno_fideicomisos = true;
                        $aclaraciones_fideicomisos = null;
                        $fideicomisos[] = array(
                            'tipoOperacion' => null,
                            'tipoRelacion' => null,
                            'tipoFideicomiso' => null,
                            'tipoParticipacion' => null,
                            'rfcFideicomiso' => null,
                            'fideicomitente' => ([
                                'tipoPersona' => null,
                                'nombreRazonSocial' => null,
                                'rfc' => null,
                            ]),
                            'fiduciario' => ([
                                'nombreRazonSocial' => null,
                                'rfc' => null,
                            ]),
                            'fideicomisario' => ([
                                'tipoPersona' => null,
                                'nombreRazonSocial' => null,
                                'rfc' => null,
                            ]),
                            'sector' => ([
                                'clave' => null,
                                'valor' => null,
                            ]),
                            'extranjero' => null,
                        );
                    } else {
                        $ninguno_fideicomisos = false;
                        $aclaraciones_fideicomisos = '';
                        foreach ($title->fideicomisos as $fideicomiso) {
                            $aclaraciones_fideicomisos = $aclaraciones_fideicomisos . ' ' . $fideicomiso->aclaraciones;
                            if ($fideicomiso->tipo_persona_fideicomiso == 1) {
                                $tipoPersonaFideicomiso = "FISICA";
                                $nombreFideicomiso = $fideicomiso->nombre_persona_fisica;
                                $rfcFideicomiso = $fideicomiso->rfc_persona_fisica;
                            } else {
                                $tipoPersonaFideicomiso = "MORAL";
                                $nombreFideicomiso = $fideicomiso->nombre_persona_moral;
                                $rfcFideicomiso = $fideicomiso->rfc_persona_moral;
                            }

                            if ($fideicomiso->tipo_persona_fideicomitente == 1) {
                                $tipoPersonafideicomitente = "FISICA";
                                $nombrefideicomitente = $fideicomiso->nombre_fideicomitente_fisica;
                                $rfcfideicomitente = $fideicomiso->rfc_fideicomitente_fisica;
                            } else {
                                $tipoPersonafideicomitente = "MORAL";
                                $nombrefideicomitente = $fideicomiso->nombre_fideicomitente_moral;
                                $rfcfideicomitente = $fideicomiso->rfc_fideicomitente_moral;
                            }

                            if ($fideicomiso->tipo_persona_fiduciario == 1) {
                                $tipoPersonafiduciario = "FISICA";
                                $nombrefiduciario = $fideicomiso->nombre_fiduciario_fisica;
                                $rfcfiduciario = $fideicomiso->rfc_fiduciario_fisica;
                            } else {
                                $tipoPersonafiduciario = "MORAL";
                                $nombrefiduciario = $fideicomiso->nombre_fiduciario_moral;
                                $rfcfiduciario = $fideicomiso->rfc_fiduciario_moral;
                            }

                            if ($fideicomiso->tipo_persona_fideicomisario == 1) {
                                $tipoPersonafideicomisario = "FISICA";
                                $nombrefideicomisario = $fideicomiso->nombre_fideicomisario_fisica;
                                $rfcfideicomisario = $fideicomiso->rfc_fideicomisario_fisica;
                            } else {
                                $tipoPersonafideicomisario = "MORAL";
                                $nombrefideicomisario = $fideicomiso->nombre_fideicomisario_moral;
                                $rfcfideicomisario = $fideicomiso->rfc_fideicomisario_moral;
                            }
                            $fideicomisos[] = array(
                                'tipoOperacion' => $fideicomiso->tipoOperacion,
                                'tipoRelacion' => $fideicomiso->tipoRelaciones->valor,
                                'tipoFideicomiso' => $fideicomiso->tipoFideicomisos->valor,
                                'tipoParticipacion' => $fideicomiso->tipoParticipacionFideicomisos->valor,
                                'rfcFideicomiso' => $rfcFideicomiso,
                                'fideicomitente' => ([
                                    'tipoPersona' => $tipoPersonafideicomitente,
                                    'nombreRazonSocial' => $nombrefideicomitente,
                                    'rfc' => $rfcfideicomitente,
                                ]),
                                'fiduciario' => ([
                                    'nombreRazonSocial' => $nombrefiduciario,
                                    'rfc' => $rfcfiduciario,
                                ]),
                                'fideicomisario' => ([
                                    'tipoPersona' => $tipoPersonafideicomisario,
                                    'nombreRazonSocial' => $nombrefideicomisario,
                                    'rfc' => $rfcfideicomisario,
                                ]),
                                'sector' => ([
                                    'clave' => $fideicomiso->sectores->clave,
                                    'valor' => $fideicomiso->sectores->valor,
                                ]),
                                'extranjero' => $fideicomiso->LugarUbicaciones->clave,
                            );
                        }
                    }


                    if ($title->pareja == null) {
                        $pareja = array(
                            'nunguno' => true,
                            'tipoOperacion' => null,
                            'nombre' => null,
                            'primerApellido' => null,
                            'segundoApellido' => null,
                            'fechaNacimiento' => null,
                            'rfc' => null,
                            'relacionConDeclarante' => null,
                            'ciudadanoExtranjero' => null,
                            'curp' => null,
                            'esDependienteEconomico' => null,
                            'habitaDomicilioDeclarante' => null,
                            'lugarDondeReside' => null,
                            'domicilioMexico' => ([
                                'calle' => null,
                                'numeroExterior' => null,
                                'numeroInterior' => null,
                                'coloniaLocalidad' => null,
                                'municipioAlcaldia' => ([
                                    'clave' => null,
                                    'valor' => null,
                                ]),
                                'entidadFederativa' => ([
                                    'clave' => null,
                                    'valor' => null,
                                ]),
                                'codigoPostal' => null,
                            ]),
                            'domicilioExtranjero' => ([
                                'calle' => null,
                                'numeroExterior' => null,
                                'numeroInterior' => null,
                                'ciudadLocalidad' => null,
                                'estadoProvincia' => null,
                                'pais' => null,
                                'codigoPostal' => null,
                            ]),
                            'actividadLaboral' => ([
                                'clave' => null,
                                'valor' => null,
                            ]),
                            'actividadLaboralSectorPublico' => null,
                            'actividadLaboralSectorPrivadoOtro' => null,
                            'aclaracionesObservaciones' => null,
                        );
                    } else {
                        if($title->pareja->ciudadano_id == null){
                            $pareja_extranjero = null;
                        }else if ($title->pareja->ciudadanoExtranjero->id == 2) {
                            $pareja_extranjero = true;
                        } else if ($title->pareja->ciudadanoExtranjero->id == 1) {
                            $pareja_extranjero = false;
                        }

                        if ($title->pareja->respuesta_domicilio_id == 1) {
                            $domicilio_pareja = $title->domicilio;
                        } else if ($title->pareja->respuesta_domicilio_id == 2) {
                            $domicilio_pareja = $title->pareja->domicilio;
                        }else{
                            $domicilio_pareja = null;
                        }

                        if ($title->pareja->experienciaLaboral == null) {
                            $experiencia_pareja = null;
                        } else {
                            $experiencia_pareja = $title->pareja->experienciaLaboral;
                        }
                        if (!count($experiencia_pareja)) {
                            $sector_clave = null;
                            $sector_valor = null;
                            $experiencia_ambito_sectores_clave = null;
                            $experiencia_ambito_sectores_valor = null;
                            $dependienteEconomico = false;
                            if (isset($title->pareja) && $title->pareja->respuesta_dependiente_id == 1) {
                                $dependienteEconomico = true;
                            }

                            $habitaDomicilioDeclarante = false;
                            if (isset($title->pareja->respuesta_domicilio_id) && $title->pareja->respuesta_domicilio_id == 1) {
                                $habitaDomicilioDeclarante = true;
                                //   $lugarReside = $title->d
                            }
                            $actividadLaboralSectorPublico = array(
                                'nivelOrdenGobierno' => null,
                                'ambitoPublico' => null,
                                'nombreEntePublico' => null,
                                'areaAdscripcion' => null,
                                'empleoCargoComision' => null,
                                'funcionPrincipal' => null,
                                'salarioMensualNeto' => ([
                                    'valor' => null,
                                    'moneda' => null,
                                ]),
                                'fechaIngreso' => null,
                            );
                            $actividadLaboralSectorPrivadoOtro = array(
                                'nombreEmpresaSociedadAsociacion' => null,
                                'empleoCargoComision' => null,
                                'rfc' => null,
                                'fechaIngreso' => null,
                                'salarioMensualNeto' => ([
                                    'valor' => null,
                                    'moneda' => null,
                                ]),
                            );
                        } else {
                             $experiencia_ambito_sectores_clave = $experiencia_pareja[0]->ambito_sectores->clave;
                             $experiencia_ambito_sectores_valor = $experiencia_pareja[0]->ambito_sectores->valor;

                            $dependienteEconomico = false;
                            if (isset($title->pareja) && $title->pareja->respuesta_dependiente_id == 1) {
                                $dependienteEconomico = true;
                            }

                            $habitaDomicilioDeclarante = false;
                            if (isset($title->pareja->respuesta_domicilio_id) && $title->pareja->respuesta_domicilio_id == 1) {
                                $habitaDomicilioDeclarante = true;
                            }

                            if(count($experiencia_pareja)){
                                $nivelOrdenGobienrnoPareja = null;
                                $ambitosPublicosPareja = null;
                            }
                            if ($experiencia_pareja[0]->ambito_sector_id == "1") {
                                if($experiencia_pareja[0]->nivel_orden_gobierno_id == null){
                                    $nivelOrdenGobienrnoPareja = null;
                                }else{
                                    $nivelOrdenGobienrnoPareja = $experiencia_pareja[0]->Nivelordengobiernos->valor;
                                }

                                if($experiencia_pareja[0]->ambito_publico_id == null){
                                    $ambitosPublicosPareja = null;
                                }else{
                                    $ambitosPublicosPareja = $experiencia_pareja[0]->ambitoPublicos->valor;
                                }

                                $actividadLaboralSectorPublico = array(
                                    'nivelOrdenGobierno' => $nivelOrdenGobienrnoPareja,
                                    'ambitoPublico' => $ambitosPublicosPareja,
                                    'nombreEntePublico' => $experiencia_pareja[0]->ente_publico,
                                    'areaAdscripcion' => $experiencia_pareja[0]->area_adscripcion,
                                    'empleoCargoComision' => $experiencia_pareja[0]->cargo_comision,
                                    'funcionPrincipal' => $experiencia_pareja[0]->funcion_pricipal,
                                    'salarioMensualNeto' => ([
                                        'valor' => $experiencia_pareja[0]->salario_mensual_neto,
                                        'moneda' => 'MXN',
                                    ]),
                                    'fechaIngreso' => $experiencia_pareja[0]->fecha_ingreso,
                                );
                                $actividadLaboralSectorPrivadoOtro = array(
                                    'nombreEmpresaSociedadAsociacion' => null,
                                    'empleoCargoComision' => null,
                                    'rfc' => null,
                                    'fechaIngreso' => null,
                                    'salarioMensualNeto' => ([
                                        'valor' => null,
                                        'moneda' => null,
                                    ]),
                                );
                            } else {
                                $actividadLaboralSectorPublico = array(
                                    'nivelOrdenGobierno' => null,
                                    'ambitoPublico' => null,
                                    'nombreEntePublico' => null,
                                    'areaAdscripcion' => null,
                                    'empleoCargoComision' => null,
                                    'funcionPrincipal' => null,
                                    'salarioMensualNeto' => ([
                                        'valor' => null,
                                        'moneda' => null,
                                    ]),
                                    'fechaIngreso' => null,
                                );
                                $actividadLaboralSectorPrivadoOtro = array(
                                    'nombreEmpresaSociedadAsociacion' => $experiencia_pareja[0]->nombre_empresa,
                                    'empleoCargoComision' => $experiencia_pareja[0]->cargo_comision,
                                    'rfc' => $experiencia_pareja[0]->rfc,
                                    'fechaIngreso' => $experiencia_pareja[0]->fecha_ingreso,
                                    'sector' => ([
                                        'clave' => $sector_clave,
                                        'valor' => $sector_valor,
                                    ]),
                                    'salarioMensualNeto' => ([
                                        'valor' => $experiencia_pareja[0]->salario_mensual_neto,
                                        'moneda' => 'MXN',
                                    ]),
                                    'proveedorContratistaGobierno' => $experiencia_pareja[0]->respuesta_proveedor_id,
                                );
                            }
                        }
                        if ($title->pareja->lugar_reside_id == null) {
                            $lugarResidePareja = 'MX';
                        } else {
                            $lugarResidePareja = $title->pareja->lugarReside->valor;
                        }

                        if($title->pareja->respuesta_domicilio_id == null){
                            $entidad_dom_pareja_clave = null;
                            $entidad_dom_pareja_valor = null;
                        }else if($domicilio_pareja->entidad_id == null){
                            $entidad_dom_pareja_clave = null;
                            $entidad_dom_pareja_valor = null;
                        }else{
                            $entidad_dom_pareja_clave = $domicilio_pareja->entidad_domicilio->clave;
                            $entidad_dom_pareja_valor = $domicilio_pareja->entidad_domicilio->entidad;
                        }
                        if($title->pareja->relacion_id == null){
                            $relacionPareja = null;
                        }else{
                            $relacionPareja = $title->pareja->relacionDeclarante->valor;
                        }

                        if($title->situacion_personal_id == 1 || $title->situacion_personal_id == 3 ||  $title->situacion_personal_id == 4){
                            $domicilioParejaNull = array(
                                'calle' => null,
                                'numeroExterior' => null,
                                'numeroInterior' => null,
                                'coloniaLocalidad' => null,
                                'municipioAlcaldia' => ([
                                    'clave' => null,
                                    'valor' => null,
                                ]),
                                'entidadFederativa' => ([
                                    'clave' => null,
                                    'valor' => null,
                                ]),
                                'codigoPostal' => null,
                            );
                        }else{
                            if($domicilio_pareja == null){
                                $domicilioParejaNull = array(
                                    'calle' => null,
                                    'numeroExterior' => null,
                                    'numeroInterior' => null,
                                    'coloniaLocalidad' => null,
                                    'municipioAlcaldia' => ([
                                        'clave' => null,
                                        'valor' => null,
                                    ]),
                                    'entidadFederativa' => ([
                                        'clave' => null,
                                        'valor' => null,
                                    ]),
                                    'codigoPostal' => null,
                                );
                            }else{
                                $domicilioParejaNull = array(
                                    'calle' => $domicilio_pareja->calle,
                                    'numeroExterior' => $domicilio_pareja->num_ext,
                                    'numeroInterior' => $domicilio_pareja->num_int,
                                    'coloniaLocalidad' => $domicilio_pareja->colonia,
                                    'municipioAlcaldia' => ([
                                        'clave' => $domicilio_pareja->municipio_domicilio->clave,
                                        'valor' => $domicilio_pareja->municipio_domicilio->municipio,
                                    ]),
                                    'entidadFederativa' => ([
                                        'clave' => $entidad_dom_pareja_clave,
                                        'valor' => $entidad_dom_pareja_valor,
                                    ]),
                                    'codigoPostal' => $domicilio_pareja->codigo_postal,
                                );
                            }
                        }

                        $pareja = array(
                            'nunguno' => false,
                            'tipoOperacion' => $title->pareja->tipoOperaciones->valor,
                            'nombre' => $title->pareja->nombre,
                            'primerApellido' => $title->pareja->primer_apellido,
                            'segundoApellido' => $title->pareja->segundo_apellido,
                            'fechaNacimiento' => $title->pareja->fecha_nacimiento,
                            'rfc' => $title->pareja->rfc_pareja,
                            'relacionConDeclarante' => $relacionPareja,
                            'ciudadanoExtranjero' => $pareja_extranjero,
                            'curp' => $title->pareja->curp,
                            'esDependienteEconomico' => $dependienteEconomico,
                            'habitaDomicilioDeclarante' => $habitaDomicilioDeclarante,
                            'lugarDondeReside' => $lugarResidePareja,
                            'domicilioMexico' => $domicilioParejaNull,
                            'domicilioExtranjero' => ([
                                'calle' => null,
                                'numeroExterior' => null,
                                'numeroInterior' => null,
                                'ciudadLocalidad' => null,
                                'estadoProvincia' => null,
                                'pais' => null,
                                'codigoPostal' => null,
                            ]),
                            'actividadLaboral' => ([
                                'clave' => $experiencia_ambito_sectores_clave,
                                'valor' => $experiencia_ambito_sectores_valor,
                            ]),
                            'actividadLaboralSectorPublico' => $actividadLaboralSectorPublico,
                            'actividadLaboralSectorPrivadoOtro' => $actividadLaboralSectorPrivadoOtro,
                            'aclaracionesObservaciones' => $title->pareja->observaciones,
                        );
                    }
                    if ($title->datos_empleo_declarante != null) {
                        $ninguno_datos_empleo_declarante = false;
                        if($title->datos_empleo_declarante->nivel_gobierno_id == null){
                            $nivelOrdenGobierno_declarante = null;
                        }else{
                            $nivelOrdenGobierno_declarante = $title->datos_empleo_declarante->nivel_gobierno->valor;
                        }

                        if($title->datos_empleo_declarante->ambito_publico_id == null){
                            $ambitoPublico_declarante = null;
                        }else{
                            $ambitoPublico_declarante = $title->datos_empleo_declarante->ambito_publico->valor;
                        }

                        if($title->datos_empleo_declarante->honorarios == 1){
                            $honorariosDeclarante = true;
                        }else{
                            $honorariosDeclarante = false;
                        }


                        if($title->servidor_publico->tipo_dependencia == 1){
                            $adscripcionDeclarante = 'Secretaría de Asuntos Parlamentarios';
                        }else if($title->servidor_publico->tipo_dependencia == 2){
                            $adscripcionDeclarante = 'Órgano Superior de Fiscalización';
                        }else if($title->servidor_publico->tipo_dependencia == 3){
                            $adscripcionDeclarante = 'Secretaría de Administración y Finanzas';
                        }else if($title->servidor_publico->tipo_dependencia == 4){
                            $adscripcionDeclarante = 'Dirección General de Comunicación Social';
                        }else if($title->servidor_publico->tipo_dependencia == 5){
                            $adscripcionDeclarante = 'Contraloría';
                        }else if($title->servidor_publico->tipo_dependencia == 6){
                            $adscripcionDeclarante = 'Instituto de Estudios Legislativos';
                        }else if($title->servidor_publico->tipo_dependencia == 7){
                            $adscripcionDeclarante = 'U. de Información';
                        }else if($title->servidor_publico->tipo_dependencia == 8){
                            $adscripcionDeclarante = 'Legislatura';
                        }

                        $datos_empleo_declarante = array(
                            'tipoOperacion' => $title->datos_empleo_declarante->tipoOperacion,
                            'nivelOrdenGobierno' => 'ESTATAL',
                            'ambitoPublico' => 'LEGISLATIVO',
                            'nombreEntePublico' => 'PODER LEGISTATIVO',
                            'areaAdscripcion' => $adscripcionDeclarante,
                            'empleoCargoComision' => $title->servidor_publico->cargo,
                            'contratadoPorHonorarios' => $honorariosDeclarante,
                            'nivelEmpleoCargoComision' => $title->servidor_publico->nivel_cargo,
                            'funcionPrincipal' => $title->datos_empleo_declarante->funcion_principal,
                            'fechaTomaPosesion' => $title->servidor_publico->fecha_inicio,
                            'telefonoOficina' => ([
                                'telefono' => $title->datos_empleo_declarante->telefono_oficina,
                                'extension' => $title->datos_empleo_declarante->extension,
                            ]),
                            'domicilioMexico' => ([
                                'calle' => $title->datos_empleo_declarante->calle,
                                'numeroExterior' => $title->datos_empleo_declarante->numero_exterior,
                                'numeroInterior' => $title->datos_empleo_declarante->numero_interior_piso,
                                'coloniaLocalidad' => $title->datos_empleo_declarante->colonia_localidad,
                                'municipioAlcaldia' => ([
                                    'clave' => $title->datos_empleo_declarante->municipios->clave,
                                    'valor' => $title->datos_empleo_declarante->municipios->municipio,
                                ]),
                                'entidadFederativa' => ([
                                    'clave' => $title->datos_empleo_declarante->entidades->clave,
                                    'valor' => $title->datos_empleo_declarante->entidades->entidad,
                                ]),
                                'codigoPostal' => $title->datos_empleo_declarante->codigo_postal,
                            ]),
                            'domicilioExtranjero' => ([
                                'calle' => '',
                                'numeroExterior' => null,
                                'numeroInterior' => null,
                                'ciudadLocalidad' => null,
                                'estadoProvincia' => null,
                                'pais' => null,
                                'codigoPostal' => null,
                            ]),
                            'aclaracionesObservaciones' => $title->datos_empleo_declarante->aclaraciones,
                        );
                    } else {
                        $ninguno_datos_empleo_declarante = true;
                        $datos_empleo_declarante = array(
                            'tipoOperacion' => null,
                            'nivelOrdenGobierno' => null,
                            'ambitoPublico' => null,
                            'nombreEntePublico' => null,
                            'areaAdscripcion' => null,
                            'empleoCargoComision' => null,
                            'contratadoPorHonorarios' => null,
                            'nivelEmpleoCargoComision' => null,
                            'funcionPrincipal' => null,
                            'fechaTomaPosesion' => null,
                            'telefonoOficina' => ([
                                'telefono' => null,
                                'extension' => null,
                            ]),
                            'domicilioMexico' => ([
                                'calle' => null,
                                'numeroExterior' => null,
                                'numeroInterior' => null,
                                'coloniaLocalidad' => null,
                                'municipioAlcaldia' => ([
                                    'clave' => null,
                                    'valor' => null,
                                ]),
                                'entidadFederativa' => ([
                                    'clave' => null,
                                    'valor' => null,
                                ]),
                                'codigoPostal' => null,
                            ]),
                            'domicilioExtranjero' => ([
                                'calle' => null,
                                'numeroExterior' => null,
                                'numeroInterior' => null,
                                'ciudadLocalidad' => null,
                                'estadoProvincia' => null,
                                'pais' => null,
                                'codigoPostal' => null,
                            ]),
                            'aclaracionesObservaciones' => null,
                        );
                    }

                    if ($title->ingresos == null) {
                        $ingresos = array(
                            'remuneracionMensualCargoPublico' => ([
                                'valor' => null,
                                'moneda' => null,
                            ]),
                            'otrosIngresosMensualesTotal' => ([
                                'valor' => null,
                                'moneda' => null,
                            ]),
                            'actividadIndustialComercialEmpresarial' => ([
                                'remuneracionTotal' => ([
                                    'valor' => null,
                                    'moneda' => null,
                                ]),
                                'actividades' => ([[
                                    'remuneracion' => ([
                                        'valor' => null,
                                        'moneda' => null,
                                    ]),
                                    'nombreRazonSocial' => null,
                                    'tipoNegocio' => null,
                                ]]),
                            ]),
                            'actividadFinanciera' => ([
                                'remuneracionTotal' => ([
                                    'valor' => null,
                                    'moneda' => null,
                                ]),
                                'actividades' => ([[
                                    'remuneracion' => ([
                                        'valor' => null,
                                        'moneda' => null,
                                    ]),
                                    'tipoInstrumento' => ([
                                        'clave' => null,
                                        'valor' => null,
                                    ]),
                                ]]),
                            ]),
                            'serviciosProfesionales' => ([
                                'remuneracionTotal' => ([
                                    'valor' => null,
                                    'moneda' => null,
                                ]),
                                'servicios' => ([[
                                    'remuneracion' => ([
                                        'valor' => null,
                                        'moneda' => null,
                                    ]),
                                    'tipoServicio' => null,
                                ]]),
                            ]),
                            'otrosIngresos' => ([
                                'remuneracionTotal' => ([
                                    'valor' => null,
                                    'moneda' => null,
                                ]),
                                'ingresos' => ([[
                                    'remuneracion' => ([
                                        'valor' => null,
                                        'moneda' => null,
                                    ]),
                                    'tipoIngreso' => null,
                                ]]),
                            ]),
                            'ingresoMensualNetoDeclarante' => ([
                                'valor' => null,
                                'moneda' => null,
                            ]),
                            'ingresoMensualNetoParejaDependiente' => ([
                                'valor' => null,
                                'moneda' => null,
                            ]),
                            'totalIngresosMensualesNetos' => ([
                                'valor' => null,
                                'moneda' => null,
                            ]),
                            'aclaracionesObservaciones' => null,
                        );
                    } else {

                        if ($title->ingresos->ingreso_mensual_publico == null) {
                            $moneda_remuneracionMensualCargoPublico = null;
                        } else {
                            $moneda_remuneracionMensualCargoPublico = 'MXN';
                        }
                        if ($title->ingresos->ingreso_mensual_suma == null) {
                            $moneda_otrosIngresosMensualesTotal = null;
                        } else {
                            $moneda_otrosIngresosMensualesTotal = 'MXN';
                        }
                        if ($title->ingresos->ingreso_por_actividad_ice == null) {
                            $moneda_ingreso_por_actividad_ice = null;
                        } else {
                            $moneda_ingreso_por_actividad_ice = 'MXN';
                        }
                        if ($title->ingresos->ingreso_por_actividad_financiera == null) {
                            $moneda_ingreso_por_actividad_financiera = null;
                        } else {
                            $moneda_ingreso_por_actividad_financiera = 'MXN';
                        }
                        if ($title->ingresos->ingreso_por_servicios_profesionales == null) {
                            $moneda_ingreso_por_servicios_profesionales = null;
                        } else {
                            $moneda_ingreso_por_servicios_profesionales = 'MXN';
                        }
                        if ($title->ingresos->ingreso_otros == null) {
                            $moneda_ingreso_otros = null;
                        } else {
                            $moneda_ingreso_otros = 'MXN';
                        }
                        if ($title->ingresos->ingreso_mensual_neto == null) {
                            $moneda_ingreso_mensual_neto = null;
                        } else {
                            $moneda_ingreso_mensual_neto = 'MXN';
                        }
                        if ($title->ingresos->ingreso_mensual_neto_pareja == null) {
                            $moneda_ingreso_mensual_neto_pareja = null;
                        } else {
                            $moneda_ingreso_mensual_neto_pareja = 'MXN';
                        }
                        if ($title->ingresos->total_ingresos_declarante_pareja == null) {
                            $moneda_total_ingresos_declarante_pareja = null;
                        } else {
                            $moneda_total_ingresos_declarante_pareja = 'MXN';
                        }

                        if($title->ingresos->tipo_de_instrumento == null){
                            $ingresosInstrumentoClave = null;
                            $ingresosInstrumentoValor = null;
                        }else{
                            $ingresosInstrumentoClave = $title->ingresos->tipoInstrumentos->clave;
                            $ingresosInstrumentoValor = $title->ingresos->tipoInstrumentos->valor;
                        }


                        $ingresos = array(
                            'remuneracionMensualCargoPublico' => ([
                                'valor' => $title->ingresos->ingreso_mensual_publico,
                                'moneda' => $moneda_remuneracionMensualCargoPublico,
                            ]),
                            'otrosIngresosMensualesTotal' => ([
                                'valor' => $title->ingresos->ingreso_mensual_suma,
                                'moneda' => $moneda_otrosIngresosMensualesTotal,
                            ]),
                            'actividadIndustialComercialEmpresarial' => ([
                                'remuneracionTotal' => ([
                                    'valor' => $title->ingresos->ingreso_por_actividad_ice,
                                    'moneda' => $moneda_ingreso_por_actividad_ice,
                                ]),
                                'actividades' => ([[
                                    'remuneracion' => ([
                                        'valor' => $title->ingresos->ingreso_por_actividad_ice,
                                        'moneda' => $moneda_ingreso_por_actividad_ice,
                                    ]),
                                    'nombreRazonSocial' => $title->ingresos->nombre_razon_social,
                                    'tipoNegocio' => $title->ingresos->tipo_de_negocio,
                                ]]),
                            ]),
                            'actividadFinanciera' => ([
                                'remuneracionTotal' => ([
                                    'valor' => $title->ingresos->ingreso_por_actividad_financiera,
                                    'moneda' => $moneda_ingreso_por_actividad_financiera,
                                ]),
                                'actividades' => ([[
                                    'remuneracion' => ([
                                        'valor' => $title->ingresos->ingreso_por_actividad_financiera,
                                        'moneda' => $moneda_ingreso_por_actividad_financiera,
                                    ]),
                                    'tipoInstrumento' => ([
                                           'clave' => $ingresosInstrumentoClave,
                                           'valor' => $ingresosInstrumentoValor,
                                    ]),
                                ]]),
                            ]),
                            'serviciosProfesionales' => ([
                                'remuneracionTotal' => ([
                                    'valor' => $title->ingresos->ingreso_por_servicios_profesionales,
                                    'moneda' => $moneda_ingreso_por_servicios_profesionales,
                                ]),
                                'servicios' => ([[
                                    'remuneracion' => ([
                                        'valor' => $title->ingresos->ingreso_por_servicios_profesionales,
                                        'moneda' => $moneda_ingreso_por_servicios_profesionales,
                                    ]),
                                    'tipoServicio' => $title->ingresos->tipo_de_servicio,
                                ]]),
                            ]),
                            'otrosIngresos' => ([
                                'remuneracionTotal' => ([
                                    'valor' => $title->ingresos->ingreso_otros,
                                    'moneda' => $moneda_ingreso_otros,
                                ]),
                                'ingresos' => ([[
                                    'remuneracion' => ([
                                        'valor' => $title->ingresos->ingreso_otros,
                                        'moneda' => $moneda_ingreso_otros,
                                    ]),
                                    'tipoIngreso' => $title->ingresos->tipo_de_ingreso,
                                ]]),
                            ]),
                            'ingresoMensualNetoDeclarante' => ([
                                'valor' => $title->ingresos->ingreso_mensual_neto,
                                'moneda' => $moneda_ingreso_mensual_neto,
                            ]),
                            'ingresoMensualNetoParejaDependiente' => ([
                                'valor' => $title->ingresos->ingreso_mensual_neto_pareja,
                                'moneda' => $moneda_ingreso_mensual_neto_pareja,
                            ]),
                            'totalIngresosMensualesNetos' => ([
                                'valor' => $title->ingresos->total_ingresos_declarante_pareja,
                                'moneda' => $moneda_total_ingresos_declarante_pareja,
                            ]),
                            'aclaracionesObservaciones' => $title->ingresos->aclaraciones_observaciones,
                        );
                    }

                    if ($title->situacion_personal == null) {
                        $situacionPersonalEstadoCivil = array(
                            'clave' => null,
                            'valor' => null,
                        );
                    } else {
                        $situacionPersonalEstadoCivil = array(
                            'clave' => $title->situacion_personal->clave,
                            'valor' => $title->situacion_personal->valor,
                        );
                    }

                    if ($title->regimenMatrimonial == null) {
                        $regimenMatrimonial = array(
                            'clave' => null,
                            'valor' => null,
                        );
                    } else {
                        $regimenMatrimonial = array(
                            'clave' => $title->situacion_personal->clave,
                            'valor' => $title->situacion_personal->valor,
                        );
                    }

                    if ($title->pais_id == null) {
                        $paisNacimiento = null;
                    } else {
                        $paisNacimiento = $title->pais->clave;
                    }

                    if ($title->nacionalidad_id == null) {
                        $nacionalidadNacimiento = null;
                    } else {
                        $nacionalidadNacimiento = $title->nacionalidades->clave;
                    }

                    if ($title->domicilio == null) {
                        $domicilio_declaranete = array(
                            'calle' => null,
                            'numeroExterior' => null,
                            'numeroInterior' => null,
                            'coloniaLocalidad' => null,
                            'municipioAlcaldia' => ([
                                'clave' => null,
                                'valor' => null,
                            ]),
                            'entidadFederativa' => ([
                                'clave' => null,
                                'valor' => null,
                            ]),
                            'codigoPostal' => null,
                        );
                        $aclaraciones_domicilio_declarante = null;
                    } else {
                        $domicilio_declaranete = array(
                            'calle' => $title->domicilio->calle,
                            'numeroExterior' => $title->domicilio->num_ext,
                            'numeroInterior' => $title->domicilio->num_int,
                            'coloniaLocalidad' => $title->domicilio->colonia,
                            'municipioAlcaldia' => ([
                                'clave' => $title->domicilio->municipio_domicilio->clave,
                                'valor' => $title->domicilio->municipio_domicilio->municipio,
                            ]),
                            'entidadFederativa' => ([
                                'clave' => $title->domicilio->entidad_domicilio->clave,
                                'valor' => $title->domicilio->entidad_domicilio->entidad,
                            ]),
                            'codigoPostal' => $title->domicilio->codigo_postal,
                        );
                        $aclaraciones_domicilio_declarante = $title->domicilio->observaciones;
                    }
                    if($title->tipo_movimiento_id == 1 || $title->tipo_movimiento_id == 2){
                        $tipoDeclaracion = "INICIAL";
                    }else if($title->tipo_movimiento_id == 3){
                        $tipoDeclaracion = "MODIFICACION";
                    }else{
                        $tipoDeclaracion = "TERMINACION";
                    }

                    $temparray [$key] = $resultados = [
                        'id' => '',
                        'metadata' => ([
                            'actualizacion' => '2020-09-14T10:29:35Z',
                            'institucion' => 'Poder Legislativo',
                            'contacto' => 'JuanJoseDominguezOrozco@hotmail.com',
                            'personaContacto' => 'Juan Jose Dominguez Orozco',
                            'tipo' => $tipoDeclaracion,
                        ]),
                        'declaracion' => ([
                            'situacionPatrimonial' => ([
                                'datosGenerales' => ([
                                    'nombre' => $title->servidor_publico->nombre,
                                    'primerApellido' => $title->servidor_publico->primer_apellido,
                                    'segundoApellido' => $title->servidor_publico->segundo_apellido,
                                    'curp' => $title->servidor_publico->curp,
                                    'rfc' => ([
                                        'rfc' => $title->servidor_publico->rfc,
                                        'homoClave' => $title->servidor_publico->homoclave,
                                    ]),
                                    'correoElectronico' => ([
                                        'institucional' => $title->correo_institucional,
                                        'personal' => $title->correo_personal,
                                    ]),
                                    'telefono' => ([
                                        'casa' => $title->telefono_casa,
                                        'celularPersonal' => $title->telefono_personal,
                                    ]),
                                    'situacionPersonalEstadoCivil' => $situacionPersonalEstadoCivil,
                                    'regimenMatrimonial' => $regimenMatrimonial,
                                    'paisNacimiento' => $paisNacimiento,
                                    'nacionalidad' => $nacionalidadNacimiento,
                                    'aclaracionesObservaciones' => $title->observaciones,
                                ]),
                                'domicilioDeclarante' => ([
                                    'domicilioMexico' => $domicilio_declaranete,
                                    'domicilioExtranjero' => ([
                                        'calle' => null,
                                        'numeroExterior' => null,
                                        'numeroInterior' => null,
                                        'ciudadLocalidad' => null,
                                        'estadoProvincia' => null,
                                        'pais' => null,
                                        'codigoPostal' => null,
                                    ]),
                                    'aclaracionesObservaciones' => $aclaraciones_domicilio_declarante,
                                ]),
                                'datosCurricularesDeclarante' => $datosCurricularesDeclarante,
                                'datosEmpleoCargoComision' => $datos_empleo_declarante,
                                'experienciaLaboral' => ([
                                    'ninguno' => $ninguno_experiencia,
                                    'experiencia' => $experiencia,
                                    'aclaracionesObservaciones' => $aclaraciones_experiencia,
                                ]),
                                'datosPareja' => $pareja,
                                'datosDependienteEconomico' => ([
                                    'ninguno' => $ninguno_dependientes,
                                    'dependienteEconomico' => $dependientesE,
                                    'aclaracionesObservaciones' => $aclaraciones_dependientes_economicos,
                                ]),
                                'ingresos' => $ingresos,
                                'actividadAnualAnterior' => $servidor_anio_anterior,
                                'bienesInmuebles' => ([
                                    'ninguno' => $ninguno_bienesInmuebles,
                                    'bienInmueble' => $bienesInmueblres,
                                    'aclaracionesObservaciones' => $aclaraciones_bienesImuebles,
                                ]),
                                'vehiculos' => ([
                                    'ninguno' => $ninguno,
                                    'vehiculo' => $vehiculos_d,
                                    'aclaracionesObservaciones' => $aclaraciones_vehiculos,
                                ]),
                                'bienesMuebles' => ([
                                    'ninguno' => $ninguno_muebles,
                                    'bienMueble' => $muebles,
                                    'aclaracionesObservaciones' => $aclaraciones_muebles,
                                ]),
                                'inversiones' => ([
                                    'ninguno' => $ninguno_inversiones,
                                    'inversion' => $inversiones,
                                    'aclaracionesObservaciones' => $aclaraciones_inversiones,
                                ]),
                                'adeudos' => ([
                                    'ninguno' => $ninguno_adeudos,
                                    'adeudo' => $adeudos,
                                    'aclaracionesObservaciones' => $aclaraciones_adeudos,
                                ]),
                                'prestamoOComodato' => ([
                                    'ninguno' => $ninguno_prestamo,
                                    'prestamo' => ([[
                                        "tipoOperacion" => $tipoOperacionPrestamo,
                                        'tipoBien' => ([
                                            "inmueble" => $prestamoComoDato_inmueble,
                                            "vehiculo" => $prestamoComoDato_vehiculo,
                                        ]),
                                        'duenoTitular' => ([
                                            'tipoDuenoTitular' => '',
                                            'nombreTitular' => '',
                                            'rfc' => '',
                                            'relacionConTitular' => '',
                                        ]),
                                    ]]),
                                    'aclaracionesObservaciones' => $aclaraciones_prestamos,
                                ]),
                            ]),
                            'interes' => ([
                                'participacion' => ([
                                    'ninguno' => $ninguno_participacion_empresas,
                                    'participacion' => $participacion_empresas,
                                    'aclaracionesObservaciones' => $aclaraciones_participacion_empresas,
                                ]),
                                'participacionTomaDecisiones' => ([
                                    'ninguno' => $ninguno_TomaDecisiones,
                                    'participacion' => $TomaDecisiones,
                                    'aclaracionesObservaciones' => $aclaraciones_tomaDecisiones,
                                ]),
                                'apoyos' => ([
                                    'ninguno' => $ninguno_apoyo,
                                    'apoyo' => $apoyos,
                                    'aclaracionesObservaciones' => $aclaraciones_apoyo,
                                ]),
                                'representacion' => ([
                                    'ninguno' => $ninguno_representacion,
                                    'representacion' => $representacion,
                                    'aclaracionesObservaciones' => $aclaraciones_presentacion,
                                ]),
                                'clientesPrincipales' => ([
                                    'ninguno' => $ninguno_clientesPrincipales,
                                    'cliente' => $clientesPrincipales,
                                    'aclaracionesObservaciones' => $aclaraciones_clientes,
                                ]),
                                'beneficiosPrivados' => ([
                                    'ninguno' => $ninguno_beneficiosPrivados,
                                    'beneficio' => $beneficiosPrivados,
                                    'aclaracionesObservaciones' => $aclaraciones_beneficios,
                                ]),
                                'fideicomisos' => ([
                                    'ninguno' => $ninguno_fideicomisos,
                                    'fideicomiso' => $fideicomisos,
                                    'aclaracionesObservaciones' => $aclaraciones_fideicomisos,
                                ]),
                            ]),
                        ]),
                    ];
                }
            }

            return $temparrayp = [
                'pagination' => ([
                    'pageSize' => $limitereg,
                    'page' => intval($page),
                    'totalRows' => $titles->count(),
                    'hasNextPage' => $nextPage,
                ]),
                'results' => $temparray,
            ];
        }
    //
        }


    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
