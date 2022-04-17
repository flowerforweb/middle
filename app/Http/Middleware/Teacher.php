<?php

namespace App\Http\Middleware;

use App\Models\Rule;
use Closure;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Redirect;
use Illuminate\Support\Facades\Route;

use function PHPUnit\Framework\throwException;

class Teacher
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
            if(Auth::user()->type == 'teacher'){
                return $next($request);
            }
            return Redirect::to(route('notAllowed'));
        }else{
            return Route::redirect()->route('login');
        }
        return $next($request);
    }
}
