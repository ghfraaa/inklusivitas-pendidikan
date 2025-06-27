@extends('layouts.app')

@section('header', 'Detail Program')

@section('content')
<div class="p-4 max-w-3xl mx-auto bg-white shadow rounded">
    <h2 class="text-xl font-semibold mb-4">{{ $program->nama_program }}</h2>
    <p><strong>Deskripsi:</strong> {{ $program->deskripsi }}</p>
    <p><strong>Jenis Disabilitas:</strong> {{ $program->jenis_disabilitas }}</p>
    <p><strong>Tingkat Pendidikan:</strong> {{ $program->tingkat_pendidikan }}</p>
    <p><strong>Kapasitas:</strong> {{ $program->kapasitas }}</p>
    <p><strong>Sisa Kapasitas:</strong> {{ $program->sisa_kapasitas }}</p>
    <p><strong>Tanggal:</strong> {{ $program->tanggal_mulai->format('d M Y') }} - {{ $program->tanggal_selesai->format('d M Y') }}</p>
    <p><strong>Status:</strong> {{ ucfirst($program->status) }}</p>
    <p><strong>Lokasi:</strong> {{ $program->lokasi }}</p>
    <p><strong>Biaya:</strong> Rp {{ number_format($program->biaya, 0, ',', '.') }}</p>
</div>
@endsection
