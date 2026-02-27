<?php

namespace App\Http\Controllers;

use App\Models\Group;
use App\Models\Course;
use Illuminate\Http\Request;

class GroupController extends Controller
{
    public function index()
    {
        $courses = Course::all();
        $groups = Group::all();
        return view('dars', compact('groups','courses'));
    }
}
