<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Arr;

class BienesInmueblesController extends Controller {

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index() {
        return view("BienesInmuebles.index");
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create() {
        //COMBO TIPO INMUEBLE
        $selecttipoInmueble = Arr::pluck(\App\TipoInmueble::all(), "valor", "id");
        array_unshift($selecttipoInmueble, "Selecciona una opcion");

        //COMBO TITULAR INMUEBLE
        $selecttitularInmueble = Arr::pluck(\App\Titular::all(), "valor", "id");
        array_unshift($selecttitularInmueble, "Selecciona una opcion");

        //COMBO FORMA ADQUISICIÓN
        $selectformaAdquisicion = Arr::pluck(\App\formaAdquisicion::all(), "valor", "id");
        array_unshift($selectformaAdquisicion, "Selecciona una opcion");

        //COMBO FORMA DE PAGO
        $selectformaPago = Arr::pluck(\App\FormasPagos::all(), "valor", "id");
        array_unshift($selectformaPago, "Selecciona una opcion");

        //COMBO RELACION TRANSMISOR
        $selectRelacionTransmisor = Arr::pluck(\App\relacionTransmisor::all(), "valor", "id");
        array_unshift($selectRelacionTransmisor, "Selecciona una opcion");

        //COMBO VALOR CONFORME A
        $selectvalorConforme = Arr::pluck(\App\valorConformeA::all(), "valor", "id");
        array_unshift($selectvalorConforme, "Selecciona una opcion");

        //COMBO UBICACION INMUEBLE
        $selectubicacionInmueble = Arr::pluck(\App\LugarUbicacion::all(), "valor", "id");
        array_unshift($selectubicacionInmueble, "Selecciona una opcion");

        //COMBO REGIMEN FISCAL
        $selectRegimenFiscal = Arr::pluck(\App\regimenFiscal::all(), "valor", "id");
        array_unshift($selectRegimenFiscal, "Selecciona una opcion");

        //COMBO ENTIDAD
        $selectEntidad = Arr::pluck(\App\Entidad::all(), "entidad", "id");
        array_unshift($selectEntidad, "Selecciona una opcion");


        return view("BienesInmuebles.create", compact('selecttipoInmueble', 'selecttitularInmueble', 'selectformaAdquisicion', 'selectformaPago', 'selectRelacionTransmisor', 'selectvalorConforme', 'selectubicacionInmueble', 'selectRegimenFiscal', 'selectEntidad'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request) {
        $bien = $request->input('bienesinmuebles');
        //TIPO TERCERO
        if ($bien['tipo_tercero_id'] == 1) {
            $bien['nombre_razon_tercero'] = $bien['nombre_razon_tercero_fisica'];
            $bien['rfc_tercero'] = $bien['rfc_tercero_fisica'];
        } else if ($bien['tipo_tercero_id'] == 2) {
            $bien['nombre_razon_tercero'] = $bien['nombre_razon_tercero_moral'];
            $bien['rfc_tercero'] = $bien['rfc_tercero_moral'];
        } else {
            $bien['nombre_razon_tercero'] = null;
            $bien['rfc_tercero'] = null;
            $bien['tipo_tercero_id'] = null;
        }

        //TIPO TRANSMISOR
        if ($bien['tipo_transmisor_id'] == 1) {
            $bien['nombre_razon_transmisor'] = $bien['nombreTransmisorF'];
            $bien['rfc_transmisor'] = $bien['rfcTransmisorF'];
        } else if ($bien['tipo_transmisor_id'] == 2) {
            $bien['nombre_razon_transmisor'] = $bien['nombreTransmisorM'];
            $bien['rfc_transmisor'] = $bien['rfcTransmisorM'];
        }

        //UBICACION INMUEBLE
        if ($bien['ubicacion_inmueble_id'] == 1) {
            $bien['nombre_razon_transmisor'] = $bien['nombreTransmisorF'];
            $bien['rfc_transmisor'] = $bien['rfcTransmisorF'];
        } else if ($bien['tipo_transmisor_id'] == 2) {
            $bien['nombre_razon_transmisor'] = $bien['nombreTransmisorM'];
            $bien['rfc_transmisor'] = $bien['rfcTransmisorM'];
        }

        $domicilio = $request->input('domicilio');

        if ($bien['ubicacion_inmueble_id'] == 1) {
            $domicilio['calle'] = $domicilio['calle'];
            $domicilio['num_ext'] = $domicilio['num_ext'];
            $domicilio['num_int'] = $domicilio['num_int'];
            $domicilio['colonia'] = $domicilio['colonia'];
            $domicilio['municipio'] = $domicilio['municipio'];
            $domicilio['entidad'] = $domicilio['entidadfederativa'];
            $domicilio['codigo_postal'] = $domicilio['codigo_postal'];
        } else if ($bien['ubicacion_inmueble_id'] == 2) {
            $domicilio['calle'] = $domicilio['calleExt'];
            $domicilio['num_ext'] = $domicilio['numextExt'];
            $domicilio['num_int'] = $domicilio['numintExt'];
            $domicilio['colonia'] = $domicilio['coloniaExt'];
            $domicilio['entidad'] = $domicilio['estadoprovincia'];
            $domicilio['pais'] = $domicilio['pais'];
            $domicilio['codigo_postal'] = $domicilio['codigopostalExt'];
        }

        //dd($bien);

        $inmueble = \App\BienInmueble::create($bien);
        $inmueble->domicilio()->create($domicilio);
        return redirect()->route('bienes_inmuebles.create');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id) {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id) {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id) {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id) {
        //
    }

}
