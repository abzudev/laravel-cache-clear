<?php

namespace Abzudev\LaravelCacheClear\Controllers;

use Illuminate\Http\Request;

class CacheController
{
    public function clear(Request $request)
    {
        \Artisan::call('cache:clear');

        if ($request->expectsJson()) {
            return response()->json(['message' => 'Cache cleared!']);
        }

        return view('cache::cleared');
    }
}
