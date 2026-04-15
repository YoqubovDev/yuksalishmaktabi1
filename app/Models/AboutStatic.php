<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class AboutStatic extends Model
{
    protected $fillable = [
        'students_count',
        'qualified_teachers',
        'graduation_rate',
    ];
}
