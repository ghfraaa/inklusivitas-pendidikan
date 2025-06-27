@extends('layouts.app')

@section('header', 'Tambah Peserta Baru')

@section('content')
<div class="p-4">
    <form action="{{ route('participants.store') }}" method="POST" class="space-y-4">
        @csrf

        <x-input label="Nama Lengkap" name="nama_lengkap" required />
        <x-input label="Email" name="email" type="email" required />
        <x-input label="Nomor Telepon" name="no_telepon" required />
        <x-input label="Tanggal Lahir" name="tanggal_lahir" type="date" required />
        <x-select label="Jenis Kelamin" name="jenis_kelamin" :options="['L' => 'Laki-laki', 'P' => 'Perempuan']" required />
        <x-input label="Jenis Disabilitas" name="jenis_disabilitas" required />
        <x-textarea label="Kebutuhan Khusus" name="kebutuhan_khusus" />
        <x-input label="Alamat" name="alamat" required />
        <x-input label="Nama Wali" name="nama_wali" required />
        <x-input label="Kontak Wali" name="kontak_wali" required />

        <div>
            <label class="block text-sm font-medium text-gray-700">Program</label>
            <select name="program_id" class="w-full rounded border-gray-300" required>
                <option value="">-- Pilih Program --</option>
                @foreach($programs as $program)
                    <option value="{{ $program->id }}">{{ $program->nama_program }}</option>
                @endforeach
            </select>
        </div>

        <x-select label="Status Pendaftaran" name="status_pendaftaran" :options="['pending'=>'Pending', 'diterima'=>'Diterima', 'ditolak'=>'Ditolak']" required />

        <x-button>Simpan</x-button>
    </form>
</div>
@endsection
