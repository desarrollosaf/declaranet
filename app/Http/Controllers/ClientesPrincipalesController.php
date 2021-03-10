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
use App\Declaracion;
use App\Entidad;
use App\motivoBaja;

class ClientesPrincipalesController extends Controller
{
    private $request;
    function __construct(Request $request)
    {
        $this->middleware("auth");
        $this->middleware('CheckDeclaracion');
        $this->request = $request;
    }
    public function index()
    {
        $declaracion=Declaracion::find($this->request->session()->get('declaracion_id'));
        $clientes = $declaracion->clientes;
        $motivos = Arr::pluck(motivoBaja::all(), "valor", "id");
        return view("Clientes.index", compact('clientes', 'motivos'));
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
        foreach ($titulares as $item){
            $titular[$item->id] = $item->valor;
        }

        $regimenFiscal = RegimenFiscal::all();
        $regimen = [];
        foreach ($regimenFiscal as $item){
            $regimen[$item->id] = $item->valor;
        }

        $sectores = sector::all();
        $sector = [];
        foreach ($sectores as $item){
            $sector[$item->id] = $item->valor;
        }

        $lugarDondeReside = lugarDondeReside::all();
        $lugar = [];
        foreach ($lugarDondeReside as $item){
            $lugar[$item->id] = $item->valor;
        }

        $Paises = Pais::all();
        $Pais = [];
        foreach ($Paises as $item){
            $Pais[$item->id] = $item->valor;
        }

        $Entidad = Entidad::all();
        $entidad = [];
        foreach ($Entidad as $item){
            $entidad[$item->id] = $item->entidad;
        }
        $tipoOperacion = 1;
        return view("Clientes.create",compact("selectRespuestas",'titular','regimen','sector','lugar','Pais','entidad','tipoOperacion'));
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
        $clientes["tipo_operacion_id"] = 1;
        Clientes::create($clientes);
        return redirect("clientes_principales");
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
        $selectRespuestas = Arr::pluck(Respuesta::all(), 'respuesta','id');
        $titular = Arr::pluck(tipoRelacion::all(), 'valor','id');
        $regimen = Arr::pluck(RegimenFiscal::all(), 'valor','id');
        $sector = Arr::pluck(sector::all(), 'valor','id');
        $lugar = Arr::pluck(lugarDondeReside::all(), 'valor','id');
        $Pais = Arr::pluck(Pais::all(), 'valor','id');
        $entidad = Arr::pluck(Entidad::all(), 'entidad','id');
        $tipoOperacion = 1;
        return view("Clientes.edit", compact('clientes','selectRespuestas','titular','regimen','sector','lugar','Pais','entidad','tipoOperacion'));

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
        
        if ($cliente->enviado) {
            $clientes["tipo_operacion_id"] = 2;
        }
        
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
        $clientes = Clientes::find($this->request->id);
        
        if (!$clientes->enviado) {
            $clientes->delete();
        } else {
            $clientes->update(["tipo_operacion_id" => 4, "motivo_baja_id" => $this->request->motivo_baja_id]);
        }
        
        return redirect()->route("clientes_principales.index");
    }
}
