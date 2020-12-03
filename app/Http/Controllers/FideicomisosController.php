<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use App\titular;
use App\RegimenFiscal;
use App\LugarUbicacion;
use App\Sector;
use App\Respuesta;
use Illuminate\Support\Arr;
use Carbon\Carbon;

class FideicomisosController extends Controller
{
  
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
        array_unshift($selectTitularActividadLucrativa,"Selecciona una opcion");
        $selecttipoPersona = Arr::pluck(\App\RegimenFiscal::all(), "valor","id");
         array_unshift($selecttipoPersona,"Selecciona una opcion");
        $selectLugarDondeSeUbica = Arr::pluck(LugarUbicacion::all(), "valor","id");
         array_unshift(  $selectLugarDondeSeUbica,"Selecciona una opcion");
        $selectSectores = Arr::pluck(\App\sector::all(), "valor","id");
         array_unshift($selectSectores,"Selecciona una opcion");
        $respuestas = Arr::pluck(\App\Respuesta::all(),"respuesta","id");
         array_unshift( $respuestas,"Selecciona una opcion");
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
