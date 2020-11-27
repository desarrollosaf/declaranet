<?php

namespace App\Http\Controllers;

use App\tipoMoneda;
use Illuminate\Http\Request;
use Illuminate\Support\Arr;
use App\titularBien;
use App\tipoBienBienesMuebles;
use App\tipoTransmisores;
use App\relacionTransmisor;
use App\RegimenFiscal;
use App\formaAdquisicion;
use App\FormasPagos;

class BienesMueblesController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
       return view("Bienesmuebles.index");
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
      $selectTitular = Arr::pluck(titularBien::all(), "valor","id");
      $selectTipoBien = Arr::pluck(tipoBienBienesMuebles::all(), "valor","id");
      $selectTransmisores = Arr::pluck(RegimenFiscal::all(), "valor","id");
      $selectRelacionTransmisor = Arr::pluck(relacionTransmisor::all(), "valor","id");
      $selectFormaAdquisicion = Arr::pluck(formaAdquisicion::all(), "valor","id");
      $selectFormaPago = Arr::pluck(FormasPagos::all(), "valor","id");
      $selectTipoTercero = Arr::pluck(RegimenFiscal::all(), "valor","id");
      $selectTipoMoneda = Arr::pluck(tipoMoneda::orderBy("valor", "ASC")->get(), "valor","id");
      return view("BienesMuebles.create", compact('selectTitular', 'selectTipoBien','selectTransmisores', 'selectRelacionTransmisor', 'selectFormaAdquisicion', 'selectFormaPago', 'selectTipoTercero', 'selectTipoMoneda'));

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
