<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;

class Course extends Model
{
    protected $fillable = [
        'title',
        'description',
        'icon',
        'duration',
        'student_count'
    ];

    // Course bir nechta videoga ega bo'lishi mumkin
    public function videos(): HasMany
    {
        return $this->hasMany(Video::class);
    }
}