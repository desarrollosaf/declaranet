<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\tipoBeneficio;
use App\beneficiariosPrograma;
use App\sector;
use App\formaRecepcion;

class BeneficiosPrivadosController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view("beneficiosPrivados.index");
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

        $otorganteBeneficio = sector::all();
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
    public function store(Request $request)
    {
        //
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
