<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Arr;

class AdeudosPasivosDeclaranteController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        alert()->basic('Notificación Básica, mensaje y título', 'Título');
        return view('adeudosDeclarante.index');

    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $tipoDeclarante = Arr::pluck(\App\titularInversion::all(), "valor","id");
        $tipoAdeudos = Arr::pluck(\App\tipoAdeudo::all(), "valor","id");
        $tipoPersona = Arr::pluck(\App\tipoPersona::all(), "valor","id");
        $lugarUbicacion = Arr::pluck(\App\LugarUbicacion::all(), "valor","id");
        $paises = Arr::pluck(\App\Pais::all(), "valor","id");
        return view('adeudosDeclarante.create', compact('tipoDeclarante', 'tipoAdeudos', 'tipoPersona', 'lugarUbicacion', 'paises'));
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
