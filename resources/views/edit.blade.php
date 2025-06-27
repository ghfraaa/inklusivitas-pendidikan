@extends('layouts.app')

@section('header', 'Edit Data Peserta')

@section('content')
<div class="p-4">
    <form action="{{ route('participants.update', $participant->id) }}" method="POST" class="space-y-4">
        @csrf
        @method('PUT')

        <x-input label="Nama Lengkap" name="nama_lengkap" value="{{ $participant->nama_lengkap }}" required />
        <x-input label="Email" name="email" value="{{ $participant->email }}" type="email" required />
        <x-input label="Nomor Telepon" name="no_telepon" value="{{ $participant->no_telepon }}" required />
        <x-input label="Tanggal Lahir" name="tanggal_lahir" type="date" value="{{ $participant->tanggal_lahir->format('Y-m-d') }}" required />
        <x-select label="Jenis Kelamin" name="jenis_kelamin" :options="['L' => 'Laki-laki', 'P' => 'Perempuan']" :selected="$participant->jenis_kelamin" required />
        <x-input label="Jenis Disabilitas" name="jenis_disabilitas" value="{{ $participant->jenis_disabilitas }}" required />
        <x-textarea label="Kebutuhan Khusus" name="kebutuhan_khusus">{{ $participant->kebutuhan_khusus }}</x-textarea>
        <x-input label="Alamat" name="alamat" value="{{ $participant->alamat }}" required />
        <x-input label="Nama Wali" name="nama_wali" value="{{ $participant->nama_wali }}" required />
        <x-input label="Kontak Wali" name="kontak_wali" value="{{ $participant->kontak_wali }}" required />

        <div>
            <label class="block text-sm font-medium text-gray-700">Program</label>
            <select name="program_id" class="w-full rounded border-gray-300" required>
                @foreach($programs as $program)
                    <option value="{{ $program->id }}" @selected($participant->program_id == $program->id)>{{ $program->nama_program }}</option>
                @endforeach
            </select>
        </div>

        <x-select label="Status Pendaftaran" name="status_pendaftaran"
            :options="['pending'=>'Pending', 'diterima'=>'Diterima', 'ditolak'=>'Ditolak']"
            :selected="$participant->status_pendaftaran" required />

        <x-button>Update</x-button>
    </form>
</div>
@endsection
