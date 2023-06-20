<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ApiController extends Controller
{
    public function doApiSearch() {
        $query = $_GET['q'];
        $RAPID_API_KEY = env('RAPID_API_KEY');

        $url = "https://genius-song-lyrics1.p.rapidapi.com/search/?q=" . $query . "&rapidapi-key=" . $RAPID_API_KEY;

        $ch = curl_init($url);
        curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);

        $response = curl_exec($ch);
        $error = curl_error($ch);

        curl_close($ch);

        return $response;

        if ($error) {
            // Handle any errors
            return $error;
        } else {
            return $response;
        }
    }
}
