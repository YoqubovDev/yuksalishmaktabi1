<?php

namespace App\Http\Controllers;

use App\Models\Achievement;
use App\Models\ExamStats;
use Illuminate\Http\Request;

class PhotocardController extends Controller
{
    public function index()
    {
        $achievements = Achievement::all();
        $stats = ExamStats::first();
        return view('achievements', compact('achievements', 'stats'));
    }
}
