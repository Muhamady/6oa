<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Conference extends Model
{
    protected $fillable = [
        'image',
        'video',
        'name',
        'description',
        'conference_date'
    ];
}
