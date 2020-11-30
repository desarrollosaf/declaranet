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
    public function __construct(Request $request) {
        $this->middleware("auth");
        $this->request = $request;
    }
    public function index()
    {
        $declarante = Declaracion::find($this->request->session()->get("declaracion_id"));
        dd($declarante->pareja);
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
        $selectRelacioDeclarante[""] = "SELECCIONA UNA OPCIÓN";
        foreach ($relacionDeclarante as $item){
            $selectRelacioDeclarante[$item->id] = $item->valor;
        }
        $ciudadanoExtranjero = extranjero::all();
        $selectCiudadano = [];
        $selectCiudadano[""] = "SELECCIONA UNA OPCIÓN";
        foreach ($ciudadanoExtranjero as $item){
            $selectCiudadano[$item->id] = $item->valor;
        }
        $ambitos_sectores = Arr::pluck(\App\AmbitoSector::all(), 'valor','id');
        $nivelOrdenGobierno = Arr::pluck(NivelOrdenGobierno::all(),'valor','id');
        $ambito = Arr::pluck(AmbitoPublico::all(), "valor","id");
        $sectores = Arr::pluck(ambitoSector::all(), "valor","id");
        $sector = Arr::pluck(sector::all(), "valor","id");
        $ubicacion = Arr::pluck(LugarUbicacion::all(), "valor","id");
        $selectLugarReside = Arr::pluck(lugarDondeReside::all(), "valor","id");
        $selectRespuesta = Arr::pluck(Respuesta::all(), "respuesta","id");
        $selectEntidad = Arr::pluck(Entidad::all(), "entidad","id");
        $selectPais = Arr::pluck(Pais::all(), "valor","id");
        $respuesta = Arr::pluck(Respuesta::all(), "respuesta","id");
        array_unshift($ambitos_sectores,"Selecciona una opción");
        array_unshift($nivelOrdenGobierno,"Selecciona una opción");
        array_unshift($ambito,"Selecciona una opción");
        array_unshift($sectores,"Selecciona una opción");
        array_unshift($ubicacion,"Selecciona una opción");
        array_unshift($selectLugarReside,"Selecciona una opción");
        array_unshift($selectRespuesta,"Selecciona una opción");
        array_unshift($selectEntidad,"Selecciona una opción");
        array_unshift($selectPais,"Selecciona una opción");
        array_unshift($respuesta,"Selecciona una opción");
        return view('datosParejaDeclarante.create', compact('selectRelacioDeclarante','selectCiudadano','nivelOrdenGobierno','ambito','sectores','ubicacion','ambitos_sectores','selectEntidad', 'selectLugarReside','selectRespuesta','selectEntidad', 'selectPais', 'respuesta', 'sector'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $datosPareja = $this->request->input("datosPareja");
        $domicilio = $request->input("domicilio");
        $actividadLaboral = $request->input("actividadLaboral");
        if(isset($datosPareja["lugar_reside_id"]) && $datosPareja["lugar_reside_id"] == 2){
            $domicilio['calle'] = $domicilio['calleExt'];
            $domicilio['num_ext'] = $domicilio['numextExt'];
            $domicilio['num_int'] = $domicilio['numintExt'];
            $domicilio['colonia'] = $domicilio['coloniaExt'];
            $domicilio['entidad'] = $domicilio['estadoprovincia'];
            $domicilio['codigo_postal'] = $domicilio['codigopostalExt'];
        }
        if($actividadLaboral['sector_id'] == 1){
            $actividadLaboral['salario_mensual_neto'] = $actividadLaboral['salario_mensual_neto_publico'];
            $actividadLaboral['fecha_ingreso'] = $actividadLaboral['fecha_ingreso_publico'];
        }
        $fecha_ingreso = new Carbon($actividadLaboral["fecha_ingreso"]);
        $actividadLaboral["fecha_ingreso"] = $fecha_ingreso->format("Y-m-d");
        $datosPareja['declaracion_id'] = $request->session()->get("declaracion_id");
        $declarante = Declaracion::find($request->session()->get("declaracion_id"));
        dd($actividadLaboral);
        $pareja = $declarante->pareja()->create($datosPareja);
        $pareja->domicilio()->create($domicilio);
        $pareja->experienciaLaboral()->create($actividadLaboral);
        return redirect()->route("datos_dependiente_declarante.index");
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
