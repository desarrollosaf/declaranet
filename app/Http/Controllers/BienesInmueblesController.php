<?php

namespace App\Http\Controllers;

use App\tipoMoneda;
use Illuminate\Http\Request;
use Illuminate\Support\Arr;
use App\motivoBaja;

class BienesInmueblesController extends Controller {

    private $request;
    public function __construct(Request $request) {
        $this->request = $request;
    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index() {
        $bienes = \App\Declaracion::find($this->request->session()->get('declaracion_id'))->bienes_inmuebles;
        $motivos = Arr::pluck(motivoBaja::all(), "valor", "id");
        return view("BienesInmuebles.index", compact('bienes','motivos'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create() {
        //COMBO TIPO INMUEBLE
        $selecttipoInmueble = Arr::pluck(\App\TipoInmueble::all(), "valor", "id");

        //COMBO TITULAR INMUEBLE
        $selecttitularInmueble = Arr::pluck(\App\Titular::all(), "valor", "id");


        //COMBO FORMA ADQUISICIÓN
        $selectformaAdquisicion = Arr::pluck(\App\formaAdquisicion::all(), "valor", "id");

        //COMBO FORMA DE PAGO
        $selectformaPago = Arr::pluck(\App\FormasPagos::all(), "valor", "id");

        //COMBO RELACION TRANSMISOR
        $selectRelacionTransmisor = Arr::pluck(\App\relacionTransmisor::all(), "valor", "id");

        //COMBO VALOR CONFORME A
        $selectvalorConforme = Arr::pluck(\App\valorConformeA::all(), "valor", "id");

        //COMBO UBICACION INMUEBLE
        $selectubicacionInmueble = Arr::pluck(\App\LugarUbicacion::all(), "valor", "id");

        //COMBO REGIMEN FISCAL
        $selectRegimenFiscal = Arr::pluck(\App\regimenFiscal::all(), "valor", "id");

        //COMBO ENTIDAD
        $selectEntidad = Arr::pluck(\App\Entidad::all(), "entidad", "id");

        //COMBO TIPO MONEDA

        $tipoMonedaOtros = tipoMoneda::where("clave","!=","MXN")->orderBy("valor","asc")->get();
        $tipoMonedaMexico = tipoMoneda::whereClave("MXN")->get();
        $tipoMoneda = $tipoMonedaMexico->merge($tipoMonedaOtros);
        $selectMoneda = Arr::pluck($tipoMoneda,"valor","id");

        //COMBO ENTIDAD
        $selectEntidad = Arr::pluck(\App\Entidad::all(), "entidad", "id");

        //COMBO MUNICIPIO
        $selectMunicipio = Arr::pluck(\App\Municipio::all(), "municipio", "id");


        $selectPais = Arr::pluck(\App\Pais::all(),'valor',"id");

        $tipoOperacion = 1;


        return view("BienesInmuebles.create", compact('selecttipoInmueble', 'selecttitularInmueble', 'selectformaAdquisicion', 'selectformaPago', 'selectRelacionTransmisor', 'selectvalorConforme', 'selectubicacionInmueble', 'selectRegimenFiscal','selectPais', 'selectEntidad', 'selectMunicipio', 'selectMoneda','tipoOperacion'));


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
            $domicilio['municipio_id'] = $domicilio['municipio_id'];
            $domicilio['entidad_id'] = $domicilio['entidad_id'];
            $domicilio['codigo_postal'] = $domicilio['codigo_postal'];
        } else if ($bien['ubicacion_inmueble_id'] == 2) {
            $domicilio['calle'] = $domicilio['calleExt'];
            $domicilio['num_ext'] = $domicilio['num_extExt'];
            $domicilio['num_int'] = $domicilio['numintExt'];
            $domicilio['colonia'] = $domicilio['colonia_Ext'];
            $domicilio['entidad'] = $domicilio['entidadExt'];
            $domicilio['pais'] = $domicilio['pais'];
            $domicilio['codigo_postal'] = $domicilio['codigo_postalExt'];
        }

        //dd($bien);
        $bien['declaracion_id'] = $request -> session() -> get('declaracion_id');
        $curriculares["tipo_operacion_id"] = 1;
//        dd($bien);
        $declaracion = \App\Declaracion::find($request -> session() -> get('declaracion_id'));
        $inmueble = $declaracion->bienes_inmuebles()->create($bien);
        $inmueble->domicilio()->create($domicilio);
        return redirect()->route('bienes_inmuebles.index');
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
       //COMBO TIPO INMUEBLE
        $selecttipoInmueble = Arr::pluck(\App\TipoInmueble::all(), "valor", "id");

        //COMBO TITULAR INMUEBLE
        $selecttitularInmueble = Arr::pluck(\App\Titular::all(), "valor", "id");

        //COMBO FORMA ADQUISICIÓN
        $selectformaAdquisicion = Arr::pluck(\App\formaAdquisicion::all(), "valor", "id");

        //COMBO FORMA DE PAGO
        $selectformaPago = Arr::pluck(\App\FormasPagos::all(), "valor", "id");

        //COMBO RELACION TRANSMISOR
        $selectRelacionTransmisor = Arr::pluck(\App\relacionTransmisor::all(), "valor", "id");

        //COMBO VALOR CONFORME A
        $selectvalorConforme = Arr::pluck(\App\valorConformeA::all(), "valor", "id");

        //COMBO UBICACION INMUEBLE
        $selectubicacionInmueble = Arr::pluck(\App\LugarUbicacion::all(), "valor", "id");

        //COMBO REGIMEN FISCAL
        $selectRegimenFiscal = Arr::pluck(\App\regimenFiscal::all(), "valor", "id");

        //COMBO ENTIDAD
        $selectEntidad = Arr::pluck(\App\Entidad::all(), "entidad", "id");

        //COMBO TIPO MONEDA
        $selectMoneda = Arr::pluck(\App\tipoMoneda::all(), "valor", "id");

        //COMBO MUNICIPIO
        $selectMunicipio = Arr::pluck(\App\Municipio::all(), "municipio", "id");


         $selectPais = Arr::pluck(\App\Pais::all(),'valor',"id");

        $bien = \App\BienInmueble::find($id);
        $domicilio = $bien->domicilio;
//        dd($bien->domicilio);
        $tipoOperacion = 1;
        return view("BienesInmuebles.edit", compact('selecttipoInmueble', 'selecttitularInmueble', 'selectformaAdquisicion', 'selectformaPago', 'selectRelacionTransmisor', 'selectvalorConforme', 'selectubicacionInmueble', 'selectRegimenFiscal', 'selectEntidad', 'selectMoneda', 'selectMunicipio', 'bien','selectPais', 'domicilio','tipoOperacion'));


    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id) {
        $bienrow = \App\BienInmueble::find($id);

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
        //dd($bien['tipo_transmisor_id']);
        //TIPO TRANSMISOR
        if ($bien['tipo_transmisor_id'] == 1) {
            $bien['nombre_razon_transmisor'] = $bien['nombreTransmisorF'];
            $bien['rfc_transmisor'] = $bien['rfcTransmisorF'];
        } else if ($bien['tipo_transmisor_id'] == 2) {
            $bien['nombre_razon_transmisor'] = $bien['nombreTransmisorM'];
            $bien['rfc_transmisor'] = $bien['rfcTransmisorM'];
        }

        //UBICACION INMUEBLE
        if ($bien['tipo_transmisor_id'] == 1) {
            $bien['nombre_razon_transmisor'] = $bien['nombreTransmisorF'];
            $bien['rfc_transmisor'] = $bien['rfcTransmisorF'];
        } else if ($bien['tipo_transmisor_id'] == 2) {
            $bien['nombre_razon_transmisor'] = $bien['nombreTransmisorM'];
            $bien['rfc_transmisor'] = $bien['rfcTransmisorM'];
        }

        $domicilio = $request->input('domicilio');

        if ($bien['ubicacion_inmueble_id'] == 1) {
            $domicilioB['calle'] = $domicilio['calle'];
            $domicilioB['num_ext'] = $domicilio['num_ext'];
            $domicilioB['num_int'] = $domicilio['num_int'];
            $domicilioB['colonia'] = $domicilio['colonia'];
            $domicilioB['municipio_id'] = $domicilio['municipio_id'];
            $domicilioB['entidad_id'] = $domicilio['entidad_id'];
            $domicilioB['codigo_postal'] = $domicilio['codigo_postal'];
        } else if ($bien['ubicacion_inmueble_id'] == 2) {
            $domicilioB['calle'] = $domicilio['calleExt'];
            $domicilioB['num_ext'] = $domicilio['numextExt'];
            $domicilioB['num_int'] = $domicilio['numintExt'];
            $domicilioB['colonia'] = $domicilio['coloniaExt'];
            $domicilioB['entidad'] = $domicilio['estadoprovincia'];
            $domicilioB['pais'] = $domicilio['pais'];
            $domicilioB['codigo_postal'] = $domicilio['codigopostalExt'];
        }


        //dd($bien);
        if($bienrow->enviado){
            $bien["tipo_operacion_id"] = 2;
        }
        $bienrow->update($bien);
        if($bienrow->domicilio->enviado){
            $domicilioB["tipo_operacion_id"] = 2;
        }
        $bienrow->domicilio()->update($domicilioB);
        return redirect()->route('bienes_inmuebles.index');



    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id) {
        if(isset($this->request->id)){
            $id = $this->request->id;
        }
        $bien = \App\BienInmueble::find($id);
        if(!$bien->enviado){
            $bien->delete();
        }else{
            $bien->update(["tipo_operacion_id" => 4,"motivo_baja_id" => $this->request->motivo_baja_id]);
        }
        return redirect()->back();
    }

}
