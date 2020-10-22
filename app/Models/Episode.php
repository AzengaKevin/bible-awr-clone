<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Episode extends Model
{
    use HasFactory;


    protected $fillable = ['user_id', 'title', 'body', 'audio_url', 'video_url'];

    public function author(){
        return $this->belongsTo(User::class, 'user_id');
    }
    
}
