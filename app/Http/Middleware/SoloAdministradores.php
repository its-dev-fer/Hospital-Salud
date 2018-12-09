<?php

namespace App\Http\Middleware;

use Closure;
use Auth;
class SoloAdministradores
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
        if(Auth::check() && Auth::user()->rol == "administrador")
          return $next($request);
        else
          abort(404);
    }
}
