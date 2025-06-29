@extends('layouts.app')

@section('header', 'Manajemen Pengguna (Koordinator)')

@push('styles')
<link href="https://fonts.googleapis.com/css2?family=Inter:wght@300;400;500;600;700&display=swap" rel="stylesheet">
<style>
    body {
        font-family: 'Inter', sans-serif;
        overflow-x: hidden;
    }

    /* Custom scrollbar */
    ::-webkit-scrollbar {
        width: 8px;
    }

    ::-webkit-scrollbar-track {
        background: #f1f5f9;
        border-radius: 4px;
    }

    ::-webkit-scrollbar-thumb {
        background: linear-gradient(to bottom, #3b82f6, #1d4ed8);
        border-radius: 4px;
    }

    ::-webkit-scrollbar-thumb:hover {
        background: linear-gradient(to bottom, #1d4ed8, #1e40af);
    }

    /* Keyframes for floating animation */
    @keyframes float {
        0%, 100% { transform: translateY(0px); }
        50% { transform: translateY(-10px); }
    }

    .group:hover .animate-float {
        animation: float 2s ease-in-out infinite;
    }

    /* Additional custom animations */
    @keyframes fadeInUp {
        from {
            opacity: 0;
            transform: translateY(30px);
        }
        to {
            opacity: 1;
            transform: translateY(0);
        }
    }

    .fade-in-up {
        animation: fadeInUp 0.6s ease-out;
    }

    .stagger-1 { animation-delay: 0.1s; }
    .stagger-2 { animation-delay: 0.2s; }
    .stagger-3 { animation-delay: 0.3s; }
    .stagger-4 { animation-delay: 0.4s; }

    /* Table animations */
    @keyframes slideInLeft {
        from {
            opacity: 0;
            transform: translateX(-20px);
        }
        to {
            opacity: 1;
            transform: translateX(0);
        }
    }

    .slide-in-left {
        animation: slideInLeft 0.5s ease-out;
    }

    /* Hover effects */
    .hover-lift {
        transition: all 0.3s ease;
    }

    .hover-lift:hover {
        transform: translateY(-2px);
        box-shadow: 0 20px 40px rgba(0, 0, 0, 0.1);
    }
</style>
@endpush

@section('content')
<div class="min-h-screen bg-gradient-to-br from-slate-50 via-blue-50 to-indigo-100 p-6">
    <!-- Header Section -->
    <div class="mb-8 fade-in-up">
        <div class="backdrop-blur-sm bg-white/70 rounded-2xl p-6 shadow-xl border border-white/20">
            <div class="flex items-center justify-between">
                <div>
                    <h1 class="text-3xl font-bold bg-gradient-to-r from-blue-600 to-indigo-600 bg-clip-text text-transparent">
                        Manajemen Pengguna 👥
                    </h1>
                    <p class="text-lg text-gray-700 mt-2">
                        Kelola koordinator dan pengguna sistem
                    </p>
                </div>
                <div class="hidden md:block">
                    <div class="w-16 h-16 bg-gradient-to-br from-blue-400 to-indigo-500 rounded-full flex items-center justify-center text-white text-2xl font-bold shadow-lg animate-float">
                        🔧
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- Action Button Section -->
    <div class="mb-8 fade-in-up stagger-1">
        <div class="flex flex-col sm:flex-row gap-4 items-start sm:items-center justify-between">
            <div class="flex items-center space-x-4">
                <a href="{{ route('users.create') }}" class="group relative overflow-hidden bg-gradient-to-r from-blue-500 to-blue-600 text-white px-6 py-3 rounded-xl hover:from-blue-600 hover:to-blue-700 transition-all duration-300 transform hover:scale-105 shadow-lg hover:shadow-blue-500/25 no-underline font-semibold">
                    <div class="flex items-center space-x-2">
                        <span class="text-lg">➕</span>
                        <span>Tambah Koordinator</span>
                    </div>
                    <div class="absolute inset-0 bg-white/20 opacity-0 group-hover:opacity-100 transition-opacity duration-300"></div>
                </a>
            </div>
            
            <!-- Stats Cards -->
            <div class="flex space-x-4">
                <div class="backdrop-blur-sm bg-white/80 rounded-xl p-4 shadow-lg border border-white/20">
                    <div class="flex items-center space-x-2">
                        <div class="w-8 h-8 bg-gradient-to-br from-green-400 to-green-500 rounded-full flex items-center justify-center">
                            <span class="text-white text-sm font-bold">{{ $users->count() }}</span>
                        </div>
                        <span class="text-gray-700 font-medium text-sm">Total Koordinator</span>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- Table Section -->
    <div class="backdrop-blur-sm bg-white/80 rounded-2xl shadow-xl border border-white/20 fade-in-up stagger-2">
        <div class="p-6 border-b border-gray-200/50">
            <div class="flex items-center space-x-3">
                <div class="p-2 bg-gradient-to-br from-purple-500 to-indigo-600 rounded-lg">
                    <svg class="w-5 h-5 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 4.354a4 4 0 110 5.292M15 21H3v-1a6 6 0 0112 0v1zm0 0h6v-1a6 6 0 00-9-5.197m13.5-9a2.5 2.5 0 11-5 0 2.5 2.5 0 015 0z"></path>
                    </svg>
                </div>
                <h2 class="text-xl font-bold text-gray-800">Daftar Koordinator</h2>
            </div>
        </div>

        <div class="overflow-x-auto">
            <table class="w-full">
                <thead>
                    <tr class="bg-gradient-to-r from-gray-50 to-gray-100">
                        <th class="px-6 py-4 text-left text-sm font-semibold text-gray-700 uppercase tracking-wider border-b border-gray-200">
                            <div class="flex items-center space-x-2">
                                <span>👤</span>
                                <span>Nama</span>
                            </div>
                        </th>
                        <th class="px-6 py-4 text-left text-sm font-semibold text-gray-700 uppercase tracking-wider border-b border-gray-200">
                            <div class="flex items-center space-x-2">
                                <span>📧</span>
                                <span>Email</span>
                            </div>
                        </th>
                        <th class="px-6 py-4 text-left text-sm font-semibold text-gray-700 uppercase tracking-wider border-b border-gray-200">
                            <div class="flex items-center space-x-2">
                                <span>⚙️</span>
                                <span>Aksi</span>
                            </div>
                        </th>
                    </tr>
                </thead>
                <tbody class="divide-y divide-gray-200/50">
                    @forelse ($users as $index => $user)
                    <tr class="hover:bg-gradient-to-r hover:from-blue-50 hover:to-indigo-50 transition-all duration-300 slide-in-left" style="animation-delay: {{ $index * 0.1 }}s">
                        <td class="px-6 py-4 whitespace-nowrap">
                            <div class="flex items-center space-x-3">
                                <div class="w-10 h-10 bg-gradient-to-br from-blue-400 to-indigo-500 rounded-full flex items-center justify-center text-white font-bold">
                                    {{ substr($user->name, 0, 1) }}
                                </div>
                                <div>
                                    <div class="text-sm font-semibold text-gray-900">{{ $user->name }}</div>
                                    <div class="text-xs text-gray-500">Koordinator</div>
                                </div>
                            </div>
                        </td>
                        <td class="px-6 py-4 whitespace-nowrap">
                            <div class="flex items-center space-x-2">
                                <span class="text-sm text-gray-900">{{ $user->email }}</span>
                                <span class="inline-flex items-center px-2 py-1 rounded-full text-xs font-medium bg-green-100 text-green-800">
                                    Aktif
                                </span>
                            </div>
                        </td>
                        <td class="px-6 py-4 whitespace-nowrap">
                            <div class="flex items-center space-x-3">
                                <a href="{{ route('users.edit', $user) }}" class="group relative overflow-hidden bg-gradient-to-r from-yellow-400 to-orange-500 text-white px-4 py-2 rounded-lg hover:from-yellow-500 hover:to-orange-600 transition-all duration-300 transform hover:scale-105 shadow-md hover:shadow-yellow-500/25 no-underline font-medium text-sm">
                                    <div class="flex items-center space-x-1">
                                        <span>✏️</span>
                                        <span>Edit</span>
                                    </div>
                                    <div class="absolute inset-0 bg-white/20 opacity-0 group-hover:opacity-100 transition-opacity duration-300"></div>
                                </a>
                                
                                <form action="{{ route('users.destroy', $user) }}" method="POST" class="inline">
                                    @csrf
                                    @method('DELETE')
                                    <button onclick="return confirm('Apakah Anda yakin ingin menghapus koordinator ini?')" class="group relative overflow-hidden bg-gradient-to-r from-red-500 to-red-600 text-white px-4 py-2 rounded-lg hover:from-red-600 hover:to-red-700 transition-all duration-300 transform hover:scale-105 shadow-md hover:shadow-red-500/25 font-medium text-sm">
                                        <div class="flex items-center space-x-1">
                                            <span>🗑️</span>
                                            <span>Hapus</span>
                                        </div>
                                        <div class="absolute inset-0 bg-white/20 opacity-0 group-hover:opacity-100 transition-opacity duration-300"></div>
                                    </button>
                                </form>
                            </div>
                        </td>
                    </tr>
                    @empty
                    <tr>
                        <td colspan="3" class="px-6 py-12 text-center">
                            <div class="flex flex-col items-center space-y-4">
                                <div class="w-16 h-16 bg-gray-100 rounded-full flex items-center justify-center">
                                    <span class="text-2xl">📭</span>
                                </div>
                                <div class="text-gray-500">
                                    <p class="text-lg font-medium">Belum ada koordinator</p>
                                    <p class="text-sm">Tambahkan koordinator pertama untuk memulai</p>
                                </div>
                                <a href="{{ route('users.create') }}" class="bg-gradient-to-r from-blue-500 to-blue-600 text-white px-6 py-2 rounded-lg hover:from-blue-600 hover:to-blue-700 transition-all duration-300 no-underline font-medium">
                                    Tambah Koordinator
                                </a>
                            </div>
                        </td>
                    </tr>
                    @endforelse
                </tbody>
            </table>
        </div>

        <!-- Table Footer -->
        <div class="px-6 py-4 bg-gradient-to-r from-gray-50 to-gray-100 border-t border-gray-200/50">
            <div class="flex items-center justify-between">
                <div class="text-sm text-gray-600">
                    Menampilkan {{ $users->count() }} koordinator
                </div>
                <div class="flex items-center space-x-2 text-sm text-gray-500">
                    <span class="flex items-center">
                        <span class="w-2 h-2 bg-green-400 rounded-full mr-2 animate-pulse"></span>
                        Data Real-time
                    </span>
                </div>
            </div>
        </div>
    </div>

    <!-- Footer Information -->
    <div class="mt-8 backdrop-blur-sm bg-white/60 rounded-2xl p-6 shadow-xl border border-white/20 fade-in-up stagger-3">
        <div class="text-center">
            <p class="text-gray-600 text-sm">
                Halaman terakhir diperbarui: <span class="font-semibold text-gray-800">{{ now()->format('d M Y, H:i') }}</span>
            </p>
            <div class="mt-4 flex justify-center space-x-8 text-sm text-gray-500">
                <span class="flex items-center">
                    <span class="w-2 h-2 bg-blue-400 rounded-full mr-2"></span>
                    Manajemen Pengguna
                </span>
                <span class="flex items-center">
                    <span class="w-2 h-2 bg-purple-400 rounded-full mr-2"></span>
                    Sistem Koordinator
                </span>
            </div>
        </div>
    </div>
</div>

<div class="max-w-2xl mx-auto p-6 bg-white shadow-xl rounded-xl">
        <!-- Judul Form -->
        <div class="mb-6 text-center">
            <h2 class="text-3xl font-bold text-gray-800 tracking-tight">
                Tambah Koordinator
            </h2>
            <p class="mt-2 text-sm text-gray-500">
                Lengkapi informasi koordinator baru untuk ditambahkan ke sistem.
            </p>
        </div>
        <form method="POST" action="{{ route('users.store') }}" class="space-y-6">
            @csrf
            @include('users.partials.form', ['user' => new \App\Models\User])
            <div class="pt-4 flex justify-end space-x-3">
                <a href="{{ route('users.index') }}"
                    class="inline-flex items-center px-6 py-3 bg-gray-200 text-gray-700 text-sm font-semibold rounded-lg shadow hover:bg-gray-300 transition-all duration-300">
                    Batal
                </a>
                <button type="submit"
                    class="inline-flex items-center px-6 py-3 bg-gradient-to-r from-blue-600 to-indigo-600 text-white text-sm font-semibold rounded-lg shadow hover:from-blue-700 hover:to-indigo-700 transition-all duration-300">
                    Simpan
                </button>
            </div>
        </form>
    </div>

@endsection
