<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\UserLyric;
use App\Models\Lyric;
use App\Models\User;

class UserLyricController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $userLyrics = UserLyric::all();
        return view('dashboard/userlyrics/index')->with('userLyrics', $userLyrics);
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

    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        $userLyric = UserLyric::findOrFail($id);
        return view('dashboard/userLyrics/show')->with('userLyric', $userLyric);
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
