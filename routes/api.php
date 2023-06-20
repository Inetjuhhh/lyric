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



//use Illuminate\Support\Facades\Http;
//
//Route::get('/search', function (Request $request) {
//    try {
//        $query = $request->query('query');
//        $apiKey = env('RAPID_API_KEY');
//
//        // Make the API request to the target API
//        $response = Http::get("https://genius-song-lyrics1.p.rapidapi.com/search/?q={$query}");
//
//        // Process the response data as needed
//        $data = $response->json();
//
//        // Return the relevant data as JSON response
//        return response()->json($data);
//    } catch (\Exception $exception) {
//        // Handle errors
//        logger()->error($exception);
//        return response()->json(['error' => 'An error occurred'], 500);
//    }
//});
