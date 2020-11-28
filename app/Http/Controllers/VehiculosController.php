<?php

namespace App\Http\Controllers;

use App\Pais;
use App\tipoVehiculo;
use App\Vehiculo;
use Illuminate\Http\Request;
use App\relacionTransmisor;
use App\lugarDondeReside;
use App\formaAdquisicion;
use App\FormasPagos;
use App\RegimenFiscal;


class VehiculosController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
      return view("Vehiculos.index");
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
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

        $formaAdquisicion = formaAdquisicion::all();
        $tipoAdquisicion = [];
        $tipoAdquisicion[""] = "SELECCIONA UNA OPCIÓN";
        foreach ($formaAdquisicion as $item){
            $tipoAdquisicion[$item->id] = $item->valor;
        }

        $FormasPagos = FormasPagos::all();
        $pago = [];
        $pago[""] = "SELECCIONA UNA OPCIÓN";
        foreach ($FormasPagos as $item){
            $pago[$item->id] = $item->valor;
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

        return view("Vehiculos.create", compact('vehiculo',  'relacion', 'registro', 'tipoAdquisicion', 'pago', 'pais', 'regimen'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $vehiculos = $this->request->input("vehiculos");
        $vehiculos['declaracion_id']=$this->request->session()->get('declaracion_id');
        Vehiculo::create($vehiculos);
        return redirect("Vehiculos");
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
