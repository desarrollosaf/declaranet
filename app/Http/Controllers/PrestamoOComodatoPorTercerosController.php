<?php

namespace App\Http\Controllers;

use App\formaAdquisicion;
use App\FormasPagos;
use App\lugarDondeReside;
use App\LugarUbicacion;
use App\Pais;
use App\RegimenFiscal;
use App\relacionTransmisor;
use App\tipoAdeudo;
use App\TipoBienEnajenacionBienes;
use App\TipoInmueble;
use App\tipoVehiculo;
use App\Titular;
use Illuminate\Http\Request;
use Illuminate\Support\Arr;

class PrestamoOComodatoPorTercerosController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view("Prestamos.index");
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $selectTipoBien = Arr::pluck(TipoBienEnajenacionBienes::where('id', '!=', 1)->get(), "valor", "id");
        array_unshift($selectTipoBien, "Selecciona una opción");
        $tipoVehiculo = tipoVehiculo::all();
        $vehiculo = [];
        $vehiculo[""] = "SELECCIONA UNA OPCIÓN";
        foreach ($tipoVehiculo as $item){
            $vehiculo[$item->id] = $item->valor;
        }

        $relacionTransmisor = relacionTransmisor::all();
        $relacion = [];
        $relacion[""] = "SELECCIONA UNA OPCIÓN";
        foreach ($relacionTransmisor as $item){
            $relacion[$item->id] = $item->valor;
        }

        $lugarDondeReside = lugarDondeReside::all();
        $registro = [];
        $registro[""] = "SELECCIONA UNA OPCIÓN";
        foreach ($lugarDondeReside as $item){
            $registro[$item->id] = $item->valor;
        }
        $Paises = Pais::all();
        $pais = [];
        $pais[""] = "SELECCIONA UNA OPCIÓN";
        foreach ($Paises as $item){
            $pais[$item->id] = $item->valor;
        }

        $RegimenFiscal = RegimenFiscal::all();
        $regimen = [];
        $regimen[""] = "SELECCIONA UNA OPCIÓN";
        foreach ($RegimenFiscal as $item){
            $regimen[$item->id] = $item->valor;
        }

        $titular_inmueble = Titular::all();
        $titular = [];
        $titular[""] = "SELECCIONA UNA OPCIÓN";
        foreach ($titular_inmueble as $item){
            $titular[$item->id] = $item->valor;
        }
        $selecttipoInmueble = Arr::pluck(TipoInmueble::all(), "valor", "id");
        array_unshift($selecttipoInmueble, "Selecciona una opcion");
        $selectubicacionInmueble = Arr::pluck(LugarUbicacion::all(), "valor", "id");
        array_unshift($selectubicacionInmueble, "Selecciona una opcion");
          return view("Prestamos.create", compact('selectTipoBien','vehiculo', 'registro',  'relacion', 'pais', 'regimen', 'titular','selecttipoInmueble','selectubicacionInmueble'));
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
