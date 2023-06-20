<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class LyricController extends Controller
{
    public function search(){
        $queryInput = $_GET['queryInput'];
        return view('dashboard/lyrics/searchLyrics')->with('queryInput', $queryInput);
    }
}
