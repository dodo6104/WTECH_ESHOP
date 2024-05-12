<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Support\Facades\Auth;

class RedirectIfAuthenticated
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
        // Ak je užívateľ prihlásený, presmeruj ho na hlavnú stránku
        if (Auth::check()) {
            return redirect('/')->with('error', 'Už ste prihlásený!');
        }

        return $next($request);
    }
}
