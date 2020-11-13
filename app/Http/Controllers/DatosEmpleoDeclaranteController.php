<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\NivelOrdenGobierno;
use App\ambitoPublico;
use App\sectores;
use App\DatoEmpleoDeclarante;

class DatosEmpleoDeclaranteController extends Controller
{
    private $request;
    function __construct(Request $request)
    {
        $this->request = $request;
    }
    public function index()
    {

    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $nivel_orden = NivelOrdenGobierno::all();
        $nivel = [];
        $nivel[""] = "SELECCIONA UNA OPCIÓN";
        foreach ($nivel_orden as $item){
            $nivel[$item->id] = $item->valor;
        }

        $ambito_publico = ambitoPublico::all();
        $ambito = [];
        $ambito[""] = "SELECCIONA UNA OPCIÓN";
        foreach ($ambito_publico as $item){
            $ambito[$item->id] = $item->valor;
        }
        $sector = sectores::all();
        $sector= [];
        $sector[""] = "SELECCIONA UNA OPCIÓN";
        foreach ($sectores as $item){
        $sector[$item->id] = $item->valor;
        }
        return view('datosEmpleoDeclarante.create', compact("nivel", "ambito" , "sector"));

    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {

        $datos_empleo_declarante = $this->request->input("datos_empleo_declarante");
        $datos_empleo_declarante['declaracion_id']=$this->request->session()->get('declaracion_id');
        DatoEmpleoDeclarante::create($datos_empleo_declarante);
        return redirect("experiencia_laboral");

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
