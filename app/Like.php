<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Like extends Model
{
    //
    protected $table = 'likes';
    public $timestamps = true;

    protected $fillable = [
        'user_id', 'audio_id',
    ];
}
