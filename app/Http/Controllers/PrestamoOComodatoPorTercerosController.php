<?php

namespace App\Http\Controllers;

use App\Declaracion;
use App\Entidad;
use App\lugarDondeReside;
use App\LugarUbicacion;
use App\Pais;
use App\PrestamoComodato;
use App\RegimenFiscal;
use App\relacionTransmisor;
use App\TipoBienEnajenacionBienes;
use App\TipoInmueble;
use App\tipoVehiculo;
use Illuminate\Http\Request;
use Illuminate\Support\Arr;

class PrestamoOComodatoPorTercerosController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function __construct(Request $request)
    {
        $this->middleware("auth");
        $this->request = $request;
    }

    public function index()
    {
        $declaracion = Declaracion::find($this->request->session()->get("declaracion_id"));
        $prestamos = $declaracion->prestamosComodato;
        return view("Prestamos.index", compact("prestamos"));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $tipoEna = TipoBienEnajenacionBienes::where('id', '!=', 1)->get();
        $selectTipoBien = [];
        $selectTipoBien[0] = "Selecciona una opción";
        foreach ($tipoEna as $item) {
            $selectTipoBien[$item->id] = $item->valor;
        }
//        $selectTipoBien = Arr::pluck(TipoBienEnajenacionBienes::where('id', '!=', 1)->get(), "valor", "id");
//        array_unshift($selectTipoBien, "Selecciona una opción");

        $vehiculo = Arr::pluck(tipoVehiculo::all(), "valor", "id");
        array_unshift($vehiculo, "Selecciona una opción");

        $relacion = Arr::pluck(relacionTransmisor::all(), "valor", "id");
        array_unshift($relacion, "Selecciona una opción");

        $registro = Arr::pluck(lugarDondeReside::where('id', '!=', '3')->get(), "valor", "id");
        array_unshift($registro, "Selecciona una opción");

        $pais = Arr::pluck(Pais::all(), "valor", "id");
        array_unshift($pais, "Selecciona una opción");

        $regimen = Arr::pluck(RegimenFiscal::all(), "valor", "id");
        array_unshift($regimen, "Selecciona una opción");

        $selecttipoInmueble = Arr::pluck(TipoInmueble::all(), "valor", "id");
        array_unshift($selecttipoInmueble, "Selecciona una opcion");

        $selectubicacionInmueble = Arr::pluck(LugarUbicacion::all(), "valor", "id");
        array_unshift($selectubicacionInmueble, "Selecciona una opcion");

        $selectEntidad = Arr::pluck(Entidad::all(), "entidad", "id");
        array_unshift($selectEntidad, "Selecciona una opcion");
        return view("Prestamos.create", compact('selectTipoBien', 'vehiculo', 'registro', 'relacion', 'pais', 'regimen', 'selecttipoInmueble', 'selectubicacionInmueble', 'selectEntidad'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param \Illuminate\Http\Request $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $idDeclaracion = $request->session()->get("declaracion_id");
        $prestamComodatoData = $request->input("prestamo");
        $prestamComodatoData["declaracion_id"] = $idDeclaracion;
        $prestamoComodato = PrestamoComodato::create($prestamComodatoData);
        if ($prestamComodatoData["tipo_bien_id"] == 2) {
            $bienInmueble = $request->input("bienesinmuebles");
            $domicilio = $request->input("domicilio");
            $domicilioExt = $request->input("domicilioExt");
            $bienInmueble["declaracion_id"] = $idDeclaracion;
            $domicilio["declaracion_id"] = $idDeclaracion;
            $bien = $prestamoComodato->inmuebles()->create($bienInmueble);
            if (isset($bienInmueble["ubicacion_inmueble_id"]) && $bienInmueble["ubicacion_inmueble_id"] == 2) {
                $domicilio['calle'] = $domicilioExt['calleExt'];
                $domicilio['num_ext'] = $domicilioExt['numextExt'];
                $domicilio['num_int'] = $domicilioExt['numintExt'];
                $domicilio['colonia'] = $domicilioExt['coloniaExt'];
                $domicilio['entidad'] = $domicilioExt['estadoprovincia'];
                $domicilio['codigo_postal'] = $domicilioExt['codigopostalExt'];
            }
            if ($domicilio['entidad_id'] == 0) {
                $domicilio['entidad_id'] = null;
            }
            if (isset($domicilio['municipio_id']) && $domicilio['municipio_id'] == 0) {
                $domicilio['municipio_id'] = null;
            }
            if ($domicilio['pais_id'] == 0) {
                $domicilio['pais_id'] = null;
            }
            $bien->domicilio()->create($domicilio);

        } elseif ($prestamComodatoData["tipo_bien_id"] == 3) {
            $vehiculo = $request->input("vehiculos");
            $vehiculo["declaracion_id"] = $idDeclaracion;
            if ($vehiculo['pais_id'] == 0) {
                $vehiculo['pais_id'] = null;
            }
            $prestamoComodato->vehiculos()->create($vehiculo);
        }
        return redirect()->route("prestamos.index");

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
        $tipoEna = TipoBienEnajenacionBienes::where('id', '!=', 1)->get();
        $selectTipoBien = [];
        $selectTipoBien[0] = "Selecciona una opción";
        foreach ($tipoEna as $item) {
            $selectTipoBien[$item->id] = $item->valor;
        }
//        $selectTipoBien = Arr::pluck(TipoBienEnajenacionBienes::where('id', '!=', 1)->get(), "valor", "id");
//        array_unshift($selectTipoBien, "Selecciona una opción");

        $vehiculo = Arr::pluck(tipoVehiculo::all(), "valor", "id");
        array_unshift($vehiculo, "Selecciona una opción");

        $relacion = Arr::pluck(relacionTransmisor::all(), "valor", "id");
        array_unshift($relacion, "Selecciona una opción");

        $registro = Arr::pluck(lugarDondeReside::where('id', '!=', '3')->get(), "valor", "id");
        array_unshift($registro, "Selecciona una opción");

        $pais = Arr::pluck(Pais::all(), "valor", "id");
        array_unshift($pais, "Selecciona una opción");

        $regimen = Arr::pluck(RegimenFiscal::all(), "valor", "id");
        array_unshift($regimen, "Selecciona una opción");

        $selecttipoInmueble = Arr::pluck(TipoInmueble::all(), "valor", "id");
        array_unshift($selecttipoInmueble, "Selecciona una opcion");

        $selectubicacionInmueble = Arr::pluck(LugarUbicacion::all(), "valor", "id");
        array_unshift($selectubicacionInmueble, "Selecciona una opcion");

        $selectEntidad = Arr::pluck(Entidad::all(), "entidad", "id");
        array_unshift($selectEntidad, "Selecciona una opcion");
        $prestamo = PrestamoComodato::find($id);
        $vehiculos = $prestamo->vehiculos;
        $bienesinmuebles = $prestamo->inmuebles;

        if ($vehiculos != null) {
            return view("Prestamos.edit", compact('selectTipoBien', 'vehiculo', 'registro', 'relacion', 'pais', 'regimen', 'selecttipoInmueble', 'selectubicacionInmueble', 'selectEntidad', 'prestamo', 'vehiculos'));
        } else {
            $domicilio = $prestamo->inmuebles->domicilio;
            return view("Prestamos.edit", compact('selectTipoBien', 'vehiculo', 'registro', 'relacion', 'pais', 'regimen', 'selecttipoInmueble', 'selectubicacionInmueble', 'selectEntidad', 'prestamo', 'bienesinmuebles', 'domicilio'));

        }

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
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param int $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        PrestamoComodato::destroy($id);
        return redirect()->back();
    }
}
