<?php

namespace App\Http\Controllers;

use App\Models\HomeSlider;
use App\Models\Reception;
use Illuminate\Http\Request;

class HomeSliderController extends Controller
{
    public function index()
    {
        $homes = HomeSlider::all();
        $qabulrasmis = Reception::latest()->get();
        return view('home', compact('qabulrasmis','homes'));

    }
}
