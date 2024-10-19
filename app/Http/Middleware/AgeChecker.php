<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Symfony\Component\HttpFoundation\Response;
//cmd to make middleware : php artisan make:middleware name_of_middleware
class AgeChecker
{
    /**
     * Handle an incoming request.
     *
     * @param  \Closure(\Illuminate\Http\Request): (\Symfony\Component\HttpFoundation\Response)  $next
     */
    public function handle(Request $request, Closure $next): Response
    {
        if ($request->age <18) {
           // return Response("You Must Be 18 years old to visit this site");
           die("You Must Be 18 years old to visit this site");
        }
        return $next($request);
    }
}