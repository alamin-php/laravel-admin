<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Comment extends Model
{
    protected $fillable = [
        'details','user_id','image',
    ];

public function user()
{
    return $this->belongsTo('App\User', 'user_id');
}
}
