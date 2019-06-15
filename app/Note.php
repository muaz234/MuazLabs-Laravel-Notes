<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Note extends Model
{
    //

    protected $fillable= [
        'title',
        'posted',
        'points'
    ]
}
