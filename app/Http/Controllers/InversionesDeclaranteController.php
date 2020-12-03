<?php

namespace App\Http\Controllers;

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
        return view("inversionesDeclarante.index", compact('inversiones'));
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
        $tipoMoneda = Arr::pluck(\App\tipoMoneda::all(), "valor","id");
        $tipoPersona = Arr::pluck(\App\tipoPersona::all(), "valor","id");
        $ubicacionInversion = Arr::pluck(\App\ubicacionInversion::all(), "valor","id");
        return  view('inversionesDeclarante.create', compact('tipoDeclarante','tipoInversion','subTipoInversion','paises','tipoMoneda','tipoPersona','ubicacionInversion'));

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
        //dd($inversionesDeclarante);
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

        //return view("inversionesDeclarante.edit",\compact("inversiones","id"));
        return view("inversionesDeclarante.edit", compact('tipoDeclarante','tipoInversion','subTipoInversion','paises','tipoMoneda','tipoPersona','ubicacionInversion','inversiones'));
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
        
        $inversionesDeclarante = InversionesDeclarante::find($id);
        $inversionesDeclarante->delete();
        return redirect()->route("inversiones.index");
    }

    public function getDescripcion($id){
        $inversionesDeclarante = subTipoInversion::where('tipoInversion_id', '=', $id)->get();
        return json_encode($inversionesDeclarante);
    }
}
