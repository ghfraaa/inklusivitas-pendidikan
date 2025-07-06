@extends('layouts.app')

@section('header')

@section('content')
<div class="p-4 max-w-xl mx-auto">
    <div class="bg-white shadow-xl rounded-xl p-8 border border-gray-100">
        <div class="mb-6 text-center">
            <h2 class="text-3xl font-bold text-gray-800 tracking-tight">
                Edit Koordinator
            </h2>
            <p class="mt-2 text-sm text-gray-500">
                Perbarui informasi koordinator untuk memastikan data yang akurat dan terkini.
            </p>
        </div>
        <form method="POST" action="{{ route('users.update', $user) }}" class="space-y-6">
            @csrf
            @method('PUT')

            @include('users.partials.form', ['user' => $user])

            <div class="pt-4 text-right">
                <button type="submit"
                    class="inline-flex items-center px-6 py-3 bg-gradient-to-r from-blue-600 to-indigo-600 text-white text-sm font-semibold rounded-lg shadow-lg hover:from-blue-700 hover:to-indigo-700 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-blue-500 transition-all duration-300">
                    <svg class="w-5 h-5 mr-2" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                              d="M4 4v16h16V4H4zm4 8h8M12 8v8" />
                    </svg>
                    Simpan Perubahan
                </button>
            </div>
        </form>
    </div>
</div>
@endsection
