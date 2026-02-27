<?php

namespace App\Http\Controllers;

use App\Models\Reception;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function index()
    {
        $qabulrasmis = Reception::all();
        return view('home', compact('qabulrasmis'));
    }
}
