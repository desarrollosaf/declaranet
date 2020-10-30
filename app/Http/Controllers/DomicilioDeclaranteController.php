<?php

namespace App\Http\Controllers;

use App\Entidad;
use App\Municipio;
use Illuminate\Http\Request;

class DomicilioDeclaranteController extends Controller
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
        $entidad = Entidad::all();
        $selectEntidad = [];
        foreach($entidad as $item){
            $selectEntidad[$item->id] = $item->entidad;
        }

        $municipio = Municipio::where('entidad_id', '=', 1)->get();
        $selectMunicipio = [];
        foreach($municipio as $item){
            $selectMunicipio[$item->id] = $item->municipio;
        }

        return view('domicilioDeclarante.create', compact('selectEntidad','selectMunicipio'));
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

    public function getMunicipios($id){
        $municipio = Municipio::where('entidad_id', '=', $id)->get();
        return json_encode($municipio);
    }
}
