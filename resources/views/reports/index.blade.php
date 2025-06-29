@extends('layouts.app')

@push('styles')
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@300;400;500;600;700&display=swap" rel="stylesheet">
@endpush

@section('content')
<div class="min-h-screen bg-gradient-to-br from-slate-50 via-blue-50 to-indigo-100 p-6">
    
    <!-- Judul -->
    <div class="mb-6 fade-in-up">
        <div class="backdrop-blur-sm bg-white/70 rounded-2xl p-6 shadow-xl border border-white/20">
            <h1 class="text-3xl font-bold bg-gradient-to-r from-purple-600 to-indigo-600 bg-clip-text text-transparent">
                📊 Laporan Data Program & Peserta
            </h1>
            <p class="text-gray-600 mt-2 text-sm">Lihat ringkasan informasi program dan data peserta aktif</p>
        </div>
    </div>

    <!-- Tabel -->
    <div class="backdrop-blur-sm bg-white/80 rounded-2xl p-6 shadow-xl border border-white/20 fade-in-up">
        <div class="overflow-x-auto">
            <table class="min-w-full table-auto border-collapse">
                <thead class="bg-gradient-to-r from-blue-500 to-indigo-600 text-white rounded-xl">
                    <tr>
                        <th class="px-4 py-3 text-left font-medium">No</th>
                        <th class="px-4 py-3 text-left font-medium">Nama Program</th>
                        <th class="px-4 py-3 text-left font-medium">Total Peserta</th>
                        <th class="px-4 py-3 text-left font-medium">Status</th>
                        <th class="px-4 py-3 text-left font-medium">Tanggal Dibuat</th>
                    </tr>
                </thead>
                <tbody class="bg-white divide-y divide-gray-200 text-gray-700">
                    @foreach ($programs as $index => $program)
                        <tr class="hover:bg-blue-50 transition">
                            <td class="px-4 py-3">{{ $index + 1 }}</td>
                            <td class="px-4 py-3 font-semibold text-indigo-700">{{ $program->name }}</td>
                            <td class="px-4 py-3">{{ $program->participants_count }}</td>
                            <td class="px-4 py-3">
                                <span class="inline-flex items-center px-2 py-1 rounded-full text-xs font-semibold
                                    {{ $program->status === 'aktif' ? 'bg-green-100 text-green-600' : 'bg-red-100 text-red-600' }}">
                                    {{ ucfirst($program->status) }}
                                </span>
                            </td>
                            <td class="px-4 py-3 text-sm">{{ $program->created_at->format('d M Y') }}</td>
                        </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>

    <!-- Footer Info -->
    <div class="mt-6 backdrop-blur-sm bg-white/60 rounded-2xl p-4 shadow-xl border border-white/20 fade-in-up text-center">
        <p class="text-gray-600 text-sm">
            Laporan diperbarui terakhir: <span class="font-semibold text-gray-800">{{ now()->format('d M Y, H:i') }}</span>
        </p>
        <div class="mt-3 flex justify-center space-x-6 text-sm text-gray-500">
            <span class="flex items-center">
                <span class="w-2 h-2 bg-green-400 rounded-full mr-2 animate-pulse"></span>
                Data Valid
            </span>
            <span class="flex items-center">
                <span class="w-2 h-2 bg-blue-400 rounded-full mr-2"></span>
                Real-time Sinkronisasi
            </span>
        </div>
    </div>

</div>
@endsection
