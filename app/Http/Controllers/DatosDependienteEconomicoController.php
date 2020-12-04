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
    public function __construct(Request $request) {
        $this->middleware('auth');
    }
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
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
        $selectSector[""] = "SELECCIONA UNA OPCIÓN";
        foreach ($sector as $item){
            $selectSector[$item->id] = $item->valor;
        }
        $respuestas = Arr::pluck(\App\Respuesta::all(),'respuesta',"id");
        array_unshift($respuestas,"Selecciona una opcion");

        return view('dependienteEconomico.index', compact('selectParentesco', 'selectExtranjero', 'selectResidencia', 'selectSector','respuestas'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
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
        $selectSector[""] = "SELECCIONA UNA OPCIÓN";
        foreach ($sector as $item){
            $selectSector[$item->id] = $item->valor;
        }
        $respuestas = Arr::pluck(\App\Respuesta::all(),'respuesta',"id");
        array_unshift($respuestas,"Selecciona una opcion");
        $entidades = Arr::pluck(\App\Entidad::all(),'entidad',"id");
        array_unshift($entidades,"Selecciona una opcion");
        $paises = Arr::pluck(\App\Pais::all(),'valor',"id");
        array_unshift($paises,"Selecciona una opcion");
        $sectores = Arr::pluck(\App\Sector::all(),'valor',"id");
        array_unshift($sectores,"Selecciona una opcion");

        return view('dependienteEconomico.create', compact('selectParentesco', 'selectExtranjero', 'selectResidencia', 'selectSector','respuestas','entidades','paises','sectores'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        dump($request->input('declarante'));
        dump($request->input('nacional'));
        dump($request->input('extranjero'));
        dump($request->input('laboral'));
        dump($request->input('publico'));
        dump($request->input('privado'));
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
