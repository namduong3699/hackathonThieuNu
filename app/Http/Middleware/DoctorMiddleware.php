<?php
namespace App\Http\Middleware;
use Closure;
use Illuminate\Support\Facades\Auth;
class DoctorMiddleware
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
        if(Auth::check()){
            $user = Auth::user();
             // echo $user->level;  
            if($user->levels == 1){
             return $next($request);
         }else{
            return redirect('/');
         }

     }else{
        return redirect('/login');
    }
}

}