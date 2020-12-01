<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\tipoBeneficio;
use App\beneficiariosPrograma;
use App\sector;
use App\formaRecepcion;
use App\BeneficioPrivado;
use App\Declaracion;
use App\RegimenFiscal;
use Illuminate\Support\Arr;

class BeneficiosPrivadosController extends Controller
{
    private $request;
    function __construct(Request $request)
    {
        $this->request = $request;
    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $beneficios = BeneficioPrivado::where("declaracion_id",$this->request->session()->get('declaracion_id'))->get();
        return view("beneficiosPrivados.index",compact("beneficios"));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $beneficio = tipoBeneficio::all();
        $tipoBeneficio = [];
        $tipoBeneficio[""] = "SELECCIONA UNA OPCIÓN";
        foreach ($beneficio as $item){
            $tipoBeneficio[$item->id] = $item->valor;
        }
        $beneficiario = beneficiariosPrograma::all();
        $beneficiarios = [];
        $beneficiarios[""] = "SELECCIONA UNA OPCIÓN";
        foreach ($beneficiario as $item){
            $beneficiarios[$item->id] = $item->valor;
        }

        $sector = sector::all();
        $sectoProductivo = [];
        $sectoProductivo[""] = "SELECCIONA UNA OPCIÓN";
        foreach ($sector as $item){
            $sectoProductivo[$item->id] = $item->valor;
        }

        $otorganteBeneficio = RegimenFiscal::all();
        $otorgante = [];
        $otorgante[""] = "SELECCIONA UNA OPCIÓN";
        foreach ($otorganteBeneficio as $item){
            $otorgante[$item->id] = $item->valor;
        }

        $recepcion = formaRecepcion::all();
        $formaRecepcion = [];
        $formaRecepcion[""] = "SELECCIONA UNA OPCIÓN";
        foreach ($recepcion as $item){
            $formaRecepcion[$item->id] = $item->valor;
        }
        return view("beneficiosPrivados.create", compact("tipoBeneficio","beneficiarios", "sectoProductivo", "otorgante", "formaRecepcion"));

    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store()
    {
        $beneficios = $this->request->input("beneficio_privado");
        $beneficios['declaracion_id']=$this->request->session()->get('declaracion_id');
        BeneficioPrivado::create($beneficios);
        return redirect("beneficios_privados");
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
        $beneficio = BeneficioPrivado::find($id);
        $tipoBeneficio = Arr::pluck(tipoBeneficio::all(), 'valor','id');
        $beneficiarios = Arr::pluck(beneficiariosPrograma::all(), 'valor','id');
        $sectoProductivo = Arr::pluck(sector::all(), 'valor','id');
        $otorgante = Arr::pluck(RegimenFiscal::all(),'valor','id');
        $formaRecepcion = Arr::pluck(formaRecepcion::all(), 'valor','id');
        return view("beneficiosPrivados.edit", compact('beneficio', 'beneficiarios','sectoProductivo','otorgante','formaRecepcion','tipoBeneficio'));

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
        $beneficios = $request->input("beneficio_privado");
        $beneficio= BeneficioPrivado::find($id);
        $beneficio->update($beneficios);
        return redirect()->route("beneficios_privados.index");
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $beneficios = BeneficioPrivado::find($id);
        $beneficios->delete();
        return redirect()->route("beneficios_privados.index");
    }
}
