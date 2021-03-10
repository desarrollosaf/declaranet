<?php

namespace App\Http\Controllers;

use App\motivoBaja;
use Illuminate\Http\Request;
use App\InversionesDeclarante;
use App\Declaracion;
use App\subTipoInversion;
use App\Pais;
use App\tipoMoneda;
use App\tipoPersona;
use App\ubicacionInversion;
use Illuminate\Support\Arr;


class InversionesDeclaranteController extends Controller
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
        $inversiones = $declaracion->inversiones_cuentas;
        //dd($inversiones[0]->tipoInversion);
        //$inversiones= InversionesDeclarante::find($this->request->session()->get('declaracion_id'));
        $baja = Arr::pluck(motivoBaja::all(), "valor", "id");
        return view("inversionesDeclarante.index", compact('inversiones','baja'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $tipoDeclarante = Arr::pluck(\App\titularInversion::all(), "valor","id");
        $tipoInversion = Arr::pluck(\App\tipoInversion::all(), "valor","id");
        $subTipoInversion = Arr::pluck(\App\subTipoInversion::all(), "valor","id");
        $paises = Arr::pluck(\App\Pais::all(), "valor","id");

        $tipoMonedaOtros = tipoMoneda::where("clave","!=","MXN")->orderBy("valor","asc")->get();
        $tipoMonedaMexico = tipoMoneda::whereClave("MXN")->get();
        $tipoMonedas = $tipoMonedaMexico->merge($tipoMonedaOtros);
        $tipoMoneda = Arr::pluck($tipoMonedas,"valor","id");

        $tipoPersona = Arr::pluck(\App\tipoPersona::all(), "valor","id");
        $ubicacionInversion = Arr::pluck(\App\ubicacionInversion::all(), "valor","id");
        $baja = Arr::pluck(motivoBaja::all(), "valor", "id");
        $tipoOperacion = 1;
        return  view('inversionesDeclarante.create', compact('tipoDeclarante','tipoInversion','subTipoInversion','paises','tipoMoneda','tipoPersona','ubicacionInversion','tipoOperacion','baja'));

    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $inversionesDeclarante = $this->request->input("inversiones");
        $inversionesDeclarante['declaracion_id']=$this->request->session()->get('declaracion_id');
        $inversionesDeclarante["tipo_operacion_id"] = 1;
        InversionesDeclarante::create($inversionesDeclarante);
        return redirect()->route("inversiones.index");
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
        $tipoDeclarante = Arr::pluck(\App\titularInversion::all(), "valor","id");
        $tipoInversion = Arr::pluck(\App\tipoInversion::all(), "valor","id");
        $subTipoInversion = Arr::pluck(\App\subTipoInversion::all(), "valor","id");
        $paises = Arr::pluck(\App\Pais::all(), "valor","id");
        $tipoMoneda = Arr::pluck(\App\tipoMoneda::all(), "valor","id");
        $tipoPersona = Arr::pluck(\App\tipoPersona::all(), "valor","id");
        $ubicacionInversion = Arr::pluck(\App\ubicacionInversion::all(), "valor","id");
        $inversiones = InversionesDeclarante::find($id);
        $baja = Arr::pluck(motivoBaja::all(), "valor", "id");
        if($inversiones->enviado){
            $tipoOperacion = 2;
        }else{
            $tipoOperacion = 1;
        }
        return view("inversionesDeclarante.edit", compact('tipoDeclarante','tipoInversion','subTipoInversion','paises','tipoMoneda','tipoPersona','ubicacionInversion','inversiones','tipoOperacion','baja'));
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
        $data = $request->input("inversiones");
        $inversionesDeclarante = InversionesDeclarante::find($id);
        if($inversionesDeclarante->enviado){
            $data["tipo_operacion_id"] = 2;
        }
        $inversionesDeclarante->update($data);
        return redirect()->route("inversiones.index");
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
       // dd("llega controller");
        $inversionesDeclarante = InversionesDeclarante::find($this->request->id);
        if($inversionesDeclarante->enviado){
            $inversionesDeclarante->update(["tipo_operacion_id" => 4,"motivo_bajas_id" => $this->request->motivo_bajas_id, "motivo_baja" => $this->request->motivo_baja]);
        }else{
            $inversionesDeclarante->delete();
        }
        return redirect()->route("inversiones.index");
    }

    public function getDescripcion($id){
        $inversionesDeclarante = subTipoInversion::where('tipoInversion_id', '=', $id)->get();
        return json_encode($inversionesDeclarante);
    }
}
