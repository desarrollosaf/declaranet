<?php

namespace App\Http\Controllers;

use App\BienesMuebles;
use App\Declaracion;
use App\motivoBaja;
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

    public function __construct(Request $request)
    {
        $this->middleware("auth");
        $this->request = $request;
    }

    public function index()
    {
        $declaracion = Declaracion::find($this->request->session()->get('declaracion_id'));
        $bienesMuebles = $declaracion->BienesMuebles;
        $baja = Arr::pluck(motivoBaja::all(), "valor", "id");
        return view("BienesMuebles.index", compact("bienesMuebles","baja"));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $selectTitular = Arr::pluck(titularBien::all(), "valor", "id");
        $selectTipoBien = Arr::pluck(tipoBienBienesMuebles::all(), "valor", "id");
        $selectTransmisores = Arr::pluck(RegimenFiscal::all(), "valor", "id");
        $selectRelacionTransmisor = Arr::pluck(relacionTransmisor::all(), "valor", "id");
        $selectFormaAdquisicion = Arr::pluck(formaAdquisicion::all(), "valor", "id");
        $selectFormaPago = Arr::pluck(FormasPagos::all(), "valor", "id");
        $selectTipoTercero = Arr::pluck(RegimenFiscal::all(), "valor", "id");
        $selectTipoMoneda = Arr::pluck(tipoMoneda::orderBy("valor", "ASC")->get(), "valor", "id");
        $baja = Arr::pluck(motivoBaja::all(), "valor", "id");
        $tipoOperacion = 1;
        return view("BienesMuebles.create", compact('selectTitular', 'selectTipoBien', 'selectTransmisores', 'selectRelacionTransmisor', 'selectFormaAdquisicion', 'selectFormaPago', 'selectTipoTercero', 'selectTipoMoneda','tipoOperacion','baja'));

    }

    /**
     * Store a newly created resource in storage.
     *
     * @param \Illuminate\Http\Request $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $bienesMuebles = $request->input("bienesMuebles");
        $bienesMuebles["tipo_operacion_id"] = 1;
        $fecha_adquisicion = new Carbon($bienesMuebles["fecha_adquisicion"]);
        $bienesMuebles["fecha_adquisicion"] = $fecha_adquisicion->format("Y-m-d");
        $declarante = Declaracion::find($request->session()->get("declaracion_id"));
        $declarante->BienesMuebles()->create($bienesMuebles);
        return redirect()->route("bienes_muebles.index");
    }

    /**
     * Display the specified resource.
     *
     * @param int $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param int $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $selectTitular = Arr::pluck(titularBien::all(), "valor", "id");
        $selectTipoBien = Arr::pluck(tipoBienBienesMuebles::all(), "valor", "id");
        $selectTransmisores = Arr::pluck(RegimenFiscal::all(), "valor", "id");
        $selectRelacionTransmisor = Arr::pluck(relacionTransmisor::all(), "valor", "id");
        $selectFormaAdquisicion = Arr::pluck(formaAdquisicion::all(), "valor", "id");
        $selectFormaPago = Arr::pluck(FormasPagos::all(), "valor", "id");
        $selectTipoTercero = Arr::pluck(RegimenFiscal::all(), "valor", "id");
        $selectTipoMoneda = Arr::pluck(tipoMoneda::orderBy("valor", "ASC")->get(), "valor", "id");
        $bienMueble = BienesMuebles::find($id);
        $baja = Arr::pluck(motivoBaja::all(), "valor", "id");
        if($bienMueble->enviado){
            $tipoOperacion = 2;
        }else{
            $tipoOperacion = 1;
        }
        return view("BienesMuebles.edit", compact("selectTitular", "selectTipoBien", "selectTransmisores", "selectRelacionTransmisor", "selectFormaAdquisicion", "selectFormaPago", "selectTipoTercero", "selectTipoMoneda", "bienMueble",'tipoOperacion','baja'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param \Illuminate\Http\Request $request
     * @param int $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $data = $request->input("bienesMuebles");
        $bienMueble = BienesMuebles::find($id);
        $fecha_adquisicion = new Carbon($data["fecha_adquisicion"]);
        $data["fecha_adquisicion"] = $fecha_adquisicion->format("Y-m-d");
        if($bienMueble->enviado){
            $data["tipo_operacion_id"] = 2;
        }
        $bienMueble->update($data);
        return redirect()->route("bienes_muebles.index");
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param int $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {

        $BienesMuebles = BienesMuebles::find($id);
        if($BienesMuebles->enviado){
            $BienesMuebles->update(["tipo_operacion_id" => 4,"motivo_bajas_id" => $this->request->motivo_bajas_id, "motivo_baja" => $this->request->motivo_baja]);
        }else{
            $BienesMuebles->delete();
        }
        return redirect()->route("bienes_muebles.index");
    }
}
