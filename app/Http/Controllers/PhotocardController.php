<?php

namespace App\Http\Controllers;

use App\Models\Achievement;
use App\Models\AchievementStats;
use Illuminate\Http\Request;

class PhotocardController extends Controller
{
    public function index()
    {
        $achievements = Achievement::all();
        $stats = AchievementStats::first();
        return view('achievements', compact('achievements', 'stats'));
    }
}
