<?php
/**
 * Copyright (c) 2024.
 */

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;

class LanguageMiddleware
{
    public function handle(Request $request, Closure $next)
    {
        if ($request->getPreferredLanguage(config('app.locales'))) {
            app()->setLocale($request->getPreferredLanguage(config('app.locales')));
        }

        return $next($request);
    }
}
