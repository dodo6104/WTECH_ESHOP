<?php

namespace App\Models;

use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class pouzivatel extends Authenticatable
{
    use Notifiable, HasFactory;

    protected $table = 'CustomerAccounts'; 

    protected $fillable = [
        'nickname', 'password', 'email'
    ];

    public $timestamps = false; 

}
