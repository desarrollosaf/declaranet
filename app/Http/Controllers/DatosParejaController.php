<?php

namespace App\Http\Controllers;

use App\ambitoSector;
use App\DatosPareja;
use App\Declaracion;
use App\Entidad;
use App\ExperienciaLaboral;
use App\extranjero;
use App\lugarDondeReside;
use App\LugarUbicacion;
use App\Municipio;
use App\Pais;
use App\regimenFiscal;
use App\relacionConDeclarante;
use App\Respuesta;
use App\sector;
use Carbon\Carbon;
use http\Env\Response;
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
        $this->middleware("CheckEstadoCivil");
        $this->request = $request;
    }

    public function index()
    {
        $declarante = Declaracion::find($this->request->session()->get("declaracion_id"));
        if ($declarante->pareja) {
            return redirect()->route("datos_pareja_declarante.edit", $declarante->pareja->id);
        } else {
            $declarante->pareja()->create();
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
        $declarante = Declaracion::find($this->request->session()->get("declaracion_id"));
        if ($declarante->pareja) {
            return redirect()->route("datos_pareja_declarante.edit", $declarante->pareja->id);
        }
        $relacionDeclarante = relacionConDeclarante::all();
        $selectRelacioDeclarante = [];
        foreach ($relacionDeclarante as $item) {
            $selectRelacioDeclarante[$item->id] = $item->valor;
        }
        $ciudadanoExtranjero = extranjero::all();
        foreach ($ciudadanoExtranjero as $item) {
            $selectCiudadano[$item->id] = $item->valor;
        }
        $ambitos_sectores = Arr::pluck(\App\ambitoSector::all(), 'valor', 'id');
        $nivelOrdenGobierno = Arr::pluck(\App\Nivelordengobierno::all(), 'valor', 'id');
        $ambito = Arr::pluck(\App\ambitoPublico::all(), "valor", "id");
        $sectores = Arr::pluck(ambitoSector::all(), "valor", "id");
        $sector = Arr::pluck(sector::all(), "valor", "id");
        $ubicacion = Arr::pluck(LugarUbicacion::all(), "valor", "id");
        $selectLugarReside = Arr::pluck(lugarDondeReside::all(), "valor", "id");
        $selectRespuesta = Arr::pluck(Respuesta::all(), "respuesta", "id");
        $selectEntidad = Arr::pluck(Entidad::all(), "entidad", "id");
        $selectPais = Arr::pluck(Pais::where("id", '=', 152)->get(), "valor", "id");
        $respuesta = Arr::pluck(Respuesta::all(), "respuesta", "id");
        $regimenFiscal = Arr::pluck(regimenFiscal::all(), "valor", "id");
        return view('datosParejaDeclarante.create', compact('selectRelacioDeclarante', 'selectCiudadano', 'nivelOrdenGobierno', 'ambito', 'sectores', 'ubicacion', 'ambitos_sectores', 'selectEntidad', 'selectLugarReside', 'selectRespuesta', 'selectEntidad', 'selectPais', 'respuesta', 'sector', 'regimenFiscal'));
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
        $domicilioExt = $request->input("domicilioExt");
//        $actividadLaboral = $request->input("actividadLaboral");
        if (isset($datosPareja["lugar_reside_id"]) && $datosPareja["lugar_reside_id"] == 2) {
            $domicilio['calle'] = $domicilioExt['calleExt'];
            $domicilio['num_ext'] = $domicilioExt['numextExt'];
            $domicilio['num_int'] = $domicilioExt['numintExt'];
            $domicilio['colonia'] = $domicilioExt['coloniaExt'];
            $domicilio['pais'] = $domicilioExt['pais'];
            $domicilio['entidad'] = $domicilioExt['estadoprovincia'];
            $domicilio['codigo_postal'] = $domicilioExt['codigopostalExt'];
        }

        if (!isset($datosPareja['lugar_reside_id'])) {
            $datosPareja['lugar_reside_id'] = null;
        }
        $datosPareja['declaracion_id'] = $this->request->session()->get("declaracion_id");
        $pareja = DatosPareja::create($datosPareja);
        if ($datosPareja['respuesta_domicilio_id'] == 2) {
            $pareja->domicilio()->create($domicilio);
        }
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
        $ambitos_sectores = Arr::pluck(\App\ambitoSector::all(), 'valor', 'id');
        $nivelOrdenGobierno = Arr::pluck(\App\Nivelordengobierno::all(), 'valor', 'id');
        $ambito = Arr::pluck(\App\ambitoPublico::all(), "valor", "id");
        $sectores = Arr::pluck(ambitoSector::where('id', '!=', 4)->get(), "valor", "id");
        $sector = Arr::pluck(sector::all(), "valor", "id");
        $ubicacion = Arr::pluck(LugarUbicacion::all(), "valor", "id");
        $selectLugarReside = Arr::pluck(lugarDondeReside::all(), "valor", "id");
        $selectRespuesta = Arr::pluck(Respuesta::all(), "respuesta", "id");
        $selectEntidad = Arr::pluck(Entidad::all(), "entidad", "id");
        $selectPais = Arr::pluck(Pais::where("id", '!=', 152)->get(), "valor", "id");
        $respuesta = Arr::pluck(Respuesta::all(), "respuesta", "id");
        $regimenFiscal = Arr::pluck(regimenFiscal::all(), "valor", "id");
        $pareja = DatosPareja::find($id);
        $domicilio = $pareja->domicilio;
        if ($domicilio != null) {
            $selectMunicipio = Arr::pluck(Municipio::where("entidad_id", "=", $domicilio->entidad_id)->get(), "municipio", "id");
        } else {
            $selectMunicipio = [];
        }


        $experiencias = $pareja->experienciaLaboral;


        return view('datosParejaDeclarante.edit', compact('selectRelacioDeclarante', 'selectCiudadano', 'nivelOrdenGobierno', 'ambito', 'sectores', 'ubicacion', 'ambitos_sectores', 'selectEntidad', 'selectLugarReside', 'selectRespuesta', 'selectEntidad', 'selectPais', 'respuesta', 'sector', 'pareja', 'domicilio', 'experiencias', 'selectMunicipio', 'regimenFiscal'));
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

        if ($datosPareja["lugar_reside_id"] != 1) {
            $domicilio['calle'] = $domicilioExt['calleExt'];
            $domicilio['num_ext'] = $domicilioExt['numextExt'];
            $domicilio['num_int'] = $domicilioExt['numintExt'];
            $domicilio['colonia'] = $domicilioExt['coloniaExt'];
            $domicilio['entidad'] = $domicilioExt['estadoprovincia'];
            $domicilio['codigo_postal'] = $domicilioExt['codigopostalExt'];
        }

        if (!isset($datosPareja['lugar_reside_id'])) {
            $datosPareja['lugar_reside_id'] = null;
        }

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
                $pareja->domicilio->delete();
            }
        }
        return redirect()->route("datos_dependiente_declarante.index");
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

    public function storeEmpleo(Request $request)
    {
        try {
            $pareja = DatosPareja::find($request->session()->get("declaracion_id"));
            $actividadLaboral = $request->actividadLaboral;
            unset($actividadLaboral["cve"]);
            if ($actividadLaboral['ambito_sector_id'] == 1) {
                $actividadLaboral['salario_mensual_neto'] = $actividadLaboral['salario_mensual_neto_publico'];
                $actividadLaboral['fecha_ingreso'] = $actividadLaboral['fecha_ingreso_publico'];
            }
            if ($actividadLaboral['respuesta_proveedor_id'] == 0) {
                $actividadLaboral['respuesta_proveedor_id'] = null;
            }
            $fecha_ingreso = new Carbon($actividadLaboral["fecha_ingreso"]);
            $actividadLaboral["fecha_ingreso"] = $fecha_ingreso->format("Y-m-d");
            if ($actividadLaboral["ambito_sector_id"] != 4) {
                return json_encode(DatosPareja::find($request->session()->get("declaracion_id")));
                $pareja->experienciaLaboral()->create($request->session()->get("declaracion_id"));
            }
            $data = $this->getEmpleo($request->session()->get("declaracion_id"));
            return $data;
        } catch (\Exception $e) {
            return $e->getMessage();
        }
    }

    public function destroyEmpleo($id)
    {
        ExperienciaLaboral::find($id)->delete();
        $data = $this->getEmpleo($this->request->session()->get("declaracion_id"));
        return $data;
    }

    public function getEmpleo($id)
    {
        $data = [];
        $pareja = DatosPareja::find($id);
        foreach ($pareja->experienciaLaboral as $item) {
            $item->ambito = $item->ambito_sectores->valor;
            array_push($data, $item);
        }
        return $data;
    }

    public function editEmpleo($id)
    {
        $data = ExperienciaLaboral::find($id);
        return $data;
    }

    public function updateEmpleo(Request $request, $id)
    {
        $data = ExperienciaLaboral::find($id);
        $actividadLaboral = $request->actividadLaboral;
        if ($actividadLaboral['ambito_sector_id'] == 1) {
            $actividadLaboral['salario_mensual_neto'] = $actividadLaboral['salario_mensual_neto_publico'];
            $actividadLaboral['fecha_ingreso'] = $actividadLaboral['fecha_ingreso_publico'];
        }
        if ($actividadLaboral['respuesta_proveedor_id'] == 0) {
            $actividadLaboral['respuesta_proveedor_id'] = null;
        }
        $fecha_ingreso = new Carbon($actividadLaboral["fecha_ingreso"]);
        $actividadLaboral["fecha_ingreso"] = $fecha_ingreso->format("Y-m-d");
        if ($actividadLaboral["ambito_sector_id"] != 4) {
            $data->update($actividadLaboral);
        }
        $data = $this->getEmpleo($request->session()->get("declaracion_id"));
        return $data;
    }
}
