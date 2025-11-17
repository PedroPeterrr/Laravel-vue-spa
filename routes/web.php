<?php

use App\Http\Controllers\SiteStatsController;
use Illuminate\Support\Facades\Route;

Route::get('/site-stats', [SiteStatsController::class, 'index']);

Route::get('/{any}', function () {
    return view('app');
})->where('any', '.*');

