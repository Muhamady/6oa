<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Section extends Model
{
    protected $fillable = [
        'name',
        'vision',
        'message',
        'goals',
        'instructors',
        'description',
        'educational_system',
        'certificate',
        'image'
    ];
}
