<?php

namespace App\Http\Middleware;

use Closure;

class CheckToken
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
        // kiem tra xem co phai man hinh login hay ko, neu
        // ko phai login thi phai co token, neu ko co token thi quay lai trang login
        if($request->path() !== 'login'){
            if(!$request->token){
                return redirect('login');
            }
        }
        return $next($request);
    }
}
