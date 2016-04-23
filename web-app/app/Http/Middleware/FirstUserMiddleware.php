<?php

namespace App\Http\Middleware;

use Closure;
use App\Models\User;
use Hash;

class FirstUserMiddleware
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
        if(User::count() == 0) {
            $usuario = new User();
            $usuario->email = 'admin@admin.com';
            $usuario->password = Hash::make('masterkey');
            $usuario->save();
        }
        return $next($request);
    }
}
