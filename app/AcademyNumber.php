<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class AcademyNumber extends Model
{
    protected $fillable = [
        'experience_years',
        'academy_sections',
        'graduates',
        'instructors'
    ];
}
