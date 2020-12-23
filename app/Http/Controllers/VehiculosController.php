<?php

namespace App\Http\Controllers;

use App\Entidad;
use App\Pais;
use App\tipoVehiculo;
use App\Vehiculo;
use Illuminate\Http\Request;
use App\relacionTransmisor;
use App\lugarDondeReside;
use App\formaAdquisicion;
use App\FormasPagos;
use App\RegimenFiscal;
use App\Titular;
use App\Declaracion;
use Illuminate\Support\Arr;
use App\tipoMoneda;

class VehiculosController extends Controller
{
    private $request;

    function __construct(Request $request)
    {
        $this->request = $request;
    }

    public function index()
    {
        $declaracion = Declaracion::find($this->request->session()->get('declaracion_id'));
        $vehiculos = $declaracion->vehiculos;

        return view("Vehiculos.index", compact('vehiculos'));
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
        foreach ($tipoVehiculo as $item) {
            $vehiculo[$item->id] = $item->valor;
        }

        $relacionTransmisor = relacionTransmisor::all();
        $relacion = [];
        foreach ($relacionTransmisor as $item) {
            $relacion[$item->id] = $item->valor;
        }

        $lugarDondeReside = lugarDondeReside::all();
        $registro = [];
        foreach ($lugarDondeReside as $item) {
            $registro[$item->id] = $item->valor;
        }

        $formaAdquisicion = formaAdquisicion::all();
        $tipoAdquisicion = [];
        foreach ($formaAdquisicion as $item) {
            $tipoAdquisicion[$item->id] = $item->valor;
        }

        $FormasPagos = FormasPagos::all();
        $pago[""] = [];
        foreach ($FormasPagos as $item) {
            $pago[$item->id] = $item->valor;
        }

        $Paises = Pais::all();
        $pais[""] = [];
        foreach ($Paises as $item) {
            $pais[$item->id] = $item->valor;
        }

        $RegimenFiscal = RegimenFiscal::all();
        $regimen[""] = [];
        foreach ($RegimenFiscal as $item) {
            $regimen[$item->id] = $item->valor;
        }

        $titular_inmueble = Titular::all();
        $titular[""] = [];
        foreach ($titular_inmueble as $item) {
            $titular[$item->id] = $item->valor;
        }

        $entidades = Entidad::all();
        $entidad[""] = [];
        foreach ($entidades as $item) {
            $entidad[$item->id] = $item->entidad;
        }

        $tipoMoneda = tipoMoneda::all();
        $moneda[""] = [];
        foreach ($tipoMoneda as $item) {
            $moneda[$item->id] = $item->valor;
        }

        return view("Vehiculos.create", compact('vehiculo', 'relacion', 'registro', 'tipoAdquisicion', 'pago', 'pais', 'regimen', 'titular', 'entidad', 'moneda'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param \Illuminate\Http\Request $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $vehiculos = $this->request->input("vehiculos");
        $declaracion = Declaracion::find($this->request->session()->get('declaracion_id'));
        $declaracion->vehiculos()->create($vehiculos);
        return redirect("vehiculos");
    }

    /**
     * Display the specified resource.
     *
     * @param int $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {

    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param int $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $vehiculos = Vehiculo::find($id);
        $vehiculo = Arr::pluck(tipoVehiculo::all(), 'valor', 'id');
        $relacion = Arr::pluck(relacionTransmisor::all(), 'valor', 'id');
        $registro = Arr::pluck(lugarDondeReside::all(), "valor", "id");
        $tipoAdquisicion = Arr::pluck(formaAdquisicion::all(), "valor", "id");
        $pago = Arr::pluck(FormasPagos::all(), "valor", "id");
        $pais = Arr::pluck(Pais::all(), "valor", "id");
        $regimen = Arr::pluck(RegimenFiscal::all(), "valor", "id");
        $titular = Arr::pluck(Titular::all(), "valor", "id");
        $entidad = Arr::pluck(Entidad::all(), "entidad", "id");
        $moneda = Arr::pluck(tipoMoneda::all(), "valor", "id");

        return view("Vehiculos.edit", compact('vehiculos', 'vehiculo', 'relacion', 'registro', 'tipoAdquisicion', 'pago', 'pais', 'regimen', 'titular', 'entidad', 'moneda'));
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
        $vehiculos = $request->input("vehiculos");
        $vehiculo = Vehiculo::find($id);
        $vehiculo->update($vehiculos);
        return redirect()->route("vehiculos.index");
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param int $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $vehiculo = Vehiculo::find($id);
        $vehiculo->delete();
        return redirect()->route("vehiculos.index");
    }
}
