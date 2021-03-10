<?php

namespace App\Http\Controllers;

use App\ParticipacionDeclaracion;
use Illuminate\Http\Request;
use Illuminate\Support\Arr;
use App\TipoTitularDonativo;
use App\tipoInstitucion;
use App\tipoParticipacion;
use App\TipoOrganizacionComunitaria;
use App\TipoColaboracion;
use App\Declaracion;
use App\motivoBaja;

class ParticipacionDeclaracionController extends Controller {

    protected $request;

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
        $declaracion = Declaracion::find($this->request->session()->get("declaracion_id"));
        $participaciones = $declaracion->participaciones;
        $motivos = Arr::pluck(motivoBaja::all(), "valor", "id");
        return view("participaciones.index", compact("participaciones", "participaciones", "motivos"));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create() {
        $tipo_titular = TipoTitularDonativo::all();
        $tipo_institucion = Arr::pluck(tipoInstitucion::all(), "valor", "id");
        $tipo_participacion = Arr::pluck(tipoParticipacion::all(), "valor", "id");
        $tipo_organizacion = Arr::pluck(TipoOrganizacionComunitaria::all(), "nombre", "id");
        $tipo_colaboracion = Arr::pluck(TipoColaboracion::all(), "tipo_colaboracion", "id");
        $tipo_titular_segundo = Arr::pluck(TipoTitularDonativo::where("grado", "<=", 2)->get(), "valor", "id");
        $partcicipa_institucion = Arr::pluck(\App\InstitucionParticipacion::all(), "nombre", "id");

        $tipoOperacion = 1;

        return view("participaciones.create", compact('tipo_titular', 'tipo_institucion', 'tipo_participacion', 'tipo_organizacion', 'tipo_colaboracion', 'tipo_titular_segundo', 'partcicipa_institucion', 'tipoOperacion'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request) {
        $participacion = $request->input("participacion");
        $declarante = Declaracion::find($request->session()->get("declaracion_id"));
        $declarante["tipo_operacion_id"] = 1;

        $declarante->participaciones()->create($participacion);

        return redirect()->route("viajes.index");
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\ParticipacionDeclaracion  $participacionDeclaracion
     * @return \Illuminate\Http\Response
     */
    public function show(ParticipacionDeclaracion $participacionDeclaracion) {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\ParticipacionDeclaracion  $participacionDeclaracion
     * @return \Illuminate\Http\Response
     */
    public function edit($id) {
        $participacion = ParticipacionDeclaracion::find($id);
        $tipo_titular = TipoTitularDonativo::all();
        $tipo_institucion = Arr::pluck(tipoInstitucion::all(), "valor", "id");
        $tipo_participacion = Arr::pluck(tipoParticipacion::all(), "valor", "id");
        $tipo_organizacion = Arr::pluck(TipoOrganizacionComunitaria::all(), "nombre", "id");
        $tipo_colaboracion = Arr::pluck(TipoColaboracion::all(), "tipo_colaboracion", "id");
        $tipo_titular_segundo = Arr::pluck(TipoTitularDonativo::where("grado", "<=", 2)->get(), "valor", "id");
        $partcicipa_institucion = Arr::pluck(\App\InstitucionParticipacion::all(), "nombre", "id");

        $tipoOperacion = 1;

        return view("participaciones.edit", compact('participacion', 'tipo_titular', 'tipo_institucion', 'tipo_participacion', 'tipo_organizacion', 'tipo_colaboracion', 'tipo_titular_segundo', 'partcicipa_institucion', 'tipoOperacion'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\ParticipacionDeclaracion  $participacionDeclaracion
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id) {
        $part = ParticipacionDeclaracion::find($id);
        $participacion = $request->input("participacion");
        
         if ($part->enviado) {
            $participacion["tipo_operacion_id"] = 2;
        }
        
        $part->update($participacion);
        return redirect()->route("participaciones.index");
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\ParticipacionDeclaracion  $participacionDeclaracion
     * @return \Illuminate\Http\Response
     */
    public function destroy($id) {
        $part = ParticipacionDeclaracion::find($this->request->id);
        
        if (!$part->enviado) {
            $part->delete();
        } else {
            $part->update(["tipo_operacion_id" => 4, "motivo_baja_id" => $this->request->motivo_baja_id]);
        }
        
        return redirect()->route("participaciones.index");
    }

}
