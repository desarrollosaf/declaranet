<?php

namespace App\Http\Controllers;

use App\extranjero;
use App\relacionConDeclarante;
use Illuminate\Http\Request;

class DatosParejaController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $relacionDeclarante = relacionConDeclarante::all();
        $selectRelacioDeclarante = [];
        $selectRelacioDeclarante[""] = "SELECCIONA UNA OPCIÓN";
        foreach ($relacionDeclarante as $item){
            $selectRelacioDeclarante[$item->id] = $item->valor;
        }
        $ciudadanoExtranjero = extranjero::all();
        $selectCiudadano = [];
        $selectCiudadano[""] = "SELECCIONA UNA OPCIÓN";
        foreach ($ciudadanoExtranjero as $item){
            $selectCiudadano[$item->id] = $item->valor;
        }
        return view('datosParejaDeclarante.create', compact('selectRelacioDeclarante','selectCiudadano'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
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
