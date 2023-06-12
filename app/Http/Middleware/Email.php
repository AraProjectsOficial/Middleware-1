<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Symfony\Component\HttpFoundation\Response;

class Email
{
    public function handle(Request $request, Closure $next): Response
    {
        if(Auth::user()->email == "rafa@gmail.com"){
            return $next($request);
        }else{
            dump("2");
            return redirect()->route("redireccion");
        }
    }
}
