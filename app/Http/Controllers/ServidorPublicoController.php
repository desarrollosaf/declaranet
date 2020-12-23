<?php

namespace App\Http\Controllers;

use App\Declaracion;
use App\FueServidorPublico;
use App\ServidorPublico;
use App\TipoBienEnajenacionBienes;
use App\tipoInstrumento;
use Carbon\Carbon;
use Illuminate\Http\Request;
use Illuminate\Support\Arr;

class ServidorPublicoController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    private $request;

    public function __construct(Request $request)
    {
        $this->request = $request;
    }

    public function index()
    {
        $declaracion = Declaracion::find($this->request->session()->get("declaracion_id"));
        if ($declaracion->fueServidorPublico != null) {
            return redirect()->route("servidor_publico.edit", $declaracion->fueServidorPublico->id);
        } else {
            return redirect()->route("servidor_publico.create");
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
        if ($declaracion->fueServidorPublico != null) {
            return redirect()->route("servidor_publico.edit", $declaracion->fueServidorPublico->id);
        } else {
            $selectInsrumentos = Arr::pluck(tipoInstrumento::all(), "valor", "id");
            $selectBienes = Arr::pluck(TipoBienEnajenacionBienes::all(), "valor", "id");
            return view("servidorPublico.create", compact("selectInsrumentos", "selectBienes"));
        }
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param \Illuminate\Http\Request $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $data = $request->input("ingreso");
        $fechaInicio = new Carbon($data["fecha_inicio"]);
        $data["fecha_inicio"] = $fechaInicio->format("Y-m-d");
        $fechaConclusion = new Carbon($data["fecha_conclusion"]);
        $data["fecha_conclusion"] = $fechaConclusion->format("Y-m-d");
        $data["declaracion_id"] = $request->session()->get('declaracion_id');
        if (!isset($data["tipo_de_bien_id"])) {
            $data["tipo_de_bien_id"] = null;
        }

        if (!isset($data["tipo_de_instrumento_id"])) {
            $data["tipo_de_instrumento_id"] = null;
        }
        FueServidorPublico::create($data);
        return redirect()->route("bienes_inmuebles.index");
    }

    /**
     * Display the specified resource.
     *
     * @param int $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param int $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $ingreso = FueServidorPublico::find($id);
        $selectInsrumentos = Arr::pluck(tipoInstrumento::all(), "valor", "id");
        $selectBienes = Arr::pluck(TipoBienEnajenacionBienes::all(), "valor", "id");
        return view("servidorPublico.edit", compact("selectInsrumentos", "selectBienes", "ingreso"));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param \Illuminate\Http\Request $request
     * @param int $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $ingreso = FueServidorPublico::find($id);
        $data = $request->input("ingreso");
        $fechaInicio = new Carbon($data["fecha_inicio"]);
        $data["fecha_inicio"] = $fechaInicio->format("Y-m-d");
        $fechaConclusion = new Carbon($data["fecha_conclusion"]);
        $data["fecha_conclusion"] = $fechaConclusion->format("Y-m-d");
        $data["declaracion_id"] = $request->session()->get('declaracion_id');
        if (!isset($data["tipo_de_bien_id"])) {
            $data["tipo_de_bien_id"] = null;
        }

        if (!isset($data["tipo_de_instrumento_id"])) {
            $data["tipo_de_instrumento_id"] = null;
        }

        $ingreso->update($data);
        return redirect()->route("bienes_inmuebles.index");
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param int $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
