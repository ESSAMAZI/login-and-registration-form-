<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class CheckAuth
{
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure(\Illuminate\Http\Request): (\Illuminate\Http\Response|\Illuminate\Http\RedirectResponse)  $next
     * @return \Illuminate\Http\Response|\Illuminate\Http\RedirectResponse
     */
    public function handle(Request $request, Closure $next)
    {
        if(Auth::check()){
            // يدخل يشوف هل المستخدم تمت المصادقة عليه او لا 
       //ويخليه يدي صفحة الهوم الي هو طالبها
         //يعدي الصفحة التسجيل الى صفحة الهوم
       return $next($request);  
    }
    
    return redirect()->to('login');   
}
}
