<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class GameGenresGames extends Model
{
    protected $table = 'GameGenresGames';
    use HasFactory;
    protected $fillable = [
        'id', 'game_ID', 'genre_ID'
    ];

    public $timestamps = false;
}
