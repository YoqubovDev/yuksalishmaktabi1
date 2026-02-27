<?php

namespace App\Http\Controllers;

use App\Models\AboutStatic;


class AboutStaticController extends Controller
{
    public function index()
    {
        $stat = AboutStatic::first();
        return view('frontend.statistics', compact('stat'));
    }
}
