<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Pest\Concerns\Retrievable;
use Symfony\Component\HttpFoundation\Response;

class ExampleMiddleware
{

    public function handle(Request $request, Closure $next): Response
    {
        //return redirect()->route("noAccess");
        return $next($request);
    }
}
