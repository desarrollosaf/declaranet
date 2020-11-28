<?php

namespace App\Http\Controllers;

use App\titular;
use Illuminate\Http\Request;
use \App\LugarUbicacion;
use Illuminate\Support\Arr;

class FideicomisosController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
         return view("Fideicomisos.index");
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $selectTitularActividadLucrativa = Arr::pluck(\App\Titular::all(), "valor","id");
        $selecttipoPersona = Arr::pluck(\App\RegimenFiscal::all(), "valor","id");
        $selectLugarDondeSeUbica = Arr::pluck(LugarUbicacion::all(), "valor","id");
        $selectSectores = Arr::pluck(\App\sector::all(), "sector","id");
        $respuestas = Arr::pluck(\App\Respuesta::all(),"respuesta","id");
        return view("Fideicomisos.create",compact("selectTitularActividadLucrativa","selecttipoPersona","selectLugarDondeSeUbica","selectSectores",'respuestas'));
        
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
