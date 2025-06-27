<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Program;
use App\Models\Participant;
use Illuminate\Support\Facades\Auth;

class DashboardController extends Controller
{
    public function index()
    {
        $user = Auth::user();

        if ($user->isAdmin()) {
            $totalPrograms = Program::count();
            $totalParticipants = Participant::count();
            $activePrograms = Program::where('status', 'aktif')->count();
        } else {
            $totalPrograms = Program::where('created_by', $user->id)->count();
            $totalParticipants = Participant::whereHas('program', function ($query) use ($user) {
                $query->where('created_by', $user->id);
            })->count();
            $activePrograms = Program::where('created_by', $user->id)
                ->where('status', 'aktif')
                ->count();
        }

        return view('dashboard', compact('totalPrograms', 'totalParticipants', 'activePrograms'));
    }
}
