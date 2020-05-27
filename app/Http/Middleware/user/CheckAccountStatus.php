<?php

namespace App\Http\Middleware\user;

use Closure;
use Illuminate\Support\Facades\Auth;
USE App\User;

class CheckAccountStatus
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
        /* $user = User::where('email', $request->email)->first();
        if ($user->status == 'admin') {
            return redirect('admin/dashboard');
        } elseif ($user->status == 'mahasiswa') {
            return redirect('mahasiswa/dashboard');
        }

        return $next($request); */

        if($this->auth->user())
        {
            switch ($this->auth->user()->status) {
                case 'nonactive':
                    # code...
                    break;

                case 'suspended':
                    # code...
                    break;
                    
                case 'deleted':
                    # code...
                    break;
                
                default:
                    return $next($request);
                    break;
            }
        }
        return $next($request);
    }
    
}
