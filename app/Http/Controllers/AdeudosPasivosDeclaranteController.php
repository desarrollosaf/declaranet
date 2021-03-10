<?php

namespace App\Http\Controllers;

use App\AdeudosPasivos;
use App\Declaracion;
use App\motivoBaja;
use App\tipoMoneda;
use App\Entidad;
use Illuminate\Http\Request;
use Illuminate\Support\Arr;

class AdeudosPasivosDeclaranteController extends Controller
{

    private $request;
    public function __construct(Request $request) {
        $this->middleware("auth");
        $this->request=$request;
        $this->middleware('CheckDeclaracion');
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
        $baja = Arr::pluck(motivoBaja::all(), "valor", "id");
        return view("adeudosDeclarante.index", compact('adeudos','baja'));
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

        $tipoMonedaOtros = tipoMoneda::where("clave","!=","MXN")->orderBy("valor","asc")->get();
        $tipoMonedaMexico = tipoMoneda::whereClave("MXN")->get();
        $tipoMonedas = $tipoMonedaMexico->merge($tipoMonedaOtros);
        $tipoMoneda = Arr::pluck($tipoMonedas,"valor","id");

        $lugarUbicacion = Arr::pluck(\App\LugarUbicacion::all(), "valor","id");
        $entidades = Arr::pluck(\App\Entidad::all(), "entidad","id");
        $paises = Arr::pluck(\App\Pais::all(), "valor","id");
        $baja = Arr::pluck(motivoBaja::all(), "valor", "id");
        $tipoOperacion = 1;
        return view('adeudosDeclarante.create', compact('tipoDeclarante', 'tipoAdeudos', 'tipoPersona', 'lugarUbicacion', 'paises', 'tipoMoneda', 'entidades','tipoOperacion','baja'));
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
        $adeudoDeclarante["tipo_operacion_id"] = 1;
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
        $entidades = Arr::pluck(\App\Entidad::all(), "entidad","id");
        $tipoMoneda = Arr::pluck(\App\tipoMoneda::all(), "valor","id");
        $adeudos = AdeudosPasivos::find($id);
        $baja = Arr::pluck(motivoBaja::all(), "valor", "id");
        if($adeudos->enviado){
            $tipoOperacion = 2;
        }else{
            $tipoOperacion = 1;
        }
        return view("adeudosDeclarante.edit", compact('tipoDeclarante', 'tipoAdeudos', 'tipoPersona', 'lugarUbicacion', 'paises', 'adeudos', 'entidades', 'tipoMoneda','tipoOperacion','baja'));
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
        if($adeudoDeclarante->enviado){
            $data["tipo_operacion_id"] = 2;
        }
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
        $adeudoDeclarante = AdeudosPasivos::find($this->request->id);
        if($adeudoDeclarante->enviado){
            $adeudoDeclarante->update(["tipo_operacion_id" => 4,"motivo_bajas_id" => $this->request->motivo_bajas_id, "motivo_baja" => $this->request->motivo_baja]);
        }else{
            $adeudoDeclarante->delete();
        }
        return redirect()->route("adeudos.index");
    }
}
