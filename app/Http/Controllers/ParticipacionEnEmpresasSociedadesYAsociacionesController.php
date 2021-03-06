<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Arr;
use App\Declaracion;
use App\motivoBaja;

class ParticipacionEnEmpresasSociedadesYAsociacionesController extends Controller {

    private $request;

    public function __construct(Request $request) {
        $this->middleware("auth");
        $this->middleware('CheckDeclaracion');
        $this->request = $request;
    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index() {
        $empresas = \App\ParticipacionEmpresa::where('declaracion_id', $this->request->session()->get('declaracion_id'))->get();
        $motivos = Arr::pluck(motivoBaja::all(), "valor", "id");
        
        return view("ParticipacionEmpresas.index", compact('empresas', 'motivos'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create() {
        //COMBO TITULAR PARTICIPACION
        $RelacionTransmisor = Arr::pluck(\App\RelacionTransmisor::all(), "valor", "id");

        //COMBO TITULAR PARTICIPACION
        $selecttitularParticipacion = Arr::pluck(\App\titularBien::all(), "valor", "id");

        //COMBO TIPO PARTICIPACION
        $selecttipoParticipacion = Arr::pluck(\App\tipoParticipacion::all(), "valor", "id");

        //COMBO TIPO RESPUESTAS
        $selecttipoRespuesta = Arr::pluck(\App\Respuesta::all(), "respuesta", "id");

        //COMBO LUGAR DONDE SE UBICA
        $selectubicacionParticipacion = Arr::pluck(\App\LugarUbicacion::all(), "valor", "id");

        //COMBO TIPO SECTOR
        $selectsectorProductivo = Arr::pluck(\App\sector::all(), "valor", "id");

        //COMBO PAIS
        $selectpais = Arr::pluck(\App\Pais::all(), "valor", "id");

        //COMBO PAIS
        $selectEntidad = Arr::pluck(\App\Entidad::all(), "entidad", "id");

        $tipoSociedad = Arr::pluck(\App\tipoSociedad::all(), "valor", "id");

        $tipoModalidad = Arr::pluck(\App\tipoModalidad::all(), "valor", "id");

        $tipoOperacion = 1;

        return view("ParticipacionEmpresas.create", compact('selecttitularParticipacion', 'selecttipoParticipacion', 'selecttipoRespuesta', 'selectubicacionParticipacion', 'selectsectorProductivo', 'selectpais', 'selectEntidad', 'RelacionTransmisor', 'tipoSociedad', 'tipoModalidad', 'tipoOperacion'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request) {
        $empresas = $request->input('empresas');
//        dd($empresas);
        $empresas['declaracion_id'] = $request->session()->get('declaracion_id');
        if ($empresas["pais_id"] == 0) {
            $empresas["pais_id"] = null;
        }
        
        $empresas["tipo_operaciones_id"] = 1;
        
        $part_emp = \App\ParticipacionEmpresa::create($empresas);
        return redirect()->route('participacion_empresas.index');

        // dd($empresas);
        /*
          $inmueble->domicilio()->create($domicilio);
          return redirect()->route('bienes_inmuebles.index');

         */
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id) {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id) {
        //COMBO TITULAR PARTICIPACION
        $RelacionTransmisor = Arr::pluck(\App\RelacionTransmisor::all(), "valor", "id");

        //COMBO TITULAR PARTICIPACION
        $selecttitularParticipacion = Arr::pluck(\App\titularBien::all(), "valor", "id");

        //COMBO TIPO PARTICIPACION
        $selecttipoParticipacion = Arr::pluck(\App\tipoParticipacion::all(), "valor", "id");

        //COMBO TIPO RESPUESTAS
        $selecttipoRespuesta = Arr::pluck(\App\Respuesta::all(), "respuesta", "id");

        //COMBO LUGAR DONDE SE UBICA
        $selectubicacionParticipacion = Arr::pluck(\App\LugarUbicacion::all(), "valor", "id");

        //COMBO TIPO SECTOR
        $selectsectorProductivo = Arr::pluck(\App\sector::all(), "valor", "id");

        //COMBO PAIS
        $selectpais = Arr::pluck(\App\Pais::all(), "valor", "id");

        //COMBO PAIS
        $selectEntidad = Arr::pluck(\App\Entidad::all(), "entidad", "id");

        $tipoSociedad = Arr::pluck(\App\tipoSociedad::all(), "valor", "id");

        $tipoModalidad = Arr::pluck(\App\tipoModalidad::all(), "valor", "id");

        $empresas = \App\ParticipacionEmpresa::find($id);

        $tipoOperacion = 1;

        return view("ParticipacionEmpresas.edit", compact('selecttitularParticipacion', 'selecttipoParticipacion', 'selecttipoRespuesta', 'selectubicacionParticipacion', 'selectsectorProductivo', 'selectpais', 'selectEntidad', 'RelacionTransmisor', 'tipoModalidad', 'tipoSociedad', 'empresas', 'tipoOperacion'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id) {
        $empresaRow = \App\ParticipacionEmpresa::find($id);

        $empresas = $request->input('empresas');
//        dd($empresas);
        $empresas['declaracion_id'] = $request->session()->get('declaracion_id');
        if ($empresas["pais_id"] == 0) {
            $empresas["pais_id"] = null;
        }
        
        if ($empresaRow->enviado) {
            $empresas["tipo_operaciones_id"] = 2;
        }
        
        
        $empresaRow->update($empresas);
        return redirect()->route('participacion_empresas.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id) {
        $empresa = \App\ParticipacionEmpresa::find($this->request->id);
        
        if (!$empresa->enviado) {
            $empresa->delete();
        } else {
            $empresa->update(["tipo_operaciones_id" => 4, "motivo_baja_id" => $this->request->motivo_baja_id]);
        }
        
        return redirect()->back();
    }

}
