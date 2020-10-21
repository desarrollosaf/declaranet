<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\SituacionPersonal;
use App\RegimenMatrimonial;
use App\Pais;
use App\Declaracion;



class DatosGeneralesDeclaranteController extends Controller
{
    public function __construct() {
        $this->middleware("auth");
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
        return view('datosGeneralesDeclarante.create', compact('selectSituacionPersonal','selectRegimenMatrimonial','servidor','paises'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        
        $declaracion = $request->declaracion;
//        dd($declaracion);
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
        
        $declaracion["fecha_declaracion"] = now();
        $declaracion["estatus_declaracion_id"] = 1;
        $declaracion["tipo_movimiento_id"] = 1;
        $declaracion["servidor_publico_id"] = auth()->user()->servidor_publico_id;

        $declaracionResponse = Declaracion::create($declaracion);
        return redirect()->back()->with('success', 'Se registraron los datos del servidor');
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
        //
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
}
