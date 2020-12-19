<?php

namespace App\Http\Controllers;

use App\AdeudosPasivos;
use App\Declaracion;
use App\tipoMoneda;
use Illuminate\Http\Request;
use Illuminate\Support\Arr;

class AdeudosPasivosDeclaranteController extends Controller
{

    private $request;
    public function __construct(Request $request) {
        $this->middleware("auth");
        $this->request=$request;
    }
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $declaracion=Declaracion::find($this->request->session()->get('declaracion_id'));
        $adeudos = $declaracion->adeudos_pasivos;
        return view("adeudosDeclarante.index", compact('adeudos'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $tipoDeclarante = Arr::pluck(\App\titularInversion::all(), "valor","id");
        $tipoAdeudos = Arr::pluck(\App\tipoAdeudo::all(), "valor","id");
        $tipoPersona = Arr::pluck(\App\tipoPersona::all(), "valor","id");
        $tipoMoneda = Arr::pluck(\App\tipoMoneda::all(), "valor","id");
        $lugarUbicacion = Arr::pluck(\App\LugarUbicacion::all(), "valor","id");
        $paises = Arr::pluck(\App\Pais::all(), "valor","id");
        return view('adeudosDeclarante.create', compact('tipoDeclarante', 'tipoAdeudos', 'tipoPersona', 'lugarUbicacion', 'paises', 'tipoMoneda'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $adeudoDeclarante = $this->request->input("adeudos");
        $adeudoDeclarante['declaracion_id']=$this->request->session()->get('declaracion_id');
        //dd($inversionesDeclarante);
        AdeudosPasivos::create($adeudoDeclarante);
        return redirect()->route("adeudos.index");
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
        $tipoDeclarante = Arr::pluck(\App\titularInversion::all(), "valor","id");
        $tipoAdeudos = Arr::pluck(\App\tipoAdeudo::all(), "valor","id");
        $tipoPersona = Arr::pluck(\App\tipoPersona::all(), "valor","id");
        $lugarUbicacion = Arr::pluck(\App\LugarUbicacion::all(), "valor","id");
        $paises = Arr::pluck(\App\Pais::all(), "valor","id");
        $adeudos = AdeudosPasivos::find($id);

        return view("adeudosDeclarante.edit", compact('tipoDeclarante', 'tipoAdeudos', 'tipoPersona', 'lugarUbicacion', 'paises', 'adeudos'));
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
        $data = $request->input("adeudos");
        $adeudoDeclarante = AdeudosPasivos::find($id);
        $adeudoDeclarante->update($data);
        return redirect()->route("adeudos.index");
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $adeudoDeclarante = AdeudosPasivos::find($id);
        $adeudoDeclarante->delete();
        return redirect()->route("adeudos.index");
    }
}
