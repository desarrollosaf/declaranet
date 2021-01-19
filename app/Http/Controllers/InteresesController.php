<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\parentescoRelacion;
use App\Respuesta;
use App\ambitoSector;
use App\Nivelordengobierno;
use App\ambitoPublico;
use App\InteresesPersonal;
use Illuminate\Support\Arr;
use App\Declaracion;

class InteresesController extends Controller {

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

    public function index() {
        $declaracion = Declaracion::find($this->request->session()->get('declaracion_id'));
        $intereses = $declaracion->intereses;
        return view("interesesPersonales.index", compact("intereses"));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create() {
        $relacion = Arr::pluck(parentescoRelacion::all(), 'valor', 'id');
        $respuesta = Arr::pluck(Respuesta::all(), 'respuesta', 'id');
        $sector = Arr::pluck(ambitoSector::where('id', 1)->get(), 'valor', 'id');
        $nivel = Arr::pluck(Nivelordengobierno::all(), 'valor', 'id');
        $ambito = Arr::pluck(ambitoPublico::all(), 'valor', 'id');
        return view('interesesPersonales.create', compact('relacion', 'respuesta', 'sector', 'nivel', 'ambito'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request) {
        $dataIntereses = $request->input("intereses");
        $dataIntereses["declaracion_id"] = $request->session()->get("declaracion_id");
        $dataActividadLaboral = $request->input("actividadLaboral");
        $intereses = InteresesPersonal::create($dataIntereses);
        $intereses->experienciaLaboral()->create($dataActividadLaboral);
        return redirect()->route("intereses_personales.index");
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
        $intereses = InteresesPersonal::find($id);
        $experienciaLaboral = $intereses->experienciaLaboral;
        $relacion = Arr::pluck(parentescoRelacion::all(), 'valor', 'id');
        $respuesta = Arr::pluck(Respuesta::all(), 'respuesta', 'id');
        $sector = Arr::pluck(ambitoSector::where('id', 1)->get(), 'valor', 'id');
        $nivel = Arr::pluck(Nivelordengobierno::all(), 'valor', 'id');
        $ambito = Arr::pluck(ambitoPublico::all(), 'valor', 'id');
        return view("interesesPersonales.edit", compact("intereses", "experienciaLaboral", "relacion", "respuesta", "sector", "nivel", "ambito"));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id) {
        $dataIntereses = $request->input("intereses");
        $dataActividadLaboral = $request->input("actividadLaboral");
        $intereses = InteresesPersonal::find($id);
        $intereses->update($dataIntereses);
        $intereses->experienciaLaboral()->update($dataActividadLaboral);
        return redirect()->route("intereses_personales.index");
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id) {
        InteresesPersonal::find($id)->delete();
        return redirect()->route("intereses_personales.index");
    }

}
