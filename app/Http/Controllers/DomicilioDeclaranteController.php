<?php

namespace App\Http\Controllers;

use App\Entidad;
use App\Municipio;
use App\Asentamiento;
use Illuminate\Http\Request;
use Illuminate\Support\Arr;
use App\Declaracion;
use App\Domicilio;

class DomicilioDeclaranteController extends Controller
{
    private $request;
    public function __construct(Request $request) {
        $this->middleware("auth");
        $this->middleware("CheckDeclaracion");
        $this->request = $request;
    }
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $declarante = Declaracion::find($this->request->session()->get("declaracion_id"));
        if($declarante->domicilio == null){
            return redirect()->route("domicilio_declarante.create");
        }else{
            return redirect()->route("domicilio_declarante.edit",$declarante->domicilio->id);
        }
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $selectEntidad = Arr::pluck(Entidad::all(), "entidad","id");
        return view('domicilioDeclarante.create', compact('selectEntidad'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $domicilio = $request->input("domicilio");
        $declarante = Declaracion::find($request->session()->get("declaracion_id"));
        $declarante->domicilio()->create($domicilio);
        return redirect()->route("domicilio_declarante.index");
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
        $domicilio = Domicilio::find($id);
        $selectEntidad = Arr::pluck(Entidad::all(), "entidad","id");
        $selectMunicipio = Arr::pluck(Municipio::where("entidad_id",$domicilio->entidad_id)->get(), "municipio","id");
        $selectAsentamiento = Arr::pluck(Asentamiento::where("municipio_id",$domicilio->municipio_id)->get(), "asentamiento","id");
        return view('domicilioDeclarante.edit', compact('domicilio','selectEntidad','selectMunicipio','selectAsentamiento'));
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
        $domicilioRequest = $request->input("domicilio");
        $domicilio = Domicilio::find($id);
        $domicilio->update($domicilioRequest);
        return redirect()->route("domicilio_declarante.index");
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

    public function getMunicipios($id){
        $municipio = Municipio::where('entidad_id', '=', $id)->get();
        return json_encode($municipio);
    }
    public function getAsentamientos($id){
        $asentamiento = Asentamiento::where('municipio_id', $id)->get();
        return json_encode($asentamiento);
    }
}
