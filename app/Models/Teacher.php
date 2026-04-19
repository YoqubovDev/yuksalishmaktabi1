<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class Teacher extends Model
{
    protected $fillable = [
        'name',
        'subject',
        'image',
        'bio',
        'staff_id',   // Kategoriya (Tarbiyachi / Yordam tarbiyachi)
        'group_id',   // Biriktirilgan guruh
    ];

    /**
     * Tarbiyachi tegishli bo'lgan kategoriya (Staff)
     */
    public function staff(): BelongsTo
    {
        return $this->belongsTo(Staff::class, 'staff_id');
    }

    /**
     * Tarbiyachi biriktirilgan guruh
     */
    public function group(): BelongsTo
    {
        return $this->belongsTo(Group::class, 'group_id');
    }
}
