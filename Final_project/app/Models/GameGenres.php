<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class GameGenres extends Model
{
    protected $table = 'GameGenres';
    use HasFactory;
    protected $fillable = [
        'id', 'name'
    ];

    public $timestamps = false;

}
