<?php

namespace App\Http\Controllers;
use App\Fideicomiso;
use App\sector;
use App\tipoRelacion;
use Illuminate\Http\Request;
use Illuminate\Support\Arr;
use App\tipoParticipacionFideicomiso;
use App\RegimenFiscal;
use App\LugarUbicacion;
use App\Pais;
use App\tipoFideicomiso;
use App\tipoPersonaFideicomiso;
use App\Declaracion;
use App\Entidad;
use App\motivoBaja;

class FideicomisosController extends Controller
{
    private $request;
    function __construct(Request $request)
    {
        $this->request = $request;
    }
    public function index()
    {
        $declaracion=Declaracion::find($this->request->session()->get('declaracion_id'));
        $fideicomisos = $declaracion->fideicomisos;
        $motivos = Arr::pluck(motivoBaja::all(), "valor", "id");
        return view("Fideicomisos.index", compact('fideicomisos', "motivos"));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $tipoParticipacion = tipoRelacion::all();
        $participacion = [];
        $participacion[""] = "SELECCIONA UNA OPCIÓN";
        foreach ($tipoParticipacion as $item){
            $participacion[$item->id] = $item->valor;
        }

        $tipoParticipacionFideicomiso = tipoParticipacionFideicomiso::all();
        $tipoPfideicomiso = [];
        $tipoPfideicomiso[""] = "SELECCIONA UNA OPCIÓN";
        foreach ($tipoParticipacionFideicomiso as $item){
            $tipoPfideicomiso[$item->id] = $item->valor;
        }


        $tipoPersonaFideicomisos = RegimenFiscal::all();
        $tipoPersonaFideicomiso = [];
        $tipoPersonaFideicomiso[""] = "SELECCIONA UNA OPCIÓN";
        foreach ($tipoPersonaFideicomisos as $item){
            $tipoPersonaFideicomiso[$item->id] = $item->valor;
        }

        $sectores = sector::all();
        $sector = [];
        $sector[""] = "SELECCIONA UNA OPCIÓN";
        foreach ($sectores as $item){
            $sector[$item->id] = $item->valor;
        }

        $LugarUbicacion = LugarUbicacion::all();
        $lugar = [];
        $lugar[""] = "SELECCIONA UNA OPCIÓN";
        foreach ($LugarUbicacion as $item){
            $lugar[$item->id] = $item->valor;
        }

        $Pais = Pais::all();
        $pais = [];
        $pais[""] = "SELECCIONA UNA OPCIÓN";
        foreach ($Pais as $item){
            $pais[$item->id] = $item->valor;
        }

        $tipoFideicomiso = tipoFideicomiso::all();
        $fideicomiso = [];
        $fideicomiso[""] = "SELECCIONA UNA OPCIÓN";
        foreach ($tipoFideicomiso as $item){
            $fideicomiso[$item->id] = $item->valor;
        }

        $tipoPersonaFideicomisos = RegimenFiscal::all();
        $tipoPersonaFideicomisoD = [];
        $tipoPersonaFideicomisoD[""] = "SELECCIONA UNA OPCIÓN";
        foreach ($tipoPersonaFideicomisos as $item){
            $tipoPersonaFideicomisoD[$item->id] = $item->valor;
        }

        $entidad = Arr::pluck(Entidad::all(), 'entidad','id');

        $tipoOperacion = "AGREGAR";

        return view("Fideicomisos.create",compact('participacion','tipoPfideicomiso','tipoPersonaFideicomiso','sector','lugar','pais', 'fideicomiso','tipoPersonaFideicomisoD','entidad','tipoOperacion'));

    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $fideicomiso = $this->request->input("fideicomisos");
        $fideicomiso['declaracion_id']=$this->request->session()->get('declaracion_id');
        Fideicomiso::create($fideicomiso);
        return redirect("fideicomisos");
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
        $fideicomisos = Fideicomiso::find($id);
        $participacion = Arr::pluck(tipoRelacion::all(), 'valor','id');
        $tipoPfideicomiso = Arr::pluck(tipoParticipacionFideicomiso::all(), 'valor','id');
        $tipoPersonaFideicomiso = Arr::pluck(RegimenFiscal::all(), 'valor','id');
        $sector = Arr::pluck(sector::all(), 'valor','id');
        $lugar = Arr::pluck(LugarUbicacion::all(), 'valor','id');
        $pais = Arr::pluck(Pais::all(), 'valor','id');
        $fideicomiso = Arr::pluck(tipoFideicomiso::all(), 'valor','id');
        $tipoPersonaFideicomisoD = Arr::pluck(tipoPersonaFideicomiso::all(), 'tipo_persona_fideicomiso','id');
        $entidad = Arr::pluck(Entidad::all(), 'entidad','id');
        $tipoOperacion = "AGREGAR";
        return view("Fideicomisos.edit", compact( 'fideicomisos','participacion','tipoPfideicomiso','tipoPersonaFideicomiso','sector','lugar','pais','fideicomiso','tipoPersonaFideicomisoD','entidad','tipoOperacion'));
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
        $fideicomisosD = $request->input("fideicomisos");
        $fideicomiso= Fideicomiso::find($id);
        if($fideicomiso->enviado){
            $fideicomisosD["tipo_operacion_id"] = 2;
        }
        $fideicomiso->update($fideicomisosD);
        return redirect()->route("fideicomisos.index");
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        if(isset($this->request->id)){
            $id = $this->request->id;
        }
        $fideicomiso = Fideicomiso::find($id);
        if($fideicomiso->enviado){
            $fideicomiso->update(["tipo_operacion_id" => 1, "motivo_baja_id" => $this->request->motivo_baja_id]);
        } else {
            $fideicomiso->delete();
        }
        return redirect()->route("fideicomisos.index");
    }
}
