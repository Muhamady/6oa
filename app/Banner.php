<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Banner extends Model
{
    protected $fillable = [
        'image',
        'title',
        'description',
        'button_one_text',
        'button_one_link',
        'button_two_text',
        'button_two_link'
    ];
}
