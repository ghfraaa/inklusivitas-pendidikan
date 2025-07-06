@extends('layouts.app')

@push('styles')
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@300;400;500;600;700;800&display=swap" rel="stylesheet">
    <style>
        .fade-in-up {
            animation: fadeInUp 0.8s ease-out forwards;
            opacity: 0;
            transform: translateY(20px);
        }
        
        .fade-in-up:nth-child(1) { animation-delay: 0.1s; }
        .fade-in-up:nth-child(2) { animation-delay: 0.2s; }
        .fade-in-up:nth-child(3) { animation-delay: 0.3s; }
        .fade-in-up:nth-child(4) { animation-delay: 0.4s; }
        
        @keyframes fadeInUp {
            to {
                opacity: 1;
                transform: translateY(0);
            }
        }
        
        .glass-effect {
            backdrop-filter: blur(16px);
            -webkit-backdrop-filter: blur(16px);
            background: rgba(255, 255, 255, 0.85);
            border: 1px solid rgba(255, 255, 255, 0.3);
            box-shadow: 0 25px 50px -12px rgba(0, 0, 0, 0.1);
        }
        
        .table-glass {
            backdrop-filter: blur(12px);
            -webkit-backdrop-filter: blur(12px);
            background: rgba(255, 255, 255, 0.95);
        }
        
        .hover-lift {
            transition: all 0.3s cubic-bezier(0.4, 0, 0.2, 1);
        }
        
        .hover-lift:hover {
            transform: translateY(-2px);
            box-shadow: 0 32px 64px -12px rgba(0, 0, 0, 0.15);
        }
        
        .gradient-border {
            position: relative;
            background: linear-gradient(135deg, #667eea 0%, #764ba2 100%);
            padding: 2px;
            border-radius: 16px;
        }
        
        .gradient-border-inner {
            background: white;
            border-radius: 14px;
            width: 100%;
            height: 100%;
        }
        
        .shimmer {
            background: linear-gradient(90deg, transparent, rgba(255,255,255,0.4), transparent);
            animation: shimmer 2s infinite;
        }
        
        @keyframes shimmer {
            0% { transform: translateX(-100%); }
            100% { transform: translateX(100%); }
        }
        
        .status-dot {
            animation: pulse 2s infinite;
        }
        
        @keyframes pulse {
            0%, 100% { opacity: 1; }
            50% { opacity: 0.5; }
        }
    </style>
@endpush

@section('content')
<div class="min-h-screen bg-gradient-to-br from-slate-50 via-indigo-50/30 to-purple-50/50 p-4 sm:p-6 lg:p-8">
    
    <!-- Header Section -->
    <div class="mb-8 fade-in-up">
        <div class="glass-effect rounded-3xl p-6 sm:p-8 hover-lift">
            <div class="flex flex-col sm:flex-row sm:items-center sm:justify-between">
                <div class="flex-1">
                    <div class="flex items-center space-x-3 mb-3">
                        <div class="w-12 h-12 bg-gradient-to-br from-purple-500 to-indigo-600 rounded-2xl flex items-center justify-center shadow-lg">
                            <svg class="w-6 h-6 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 19v-6a2 2 0 00-2-2H5a2 2 0 00-2 2v6a2 2 0 002 2h2a2 2 0 002-2zm0 0V9a2 2 0 012-2h2a2 2 0 012 2v10m-6 0a2 2 0 002 2h2a2 2 0 002-2m0 0V5a2 2 0 012-2h2a2 2 0 012 2v14a2 2 0 01-2 2h-2a2 2 0 01-2-2z"/>
                            </svg>
                        </div>
                        <div>
                            <h1 class="text-3xl sm:text-4xl font-bold bg-gradient-to-r from-purple-600 via-indigo-600 to-blue-600 bg-clip-text text-transparent">
                                Laporan Program & Peserta
                            </h1>
                            <p class="text-gray-600 mt-1 text-sm sm:text-base">Dashboard analitik dan ringkasan data real-time</p>
                        </div>
                    </div>
                </div>
                <div class="mt-4 sm:mt-0 sm:ml-6">
                    <div class="flex items-center space-x-2 text-sm text-gray-600">
                        <div class="status-dot w-2 h-2 bg-green-400 rounded-full"></div>
                        <span class="font-medium">Live Data</span>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- Statistics Cards -->
    <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-4 gap-6 mb-8 fade-in-up">
        <!-- Total Program Card -->
        <div class="glass-effect rounded-2xl p-6 hover-lift group cursor-pointer">
            <div class="flex items-center justify-between">
                <div>
                    <p class="text-sm font-medium text-gray-600 group-hover:text-blue-600 transition-colors">Total Program</p>
                    <p class="text-3xl font-bold text-gray-900 mb-1">{{ $programs->count() }}</p>
                    <div class="flex items-center text-xs">
                        <span class="text-green-600 font-medium">+12%</span>
                        <span class="text-gray-500 ml-1">vs bulan lalu</span>
                    </div>
                </div>
                <div class="w-14 h-14 bg-gradient-to-br from-blue-500 to-blue-600 rounded-2xl flex items-center justify-center shadow-lg group-hover:shadow-xl transition-shadow">
                    <svg class="w-7 h-7 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 11H5m14 0a2 2 0 012 2v6a2 2 0 01-2 2H5a2 2 0 01-2-2v-6a2 2 0 012-2m14 0V9a2 2 0 00-2-2M5 9a2 2 0 00-2 2v2a2 2 0 002 2m0 0h14m-14 0a2 2 0 002 2v2a2 2 0 01-2 2"/>
                    </svg>
                </div>
            </div>
            <div class="mt-4 w-full bg-gray-200 rounded-full h-2">
                <div class="bg-gradient-to-r from-blue-500 to-blue-600 h-2 rounded-full" style="width: 78%"></div>
            </div>
        </div>
        
        <!-- Total Peserta Card -->
        <div class="glass-effect rounded-2xl p-6 hover-lift group cursor-pointer">
            <div class="flex items-center justify-between">
                <div>
                    <p class="text-sm font-medium text-gray-600 group-hover:text-green-600 transition-colors">Total Peserta</p>
                    <p class="text-3xl font-bold text-gray-900 mb-1">{{ number_format($programs->sum('participants_count')) }}</p>
                    <div class="flex items-center text-xs">
                        <span class="text-green-600 font-medium">+25%</span>
                        <span class="text-gray-500 ml-1">vs bulan lalu</span>
                    </div>
                </div>
                <div class="w-14 h-14 bg-gradient-to-br from-green-500 to-emerald-600 rounded-2xl flex items-center justify-center shadow-lg group-hover:shadow-xl transition-shadow">
                    <svg class="w-7 h-7 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17 20h5v-2a3 3 0 00-5.356-1.857M17 20H7m10 0v-2c0-.656-.126-1.283-.356-1.857M7 20H2v-2a3 3 0 015.356-1.857M7 20v-2c0-.656.126-1.283.356-1.857m0 0a5.002 5.002 0 019.288 0M15 7a3 3 0 11-6 0 3 3 0 016 0zm6 3a2 2 0 11-4 0 2 2 0 014 0zM7 10a2 2 0 11-4 0 2 2 0 014 0z"/>
                    </svg>
                </div>
            </div>
            <div class="mt-4 w-full bg-gray-200 rounded-full h-2">
                <div class="bg-gradient-to-r from-green-500 to-emerald-600 h-2 rounded-full" style="width: 85%"></div>
            </div>
        </div>
        
        <!-- Program Aktif Card -->
        <div class="glass-effect rounded-2xl p-6 hover-lift group cursor-pointer">
            <div class="flex items-center justify-between">
                <div>
                    <p class="text-sm font-medium text-gray-600 group-hover:text-emerald-600 transition-colors">Program Aktif</p>
                    <p class="text-3xl font-bold text-gray-900 mb-1">{{ $programs->where('status', 'aktif')->count() }}</p>
                    <div class="flex items-center text-xs">
                        <span class="text-green-600 font-medium">+8%</span>
                        <span class="text-gray-500 ml-1">vs bulan lalu</span>
                    </div>
                </div>
                <div class="w-14 h-14 bg-gradient-to-br from-emerald-500 to-teal-600 rounded-2xl flex items-center justify-center shadow-lg group-hover:shadow-xl transition-shadow">
                    <svg class="w-7 h-7 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 12l2 2 4-4m6 2a9 9 0 11-18 0 9 9 0 0118 0z"/>
                    </svg>
                </div>
            </div>
            <div class="mt-4 w-full bg-gray-200 rounded-full h-2">
                <div class="bg-gradient-to-r from-emerald-500 to-teal-600 h-2 rounded-full" style="width: 92%"></div>
            </div>
        </div>
        
        <!-- Rata-rata Peserta Card -->
        <div class="glass-effect rounded-2xl p-6 hover-lift group cursor-pointer">
            <div class="flex items-center justify-between">
                <div>
                    <p class="text-sm font-medium text-gray-600 group-hover:text-purple-600 transition-colors">Rata-rata Peserta</p>
                    <p class="text-3xl font-bold text-gray-900 mb-1">{{ $programs->count() > 0 ? number_format(round($programs->sum('participants_count') / $programs->count())) : 0 }}</p>
                    <div class="flex items-center text-xs">
                        <span class="text-green-600 font-medium">+15%</span>
                        <span class="text-gray-500 ml-1">vs bulan lalu</span>
                    </div>
                </div>
                <div class="w-14 h-14 bg-gradient-to-br from-purple-500 to-indigo-600 rounded-2xl flex items-center justify-center shadow-lg group-hover:shadow-xl transition-shadow">
                    <svg class="w-7 h-7 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M7 12l3-3 3 3 4-4M8 21l4-4 4 4M3 4h18M4 4h16v12a1 1 0 01-1 1H5a1 1 0 01-1-1V4z"/>
                    </svg>
                </div>
            </div>
            <div class="mt-4 w-full bg-gray-200 rounded-full h-2">
                <div class="bg-gradient-to-r from-purple-500 to-indigo-600 h-2 rounded-full" style="width: 67%"></div>
            </div>
        </div>
    </div>

    <!-- Performance Cards -->
    <div class="grid grid-cols-1 lg:grid-cols-3 gap-6 mb-8 fade-in-up">
        <!-- Program Terpopuler Card -->
        <div class="glass-effect rounded-2xl p-6 hover-lift">
            <div class="flex items-center justify-between mb-4">
                <h3 class="text-lg font-semibold text-gray-900">Program Terpopuler</h3>
                <div class="w-8 h-8 bg-gradient-to-br from-yellow-400 to-orange-500 rounded-lg flex items-center justify-center">
                    <svg class="w-4 h-4 text-white" fill="currentColor" viewBox="0 0 20 20">
                        <path d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z"/>
                    </svg>
                </div>
            </div>
            @if($programs->count() > 0)
                @php $topProgram = $programs->sortByDesc('participants_count')->first(); @endphp
                <div class="space-y-3">
                    <div class="flex items-center justify-between">
                        <span class="text-sm font-medium text-gray-700">{{ $topProgram->name }}</span>
                        <span class="text-lg font-bold text-gray-900">{{ $topProgram->participants_count }}</span>
                    </div>
                    <div class="w-full bg-gray-200 rounded-full h-2">
                        <div class="bg-gradient-to-r from-yellow-400 to-orange-500 h-2 rounded-full" style="width: 100%"></div>
                    </div>
                    <p class="text-xs text-gray-500">Tertinggi dalam 30 hari terakhir</p>
                </div>
            @endif
        </div>

        <!-- Tingkat Partisipasi Card -->
        <div class="glass-effect rounded-2xl p-6 hover-lift">
            <div class="flex items-center justify-between mb-4">
                <h3 class="text-lg font-semibold text-gray-900">Tingkat Partisipasi</h3>
                <div class="w-8 h-8 bg-gradient-to-br from-cyan-400 to-blue-500 rounded-lg flex items-center justify-center">
                    <svg class="w-4 h-4 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M13 7h8m0 0v8m0-8l-8 8-4-4-6 6"/>
                    </svg>
                </div>
            </div>
            <div class="space-y-3">
                <div class="flex items-end space-x-1">
                    <span class="text-3xl font-bold text-gray-900">87</span>
                    <span class="text-lg text-gray-600">%</span>
                </div>
                <div class="w-full bg-gray-200 rounded-full h-2">
                    <div class="bg-gradient-to-r from-cyan-400 to-blue-500 h-2 rounded-full" style="width: 87%"></div>
                </div>
                <div class="flex items-center text-xs">
                    <span class="text-green-600 font-medium">+5.2%</span>
                    <span class="text-gray-500 ml-1">dari target bulanan</span>
                </div>
            </div>
        </div>

        <!-- Status Overview Card -->
        <div class="glass-effect rounded-2xl p-6 hover-lift">
            <div class="flex items-center justify-between mb-4">
                <h3 class="text-lg font-semibold text-gray-900">Status Overview</h3>
                <div class="w-8 h-8 bg-gradient-to-br from-pink-400 to-rose-500 rounded-lg flex items-center justify-center">
                    <svg class="w-4 h-4 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M11 3.055A9.001 9.001 0 1020.945 13H11V3.055z"/>
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M20.488 9H15V3.512A9.025 9.025 0 0120.488 9z"/>
                    </svg>
                </div>
            </div>
            <div class="space-y-4">
                <div class="flex items-center justify-between">
                    <div class="flex items-center space-x-2">
                        <div class="w-3 h-3 bg-green-400 rounded-full"></div>
                        <span class="text-sm text-gray-600">Aktif</span>
                    </div>
                    <span class="text-sm font-semibold text-gray-900">{{ $programs->where('status', 'aktif')->count() }}</span>
                </div>
                <div class="flex items-center justify-between">
                    <div class="flex items-center space-x-2">
                        <div class="w-3 h-3 bg-red-400 rounded-full"></div>
                        <span class="text-sm text-gray-600">Nonaktif</span>
                    </div>
                    <span class="text-sm font-semibold text-gray-900">{{ $programs->where('status', '!=', 'aktif')->count() }}</span>
                </div>
                <div class="pt-2 border-t border-gray-200">
                    <div class="flex items-center justify-between">
                        <span class="text-sm font-medium text-gray-700">Total</span>
                        <span class="text-lg font-bold text-gray-900">{{ $programs->count() }}</span>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- Main Table -->
    <div class="fade-in-up">
        <div class="glass-effect rounded-3xl p-6 sm:p-8 hover-lift">
            <div class="mb-6">
                <h2 class="text-2xl font-bold text-gray-900 mb-2">Detail Program</h2>
                <p class="text-gray-600 text-sm">Informasi lengkap tentang setiap program dan jumlah pesertanya</p>
            </div>
            
            <div class="overflow-hidden rounded-2xl border border-gray-200/50">
                <div class="overflow-x-auto">
                    <table class="min-w-full table-auto">
                        <thead>
                            <tr class="bg-gradient-to-r from-indigo-600 via-purple-600 to-blue-600 text-white">
                                <th class="px-6 py-4 text-left text-sm font-semibold rounded-tl-2xl">No</th>
                                <th class="px-6 py-4 text-left text-sm font-semibold">Nama Program</th>
                                <th class="px-6 py-4 text-left text-sm font-semibold">Total Peserta</th>
                                <th class="px-6 py-4 text-left text-sm font-semibold">Status</th>
                                <th class="px-6 py-4 text-left text-sm font-semibold rounded-tr-2xl">Tanggal Dibuat</th>
                            </tr>
                        </thead>
                        <tbody class="table-glass divide-y divide-gray-200/50">
                            @foreach ($programs as $index => $program)
                                <tr class="hover:bg-gradient-to-r hover:from-blue-50/50 hover:to-indigo-50/50 transition-all duration-300 group">
                                    <td class="px-6 py-4 whitespace-nowrap">
                                        <div class="flex items-center justify-center w-8 h-8 bg-gradient-to-br from-gray-100 to-gray-200 rounded-full text-sm font-semibold text-gray-700 group-hover:from-indigo-100 group-hover:to-purple-100 group-hover:text-indigo-700 transition-all duration-300">
                                            {{ $index + 1 }}
                                        </div>
                                    </td>
                                    <td class="px-6 py-4">
                                        <div class="flex items-center">
                                            <div class="w-2 h-8 bg-gradient-to-b from-indigo-400 to-purple-500 rounded-full mr-3 opacity-70"></div>
                                            <div>
                                                <div class="text-base font-semibold text-gray-900 group-hover:text-indigo-700 transition-colors duration-300">
                                                    {{ $program->name }}
                                                </div>
                                            </div>
                                        </div>
                                    </td>
                                    <td class="px-6 py-4 whitespace-nowrap">
                                        <div class="flex items-center">
                                            <div class="text-lg font-bold text-gray-900">{{ $program->participants_count }}</div>
                                            <div class="ml-2 text-xs text-gray-500">peserta</div>
                                        </div>
                                    </td>
                                    <td class="px-6 py-4 whitespace-nowrap">
                                        <div class="flex items-center">
                                            @if($program->status === 'aktif')
                                                <span class="inline-flex items-center px-3 py-1 rounded-full text-xs font-semibold bg-gradient-to-r from-green-100 to-emerald-100 text-green-700 border border-green-200">
                                                    <div class="w-2 h-2 bg-green-400 rounded-full mr-2 animate-pulse"></div>
                                                    Aktif
                                                </span>
                                            @else
                                                <span class="inline-flex items-center px-3 py-1 rounded-full text-xs font-semibold bg-gradient-to-r from-red-100 to-pink-100 text-red-700 border border-red-200">
                                                    <div class="w-2 h-2 bg-red-400 rounded-full mr-2"></div>
                                                    Nonaktif
                                                </span>
                                            @endif
                                        </div>
                                    </td>
                                    <td class="px-6 py-4 whitespace-nowrap">
                                        <div class="text-sm text-gray-600">
                                            <div class="font-medium">{{ $program->created_at->format('d M Y') }}</div>
                                            <div class="text-xs text-gray-400">{{ $program->created_at->format('H:i') }} WIB</div>
                                        </div>
                                    </td>
                                </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>

    <!-- Footer Info -->
    <div class="mt-8 fade-in-up">
        <div class="glass-effect rounded-3xl p-6 hover-lift">
            <div class="flex flex-col sm:flex-row sm:items-center sm:justify-between">
                <div class="flex items-center space-x-4 mb-4 sm:mb-0">
                    <div class="w-10 h-10 bg-gradient-to-br from-blue-500 to-indigo-600 rounded-2xl flex items-center justify-center">
                        <svg class="w-5 h-5 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 8v4l3 3m6-3a9 9 0 11-18 0 9 9 0 0118 0z"/>
                        </svg>
                    </div>
                    <div>
                        <p class="text-sm font-medium text-gray-900">Terakhir Diperbarui</p>
                        <p class="text-sm text-gray-600">{{ now()->format('d M Y, H:i') }} WIB</p>
                    </div>
                </div>
                
                <div class="flex items-center space-x-6">
                    <div class="flex items-center space-x-2">
                        <div class="status-dot w-2 h-2 bg-green-400 rounded-full"></div>
                        <span class="text-sm text-gray-600 font-medium">Data Valid</span>
                    </div>
                    <div class="flex items-center space-x-2">
                        <div class="w-2 h-2 bg-blue-400 rounded-full"></div>
                        <span class="text-sm text-gray-600 font-medium">Sinkronisasi Real-time</span>
                    </div>
                    <div class="flex items-center space-x-2">
                        <div class="w-2 h-2 bg-purple-400 rounded-full"></div>
                        <span class="text-sm text-gray-600 font-medium">Secure</span>
                    </div>
                </div>
            </div>
        </div>
    </div>

</div>
@endsection