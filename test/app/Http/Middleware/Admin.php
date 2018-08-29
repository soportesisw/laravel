<?php

namespace Test\Http\Middleware;

use Closure;

class Admin
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

        //Validar si el usuario es un administrador
        if(1==1){
            return $next($request);
        }else{
            dd('No eres administrador');
        }
    }
}
