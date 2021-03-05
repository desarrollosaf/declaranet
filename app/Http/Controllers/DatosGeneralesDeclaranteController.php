<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\SituacionPersonal;
use App\RegimenMatrimonial;
use App\Pais;
use App\Nacionalidad;
use App\Declaracion;



class DatosGeneralesDeclaranteController extends Controller
{
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
    public function index()
    {
        //return view('DatosGeneralesDeclarante.create');

    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $servidor = auth()->user()->servidor_publico;
//        dd($this->request->session()->get("declaracion_id"));
        $declaracion = Declaracion::find($this->request->session()->get("declaracion_id"));
        $situacionPersonalEstadoCivil = SituacionPersonal::all();
        $selectSituacionPersonal = [];
        foreach($situacionPersonalEstadoCivil as $item){
            $selectSituacionPersonal[$item->id] = $item->valor;
        }
        $regimenMatrimonial = RegimenMatrimonial::all();
        $selectRegimenMatrimonial = [];
        foreach($regimenMatrimonial as $item){
            $selectRegimenMatrimonial[$item->id] = $item->valor;
        }
        $paisesAll = Pais::all();
        $paises = [];
        foreach($paisesAll as $item){
            $paises[$item->id] = $item->valor;
        }
        $nacionalidadesAll = Nacionalidad::all();
        $nacionalidades = [];
        foreach($nacionalidadesAll as $item){
            $nacionalidades[$item->id] = $item->valor;
        }
        return view('datosGeneralesDeclarante.create', compact('selectSituacionPersonal','selectRegimenMatrimonial','servidor','paises','declaracion','nacionalidades'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $declaracion = Declaracion::find($this->request->session()->get("declaracion_id"));
//        $request->validate([
//            "correo_institucional" => "required",
//            "correo_personal" => "required",
//            "telefono_casa" => "required",
//            "telefono_personal" => "required",
//            "situacion_personal_id" => "required",
//            "regimen_matrimonial_id" => "required",
//            "pais_id" => "required",
//            "nacionalidad" => "required",
//        ]);
        $declaracionResponse = $request->declaracion;
        $declaracionResponse["tipo_operacion_id"] = 1;
        $declaracion->update($declaracionResponse);
        return redirect()->route("domicilio_declarante.index");
    }
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
        //
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
        $declaracion = Declaracion::find($id);
        $dec = $request->declaracion;
        if($declaracion->enviado){
            $dec["tipo_operacion_id"] = 2;
        }
        $declaracion->update($dec);
        return redirect()->route('datos_declarante.create');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id){
        
    }
}
