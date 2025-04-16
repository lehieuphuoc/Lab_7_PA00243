<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Symfony\Component\HttpFoundation\Response;

class Administration
{
    public function handle(Request $request, Closure $next)
    {
        if (Auth::user()->idgroup != 1) {
            return redirect('/login')->with('error', 'Bạn không có quyền truy cập!');
        }
        return $next($request);
    }
}