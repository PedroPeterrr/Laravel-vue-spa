<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class StatsController extends Controller
{
    private $tokens = [
        'abc123' => [
            ['name' => 'Visits', 'value' => 150],
            ['name' => 'Posts', 'value' => 20]
        ],
        'xyz789' => [
            ['name' => 'Visits', 'value' => 300],
            ['name' => 'Posts', 'value' => 50]
        ]
    ];

    public function getStats(Request $request)
    {
        $request->validate([
            'token' => 'required|string',
        ]);

        $token = trim($request->input('token'));

        if (!array_key_exists($token, $this->tokens)) {
            return response()->json([
                'success' => false,
                'message' => 'Unauthorized'
            ], 401);
        }

        return response()->json([
            'success' => true,
            'stats' => $this->tokens[$token]
        ]);
    }
}
