<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Arr;
use App\TipoMovimientoMCG;
use App\tipoDependencia;
use App\tipoDireccion;
use App\tipoDepartamento;
use App\ServidorPublico;
use App\Respuesta;
use App\Declaracion;



class McgDeclaranteController extends Controller
{
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

    public function index()
    {
    
        return \redirect()->route("MCG.create");
       
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
       $tipoMovMcg = Arr::pluck(\App\TipoMovimientoMCG::all(), "valor","id");
       $tipoDependencia = Arr::pluck(\App\tipoDependencia::all(), "nombre","id");
       $tipoDireccion = Arr::pluck(\App\tipoDireccion::all(), "nombre","id");
       $tipoDepartamento = Arr::pluck(\App\tipoDepartamento::all(), "nombre","id");
       $respuestas = Arr::pluck(\App\Respuesta::all(), "respuesta","id");
       return view("McgDeclaranet.create", compact('tipoMovMcg', 'tipoDependencia', 'tipoDireccion', 'tipoDepartamento', 'respuestas'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $servidor = $this->request->input("servidor");
        $declaracion = $this->request->input("declaracion");
        $empleo = $this->request->input("empleo");

        $servidor = ServidorPublico::create($servidor);
        $declaracion = Declaracion::create([
            "servidor_publico_id" =>  $servidor->id,
            "tipo_movimiento_id" => 1,
            "fecha_declaracion" => $declaracion["fecha_movimiento"],
            "estatus_declaracion_id" => 1
        ]);
        $declaracion=Declaracion::find($this->request->session()->get('declaracion_id'));

        return redirect()->route("MCG.index");
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

    public function getDependencia($id){
        $direccion = tipoDireccion::where('id_Dependencia', '=', $id)->get();
        return json_encode($direccion);
    }
    
    public function getDireccion($id){
        $departamento = tipoDepartamento::where('id_Direccion', '=', $id)->get();
        return json_encode($departamento);
    }
}
