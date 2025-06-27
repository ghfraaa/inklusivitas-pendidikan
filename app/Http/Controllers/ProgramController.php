<?php

namespace App\Http\Controllers;

use App\Models\Program;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class ProgramController extends Controller
{
    public function index()
    {
        $user = auth()->user();

        $programs = $user->isAdmin()
            ? Program::all()
            : Program::where('created_by', $user->id)->get();

        return view('programs.index', compact('programs'));
    }


    public function create()
    {
        return view('programs.create');
    }

    public function store(Request $request)
    {
        $request->validate([
            'nama_program' => 'required|string|max:255',
            'deskripsi' => 'nullable|string',
            'jenis_disabilitas' => 'required|string|max:255',
            'tingkat_pendidikan' => 'required|string|max:255',
            'kapasitas' => 'required|integer|min:1',
            'tanggal_mulai' => 'required|date',
            'tanggal_selesai' => 'required|date|after_or_equal:tanggal_mulai',
            'status' => 'required|in:aktif,nonaktif,selesai',
            'lokasi' => 'required|string|max:255',
            'biaya' => 'required|numeric|min:0',
        ]);

        Program::create([
            ...$request->all(),
            'created_by' => Auth::id(),
        ]);

        return redirect()->route('programs.index')->with('success', 'Program berhasil ditambahkan.');
    }

    public function show(Program $program)
    {
        $this->authorize('view', $program);
        return view('programs.show', compact('program'));
    }


    public function edit(Program $program)
    {
        $this->authorize('update', $program);
        return view('programs.edit', compact('program'));
    }

    public function destroy(Program $program)
    {
        $this->authorize('delete', $program);
        $program->delete();
        return redirect()->route('programs.index')->with('success', 'Program dihapus.');
    }


    public function update(Request $request, Program $program)
    {
        $this->authorize('update', $program); 

        $request->validate([
            'nama_program' => 'required|string|max:255',
            'deskripsi' => 'nullable|string',
            'jenis_disabilitas' => 'required|string|max:255',
            'tingkat_pendidikan' => 'required|string|max:255',
            'kapasitas' => 'required|integer|min:1',
            'tanggal_mulai' => 'required|date',
            'tanggal_selesai' => 'required|date|after_or_equal:tanggal_mulai',
            'status' => 'required|in:aktif,nonaktif,selesai',
            'lokasi' => 'required|string|max:255',
            'biaya' => 'required|numeric|min:0',
        ]);

        $program->update($request->all());

        return redirect()->route('programs.index')->with('success', 'Program berhasil diperbarui.');
    }


}
