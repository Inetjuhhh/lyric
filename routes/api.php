<?php

use Illuminate\Http\Request;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "api" middleware group. Make something great!
|
*/

Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});

// routes/api.php

Route::get('/search', [\App\Http\Controllers\ApiController::class, 'doApiSearch'])->name('doApiSearch');

Route::get('/lyric', [\App\Http\Controllers\ApiController::class, 'lyricLoader'])->name('lyricLoader');
