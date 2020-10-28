<?php

namespace App\Http\Controllers;

use App\Declaranet;
use Illuminate\Http\Request;
use App\Declaracion;

class DeclaranetController extends Controller
{
    private $request;
    public function __construct(Request $request){
        $this->request = $request;
    }
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function IniciarDeclaracion()
    {
        $declaracion = Declaracion::create([
            "servidor_publico_id" => auth()->user()->servidor_publico_id,
            "tipo_movimiento_id" => $this->request->tipo_movimiento_id,
            "fecha_declaracion" => now(),
            "estatus_declaracion_id" => 1
        ]);
        $this->request->session()->put("declaracion_id",$declaracion->id);

        return $declaracion;
    }
    public function ContinuarDeclaracion()
    {
     
        $this->request->session()->put("declaracion_id",$this->request->declaracion_id);
        return "Correcto";
    }
}
