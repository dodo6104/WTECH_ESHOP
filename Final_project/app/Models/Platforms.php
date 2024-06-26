<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Platforms extends Model
{
    protected $table = 'platforms';
    use HasFactory;
    protected $fillable = [
        'id', 'name'
    ];

    public $timestamps = false;
}
