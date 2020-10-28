<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\TipoMovimiento;
use App\Declaracion;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        $tipo_movimientos = TipoMovimiento::all();
        $declaraciones = Declaracion::where("servidor_publico_id", auth()->user()->servidor_publico_id)->get();
//        dd($declaraciones[0]->tipo_movimiento);
        return view('home', compact("declaraciones","tipo_movimientos"));
    }
}
