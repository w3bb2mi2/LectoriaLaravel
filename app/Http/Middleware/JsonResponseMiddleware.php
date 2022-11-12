<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\JsonResponse;
use Illuminate\Http\Request;
use Illuminate\Http\Response;

class JsonResponseMiddleware
{
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure(\Illuminate\Http\Request): (\Illuminate\Http\Response|\Illuminate\Http\RedirectResponse)  $next
     * @return \Illuminate\Http\Response|\Illuminate\Http\RedirectResponse
     */
    public function handle(Request $request, Closure $next, $enable=false)
    {
        // dd($request);
        $response = $next($request);        
        
        if($response instanceof JsonResponse && $enable){            
            $response -> setEncodingOptions(JSON_PRETTY_PRINT|JSON_UNESCAPED_UNICODE); 
        }
        // $response = new Response($request, 200, ["Content-Type"=>"text/html"]);
        return $response;
    }
}
