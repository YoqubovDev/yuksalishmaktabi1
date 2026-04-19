<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;

class Staff extends Model
{
    protected $fillable = [
        'category',
    ];

    /**
     * Bu kategoriyaga tegishli barcha tarbiyachilar
     */
    public function teachers(): HasMany
    {
        return $this->hasMany(Teacher::class, 'staff_id');
    }
}
