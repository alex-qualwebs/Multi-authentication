<?php

namespace App\Http\Middleware;

use Closure;

class Usermiddleware
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
         $age = $request->number;

         if($age<=20)
         {
            return redirect('/');
         }

        return $next($request);
    }
}
