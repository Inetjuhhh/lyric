<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\UserLyric;
use App\Models\Lyric;
use App\Models\User;
use Illuminate\Support\Facades\Auth;

class UserLyricController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $userLyrics = UserLyric::all();
        return view('dashboard/userLyrics/index')->with('userLyrics', $userLyrics);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate([
//        dd($_POST['lyric_id'])

        ]);
        $userLyric = new userLyric();
        $userLyric->user_id = Auth::user()->id;
        $userLyric->lyric_id = $request->lyric_id;
        $userLyric->full_title = $request->full_title;
        $userLyric->save();

        return redirect()->back()->with('status', 'Lyric added to your lyric-list');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        $userLyric = UserLyric::findOrFail($id);

        if(!$userLyric->lyrics) {
            $lyrics_array = ApiController::lyricLoader($userLyric->lyric_id);
        }

        $parse_lyrics = json_decode($lyrics_array, true);
        $lyrics = $parse_lyrics["lyrics"]["lyrics"]["body"]["html"];
        return view('dashboard/userLyrics/show')->with('userLyric', $userLyric)->with('lyrics', $lyrics);
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        UserLyric::destroy($id);
        return redirect('dashboard/userLyrics')->with('status', 'Lyric deleted');
    }
}
