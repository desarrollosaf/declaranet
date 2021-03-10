<?php

namespace App\Http\Controllers;

use App\Pais;
use App\Participacion;
use App\tipoRelacion;
use Illuminate\Http\Request;
use App\tipoInstitucion;
use App\LugarUbicacion;
use Illuminate\Support\Arr;
use App\Declaracion;
use App\Entidad;
use App\motivoBaja;

class ParticipaDecisionController extends Controller {

    private $request;

    function __construct(Request $request) {
        $this->middleware('auth');
        $this->middleware('CheckDeclaracion');
        $this->request = $request;
    }

    public function index() {
        $declaracion = Declaracion::find($this->request->session()->get('declaracion_id'));
        $participaciones = $declaracion->participacion;
        $motivos = Arr::pluck(motivoBaja::all(), "valor","id");
        return view("ParticipaDecision.index", compact('participaciones', 'motivos'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create() {
        $tipoParticipacion = tipoRelacion::all();
        $participacion = [];
        $participacion[""] = "SELECCIONA UNA OPCIÓN";
        foreach ($tipoParticipacion as $item) {
            $participacion[$item->id] = $item->valor;
        }

        $tipoInstitucion = tipoInstitucion::all();
        $institucion = [];
        $institucion[""] = "SELECCIONA UNA OPCIÓN";
        foreach ($tipoInstitucion as $item) {
            $institucion[$item->id] = $item->valor;
        }

        $remuneracion = [];
        $remuneracion[""] = "SELECCIONA UNA OPCIÓN";
        $remuneracion["1"] = "SÍ";
        $remuneracion["2"] = "NO";

        $LugarUbicacion = LugarUbicacion::all();
        $lugar = [];
        $lugar[""] = "SELECCIONA UNA OPCIÓN";
        foreach ($LugarUbicacion as $item) {
            $lugar[$item->id] = $item->valor;
        }

        $Paises = Pais::all();
        $pais = [];
        $pais[""] = "SELECCIONA UNA OPCIÓN";
        foreach ($Paises as $item) {
            $pais[$item->id] = $item->valor;
        }

        $Entidad = Entidad::all();
        $entidad = [];
        foreach ($Entidad as $item) {
            $entidad[$item->id] = $item->entidad;
        }

//        $tipoOperacion = "AGREGAR";
        $tipoOperacion = 1;

        return view("ParticipaDecision.create", compact('participacion', 'institucion', 'remuneracion', 'lugar', 'pais', 'entidad', 'tipoOperacion'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request) {
        $participaciones = $this->request->input("participaciones");
        $participaciones["tipo_operacion_id"] = 1;
        $participaciones['declaracion_id'] = $this->request->session()->get('declaracion_id');
        Participacion::create($participaciones);
        return redirect("participacion");
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
        $participaciones = Participacion::find($id);
        $participacion = Arr::pluck(tipoRelacion::all(), 'valor', 'id');
        $institucion = Arr::pluck(tipoInstitucion::all(), 'valor', 'id');
        $lugar = Arr::pluck(LugarUbicacion::all(), 'valor', 'id');
        $pais = Arr::pluck(Pais::all(), 'valor', 'id');
        $remuneracion = [];
        $remuneracion[""] = "SELECCIONA UNA OPCIÓN";
        $remuneracion["1"] = "SÍ";
        $remuneracion["2"] = "NO";
        $entidad = Arr::pluck(Entidad::all(), 'entidad', 'id');
        return view("ParticipaDecision.edit", compact('participaciones', 'participacion', 'institucion', 'lugar', 'pais', 'remuneracion', 'entidad', 'tipoOperacion'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id) {
        $participaciones = $request->input("participaciones");
        $participacion = Participacion::find($id);
        if ($participacion->enviado) {
            $participaciones["tipo_operacion_id"] = 2;
        }
        $participacion->update($participaciones);
        return redirect("participacion");
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id) {
        $participacion = Participacion::find($this->request->id);

        if (!$participacion->enviado) {
            $participacion->delete();
        } else {
            $participacion->update(["tipo_operacion_id" => 4, "motivo_baja_id" => $this->request->motivo_baja_id]);
        }


        return redirect()->route("participacion.index");
    }

}
