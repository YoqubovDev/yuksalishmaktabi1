<?php

namespace App\Http\Controllers;

use App\Models\Teacher;
use App\Models\Departments; // <-- Qo'shish shart!
use App\Models\TeacherStats;
use Illuminate\Http\Request;

class TeacherController extends Controller
{
    public function index()
    {
        $teachers = Teacher::all();
        $departments = Departments::all();
        $stats = TeacherStats::first();
        return view('teachers', compact('teachers', 'departments', 'stats'));
    }
}
