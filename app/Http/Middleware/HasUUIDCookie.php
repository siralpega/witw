<?php

namespace App\Http\Middleware;

use App\Models\User;
use Closure;
use Illuminate\Http\Request;
use Illuminate\Support\Str;
use Illuminate\Support\Facades\Log;
/**
 * Verifies the user has a uuid cookie set. If not present, creates a new user with a new uuid in the database and returns the cookie in the request. 
 * Note: Cookie is encrypted by EncryptCookies middleware!
 */
class HasUUIDCookie
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
        if($request->hasCookie('uuid') && User::where('uuid', $request->cookie('uuid'))->count() == 1)
            return $next($request);
        $uuid = $this->createUser($request->ip());
        $request->merge(['uuid' => $uuid]);
        return $next($request)
            ->withCookie(cookie()->forever('uuid', $uuid));
    }
    
    public static function createUser($ip = null)
    {
        $uuid = Str::uuid();
        $user = new User();
        $user->uuid = $uuid;
        $user->ip = $ip;
        $browser = get_browser(null, true);
        $user->browser = is_array($browser) && array_key_exists('browser', $browser) ? $browser['browser'] : null;
        $user->save();
        return $uuid;
    }
}
