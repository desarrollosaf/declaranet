<?php

namespace App\Http\Controllers;

use App\Declaracion;
use App\sector;
use Illuminate\Http\Request;
use App\NivelOrdenGobierno;
use App\ambitoPublico;
use App\sectores;
use App\DatoEmpleoDeclarante;
use Illuminate\Support\Arr;
use App\Entidad;
use App\Municipio;

class DatosEmpleoDeclaranteController extends Controller
{
    private $request;
    function __construct(Request $request)
    {
        $this->request = $request;
    }
    public function index()
    {
        $declarante = Declaracion::find($this->request->session()->get("declaracion_id"));
        if($declarante->datos_empleo_declarante == null){
            return redirect()->route("datos_empleo_declarante.create");
        }else{
            return redirect()->route("datos_empleo_declarante.edit",$declarante->datos_empleo_declarante->id);
        }
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $declaracion = Declaracion::find($this->request->session()->get("declaracion_id"));

        $nivel_orden = NivelOrdenGobierno::all();
        $nivel = [];
        $nivel[""] = "SELECCIONA UNA OPCIÓN";
        foreach ($nivel_orden as $item){
            $nivel[$item->id] = $item->valor;
        }

        $ambito_publico = ambitoPublico::all();
        $ambito = [];
        $ambito[""] = "SELECCIONA UNA OPCIÓN";
        foreach ($ambito_publico as $item){
            $ambito[$item->id] = $item->valor;
        }

        $sectores = sector::all();
        $sector= [];
        $sector[""] = "SELECCIONA UNA OPCIÓN";
        foreach ($sectores as $item){
        $sector[$item->id] = $item->valor;
        }

        $Entidades = Entidad::all();
        $entidad= [];
        $entidad[""] = "SELECCIONA UNA OPCIÓN";
        foreach ($Entidades as $item){
            $entidad[$item->id] = $item->entidad;
        }


        return view('datosEmpleoDeclarante.create', compact("nivel", "ambito" , "sector", "declaracion",'entidad'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $datos_empleo_declarante = $this->request->input("datos_empleo_declarante");
        $datos_empleo_declarante['declaracion_id']=$this->request->session()->get('declaracion_id');
        DatoEmpleoDeclarante::create($datos_empleo_declarante);
        return redirect("experiencia_laboral");
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
        $DatoEmpleoDeclarante = DatoEmpleoDeclarante::find($id);
        $nivel = Arr::pluck(NivelOrdenGobierno::all(), 'valor','id');
        $ambito = Arr::pluck(ambitoPublico::all(), 'valor','id');
        $sector = Arr::pluck(sector::all(), 'valor','id');
        $entidad = Arr::pluck(Entidad::all(), 'entidad','id');
        $selectMunicipio = Arr::pluck(Municipio::where("entidad_id",$DatoEmpleoDeclarante->entidad_federativa_id)->get(), "municipio","id");
        return view("datosEmpleoDeclarante.edit", compact( 'DatoEmpleoDeclarante','nivel','ambito','sector','entidad','selectMunicipio'));

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
        $datos_empleo_declarante = $request->input("datos_empleo_declarante");
        $datosEmpleo= DatoEmpleoDeclarante::find($id);
        $datosEmpleo->update($datos_empleo_declarante);
        return redirect("experiencia_laboral");
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
