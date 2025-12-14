<?php

namespace App\Http\Controllers;

use App\Models\Reception;

class ReceptionController extends Controller
{
    public function index()
    {
        $receptions = Reception::all();
        return view('home', compact('receptions'));
    }
}

