<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Symfony\Component\HttpFoundation\Response;

class Cors
{
    /**
     * Handle an incoming request.
     *
     * @param  \Closure(\Illuminate\Http\Request): (\Symfony\Component\HttpFoundation\Response)  $next
     */
    public function handle(Request $request, Closure $next)
    {
      /*   // Handling preflight requests
        if ($request->isMethod('OPTIONS')) {
            return response('', 200)
                ->header('Access-Control-Allow-Origin', '*')
                ->header('Access-Control-Allow-Methods', 'GET, POST, PUT, DELETE, PATCH, OPTIONS')
                ->header('Access-Control-Allow-Headers', 'Content-Type, Authorization');
        } */

        // Handling normal requests
           $response = $next($request);

           $response ->header->set('Access-Control-Allow-Origin', '*');
           $response ->header->set('Access-Control-Allow-Methods', 'GET, POST, PUT, PATCH, DELETE, OPTIONS');
           $response ->header->set('Access-Control-Allow-Headers', 'Origin, X-Requested-With, Content-Type, X-Token-Auth, Authorization, Accept, charset,boundary,Content-Length');

            return $response;
        
    }
}
