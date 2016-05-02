<?php

namespace App\Http\Middleware;
use Closure;

class CheckApiKey
{
    public function handle($request, Closure $next, $guard = null)
    {

        if ($request->input('key') != env('API_KEY_FOR_NODE')) {
        	return response('Unauthorized.', 401);
        
        }

        return $next($request);
    }
}
