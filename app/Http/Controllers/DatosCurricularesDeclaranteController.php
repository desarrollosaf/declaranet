<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Arr;
use App\nivel;
use App\estatus;
use App\documentoObtenido;
use App\LugarUbicacion;
use App\Declaracion;
use App\DatoCurricular;

class DatosCurricularesDeclaranteController extends Controller
{
    private $request;
    public function __construct(Request $request){
        $this->middleware('auth');
        $this->middleware('CheckDeclaracion');
        $this->request = $request;
    }
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $curriculares = Declaracion::find($this->request->session()->get('declaracion_id'))->datos_curriculares;
        foreach($curriculares as $curricular){
            $curricular->nivel = $curricular->nivel;
        }
        return view('datosCurricularesDeclarante.index',compact('curriculares'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $nivelesSelect = Arr::pluck(nivel::all(), "valor","id");
        $estatusSelect = Arr::pluck(estatus::all(), "valor","id");
        $documentoSelect = Arr::pluck(documentoObtenido::all(), "valor","id");
        $lugaresSelect = Arr::pluck(LugarUbicacion::all(), "valor","id");
        $tipoOperacion = 1;
        return view('datosCurricularesDeclarante.create', compact("nivelesSelect","estatusSelect","documentoSelect","lugaresSelect",'tipoOperacion'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $curriculares = $request->input("curriculares");
        $declarante = Declaracion::find($request->session()->get("declaracion_id"));
        $declarante->datos_curriculares()->create($curriculares);
        return redirect()->route("datos_curriculares_declarante.index");
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
        $nivelesSelect = Arr::pluck(nivel::all(), "valor","id");
        array_unshift($nivelesSelect,"Selecciona una opcion");
        $estatusSelect = Arr::pluck(estatus::all(), "valor","id");
        array_unshift($estatusSelect,"Selecciona una opcion");
        $documentoSelect = Arr::pluck(documentoObtenido::all(), "valor","id");
        array_unshift($documentoSelect,"Selecciona una opcion");
        $lugaresSelect = Arr::pluck(LugarUbicacion::all(), "valor","id");
        array_unshift($lugaresSelect,"Selecciona una opcion");
        $curricular = DatoCurricular::find($id);
        $tipoOperacion = 1;
        return view('datosCurricularesDeclarante.edit', compact("nivelesSelect","estatusSelect","documentoSelect","lugaresSelect","curricular",'tipoOperacion'));
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
        $curricular = DatoCurricular::find($id);
        $curricular->update($request->input('curriculares'));
        return redirect()->route('datos_curriculares_declarante.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $curricular = DatoCurricular::find($id);
        $curricular->delete();
        return redirect()->back();
    }
}
