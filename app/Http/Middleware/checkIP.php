<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;

class checkIP
{
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure  $next
     * @return mixed
     */
    public function handle(Request $request, Closure $next)
    { if ($request->ip() !='127.0.0.1'){
        abort(403,'you cant acess website bucose you are donky');

    }
        return $next($request);
    }
}
