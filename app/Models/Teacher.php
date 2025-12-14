<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Teacher extends Model
{
    protected $fillable
        =
        [
            'asosiy',
            'ilmiy',
            'bosh',
            'kurator'
        ];
}
