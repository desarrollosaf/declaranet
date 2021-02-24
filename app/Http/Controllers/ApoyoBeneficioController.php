<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\ApoyoBeneficio;
use App\Declaracion;
use App\parentescoRelacion;
use App\Nivelordengobierno;
use App\tipoApoyo;
use App\formaRecepcion;
use App\tipoMoneda;
use Illuminate\Support\Arr;

class ApoyoBeneficioController extends Controller
{
    private $request;
    public function __construct(Request $request) {
        $this->middleware("auth");
        $this->request=$request;
    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $declaracion=Declaracion::find($this->request->session()->get('declaracion_id'));
        $apoyos = $declaracion->apoyo_beneficio;
        return view("apoyoBeneficiosDeclarante.index", compact('apoyos'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $parentesco = Arr::pluck(\App\parentescoRelacion::all(), "valor","id");
        $nivelGobierno = Arr::pluck(\App\Nivelordengobierno::all(), "valor","id");
        $tipoApoyo = Arr::pluck(\App\tipoApoyo::all(), "valor","id");
        $formaRecepcion = Arr::pluck(\App\formaRecepcion::all(), "valor","id");

        $tipoMonedaOtros = tipoMoneda::where("clave","!=","MXN")->orderBy("valor","asc")->get();
        $tipoMonedaMexico = tipoMoneda::whereClave("MXN")->get();
        $tipoMonedas = $tipoMonedaMexico->merge($tipoMonedaOtros);
        $tipoMoneda = Arr::pluck($tipoMonedas,"valor","id");
        $tipoOperacion = 1;
        return view("apoyoBeneficiosDeclarante.create", compact('parentesco', 'nivelGobierno', 'tipoApoyo', 'formaRecepcion', 'tipoMoneda','tipoOperacion'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $apoyoDeclarante = $this->request->input("apoyo");
        $apoyoDeclarante['declaracion_id']=$this->request->session()->get('declaracion_id');
        //dd($inversionesDeclarante);
        ApoyoBeneficio::create($apoyoDeclarante);
        return redirect()->route("apoyo_beneficio.index");
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
        $parentesco = Arr::pluck(\App\parentescoRelacion::all(), "valor","id");
        $nivelGobierno = Arr::pluck(\App\Nivelordengobierno::all(), "valor","id");
        $tipoApoyo = Arr::pluck(\App\tipoApoyo::all(), "valor","id");
        $formaRecepcion = Arr::pluck(\App\formaRecepcion::all(), "valor","id");
        $tipoMoneda = Arr::pluck(\App\tipoMoneda::all(), "valor","id");
        $apoyo = ApoyoBeneficio::find($id);
        $tipoOperacion = 1;
        return view("apoyoBeneficiosDeclarante.edit", compact('parentesco', 'nivelGobierno', 'tipoApoyo', 'formaRecepcion', 'tipoMoneda', 'apoyo','tipoOperacion'));
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
        $data = $request->input("apoyo");
        $apoyoDeclarante = ApoyoBeneficio::find($id);
        $apoyoDeclarante->update($data);
        return redirect()->route("apoyo_beneficio.index");
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $apoyoDeclarante = ApoyoBeneficio::find($id);
        $apoyoDeclarante->delete();
        return redirect()->route("apoyo_beneficio.index");
    }
}
