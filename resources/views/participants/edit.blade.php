@extends('layouts.app')

@section('header', 'Edit Data Peserta')

@section('content')
<div class="max-w-3xl mx-auto p-6 bg-white rounded shadow">
    <h2 class="text-xl font-semibold mb-4">Edit Informasi Peserta</h2>

    <form action="{{ route('participants.update', $participant->id) }}" method="POST">
        @csrf
        @method('PUT')

        <!-- Nama Lengkap -->
        <div class="mb-4">
            <label class="block font-medium">Nama Lengkap</label>
            <input type="text" name="nama_lengkap" class="w-full border rounded px-3 py-2" value="{{ old('nama_lengkap', $participant->nama_lengkap) }}" required>
        </div>

        <!-- Email -->
        <div class="mb-4">
            <label class="block font-medium">Email</label>
            <input type="email" name="email" class="w-full border rounded px-3 py-2" value="{{ old('email', $participant->email) }}" required>
        </div>

        <!-- No Telepon -->
        <div class="mb-4">
            <label class="block font-medium">No Telepon</label>
            <input type="text" name="no_telepon" class="w-full border rounded px-3 py-2" value="{{ old('no_telepon', $participant->no_telepon) }}">
        </div>

        <!-- Tanggal Lahir -->
        <div class="mb-4">
            <label class="block font-medium">Tanggal Lahir</label>
            <input type="date" name="tanggal_lahir" class="w-full border rounded px-3 py-2" value="{{ old('tanggal_lahir', $participant->tanggal_lahir->format('Y-m-d')) }}">
        </div>

        <!-- Jenis Kelamin -->
        <div class="mb-4">
            <label class="block font-medium">Jenis Kelamin</label>
            <label><input type="radio" name="jenis_kelamin" value="L" {{ $participant->jenis_kelamin == 'L' ? 'checked' : '' }}> Laki-laki</label>
            <label class="ml-4"><input type="radio" name="jenis_kelamin" value="P" {{ $participant->jenis_kelamin == 'P' ? 'checked' : '' }}> Perempuan</label>
        </div>

        <!-- Jenis Disabilitas -->
        <div class="mb-4">
            <label class="block font-medium">Jenis Disabilitas</label>
            <input type="text" name="jenis_disabilitas" class="w-full border rounded px-3 py-2" value="{{ old('jenis_disabilitas', $participant->jenis_disabilitas) }}">
        </div>

        <!-- Kebutuhan Khusus -->
        <div class="mb-4">
            <label class="block font-medium">Kebutuhan Khusus</label>
            <textarea name="kebutuhan_khusus" class="w-full border rounded px-3 py-2">{{ old('kebutuhan_khusus', $participant->kebutuhan_khusus) }}</textarea>
        </div>

        <!-- Alamat -->
        <div class="mb-4">
            <label class="block font-medium">Alamat</label>
            <input type="text" name="alamat" class="w-full border rounded px-3 py-2" value="{{ old('alamat', $participant->alamat) }}">
        </div>

        <!-- Nama Wali -->
        <div class="mb-4">
            <label class="block font-medium">Nama Wali</label>
            <input type="text" name="nama_wali" class="w-full border rounded px-3 py-2" value="{{ old('nama_wali', $participant->nama_wali) }}">
        </div>

        <!-- Kontak Wali -->
        <div class="mb-4">
            <label class="block font-medium">Kontak Wali</label>
            <input type="text" name="kontak_wali" class="w-full border rounded px-3 py-2" value="{{ old('kontak_wali', $participant->kontak_wali) }}">
        </div>

        <!-- Pilih Program -->
        <div class="mb-4">
            <label class="block font-medium">Program</label>
            <select name="program_id" class="w-full border rounded px-3 py-2">
                @foreach ($programs as $program)
                    <option value="{{ $program->id }}" {{ $participant->program_id == $program->id ? 'selected' : '' }}>
                        {{ $program->nama_program }}
                    </option>
                @endforeach
            </select>
        </div>

        <!-- Status -->
        <div class="mb-4">
            <label class="block font-medium">Status</label>
            <select name="status_pendaftaran" class="w-full border rounded px-3 py-2">
                <option value="pending" {{ $participant->status_pendaftaran == 'pending' ? 'selected' : '' }}>Pending</option>
                <option value="diterima" {{ $participant->status_pendaftaran == 'diterima' ? 'selected' : '' }}>Diterima</option>
                <option value="ditolak" {{ $participant->status_pendaftaran == 'ditolak' ? 'selected' : '' }}>Ditolak</option>
            </select>
        </div>

        <div class="flex justify-end">
            <button type="submit" class="bg-yellow-600 text-white px-4 py-2 rounded hover:bg-yellow-700">Update</button>
        </div>
    </form>
</div>
@endsection
