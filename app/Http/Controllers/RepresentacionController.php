<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Arr;
use App\Declaracion;
use App\motivoBaja;

class RepresentacionController extends Controller {

    private $request;

    public function __construct(Request $request) {
        $this->middleware("auth");
        $this->middleware('CheckDeclaracion');
        $this->request = $request;
    }

    public function index() {
        $declaracion = Declaracion::find($this->request->session()->get('declaracion_id'));
        $representacion = $declaracion->Representacion;
        //dd($representacion);
        $motivos = Arr::pluck(motivoBaja::all(), "valor", "id");
        return view("Representacion.index", compact("representacion", "motivos"));
    }

    public function create() {

        //COMBO TITULAR PARTICIPACION
        $selecttitularRepresentacion = Arr::pluck(\App\titularBien::all(), "valor", "id");

        //COMBO TITULAR PARTICIPACION
        $selecttipoRepresentacion = Arr::pluck(\App\tipoRepresentacion::all(), "valor", "id");

        //COMBO TITULAR PARTICIPACION
        $selectregimenRepresentante = Arr::pluck(\App\RegimenFiscal::all(), "valor", "id");

        //COMBO TITULAR PARTICIPACION
        $selecttipoRespuesta = Arr::pluck(\App\Respuesta::all(), "respuesta", "id");

        //COMBO TIPO SECTOR
        $selecttipoSector = Arr::pluck(\App\sector::all(), "valor", "id");

        //COMBO UBICACION INMUEBLE
        $selectubicacionRepresentacion = Arr::pluck(\App\LugarUbicacion::all(), "valor", "id");

        //COMBO UBICACION INMUEBLE
        $selectpaises = Arr::pluck(\App\Pais::all(), "valor", "id");

        //COMBO UBICACION INMUEBLE
        $selectEntidad = Arr::pluck(\App\Entidad::all(), "entidad", "id");

        $tipoOperacion = 1;

        return view("Representacion.create", compact('selecttitularRepresentacion', 'selecttipoRepresentacion', 'selectregimenRepresentante', 'selecttipoRespuesta', 'selecttipoSector', 'selectubicacionRepresentacion', 'selectpaises', 'selectEntidad','tipoOperacion'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request) {
        $repre = $request->input('representacion');
        //dd($repre);
        $repre['declaracion_id'] = $request->session()->get('declaracion_id');
        if ($repre["pais_id"] == 0) {
            $repre["pais_id"] = null;
        }

        if ($repre["regimen_representante_id"] == 1) {
            $repre["nombre_representante"] = $repre["nombre_representanteFisica"];
            $repre["rfc_representante"] = $repre["rfc_representanteFisica"];
        } else {
            $repre["nombre_representante"] = $repre["nombre_representanteMoral"];
            $repre["rfc_representante"] = $repre["rfc_representanteMoral"];
        }

        //dd($repre);
        $repre["tipo_operaciones_id"] = 1;
        
        $part_emp = \App\Representacion::create($repre);
        return redirect()->route('representacion.index');
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
        $selecttitularRepresentacion = Arr::pluck(\App\titularBien::all(), "valor", "id");

        //COMBO TITULAR PARTICIPACION
        $selecttipoRepresentacion = Arr::pluck(\App\tipoRepresentacion::all(), "valor", "id");

        //COMBO TITULAR PARTICIPACION
        $selectregimenRepresentante = Arr::pluck(\App\RegimenFiscal::all(), "valor", "id");

        //COMBO TITULAR PARTICIPACION
        $selecttipoRespuesta = Arr::pluck(\App\Respuesta::all(), "respuesta", "id");

        //COMBO TIPO SECTOR
        $selecttipoSector = Arr::pluck(\App\sector::all(), "valor", "id");

        //COMBO UBICACION INMUEBLE
        $selectubicacionRepresentacion = Arr::pluck(\App\LugarUbicacion::all(), "valor", "id");

        //COMBO UBICACION INMUEBLE
        $selectpaises = Arr::pluck(\App\Pais::all(), "valor", "id");

        //COMBO UBICACION INMUEBLE
        $selectEntidad = Arr::pluck(\App\Entidad::all(), "entidad", "id");

        $representacion = \App\Representacion::find($id);

        $tipoOperacion = 1;

        return view("Representacion.edit", compact('selecttitularRepresentacion', 'selecttipoRepresentacion', 'selectregimenRepresentante', 'selecttipoRespuesta', 'selecttipoSector', 'selectubicacionRepresentacion', 'selectpaises', 'selectEntidad', 'representacion','tipoOperacion'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id) {
        $reprerow = \App\Representacion::find($id);


        $repre = $request->input('representacion');
        //dd($repre);
        $repre['declaracion_id'] = $request->session()->get('declaracion_id');
        if ($repre["pais_id"] == 0) {
            $repre["pais_id"] = null;
        }
         if ($repre["regimen_representante_id"] == 1) {
            $repre["nombre_representante"] = $repre["nombre_representanteFisica"];
            $repre["rfc_representante"] = $repre["rfc_representanteFisica"];
        } else {
            $repre["nombre_representante"] = $repre["nombre_representanteMoral"];
            $repre["rfc_representante"] = $repre["rfc_representanteMoral"];
        }
//        dd($repre);
        if ($reprerow->enviado) {
            $repre["tipo_operaciones_id"] = 2;
        }
        
        
        $reprerow->update($repre);
        return redirect()->route('representacion.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id) {
        $bien = \App\Representacion::find($this->request->id);
        //dd($bien);
        
        if (!$bien->enviado) {
            $bien->delete();
        } else {
            $bien->update(["tipo_operaciones_id" => 4, "motivo_baja_id" => $this->request->motivo_baja_id]);
        }

        return redirect()->back();
    }

}
