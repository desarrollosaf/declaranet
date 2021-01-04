<?php

namespace App\Http\Controllers;

use App\AmbitoSector;
use App\extranjero;
use App\lugarDondeReside;
use App\parentescoRelacion;
use Illuminate\Http\Request;
use Illuminate\Support\Arr;

class DatosDependienteEconomicoController extends Controller
{
    private $request;
    public function __construct(Request $request) {
        $this->middleware('auth');
        $this->request = $request;
    }
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $dependientes = \App\DependienteEconomico::where('declaracion_id',$this->request->session()->get('declaracion_id'))->get();
//        dd($dependientes[0]);
        return view('dependienteEconomico.index', compact('dependientes'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $parentesco = \App\RelacionTransmisor::all();
       
        $selectParentesco[""] = "SELECCIONA UNA OPCIÓN";
        foreach ($parentesco as $item){
            $selectParentesco[$item->id] = $item->valor;
        }
        $extranjero = extranjero::all();
        $selectExtranjero = [];
        $selectExtranjero[""] = "SELECCIONA UNA OPCIÓN";
        foreach ($extranjero as $item){
            $selectExtranjero[$item->id] = $item->valor;
        }
        $residencia = lugarDondeReside::all();
        $selectResidencia = [];
        $selectResidencia[""] = "SELECCIONA UNA OPCIÓN";
        foreach($residencia as $item){
            $selectResidencia[$item->id] = $item->valor;
        }
        $sector = ambitoSector::all();
        $selectSector = [];
        foreach ($sector as $item){
            $selectSector[$item->id] = $item->valor;
        }
        $respuestas = Arr::pluck(\App\Respuesta::all(),'respuesta',"id");
        $entidades = Arr::pluck(\App\Entidad::all(),'entidad',"id");
        $paises = Arr::pluck(\App\Pais::all(),'valor',"id");
        array_unshift($paises,"Selecciona una opcion");
        $sectores = Arr::pluck(\App\Sector::all(),'valor',"id");
        array_unshift($sectores,"Selecciona una opcion");
        $nivel = Arr::pluck(\App\Nivelordengobierno::all(),'valor',"id");
        $ambito = Arr::pluck(\App\ambitoPublico::all(),'valor',"id");

        return view('dependienteEconomico.create', compact('selectParentesco', 'selectExtranjero', 'selectResidencia', 'selectSector','respuestas','entidades','paises','sectores','nivel','ambito'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $dependiente = $request->input('declarante');
        $nacional = $request->input('nacional');
        $extranjero = $request->input('extranjero');
        $laboral = $request->input('laboral');
        $publico = $request->input('publico');
        $privado = $request->input('privado');
        $dependiente["declaracion_id"] = $this->request->session()->get('declaracion_id');
//        dd($dependiente);
        $declarante = \App\DependienteEconomico::create($dependiente);
        $privado["ambito_sector_id"] = $laboral["ambito_sector_id"];
        $publico["ambito_sector_id"] = $laboral["ambito_sector_id"];
        if($dependiente["lugar_residencia_id"] == 1){
            $domiclilio = $declarante->domicilio()->create($nacional);
        }else if($dependiente["lugar_residencia_id"] == 2){
            $domiclilio = $declarante->domicilio()->create($extranjero);
        }
        if($laboral["ambito_sector_id"] == 1){
            $laboral = $declarante->dato_laboral()->create($publico);
        }else if($laboral["ambito_sector_id"] == 2){
            $laboral = $declarante->dato_laboral()->create($privado);
        }
        return redirect()->route('datos_dependiente_declarante.index');
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
        $parentesco = parentescoRelacion::all();
       
        $selectParentesco[""] = "SELECCIONA UNA OPCIÓN";
        foreach ($parentesco as $item){
            $selectParentesco[$item->id] = $item->valor;
        }
        $extranjero = extranjero::all();
        $selectExtranjero = [];
        $selectExtranjero[""] = "SELECCIONA UNA OPCIÓN";
        foreach ($extranjero as $item){
            $selectExtranjero[$item->id] = $item->valor;
        }
        $residencia = lugarDondeReside::all();
        $selectResidencia = [];
        $selectResidencia[""] = "SELECCIONA UNA OPCIÓN";
        foreach($residencia as $item){
            $selectResidencia[$item->id] = $item->valor;
        }
        $sector = ambitoSector::all();
        $selectSector = [];
        foreach ($sector as $item){
            $selectSector[$item->id] = $item->valor;
        }
        $respuestas = Arr::pluck(\App\Respuesta::all(),'respuesta',"id");
        $entidades = Arr::pluck(\App\Entidad::all(),'entidad',"id");
        $paises = Arr::pluck(\App\Pais::all(),'valor',"id");
        array_unshift($paises,"Selecciona una opcion");
        $sectores = Arr::pluck(\App\Sector::all(),'valor',"id");
        array_unshift($sectores,"Selecciona una opcion");
        $nivel = Arr::pluck(\App\Nivelordengobierno::all(),'valor',"id");
        $ambito = Arr::pluck(\App\ambitoPublico::all(),'valor',"id");
        
        $dependiente = \App\DependienteEconomico::find($id);
        $domicilio = $dependiente->domicilio;
        $municipios = array();
        if($domicilio != null){
            if($domicilio->entidad_id != ""){
                $municipios = Arr::pluck(\App\Municipio::where("entidad_id",$domicilio->entidad_id)->get(),'municipio','id');
            }
        }
        $dato_laboral = $dependiente->dato_laboral;

        return view('dependienteEconomico.edit', compact('selectParentesco', 'selectExtranjero', 'selectResidencia', 'selectSector','respuestas','entidades','paises','sectores','nivel','ambito','dependiente','domicilio','dato_laboral','municipios'));
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
        $dependienteRequest = $request->input('declarante');
        $nacional = $request->input('nacional');
        $extranjero = $request->input('extranjero');
        $laboral = $request->input('laboral');
        $publico = $request->input('publico');
        $privado = $request->input('privado');
//        dump($dependiente);
//        dump($nacional);
//        dump($extranjero);
//        dump($laboral);
//        dump($publico);
//        dd($privado);
        $dependiente  = \App\DependienteEconomico::find($id);
        $dependiente->update($dependienteRequest);
        $privado["ambito_sector_id"] = $laboral["ambito_sector_id"];
        $publico["ambito_sector_id"] = $laboral["ambito_sector_id"];
        $dependiente->domicilio()->delete();
        if($dependiente["lugar_residencia_id"] == 1){
            $dependiente->domicilio()->create($nacional);
        }else{
            $dependiente->domicilio()->create($extranjero);
        }
        $dependiente->dato_laboral()->delete();
        if($laboral["ambito_sector_id"] == 1){
            $laboral = $dependiente->dato_laboral()->create($publico);
        }else{
            $laboral = $dependiente->dato_laboral()->create($privado);
        }
        return redirect()->route('datos_dependiente_declarante.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $dependiente = \App\DependienteEconomico::find($id);
        $dependiente->delete();
        return redirect()->route('datos_dependiente_declarante.index');
    }
}
