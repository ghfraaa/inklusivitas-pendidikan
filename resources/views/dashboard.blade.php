@extends('layouts.app')

@section('header', 'Dashboard')

@section('content')
<div class="p-6">
    <h1 class="text-2xl font-bold mb-4">Selamat Datang, {{ Auth::user()->name }} ({{ Auth::user()->role_display }})</h1>

    <div class="grid md:grid-cols-3 gap-6">
        <!-- Kartu 1: Total Program -->
        <div class="bg-blue-100 border border-blue-200 p-6 rounded-lg shadow">
            <h2 class="text-lg font-semibold text-blue-700">Total Program</h2>
            <p class="text-3xl font-bold mt-2">{{ $totalPrograms }}</p>
        </div>

        <!-- Kartu 2: Total Peserta -->
        <div class="bg-green-100 border border-green-200 p-6 rounded-lg shadow">
            <h2 class="text-lg font-semibold text-green-700">Total Peserta</h2>
            <p class="text-3xl font-bold mt-2">{{ $totalParticipants }}</p>
        </div>

        <!-- Kartu 3: Program Aktif -->
        <div class="bg-yellow-100 border border-yellow-200 p-6 rounded-lg shadow">
            <h2 class="text-lg font-semibold text-yellow-700">Program Aktif</h2>
            <p class="text-3xl font-bold mt-2">{{ $activePrograms }}</p>
        </div>
    </div>

    <div class="mt-10">
        <h2 class="text-xl font-semibold mb-4">Informasi Terbaru</h2>
        <ul class="list-disc pl-6 text-gray-700">
            <li>Total program: <strong>{{ $totalPrograms }}</strong></li>
            <li>Total peserta terdaftar: <strong>{{ $totalParticipants }}</strong></li>
            <li>Jumlah program aktif saat ini: <strong>{{ $activePrograms }}</strong></li>
        </ul>
    </div>
</div>
@endsection
