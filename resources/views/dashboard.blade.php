@extends('layouts.app')

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

            0%,
            100% {
                transform: translateY(0px);
            }

            50% {
                transform: translateY(-10px);
            }
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

        .stagger-1 {
            animation-delay: 0.1s;
        }

        .stagger-2 {
            animation-delay: 0.2s;
        }

        .stagger-3 {
            animation-delay: 0.3s;
        }

        .stagger-4 {
            animation-delay: 0.4s;
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
                        <h1
                            class="text-3xl font-bold bg-gradient-to-r from-blue-600 to-indigo-600 bg-clip-text text-transparent">
                            Selamat Datang! ✨
                        </h1>
                        <p class="text-lg text-gray-700 mt-2">
                            <span class="font-semibold">{{ Auth::user()->name }}</span>
                            <span
                                class="inline-flex items-center px-3 py-1 rounded-full text-sm font-medium bg-gradient-to-r from-blue-500 to-indigo-500 text-white ml-2">
                                {{ Auth::user()->role_display }}
                            </span>
                        </p>
                    </div>
                    <div class="hidden md:block">
                        <div
                            class="w-16 h-16 bg-gradient-to-br from-blue-400 to-indigo-500 rounded-full flex items-center justify-center text-white text-2xl font-bold shadow-lg">
                            {{ substr(Auth::user()->name, 0, 1) }}
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <!-- Stats Cards -->
        <div class="grid md:grid-cols-3 gap-6 mb-10">
            <!-- Card 1: Total Program -->
            <div
                class="group relative overflow-hidden bg-gradient-to-br from-blue-500 to-blue-600 rounded-2xl p-6 shadow-2xl transform hover:scale-105 transition-all duration-300 hover:shadow-blue-500/25 fade-in-up stagger-1">
                <div class="absolute top-0 right-0 w-32 h-32 bg-white/10 rounded-full -translate-y-16 translate-x-16"></div>
                <div class="absolute bottom-0 left-0 w-24 h-24 bg-white/5 rounded-full translate-y-12 -translate-x-12">
                </div>
                <div class="relative z-10">
                    <div class="flex items-center justify-between mb-4">
                        <div class="p-3 bg-white/20 rounded-lg backdrop-blur-sm">
                            <svg class="w-6 h-6 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                    d="M3 7v10a2 2 0 002 2h14a2 2 0 002-2V9a2 2 0 00-2-2h-6l-2-2H5a2 2 0 00-2 2z"></path>
                            </svg>
                        </div>
                    </div>
                    <h2 class="text-white/90 text-lg font-semibold mb-2">Total Program</h2>
                    <p class="text-white text-4xl font-bold">{{ $totalPrograms }}</p>
                    <div class="mt-4 text-white/80 text-sm">
                        <span class="inline-flex items-center">
                            <span class="w-2 h-2 bg-green-400 rounded-full mr-2"></span>
                            Semua Program
                        </span>
                    </div>
                </div>
            </div>

            <!-- Card 2: Total Peserta -->
            <div
                class="group relative overflow-hidden bg-gradient-to-br from-emerald-500 to-green-600 rounded-2xl p-6 shadow-2xl transform hover:scale-105 transition-all duration-300 hover:shadow-emerald-500/25 fade-in-up stagger-2">
                <div class="absolute top-0 right-0 w-32 h-32 bg-white/10 rounded-full -translate-y-16 translate-x-16"></div>
                <div class="absolute bottom-0 left-0 w-24 h-24 bg-white/5 rounded-full translate-y-12 -translate-x-12">
                </div>
                <div class="relative z-10">
                    <div class="flex items-center justify-between mb-4">
                        <div class="p-3 bg-white/20 rounded-lg backdrop-blur-sm">
                            <svg class="w-6 h-6 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                    d="M12 4.354a4 4 0 110 5.292M15 21H3v-1a6 6 0 0112 0v1zm0 0h6v-1a6 6 0 00-9-5.197M13 7a4 4 0 11-8 0 4 4 0 018 0z">
                                </path>
                            </svg>
                        </div>

                    </div>
                    <h2 class="text-white/90 text-lg font-semibold mb-2">Total Peserta</h2>
                    <p class="text-white text-4xl font-bold">{{ $totalParticipants }}</p>
                    <div class="mt-4 text-white/80 text-sm">
                        <span class="inline-flex items-center">
                            <span class="w-2 h-2 bg-blue-400 rounded-full mr-2"></span>
                            Peserta Terdaftar
                        </span>
                    </div>
                </div>
            </div>

            <!-- Card 3: Program Aktif -->
            <div
                class="group relative overflow-hidden bg-gradient-to-br from-amber-500 to-orange-600 rounded-2xl p-6 shadow-2xl transform hover:scale-105 transition-all duration-300 hover:shadow-amber-500/25 fade-in-up stagger-3">
                <div class="absolute top-0 right-0 w-32 h-32 bg-white/10 rounded-full -translate-y-16 translate-x-16"></div>
                <div class="absolute bottom-0 left-0 w-24 h-24 bg-white/5 rounded-full translate-y-12 -translate-x-12">
                </div>
                <div class="relative z-10">
                    <div class="flex items-center justify-between mb-4">
                        <div class="p-3 bg-white/20 rounded-lg backdrop-blur-sm">
                            <svg class="w-6 h-6 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                    d="M13 10V3L4 14h7v7l9-11h-7z"></path>
                            </svg>
                        </div>
                    </div>
                    <h2 class="text-white/90 text-lg font-semibold mb-2">Program Aktif</h2>
                    <p class="text-white text-4xl font-bold">{{ $activePrograms }}</p>
                    <div class="mt-4 text-white/80 text-sm">
                        <span class="inline-flex items-center">
                            <span class="w-2 h-2 bg-green-400 rounded-full mr-2 animate-pulse"></span>
                            Sedang Berjalan
                        </span>
                    </div>
                </div>
            </div>
        </div>

        <!-- Informasi Section -->
        <div class="grid lg:grid-cols-2 gap-6">
            <!-- Summary Card -->
            <div class="backdrop-blur-sm bg-white/80 rounded-2xl p-6 shadow-xl border border-white/20 fade-in-up stagger-4">
                <div class="flex items-center mb-6">
                    <div class="p-3 bg-gradient-to-br from-purple-500 to-indigo-600 rounded-xl mr-4">
                        <svg class="w-6 h-6 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                d="M9 19v-6a2 2 0 00-2-2H5a2 2 0 00-2 2v6a2 2 0 002 2h2a2 2 0 002-2zm0 0V9a2 2 0 012-2h2a2 2 0 012 2v10m-6 0a2 2 0 002 2h2a2 2 0 002-2m0 0V5a2 2 0 012-2h2a2 2 0 012 2v14a2 2 0 01-2 2h-2a2 2 0 01-2-2z">
                            </path>
                        </svg>
                    </div>
                    <h2 class="text-xl font-bold text-gray-800">Ringkasan Informasi</h2>
                </div>

                <div class="space-y-4">
                    <div
                        class="flex items-center justify-between p-4 bg-gradient-to-r from-blue-50 to-indigo-50 rounded-xl border border-blue-100 hover:shadow-md transition-shadow duration-300">
                        <div class="flex items-center">
                            <div class="w-10 h-10 bg-blue-100 rounded-full flex items-center justify-center mr-3">
                                <span class="text-blue-600 font-bold">📚</span>
                            </div>
                            <span class="text-gray-700 font-medium">Total Program</span>
                        </div>
                        <span class="text-2xl font-bold text-blue-600">{{ $totalPrograms }}</span>
                    </div>

                    <div
                        class="flex items-center justify-between p-4 bg-gradient-to-r from-green-50 to-emerald-50 rounded-xl border border-green-100 hover:shadow-md transition-shadow duration-300">
                        <div class="flex items-center">
                            <div class="w-10 h-10 bg-green-100 rounded-full flex items-center justify-center mr-3">
                                <span class="text-green-600 font-bold">👨‍🎓</span>
                            </div>
                            <span class="text-gray-700 font-medium">Peserta Terdaftar</span>
                        </div>
                        <span class="text-2xl font-bold text-green-600">{{ $totalParticipants }}</span>
                    </div>

                    <div
                        class="flex items-center justify-between p-4 bg-gradient-to-r from-amber-50 to-orange-50 rounded-xl border border-amber-100 hover:shadow-md transition-shadow duration-300">
                        <div class="flex items-center">
                            <div class="w-10 h-10 bg-amber-100 rounded-full flex items-center justify-center mr-3">
                                <span class="text-amber-600 font-bold">🚀</span>
                            </div>
                            <span class="text-gray-700 font-medium">Program Aktif</span>
                        </div>
                        <span class="text-2xl font-bold text-amber-600">{{ $activePrograms }}</span>
                    </div>
                </div>
            </div>

            <!-- Quick Actions Card -->
            <div class="backdrop-blur-sm bg-white/80 rounded-2xl p-6 shadow-xl border border-white/20 fade-in-up stagger-4">
                <div class="flex items-center mb-6">
                    <div class="p-3 bg-gradient-to-br from-pink-500 to-rose-600 rounded-xl mr-4">
                        <svg class="w-6 h-6 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                d="M12 6V4m0 2a2 2 0 100 4m0-4a2 2 0 110 4m-6 8a2 2 0 100-4m0 4a2 2 0 100 4m0-4v2m0-6V4m6 6v10m6-2a2 2 0 100-4m0 4a2 2 0 100 4m0-4v2m0-6V4">
                            </path>
                        </svg>
                    </div>
                    <h2 class="text-xl font-bold text-gray-800">Aksi Cepat</h2>
                </div>

                <div class="space-y-3">
                    <a href="{{ route('programs.create') }}"
                        class="w-full flex items-center justify-between p-4 bg-gradient-to-r from-blue-500 to-blue-600 text-white rounded-xl hover:from-blue-600 hover:to-blue-700 transition-all duration-300 transform hover:scale-105 shadow-lg hover:shadow-blue-500/25 no-underline">
                        <span class="flex items-center">
                            <span class="mr-3">➕</span>
                            Tambah Program Baru
                        </span>
                        <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5l7 7-7 7"></path>
                        </svg>
                    </a>

                    <a href="{{ route('participants.index') }}"
                        class="w-full flex items-center justify-between p-4 bg-gradient-to-r from-green-500 to-green-600 text-white rounded-xl hover:from-green-600 hover:to-green-700 transition-all duration-300 transform hover:scale-105 shadow-lg hover:shadow-green-500/25 no-underline">
                        <span class="flex items-center">
                            <span class="mr-3">👥</span>
                            Kelola Peserta
                        </span>
                        <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5l7 7-7 7"></path>
                        </svg>
                    </a>

                    <a href="{{ route('reports.index') }}"
                        class="w-full flex items-center justify-between p-4 bg-gradient-to-r from-purple-500 to-purple-600 text-white rounded-xl hover:from-purple-600 hover:to-purple-700 transition-all duration-300 transform hover:scale-105 shadow-lg hover:shadow-purple-500/25 no-underline">
                        <span class="flex items-center">
                            <span class="mr-3">📊</span>
                            Lihat Laporan
                        </span>
                        <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5l7 7-7 7"></path>
                        </svg>
                    </a>
                </div>
            </div>
        </div>

        <!-- Footer Stats -->
        <div class="mt-8 backdrop-blur-sm bg-white/60 rounded-2xl p-6 shadow-xl border border-white/20 fade-in-up">
            <div class="text-center">
                <p class="text-gray-600 text-sm">
                    Dashboard terakhir diperbarui: <span
                        class="font-semibold text-gray-800">{{ now()->format('d M Y, H:i') }}</span>
                </p>
                <div class="mt-4 flex justify-center space-x-8 text-sm text-gray-500">
                    <span class="flex items-center">
                        <span class="w-2 h-2 bg-green-400 rounded-full mr-2 animate-pulse"></span>
                        Sistem Aktif
                    </span>
                    <span class="flex items-center">
                        <span class="w-2 h-2 bg-blue-400 rounded-full mr-2"></span>
                        Data Real-time
                    </span>
                </div>
            </div>
        </div>
    </div>
@endsection