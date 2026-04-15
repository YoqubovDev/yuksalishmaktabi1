<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Student extends Model
{
    protected $fillable = ['group_id', 'name', 'image', 'bio'];

    public function group()
    {
        return $this->belongsTo(Group::class);
    }
}
