<?php

namespace App\Http\Controllers;

use App\Models\Program;
use App\Models\Participant;
use Illuminate\Support\Facades\Auth;

class ReportController extends Controller
{
    public function index()
    {
        $user = Auth::user();

        if ($user->isAdmin()) {
            $programs = Program::withCount('participants')->get();
            $totalPrograms = Program::count();
            $totalParticipants = Participant::count();
            $activePrograms = Program::where('status', 'aktif')->count();
        } else {
            $programs = Program::withCount('participants')
                ->where('created_by', $user->id)
                ->get();
            $totalPrograms = Program::where('created_by', $user->id)->count();
            $totalParticipants = Participant::whereHas('program', function ($query) use ($user) {
                $query->where('created_by', $user->id);
            })->count();
            $activePrograms = Program::where('created_by', $user->id)->where('status', 'aktif')->count();
        }

        return view('reports.index', compact(
            'totalPrograms',
            'totalParticipants',
            'activePrograms',
            'programs'
        ));
    }
}
