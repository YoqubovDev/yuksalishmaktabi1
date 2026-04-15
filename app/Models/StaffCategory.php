<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class StaffCategory extends Model
{
    protected $fillable = ['name'];

    public function staff()
    {
        return $this->hasMany(HomeSlider::class);
    }
}
