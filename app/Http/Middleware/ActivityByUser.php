<?php
namespace App\Http\Middleware;
use App\User;
use Closure;
use Auth;
use Cache;
use Carbon\Carbon;
use Illuminate\Support\Facades\Auth as FacadesAuth;

class ActivityByUser
{
    public function handle($request, Closure $next)
    {
        if (Auth::check()) {
            $expiresAt = now()->addMinutes(2); /* keep online for 2 min */
            Cache::put('user-is-online-' . Auth::user()->id, true, $expiresAt);
  
            /* last seen */
            User::where('id', Auth::user()->id)->update(['last_seen' => now()]);
        }
  
        return $next($request);
    }
}