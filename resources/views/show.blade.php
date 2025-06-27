@extends('layouts.app')

@section('header', 'Detail Peserta')

@section('content')
<div class="p-4 space-y-2">
    <p><strong>Nama:</strong> {{ $participant->nama_lengkap }}</p>
    <p><strong>Email:</strong> {{ $participant->email }}</p>
    <p><strong>Telepon:</strong> {{ $participant->no_telepon }}</p>
    <p><strong>Tanggal Lahir:</strong> {{ $participant->tanggal_lahir->format('d M Y') }} ({{ $participant->umur }} tahun)</p>
    <p><strong>Jenis Kelamin:</strong> {{ $participant->jenis_kelamin_lengkap }}</p>
    <p><strong>Jenis Disabilitas:</strong> {{ $participant->jenis_disabilitas }}</p>
    <p><strong>Kebutuhan Khusus:</strong> {{ $participant->kebutuhan_khusus ?? '-' }}</p>
    <p><strong>Alamat:</strong> {{ $participant->alamat }}</p>
    <p><strong>Nama Wali:</strong> {{ $participant->nama_wali }}</p>
    <p><strong>Kontak Wali:</strong> {{ $participant->kontak_wali }}</p>
    <p><strong>Program:</strong> {{ $participant->program->nama_program }}</p>
    <p><strong>Status:</strong> {{ ucfirst($participant->status_pendaftaran) }}</p>
</div>
@endsection
