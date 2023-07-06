<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\UserLyric;

class ApiController extends Controller
{
    public function doApiSearch() {
        $query = $_GET['q'];

        $RAPID_API_KEY = env('RAPID_API_KEY');

        $url = "https://genius-song-lyrics1.p.rapidapi.com/search/?q=" . urlencode($query) . "&rapidapi-key=" . $RAPID_API_KEY;

        $ch = curl_init($url);
        curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);

        $response = curl_exec($ch);
        $error = curl_error($ch);

        curl_close($ch);
        if ($response === false) {
            throw new \Exception(curl_error($ch), curl_errno($ch));
        }
//        return $response;

        if ($error) {
            // Handle any errors

            return $error;

        } else {
            return $response;
        }
    }

    public static function lyricLoader($id){
        $lyricId = $id;

        $userLyrics = UserLyric::where('lyric_id', $lyricId)->first();
        if($userLyrics->lyrics) {
            return $userLyrics->lyrics;
        }

        $RAPID_API_KEY = env('RAPID_API_KEY');

        $url = "https://genius-song-lyrics1.p.rapidapi.com/song/lyrics/?id=" . $lyricId . "&rapidapi-key=" . $RAPID_API_KEY;

        $ch = curl_init($url);
        curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);

        $response = curl_exec($ch);
        $error = curl_error($ch);


        curl_close($ch);

        //hier een insert query om de lyric op te slaan in de database
//        dd($response);
        return $response;


        if ($error) {
            // Handle any errors
            return $error;
        } else {
            return $response;
        }
    }
}
