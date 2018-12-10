<?php

namespace App\Http\Middleware;

use Closure;
use Auth;
class SoloQuimicos
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
      if(Auth::check() && Auth::user()->rol == "personal" || Auth::user()->rol == "administrador")
        return $next($request);
      else
        abort(406);
    }
}
