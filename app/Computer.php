<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Computer extends Model
{
        protected $fillable = [
        'name', 'designation', 'section','ip',
    ];
}
