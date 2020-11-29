<?php

namespace App\Http\Controllers;

use App\BienesMuebles;
use App\Declaracion;
use App\tipoMoneda;
use Carbon\Carbon;
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
    private $request;
    public function __construct(Request $request) {
        $this->middleware("auth");
        $this->request = $request;
    }

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
      array_unshift($selectTitular,"Selecciona una opción");
      array_unshift($selectTipoBien,"Selecciona una opción");
      array_unshift($selectTransmisores,"Selecciona una opción");
      array_unshift($selectRelacionTransmisor,"Selecciona una opción");
      array_unshift($selectFormaAdquisicion,"Selecciona una opción");
      array_unshift($selectFormaPago,"Selecciona una opción");
      array_unshift($selectTipoTercero,"Selecciona una opción");
      array_unshift($selectTipoMoneda,"Selecciona una opción");
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
        $bienesMuebles = $request->input("bienesMuebles");
        $fecha_adquisicion = new Carbon($bienesMuebles["fecha_adquisicion"]);
        $bienesMuebles["fecha_adquisicion"] = $fecha_adquisicion->format("Y-m-d");
        $declarante = Declaracion::find($request->session()->get("declaracion_id"));
        $declarante->BienesMuebles()->create($bienesMuebles);
        return redirect()->back();
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
        $selectTitular = Arr::pluck(titularBien::all(), "valor","id");
        $selectTipoBien = Arr::pluck(tipoBienBienesMuebles::all(), "valor","id");
        $selectTransmisores = Arr::pluck(RegimenFiscal::all(), "valor","id");
        $selectRelacionTransmisor = Arr::pluck(relacionTransmisor::all(), "valor","id");
        $selectFormaAdquisicion = Arr::pluck(formaAdquisicion::all(), "valor","id");
        $selectFormaPago = Arr::pluck(FormasPagos::all(), "valor","id");
        $selectTipoTercero = Arr::pluck(RegimenFiscal::all(), "valor","id");
        $selectTipoMoneda = Arr::pluck(tipoMoneda::orderBy("valor", "ASC")->get(), "valor","id");
        $bienMueble = BienesMuebles::find($id);
        return view("BienesMuebles.edit", compact("selectTitular", "selectTipoBien",  "selectTransmisores", "selectRelacionTransmisor", "selectFormaAdquisicion", "selectFormaPago", "selectTipoTercero", "selectTipoMoneda", "bienMueble"));
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
        $data = $request->input("bienesMuebles");
        $bienMueble = BienesMuebles::find($id);
        $fecha_adquisicion = new Carbon($data["fecha_adquisicion"]);
        $data["fecha_adquisicion"] = $fecha_adquisicion->format("Y-m-d");
        $bienMueble->update($data);
        return redirect()->route("bienes_muebles.index");
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
