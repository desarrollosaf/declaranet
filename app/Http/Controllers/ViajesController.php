<?php

namespace App\Http\Controllers;

use App\Viajes;
use App\nombrePariente;
use App\primerApellido;
use App\segundoApellido;
use App\cumpleañosPariente;
use App\rfcPariente;
use App\parentescoRelacion;
use App\tipoResponsable;
use App\nombreTercero;
use App\tipoTercero;
use App\RegimenFiscal;
use App\rfcTercero;
use App\ambitoTercero;
use App\lugarViaje;
use App\extranjero;
use App\motivoViaje;
use App\MotivoViajes;
use App\otroEspecifique;
use App\montoViaje;
use App\razonSocialTercero;
use App\nivelGobierno;
use App\tipoMoneda;
use App\nombreEntePublico;
use App\nombreAdscripcion;
use App\empleoCargo;
use App\especifiqueAmbito;
use App\sectorProductivo;
use App\especifiquesector;
use Illuminate\Http\Request;
use Illuminate\Support\Arr;
use App\motivoBaja;

class ViajesController extends Controller
{
    protected $request;
    public function __construct(Request $request){
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
       $viajes = \App\Declaracion::find($this->request->session()->get("declaracion_id"))->viajes;
       $motivos = Arr::pluck(motivoBaja::all(), "valor", "id");
       return view("viajes.index", compact("viajes", "motivos"));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $nombrePariente = Arr::pluck(ParentescoRelacion::all(), "valor", "id");
        $primerApellido = Arr::pluck(ParentescoRelacion::all(), "valor", "id");
        $segundoApellido = Arr::pluck(ParentescoRelacion::all(), "valor", "id");
        $tipoResponsable = Arr::pluck(parentescoRelacion::all(), "valor", "id");
        $cumpleañosPariente = Arr::pluck(parentescoRelacion::all(), "valor", "id");
        $rfcPariente = Arr::pluck(parentescoRelacion::all(), "valor", "id");
        $nombreTercero = Arr::pluck(RegimenFiscal::all(), "valor", "id");
        $tipoTercero = Arr::pluck(RegimenFiscal::all(), "valor", "id");
        $rfcTercero = Arr::pluck(RegimenFiscal::all(), "valor", "id");
        $ambitoTercero = Arr::pluck(\App\ambitoSector::where("id","!=",4)->get(), "valor", "id");
        $lugarViaje = Arr::pluck(extranjero::all(), "valor", "id");
        $motivoViaje = Arr::pluck(MotivoViajes::all(), "valor", "id");
        $otroEspecifique = Arr::pluck(MotivoViajes::all(), "valor", "id");
        $montoViaje = Arr::pluck(MotivoViajes::all(), "valor", "id");
        $tipoMoneda = Arr::pluck(tipoMoneda::all(), "valor", "id");
        $razonSocialTercero = Arr::pluck(tipoMoneda::all(), "valor", "id");
        $nivelGobierno = Arr::pluck(\App\Nivelordengobierno::all(), "valor", "id");
        $nombreEntePublico = Arr::pluck(\App\EntePublico::all(), "valor", "id");
        $nombreAdscripcion = Arr::pluck(MotivoViajes::all(), "valor", "id");
        $empleoCargo = Arr::pluck(MotivoViajes::all(), "valor", "id");
        $especifiqueAmbito = Arr::pluck(MotivoViajes::all(), "valor", "id");
        $sectorProductivo = Arr::pluck(\App\sector::all(), "valor", "id");
        return view("viajes.create", compact("tipoResponsable", "nombreTercero", "tipoTercero", "rfcTercero", "montoViaje", "lugarViaje", "motivoViaje", "otroEspecifique", "tipoMoneda", "nombrePariente", "primerApellido", "segundoApellido", "cumpleañosPariente", "rfcPariente", "ambitoTercero", "razonSocialTercero", "nivelGobierno", "nombreEntePublico", "nombreAdscripcion", "empleoCargo", "especifiqueAmbito", "sectorProductivo"));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $viaje = $request->input("viajes");
        $declaracion = \App\Declaracion::find($request->session()->get("declaracion_id"));
       
        $declaracion->viajes()->create($viaje);
        return redirect()->route("viajes.index");
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $nombrePariente = Arr::pluck(ParentescoRelacion::all(), "valor", "id");
        $primerApellido = Arr::pluck(ParentescoRelacion::all(), "valor", "id");
        $segundoApellido = Arr::pluck(ParentescoRelacion::all(), "valor", "id");
        $tipoResponsable = Arr::pluck(parentescoRelacion::all(), "valor", "id");
        $cumpleañosPariente = Arr::pluck(parentescoRelacion::all(), "valor", "id");
        $rfcPariente = Arr::pluck(parentescoRelacion::all(), "valor", "id");
        $nombreTercero = Arr::pluck(RegimenFiscal::all(), "valor", "id");
        $tipoTercero = Arr::pluck(RegimenFiscal::all(), "valor", "id");
        $rfcTercero = Arr::pluck(RegimenFiscal::all(), "valor", "id");
        $ambitoTercero = Arr::pluck(\App\ambitoSector::where("id","!=",4)->get(), "valor", "id");
        $lugarViaje = Arr::pluck(extranjero::all(), "valor", "id");
        $motivoViaje = Arr::pluck(MotivoViajes::all(), "valor", "id");
        $otroEspecifique = Arr::pluck(MotivoViajes::all(), "valor", "id");
        $montoViaje = Arr::pluck(MotivoViajes::all(), "valor", "id");
        $tipoMoneda = Arr::pluck(tipoMoneda::all(), "valor", "id");
        $razonSocialTercero = Arr::pluck(tipoMoneda::all(), "valor", "id");
        $nivelGobierno = Arr::pluck(\App\Nivelordengobierno::all(), "valor", "id");
        $nombreEntePublico = Arr::pluck(\App\EntePublico::all(), "valor", "id");
        $nombreAdscripcion = Arr::pluck(MotivoViajes::all(), "valor", "id");
        $empleoCargo = Arr::pluck(MotivoViajes::all(), "valor", "id");
        $especifiqueAmbito = Arr::pluck(MotivoViajes::all(), "valor", "id");
        $sectorProductivo = Arr::pluck(\App\sector::all(), "valor", "id");
        $viajes = Viajes::find($id);
        return view("viajes.edit", compact("viajes","tipoResponsable", "nombreTercero", "tipoTercero", "rfcTercero", "montoViaje", "lugarViaje", "motivoViaje", "otroEspecifique", "tipoMoneda", "nombrePariente", "primerApellido", "segundoApellido", "cumpleañosPariente", "rfcPariente", "ambitoTercero", "razonSocialTercero", "nivelGobierno", "nombreEntePublico", "nombreAdscripcion", "empleoCargo", "especifiqueAmbito", "sectorProductivo"));
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
        $viaje = $request->input("viajes");
        $v = Viajes::find($id);
        if($v->enviado){
            $viaje["tipo_operacion_id"] = 2;           
        }
        $v->update($viaje);
        return redirect()->route("viajes.index");
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        if(isset($this->request->id)){
            $id = $this->request->id;
        }
        $v = Viajes::find($id);
        if($v->enviado){
            $v->update(["tipo_operacion_id" => 4, "motivo_baja_id" => $this->request->motivo_baja_id]);           
        } else {
            $v->delete();
        }
        return redirect()->back();
    }
}
