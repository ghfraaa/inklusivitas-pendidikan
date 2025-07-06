@extends('layouts.app')

@section('header',)

@section('content')
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