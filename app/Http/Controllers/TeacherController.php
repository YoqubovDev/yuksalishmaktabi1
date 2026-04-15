<?php

namespace App\Http\Controllers;

use App\Models\HomeSlider;
use App\Models\Departments;
use App\Models\TeacherStats;
use Illuminate\Http\Request;

class TeacherController extends Controller
{
    public function index()
    {
        // Category 2: Bog'cha tarbiyachilari, Category 5: Tarbiyachilar
        $teachers = HomeSlider::whereIn('staff_category_id', [2, 5])
            ->with(['teacherOfGroups.students', 'teacherOfGroups.assistant'])
            ->get();
        $departments = Departments::all();
        $stats = TeacherStats::first();
        return view('teachers', compact('teachers', 'departments', 'stats'));
    }
}
