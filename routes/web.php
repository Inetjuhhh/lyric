<?php

use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {
    return view('home');
});

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

Route::group(['prefix' => 'dashboard', 'middleware' => 'auth'], function() {
    Route::resource('/userLyrics', \App\Http\Controllers\UserLyricController::class);
});

//Route::get('/api-data', [\App\Http\Controllers\ApiController::class, 'getData']);

Route::get('/lyrics/search', [\App\Http\Controllers\LyricController::class, 'search'])->name('searchLyrics');
//
//Route::post('/lyrics/search', function () {
//    $data = json_decode(file_get_contents('php://input'), true);
//    $hits = $data['data'];
//
////    echo "you rock, Ine";
//    return view('/dashboard.lyrics.searchLyrics')->with('hits', $hits);
//
//});

require __DIR__.'/auth.php';
