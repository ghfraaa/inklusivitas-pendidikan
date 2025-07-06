@extends('layouts.app')

@section('header')

@section('content')
<div class="px-4 py-6 max-w-3xl mx-auto">
    <div class="bg-white shadow-xl rounded-xl p-8 border border-gray-100">
        <!-- Judul Form -->
        <div class="mb-6 text-center">
            <h2 class="text-3xl font-bold text-gray-800 tracking-tight">
                Tambah Program
            </h2>
            <p class="mt-2 text-sm text-gray-500">
                Lengkapi informasi program baru untuk ditambahkan ke sistem. Pastikan semua data yang dimasukkan akurat
                dan sesuai dengan kebutuhan program.
            </p>
        </div>
        <form action="{{ route('programs.store') }}" method="POST" class="space-y-6">
            @csrf

            @include('programs.partials.form', ['program' => new \App\Models\Program])

            <div class="pt-4 flex justify-end space-x-3">
                <a href="{{ route('programs.index') }}"
                   class="inline-flex items-center px-6 py-3 bg-gray-200 text-gray-700 text-sm font-semibold rounded-lg shadow hover:bg-gray-300 transition duration-300">
                    Batal
                </a>
                <button type="submit"
                        class="inline-flex items-center px-6 py-3 bg-gradient-to-r from-blue-600 to-indigo-600 text-white text-sm font-semibold rounded-lg shadow-lg hover:from-blue-700 hover:to-indigo-700 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-blue-500 transition duration-300">
                    <svg class="w-5 h-5 mr-2" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                              d="M12 4v16m8-8H4" />
                    </svg>
                    Simpan Program
                </button>
            </div>
        </form>
    </div>
</div>
@endsection
