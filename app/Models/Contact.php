<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Contact extends Model
{
    use HasFactory;

    protected $fillable = [
        'address',
        'phone',
        'fax',
        'email',
        'work_time',
        'lunch_time',
        'bus',
        'marshrut',
        'stop',
        'telegram',
        'facebook',
        'youtube',
        'instagram',
        'map_link',
        'rating',
        'reviews_count',
    ];

    protected $casts = [
        'rating' => 'decimal:1',
        'reviews_count' => 'integer',
    ];
}
