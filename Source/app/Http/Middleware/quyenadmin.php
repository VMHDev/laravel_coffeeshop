<?php

namespace App\Http\Middleware;
use Illuminate\Support\Facades\Auth;
use Closure;

class quyenadmin
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
        if(!Auth::check()) {
            return redirect('/dangnhap');
        }
		if ($request->user()->role!='admin')
		{
			return redirect('/viphamquyen');
		}
        return $next($request);
    }
}
