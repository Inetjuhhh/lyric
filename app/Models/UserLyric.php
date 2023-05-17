<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class UserLyric extends Model
{
    use HasFactory;
    protected $table = 'userLyric';
    protected $guarded = [];

    function user(){
        return $this->belongsTo(User::class);
    }

    function lyric(){
        return $this->belongsTo(Lyric::class);
    }

}
