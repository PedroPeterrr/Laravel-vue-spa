<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\BookController;
use App\Http\Controllers\SiteStatsController;
use App\Http\Controllers\StatsController;

Route::delete('/books/{isbn}', [BookController::class, 'destroy']);

Route::get('/books', [BookController::class, 'index']);
Route::post('/books', [BookController::class, 'store']);

Route::get('/site-stats', [SiteStatsController::class, 'index']);
Route::post('/stats', [StatsController::class, 'getStats']);

Route::patch('/site-stats/{content}', [SiteStatsController::class, 'update']);
Route::post('/site-stats', [SiteStatsController::class, 'store']);
Route::delete('/site-stats/{content}', [SiteStatsController::class, 'destroy']);
