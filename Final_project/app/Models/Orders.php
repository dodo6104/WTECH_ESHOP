<?php

namespace App\Models;

use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Orders extends Model
{
    use Notifiable, HasFactory;

    protected $table = 'Orders'; 

    protected $fillable = [
        'id', 'state', 'account_ID', 'delivery_ID', 'game_id', 'quantity'
    ];

    public $timestamps = false; 
}
