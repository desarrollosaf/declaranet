<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\IngresoNeto;
use App\tipoInstrumento;
use App\tipoOperacion;
use Illuminate\Support\Arr;

class IngresoNetoDeclaranteController extends Controller
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
        $ingresoMensual = IngresoNeto::find($this->request->session()->get('declaracion_id'));
        if($ingresoMensual == NULL){
            return \redirect()->route("ingreso_neto.create");
        } else {
            return \redirect()->route("ingreso_neto.edit",$ingresoMensual->id);
        }
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
       $tipoInstrumento = Arr::pluck(\App\tipoInstrumento::all(), "valor","id");
       return view("ingresosNetos.create", compact('tipoInstrumento'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $ingresoMensual = $this->request->input("ingresoMensual");
        $ingresoMensual['declaracion_id']=$this->request->session()->get('declaracion_id');
        //dd($ingresoMensual);
        IngresoNeto::create($ingresoMensual);
        return redirect()->route("servidor_publico.index");
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

        $tipoInstrumento = Arr::pluck(\App\tipoInstrumento::all(), "valor","id");
        $ingresoMensual = IngresoNeto::find($id);
        return view("ingresosNetos.edit",\compact("ingresoMensual","id", 'tipoInstrumento'));
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
        $ingresoMensualRequest = $request->input("ingresoMensual");
        $ingresoMensual = Ingresoneto::find($id);
        $ingresoMensual->update($ingresoMensualRequest);
        return redirect()->route("servidor_publico.index");
        return redirect()->back();
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
