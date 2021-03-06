<?php

namespace App\Http\Controllers;

use App\regimenFiscal;
use Illuminate\Http\Request;
use App\Nivelordengobierno;
use App\ambitoPublico;
use App\sector;
use App\LugarUbicacion;
use App\ExperienciaLaboral;
use App\Declaracion;
use Illuminate\Support\Arr;
use Carbon\Carbon;
use App\ambitoSector;
use App\motivoBaja;

class ExperienciaLaboralController extends Controller
{
    private $request;
    public function __construct(Request $request) {
        $this->middleware("auth");
        $this->request=$request;
        $this->middleware('CheckDeclaracion');
    }
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $declaracion=Declaracion::find($this->request->session()->get('declaracion_id'));
        $experiencias = $declaracion->experiencias_laborales;
        $motivos = Arr::pluck(motivoBaja::all(), "valor","id");
        return view("experienciaLaboral.index", compact('experiencias', 'motivos'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {

        $ambitoSector = ambitoSector::all();
        $ambitos_sectores= [];
        //$ambitos_sectores[""] = "SELECCIONA UNA OPCIÓN";
        foreach ($ambitoSector as $item){
            $ambitos_sectores[$item->id] = $item->valor;
        }

        $nivelOrdenGobierno = Arr::pluck(Nivelordengobierno::all(),'valor','id');
        $ambito = Arr::pluck(AmbitoPublico::all(), "valor","id");
        $sectores = Arr::pluck(sector::all(), "valor","id");
        $ubicacion = Arr::pluck(LugarUbicacion::all(), "valor","id");
        $regimenFiscal = Arr::pluck(regimenFiscal::all(), "valor","id");
        $tipoOperacion = "AGREGAR";
        return view("experienciaLaboral.create", compact('nivelOrdenGobierno','ambito','sectores','ubicacion','ambitos_sectores','tipoOperacion','regimenFiscal'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $experiencia = $request->input("experiencia");
        $fecha_ingreso = new Carbon($experiencia["fecha_ingreso"]);
        $experiencia["fecha_ingreso"] = $fecha_ingreso->format("Y-m-d");
        $fecha_egreso = new Carbon($experiencia["fecha_egreso"]);
        $experiencia["fecha_egreso"] = $fecha_egreso->format("Y-m-d");
        $declaracion=Declaracion::find($this->request->session()->get('declaracion_id'));
        $experiencia["tipo_operacion_id"] = 1;
        $declaracion->experiencias_laborales()->create($experiencia);
        return redirect()->route("experiencia_laboral.index");
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
        $experiencia = ExperienciaLaboral::find($id);
        $ambitos_sectores = Arr::pluck(\App\ambitoSector::all(), 'valor','id');
        $nivelOrdenGobierno = Arr::pluck(Nivelordengobierno::all(),'valor','id');
        $ambito = Arr::pluck(AmbitoPublico::all(), "valor","id");
        $sectores = Arr::pluck(sector::all(), "valor","id");
        $ubicacion = Arr::pluck(LugarUbicacion::all(), "valor","id");
        $regimenFiscal = Arr::pluck(regimenFiscal::all(), "valor","id");
        $tipoOperacion = "AGREGAR";
        return view("experienciaLaboral.edit", compact('nivelOrdenGobierno','ambito','sectores','ubicacion','experiencia','ambitos_sectores','tipoOperacion','regimenFiscal'));
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
        $experienciaData = $request->input("experiencia");
        $fecha_ingreso = new Carbon($experienciaData["fecha_ingreso"]);
        $experienciaData["fecha_ingreso"] = $fecha_ingreso->format("Y-m-d");
        $fecha_egreso = new Carbon($experienciaData["fecha_egreso"]);
        $experienciaData["fecha_egreso"] = $fecha_egreso->format("Y-m-d");
        $experiencia= ExperienciaLaboral::find($id);
        if($experiencia->enviado){
            $experienciaData["tipo_operacion_id"] = 2;
        }
        $experiencia->update($experienciaData);
        return redirect()->route("experiencia_laboral.index");
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $experiencia = ExperienciaLaboral::find($id);
         if(!$experiencia->enviado){
            $experiencia->delete();
        }else{
            $experiencia->update(["tipo_operacion_id" => 4,"motivo_baja_id" => $this->request->motivo_baja_id]);
        }
        return redirect()->route("experiencia_laboral.index");
    }
}
