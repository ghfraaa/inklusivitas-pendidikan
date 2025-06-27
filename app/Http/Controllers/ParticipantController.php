<?php

namespace App\Http\Controllers;

use App\Models\Participant;
use App\Models\Program;
use Illuminate\Http\Request;

class ParticipantController extends Controller
{
    public function index()
    {
        $user = auth()->user();

        if ($user->isAdmin()) {
            $participants = \App\Models\Participant::with('program')->get();
        } else {
            $participants = \App\Models\Participant::whereHas('program', function ($query) use ($user) {
                $query->where('created_by', $user->id);
            })->with('program')->get();
        }

        return view('participants.index', compact('participants'));
    }


    public function create()
    {
        $programs = Program::aktif()->get();
        return view('participants.create', compact('programs'));
    }

    public function store(Request $request)
    {
        $request->validate([
            'nama_lengkap' => 'required|string|max:255',
            'email' => 'required|email',
            'no_telepon' => 'required|string|max:20',
            'tanggal_lahir' => 'required|date',
            'jenis_kelamin' => 'required|in:L,P',
            'jenis_disabilitas' => 'required|string',
            'kebutuhan_khusus' => 'nullable|string',
            'alamat' => 'required|string',
            'nama_wali' => 'nullable|string|max:255',
            'kontak_wali' => 'nullable|string|max:20',
            'program_id' => 'required|exists:programs,id',
            'status_pendaftaran' => 'required|in:pending,diterima,ditolak',
        ]);

        Participant::create($request->all());

        return redirect()->route('participants.index')->with('success', 'Peserta berhasil ditambahkan.');
    }

    public function show(Participant $participant)
    {
        $this->authorize('view', $participant);
        return view('participants.show', compact('participant'));
    }

    public function edit(Participant $participant)
    {
        $this->authorize('update', $participant);
        return view('participants.edit', compact('participant'));
    }

    public function update(Request $request, Participant $participant)
    {
        $this->authorize('update', $participant);
        // lanjut update...
    }

    public function destroy(Participant $participant)
    {
        $this->authorize('delete', $participant);
        $participant->delete();

        return redirect()->route('participants.index')->with('success', 'Peserta dihapus.');
    }

}
