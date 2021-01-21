<?php

namespace App\Http\Controllers;

use App\Viajes;
use App\parentescoRelacion;
use App\tipoResponsable;
use App\nombreTercero;
use App\tipoTercero;
use App\RegimenFiscal;
use App\rfcTercero;
use App\montoViaje;
use App\lugarViaje;
use App\extranjero;
use App\motivoViaje;
use App\MotivoViajes;
use App\otroEspecifique;
use App\tipoMoneda;

use Illuminate\Support\Arr;

class ViajesController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
       // $viajes = Viajes::all();    **MIGRACION**
        //return view("viajes.index", compact("viajes"));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $tipoResponsable = Arr::pluck(parentescoRelacion::all(), "valor", "id");
        $nombreTercero = Arr::pluck(RegimenFiscal::all(), "valor", "id");
        $tipoTercero = Arr::pluck(RegimenFiscal::all(), "valor", "id");
        $rfcTercero = Arr::pluck(RegimenFiscal::all(), "valor", "id");
        $montoViaje = Arr::pluck(RegimenFiscal::all(), "valor", "id");
        $lugarViaje = Arr::pluck(extranjero::all(), "valor", "id");
        $motivoViaje = Arr::pluck(MotivoViajes::all(), "valor", "id");
        $otroEspecifique = Arr::pluck(MotivoViajes::all(), "valor", "id");
        $tipoMoneda = Arr::pluck(tipoMoneda::all(), "valor", "id");
        return view("viajes.create", compact("tipoResponsable", "nombreTercero", "tipoTercero", "rfcTercero", "montoViaje", "lugarViaje", "motivoViaje", "otroEspecifique", "tipoMoneda"));
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
