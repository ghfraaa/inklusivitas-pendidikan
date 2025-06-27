@extends('layouts.app')

@section('header', 'Detail Peserta')

@section('content')
<div class="p-4 max-w-2xl mx-auto bg-white shadow rounded">
    <h2 class="text-xl font-semibold mb-4">{{ $participant->nama_lengkap }}</h2>
    <p><strong>Email:</strong> {{ $participant->email }}</p>
    <p><strong>Program:</strong> {{ $participant->program->nama_program }}</p>
    <p><strong>Status:</strong> {{ ucfirst($participant->status_pendaftaran) }}</p>
    <p><strong>Jenis Kelamin:</strong> {{ $participant->jenis_kelamin_lengkap }}</p>
    <p><strong>Jenis Disabilitas:</strong> {{ $participant->jenis_disabilitas }}</p>
    <p><strong>Kebutuhan Khusus:</strong> {{ $participant->kebutuhan_khusus }}</p>
    <p><strong>Alamat:</strong> {{ $participant->alamat }}</p>
    <p><strong>Wali:</strong> {{ $participant->nama_wali }} ({{ $participant->kontak_wali }})</p>
    <p><strong>Tanggal Lahir:</strong> {{ $participant->tanggal_lahir->format('d M Y') }} ({{ $participant->umur }} tahun)</p>
</div>
@endsection
