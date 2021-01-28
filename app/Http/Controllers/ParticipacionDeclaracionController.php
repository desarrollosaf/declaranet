<?php

namespace App\Http\Controllers;

use App\ParticipacionDeclaracion;
use Illuminate\Http\Request;

class ParticipacionDeclaracionController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $participaciones = [];
        return view("participaciones.index", compact("participaciones"));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $parentesco = \App\RelacionTransmisor::all();
        $selectParentesco[""] = "SELECCIONA UNA OPCIÓN";
        foreach ($parentesco as $item){
            $selectParentesco[$item->id] = $item->valor;
        }
        return view("participaciones.create");
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
     * @param  \App\ParticipacionDeclaracion  $participacionDeclaracion
     * @return \Illuminate\Http\Response
     */
    public function show(ParticipacionDeclaracion $participacionDeclaracion)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\ParticipacionDeclaracion  $participacionDeclaracion
     * @return \Illuminate\Http\Response
     */
    public function edit(ParticipacionDeclaracion $participacionDeclaracion)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\ParticipacionDeclaracion  $participacionDeclaracion
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, ParticipacionDeclaracion $participacionDeclaracion)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\ParticipacionDeclaracion  $participacionDeclaracion
     * @return \Illuminate\Http\Response
     */
    public function destroy(ParticipacionDeclaracion $participacionDeclaracion)
    {
        //
    }
}
