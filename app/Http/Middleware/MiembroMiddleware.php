<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Redirect;
use App\User;

class MiembroMiddleware
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
        if(Auth::user()->rol_id==2)
        {
                return $next($request);
        }
        else
        {
            flash('Accesso Denegado!!!')->error()->important();
            return redirect('admin/index');
        }
    }
}
