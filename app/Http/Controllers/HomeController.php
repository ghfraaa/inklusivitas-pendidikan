<?php

namespace App\Http\Controllers;

use App\Models\Program;

class HomeController extends Controller
{
    public function index()
    {
        $programs = Program::where('status', 'aktif')->latest()->take(6)->get();

        return view('landing', compact('programs'));
    }
}
