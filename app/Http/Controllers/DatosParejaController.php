<?php

namespace App\Http\Controllers;

use App\ambitoPublico;
use App\ambitoSector;
use App\DatosPareja;
use App\Declaracion;
use App\Entidad;
use App\extranjero;
use App\lugarDondeReside;
use App\LugarUbicacion;
use App\Municipio;
use App\Nivelordengobierno;
use App\Pais;
use App\relacionConDeclarante;
use App\Respuesta;
use App\sector;
use Carbon\Carbon;
use Illuminate\Http\Request;
use Illuminate\Support\Arr;

class DatosParejaController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    private $request;

    public function __construct(Request $request)
    {
        $this->middleware("auth");
        $this->request = $request;
    }

    public function index()
    {
        $declarante = Declaracion::find($this->request->session()->get("declaracion_id"));
        if ($declarante->pareja) {
            return redirect()->route("datos_pareja_declarante.edit", $declarante->pareja->id);
        } else {
            return redirect()->route("datos_pareja_declarante.create");
        }
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $relacionDeclarante = relacionConDeclarante::all();
        $selectRelacioDeclarante = [];
        foreach ($relacionDeclarante as $item) {
            $selectRelacioDeclarante[$item->id] = $item->valor;
        }
        $ciudadanoExtranjero = extranjero::all();
        foreach ($ciudadanoExtranjero as $item) {
            $selectCiudadano[$item->id] = $item->valor;
        }
        $ambitos_sectores = Arr::pluck(\App\AmbitoSector::all(), 'valor', 'id');
        $nivelOrdenGobierno = Arr::pluck(NivelOrdenGobierno::all(), 'valor', 'id');
        $ambito = Arr::pluck(AmbitoPublico::all(), "valor", "id");
        $sectores = Arr::pluck(ambitoSector::all(), "valor", "id");
        $sector = Arr::pluck(sector::all(), "valor", "id");
        $ubicacion = Arr::pluck(LugarUbicacion::all(), "valor", "id");
        $selectLugarReside = Arr::pluck(lugarDondeReside::all(), "valor", "id");
        $selectRespuesta = Arr::pluck(Respuesta::all(), "respuesta", "id");
        $selectEntidad = Arr::pluck(Entidad::all(), "entidad", "id");
        $selectPais = Arr::pluck(Pais::all(), "valor", "id");
        $respuesta = Arr::pluck(Respuesta::all(), "respuesta", "id");
        return view('datosParejaDeclarante.create', compact('selectRelacioDeclarante', 'selectCiudadano', 'nivelOrdenGobierno', 'ambito', 'sectores', 'ubicacion', 'ambitos_sectores', 'selectEntidad', 'selectLugarReside', 'selectRespuesta', 'selectEntidad', 'selectPais', 'respuesta', 'sector'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param \Illuminate\Http\Request $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $datosPareja = $this->request->input("datosPareja");
        $domicilio = $request->input("domicilio");
        $actividadLaboral = $request->input("actividadLaboral");
        if (isset($datosPareja["lugar_reside_id"]) && $datosPareja["lugar_reside_id"] == 2) {
            $domicilio['calle'] = $domicilio['calleExt'];
            $domicilio['num_ext'] = $domicilio['numextExt'];
            $domicilio['num_int'] = $domicilio['numintExt'];
            $domicilio['colonia'] = $domicilio['coloniaExt'];
            $domicilio['entidad'] = $domicilio['estadoprovincia'];
            $domicilio['codigo_postal'] = $domicilio['codigopostalExt'];
        }
        if ($actividadLaboral['ambito_sector_id'] == 1) {
            $actividadLaboral['salario_mensual_neto'] = $actividadLaboral['salario_mensual_neto_publico'];
            $actividadLaboral['fecha_ingreso'] = $actividadLaboral['fecha_ingreso_publico'];
        }
        if ($actividadLaboral['respuesta_proveedor_id'] == 0) {
            $actividadLaboral['respuesta_proveedor_id'] = null;
        }
        if (!isset($datosPareja['lugar_reside_id'])) {
            $datosPareja['lugar_reside_id'] = null;
        }
        $fecha_ingreso = new Carbon($actividadLaboral["fecha_ingreso"]);
        $actividadLaboral["fecha_ingreso"] = $fecha_ingreso->format("Y-m-d");
        $datosPareja['declaracion_id'] = $this->request->session()->get("declaracion_id");
        $pareja = DatosPareja::create($datosPareja);
        if ($datosPareja['respuesta_domicilio_id'] == 2) {
            $pareja->domicilio()->create($domicilio);
        }
        $pareja->experienciaLaboral()->create($actividadLaboral);
        return redirect()->route("datos_dependiente_declarante.index");
    }

    /**
     * Display the specified resource.
     *
     * @param int $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param int $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $selectRelacioDeclarante = Arr::pluck(relacionConDeclarante::all(), 'valor', 'id');
        $selectCiudadano = Arr::pluck(extranjero::all(), 'valor', 'id');
        $ambitos_sectores = Arr::pluck(\App\AmbitoSector::all(), 'valor', 'id');
        $nivelOrdenGobierno = Arr::pluck(NivelOrdenGobierno::all(), 'valor', 'id');
        $ambito = Arr::pluck(AmbitoPublico::all(), "valor", "id");
        $sectores = Arr::pluck(ambitoSector::all(), "valor", "id");
        $sector = Arr::pluck(sector::all(), "valor", "id");
        $ubicacion = Arr::pluck(LugarUbicacion::all(), "valor", "id");
        $selectLugarReside = Arr::pluck(lugarDondeReside::all(), "valor", "id");
        $selectRespuesta = Arr::pluck(Respuesta::all(), "respuesta", "id");
        $selectEntidad = Arr::pluck(Entidad::all(), "entidad", "id");
        $selectPais = Arr::pluck(Pais::all(), "valor", "id");
        $respuesta = Arr::pluck(Respuesta::all(), "respuesta", "id");
        $pareja = DatosPareja::find($id);
        $domicilio = $pareja->domicilio;
        if ($domicilio != null) {
            $selectMunicipio = Arr::pluck(Municipio::where("entidad_id", "=", $domicilio->entidad_id)->get(), "municipio", "id");
        } else {
            $selectMunicipio = [];
        }
        $experienciaLaboral = $pareja->experienciaLaboral;
        return view('datosParejaDeclarante.edit', compact('selectRelacioDeclarante', 'selectCiudadano', 'nivelOrdenGobierno', 'ambito', 'sectores', 'ubicacion', 'ambitos_sectores', 'selectEntidad', 'selectLugarReside', 'selectRespuesta', 'selectEntidad', 'selectPais', 'respuesta', 'sector', 'pareja', 'domicilio', 'experienciaLaboral', 'selectMunicipio'));

    }

    /**
     * Update the specified resource in storage.
     *
     * @param \Illuminate\Http\Request $request
     * @param int $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $datosPareja = $request->input("datosPareja");
        $domicilio = $request->input("domicilio");
        $domicilioExt = $request->input("domicilioExt");
        $actividadLaboral = $request->input("actividadLaboral");
        if ($datosPareja["lugar_reside_id"] != 1) {
            $domicilio['calle'] = $domicilioExt['calleExt'];
            $domicilio['num_ext'] = $domicilioExt['numextExt'];
            $domicilio['num_int'] = $domicilioExt['numintExt'];
            $domicilio['colonia'] = $domicilioExt['coloniaExt'];
            $domicilio['entidad'] = $domicilioExt['estadoprovincia'];
            $domicilio['codigo_postal'] = $domicilioExt['codigopostalExt'];
        }
        if ($actividadLaboral['ambito_sector_id'] == 1) {
            $actividadLaboral['salario_mensual_neto'] = $actividadLaboral['salario_mensual_neto_publico'];
            $actividadLaboral['fecha_ingreso'] = $actividadLaboral['fecha_ingreso_publico'];
        }
        if ($actividadLaboral['respuesta_proveedor_id'] == 0) {
            $actividadLaboral['respuesta_proveedor_id'] = null;
        }
        if (!isset($datosPareja['lugar_reside_id'])) {
            $datosPareja['lugar_reside_id'] = null;
        }

        $fecha_ingreso = new Carbon($actividadLaboral["fecha_ingreso"]);
        $actividadLaboral["fecha_ingreso"] = $fecha_ingreso->format("Y-m-d");

        $pareja = DatosPareja::find($id);
        $pareja->update($datosPareja);
        if ($datosPareja["respuesta_domicilio_id"] == 2) {
            if ($pareja->domicilio != null) {
                $pareja->domicilio()->update($domicilio);
            } else {
                $pareja->domicilio()->create($domicilio);
            }
        } else {
            if ($pareja->domicilio != null) {
                $pareja->domicilio()->destroy();
            }
        }
        $pareja->experienciaLaboral->update($actividadLaboral);
        return redirect()->route("datos_dependiente_declarante.create");
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param int $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
