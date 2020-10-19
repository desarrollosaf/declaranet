<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\TipoMovimiento;

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
        $declaraciones = [];
        return view('home', compact("declaraciones","tipo_movimientos"));
    }
}
