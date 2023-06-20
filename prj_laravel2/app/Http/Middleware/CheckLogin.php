<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
//su dung doi tuong nao thi phai khai bao doi tuong do
use Auth;

class CheckLogin
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
        //kiem tra xem user da dang nhap chua
        /*
            url('login') -> tao duong dan url
            redirect -> di chuyen den mo url
        */
        if(Auth::check() == false)
            return redirect(url('login1'));
        return $next($request);
    }
}
