<?php

namespace App\Http\Middleware;

use Closure;
use Auth;
class CheckRole
{
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure  $next
     * @return mixed
     */
    public function handle($request, Closure $next, $roles)
    {
      if (!Auth::check()){ 
        return redirect('login');
    }
        $user = Auth::user();

        if($user->hasAnyRole($roles)){
            return $next($request);
        }
        else{
            abort(403,' Unauthorized');
        }

    }
}
