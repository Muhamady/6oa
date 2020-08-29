<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Settings extends Model
{
    protected $fillable = [
        'phone',
        'whatsapp_one',
        'whatsapp_two',
        'whatsapp_three',
        'facebook',
        'twitter',
        'instagram',
        'youtube'
    ];
}
