<?php

namespace App\Models;

use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class platformsgames extends Model
{
    use Notifiable, HasFactory;

    protected $table = 'platformsgames'; 

    protected $fillable = [
        'id', 'game_id', 'platform_id'
    ];

    public $timestamps = false; 
}
