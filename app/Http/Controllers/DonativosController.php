<?php

namespace App\Http\Controllers;

use App\Donativo;
use App\tipoMoneda;
use App\Declaracion;
use App\Entidad;
use App\Tipo_Donativo;
use App\formaRecepcion;
use App\TipoTitularDonativo;
use App\FormaRecepcionDonativo;
use Illuminate\Http\Request;
use Illuminate\Support\Arr;
USE App\motivoBaja;

class DonativosController extends Controller
{
    private $request;
    public function __construct(Request $request) {
        $this->middleware("auth");
        $this->request=$request;
    }
    public function index()
    {
        $declaracion=Declaracion::find($this->request->session()->get('declaracion_id'));
        $donativos = $declaracion->donativos;
        $motivos = Arr::pluck(motivoBaja::all(), "valor","id");
        return view("donativos.index", compact("donativos","motivos"));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $tipoDonativo = Arr::pluck(Tipo_Donativo::all(), "valor", "id");
        $formaRecepcion = Arr::pluck(FormaRecepcionDonativo::all(), "valor", "id");
        $tipoTitular = Arr::pluck(TipoTitularDonativo::all(), "valor", "id");
        $tipoMoneda = Arr::pluck(tipoMoneda::all(), "valor", "id");

        return view("donativos.create", compact("tipoDonativo","formaRecepcion", "tipoTitular","tipoMoneda"));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $donativo = $request->input("donativos");
        $declaracion = Declaracion::find($request->session()->get("declaracion_id"));
        $donativo["tipo_operacion_id"] = 1;
        $declaracion->donativos()->create($donativo);
        return redirect()->route("donativos.index");
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
        $donativo = Donativo::find($id);
        $tipoDonativo = Arr::pluck(Tipo_Donativo::all(), "valor", "id");
        $formaRecepcion = Arr::pluck(FormaRecepcionDonativo::all(), "valor", "id");
        $tipoTitular = Arr::pluck(TipoTitularDonativo::all(), "valor", "id");
        $tipoMoneda = Arr::pluck(tipoMoneda::all(), "valor", "id");
        return view("donativos.edit", compact("tipoDonativo","formaRecepcion", "tipoTitular","tipoMoneda", "donativo"));
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
        $donativo = Donativo::find($id);
        $do = $request->input('donativos');
        if($donativo->enviado){
            $do["tipo_operacion_id"] = 2;
        }
        $donativo->update($do);
        return redirect()->route('donativos.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
      $donativo = Donativo::find($this->request->id);
      if(!$donativo->enviado){
            $donativo->delete();
        }else{
            $donativo->update(["tipo_operacion_id" => 4,"motivo_baja_id" => $this->request->motivo_baja_id]);
            
        }
      return redirect()->route("donativos.index");
    }
}

