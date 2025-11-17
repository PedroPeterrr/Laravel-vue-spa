<?php

use App\Http\Controllers\SiteStatsController;
use App\Http\Controllers\StatsController;
use Illuminate\Support\Facades\Route;

Route::get('/site-stats', [SiteStatsController::class, 'index']);
Route::post('/stats', [StatsController::class, 'getStats']);

Route::get('/{any}', function () {
    return view('app');
})->where('any', '.*');

