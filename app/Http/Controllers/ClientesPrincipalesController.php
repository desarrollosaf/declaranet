<?php

namespace App\Http\Controllers;

use App\Clientes;
use App\RegimenFiscal;
use App\Respuesta;
use Illuminate\Http\Request;
use Illuminate\Support\Arr;
use App\tipoRelacion;
use App\sector;
use App\lugarDondeReside;
use App\Pais;

class ClientesPrincipalesController extends Controller
{
    private $request;
    function __construct(Request $request)
    {
        $this->request = $request;
    }
    public function index()
    {
         return view("Clientes.index");
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $selectRespuestas = Arr::pluck(Respuesta::all(), "respuesta","id");

        $titulares = tipoRelacion::all();
        $titular = [];
        $titular[""] = "SELECCIONA UNA OPCIÓN";
        foreach ($titulares as $item){
            $titular[$item->id] = $item->valor;
        }

        $regimenFiscal = RegimenFiscal::all();
        $regimen = [];
        $regimen[""] = "SELECCIONA UNA OPCIÓN";
        foreach ($regimenFiscal as $item){
            $regimen[$item->id] = $item->valor;
        }

        $sectores = sector::all();
        $sector = [];
        $sector[""] = "SELECCIONA UNA OPCIÓN";
        foreach ($sectores as $item){
            $sector[$item->id] = $item->valor;
        }

        $lugarDondeReside = lugarDondeReside::all();
        $lugar = [];
        $lugar[""] = "SELECCIONA UNA OPCIÓN";
        foreach ($lugarDondeReside as $item){
            $lugar[$item->id] = $item->valor;
        }

        $Paises = Pais::all();
        $Pais = [];
        $Pais[""] = "SELECCIONA UNA OPCIÓN";
        foreach ($Paises as $item){
            $Pais[$item->id] = $item->valor;
        }


        return view("Clientes.create",compact("selectRespuestas",'titular','regimen','sector','lugar','Pais'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $clientes = $this->request->input("clientes");
        $clientes['declaracion_id']=$this->request->session()->get('declaracion_id');
        Clientes::create($clientes);
        return redirect("clientes");
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
        $clientes = Clientes::find($id);
        $selectRespuestas = Arr::pluck(Respuesta::all(), 'valor','id');
        $titular = Arr::pluck(tipoRelacion::all(), 'valor','id');
        $regimen = Arr::pluck(RegimenFiscal::all(), 'valor','id');
        $sector = Arr::pluck(sector::all(), 'valor','id');
        $lugar = Arr::pluck(lugarDondeReside::all(), 'valor','id');
        $Pais = Arr::pluck(Pais::all(), 'valor','id');
        return view("Clientes.edit", compact('clientes','selectRespuestas','titular','regimen','sector','lugar','Pais'));

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
        $clientes = $request->input("clientes");
        $cliente= Clientes::find($id);
        $cliente->update($clientes);
        return redirect("clientes_principales");
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $clientes = Clientes::find($id);
        $clientes->delete();
        return redirect()->route("clientes_principales.index");
    }
}
