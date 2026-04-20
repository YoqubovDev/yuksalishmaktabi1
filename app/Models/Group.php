<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;

use Illuminate\Database\Eloquent\Relations\BelongsTo;

class Group extends Model
{
    protected $fillable = [
        'name',
        'language',
        'bio',
        'image',
        'group_number',
        'result_percentage',
        'teacher_id',
        'assistant_id',
    ];

    public function teacher(): BelongsTo
    {
        return $this->belongsTo(Teacher::class, 'teacher_id');
    }

    public function assistant(): BelongsTo
    {
        return $this->belongsTo(Teacher::class, 'assistant_id');
    }

    public function children(): HasMany
    {
        return $this->hasMany(Child::class, 'group_id');
    }

    public function students(): HasMany
    {
        return $this->children();
    }
}
