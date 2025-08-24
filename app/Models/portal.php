<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class portal extends Model
{
    protected $fillable = [
        'UniversityName',
        'ProgrameName',
        'Description',
        'ApplicationDeadline',
        'Status',
        'Link',
    ];
}
