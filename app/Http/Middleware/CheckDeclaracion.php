<?php

namespace App\Http\Middleware;

use Closure;

class CheckDeclaracion
{
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure  $next
     * @return mixed
     */
    public function handle($request, Closure $next)
    {
        if(session('declaracion_id') == "" || session('declaracion_id') == null){
            return redirect('home');
        }
        return $next($request);
    }
}
