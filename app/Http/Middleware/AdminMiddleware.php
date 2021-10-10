<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
class AdminMiddleware
{
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure  $next
     * @return mixed
     */
    public function handle(Request $request, Closure $next)
    {
        //phân quyền
        if(Auth::check()){
            if(Auth::user()->level == 1){
                 return $next($request);
            }else if(Auth::user()->level == 0){
                return redirect()->back()->with('error', 'Bạn không có quyền truy cập!');
            }
           
            

           
        }
        
    }
}
