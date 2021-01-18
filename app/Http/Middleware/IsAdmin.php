<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Support\Facades\Auth;

class IsAdmin
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

         $user = Auth::user();
        // dd($user->type);

        $role = $user->type;

        if(Auth::user()->type != 'admin'){
            return redirect('/');
        }

        // 第一種寫法
        // if($role == 'admin'){
        //     return $next($request);
        // }else{
        //     return redirect('/');
        // }

        // 第二種寫法
           // if(!$role == 'admin'){
        //     return redirect('/');
        // }

        // 判斷是否是admin
        // 如果是admin就next
        // 如果不是就導走

        return $next($request);
    }
}
