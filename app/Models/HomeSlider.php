<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class HomeSlider extends Model
{
    protected $fillable = ['name', 'subject', 'image', 'bio', 'staff_category_id'];

    public function staffCategory()
    {
        return $this->belongsTo(StaffCategory::class, 'staff_category_id');
    }

    public function teacherOfGroups()
    {
        return $this->hasMany(Group::class, 'teacher_id');
    }

    public function assistantOfGroups()
    {
        return $this->hasMany(Group::class, 'assistant_id');
    }
}
