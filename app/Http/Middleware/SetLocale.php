<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\App;
use Symfony\Component\HttpFoundation\Response;

class SetLocale
{
    public function handle(Request $request, Closure $next): Response
    {
        $locale = session('_lang', config('app.locale'));

        if ($request->has('_lang')) {
            $locale = $request->get('_lang');
            if (in_array($locale, ['uz', 'ru'])) {
                session(['_lang' => $locale]);
            }
        }

        if (in_array($locale, ['uz', 'ru'])) {
            App::setLocale($locale);
        } else {
            App::setLocale(config('app.locale'));
        }

        return $next($request);
    }
}
