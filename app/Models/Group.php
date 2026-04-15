<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Group extends Model
{
    protected $fillable = ['name', 'direction', 'image', 'schedule_image', 'result_percentage', 'teacher_id', 'assistant_id'];

    public function teacher()
    {
        return $this->belongsTo(HomeSlider::class, 'teacher_id');
    }

    public function assistant()
    {
        return $this->belongsTo(HomeSlider::class, 'assistant_id');
    }

    public function students()
    {
        return $this->hasMany(Student::class);
    }
}
