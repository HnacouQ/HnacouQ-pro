<?php

namespace App\Http\Middleware;

use Closure;
use Auth;

class CustomerMiddleware
{   
    private $cus;

    public function __construct(){

    }
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure  $next
     * @return mixed
     */
    public function handle($request, Closure $next, $guard = 'cus')
    {   
        if (Auth::guard('cus')->check()) {
            # code...
              return $next($request);
        }

        return redirect()->route('home_login')->with('noti','Chức năng này yêu cầu đăng nhập!');
      
    }
}
