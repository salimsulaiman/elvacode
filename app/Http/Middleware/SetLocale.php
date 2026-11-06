<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\App;

class SetLocale
{
    public function handle(Request $request, Closure $next)
    {
        App::setLocale($request->segment(1) === 'en' ? 'en' : 'id');

        return $next($request);
    }
}