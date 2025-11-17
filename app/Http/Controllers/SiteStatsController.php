<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class SiteStatsController extends Controller
{
    public function index(Request $request)
    {
        if ($request->expectsJson()) {
            return response()->json([
                'series' => 200,
                'lessons' => 1300,
            ]);
        }

        return view('app');
    }
}
