<?php

namespace App\Http\Controllers;

use App\Models\Group;
use Illuminate\Http\Request;

class GroupController extends Controller
{
    public function index()
    {
        // Ortiqcha Kurslar olib tashlandi, faqat guruhlar qoldi
        $groups = Group::with(['teacher', 'assistant', 'students'])->get();
        return view('dars', compact('groups'));
    }
}
