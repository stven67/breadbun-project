<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Log;

class CheckRole
{
    public function handle($request, Closure $next, $role)
    {
        Log::info('Role check middleware triggered.');

        if (!Auth::check()) {
            abort(403, 'Unauthorized action: Not authenticated.');
        }

        $userRole = Auth::user()->role;
        Log::info('User role: ' . $userRole);

        if ($userRole != $role) {
            abort(403, 'Unauthorized action: Role does not match.');
        }

        return $next($request);
    }
}