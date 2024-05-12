<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Item extends Model
{
    protected $table = 'Games';
    use HasFactory;
    protected $fillable = [
        'id', 'name', 'price', 'discount', 'key_amount', 'description', 
        'developer', 'release_date', 'video_link', 'download_count'
    ];

    public $timestamps = false;
    public function getFinalPriceAttribute()
    {
        return $this->price - ($this->price * ($this->discount / 100));
    }
}
