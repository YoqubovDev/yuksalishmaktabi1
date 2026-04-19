<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;

class Group extends Model
{
    protected $fillable = [
        'name',
        'language',
        'image',
        'group_image',
        'result_percentage',
    ];

    /**
     * Bu guruhga biriktirilgan barcha tarbiyachilar
     */


    public function teachers(): HasMany
    {
        return $this->hasMany(Teacher::class, 'group_id');
    }
}
