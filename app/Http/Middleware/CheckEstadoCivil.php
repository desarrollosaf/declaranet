<?php

namespace App\Http\Middleware;

use App\Declaracion;
use Closure;

class CheckEstadoCivil
{
    /**
     * Handle an incoming request.
     *
     * @param \Illuminate\Http\Request $request
     * @param \Closure $next
     * @return mixed
     */
    public function handle($request, Closure $next)
    {
        if (!empty($request->session()->get('declaracion_id'))) {
            $declaracion = Declaracion::find($request->session()->get('declaracion_id'));
            if ($declaracion->situacion_personal_id == 1 || $declaracion->situacion_personal_id == 3 || $declaracion->situacion_personal_id == 4 || $declaracion->situacion_personal_id == null) {
                return redirect()->route("datos_dependiente_declarante.index");
            }
        }
        return $next($request);
    }
}
