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
        return view("donativos.index", compact("donativos"));
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
        //dd($donativo);
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
        $data = $request->input("donativos");
        $donativo = Donativo::find($id);
        $donativo->update($data);
        return redirect()->route("donativos.index");
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
      $donativo = Donativo::find($id)->delete();
      return redirect()->route("donativos.index");
    }
}
