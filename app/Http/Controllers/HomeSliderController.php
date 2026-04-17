<?php

namespace App\Http\Controllers;

use App\Models\AboutStatic;
use App\Models\HomeSlider;
use App\Models\Reception;
use App\Models\News;
use Illuminate\Http\Request;

class HomeSliderController extends Controller
{
    public function index()
    {
        $homes = HomeSlider::with(['staffCategory', 'teacherOfGroups.students', 'teacherOfGroups.assistant', 'assistantOfGroups'])->get();
        $qabulrasmis = Reception::latest()->get();
        $stat = AboutStatic::first();
        $news = News::orderBy('published_at', 'desc')->limit(3)->get();

        return view('home', compact('qabulrasmis', 'homes', 'stat', 'news'));
    }
}
