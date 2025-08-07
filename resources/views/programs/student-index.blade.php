@extends('layouts.app')

@section('content')
<div class="max-w-7xl mx-auto p-4">
    <h1 class="text-2xl font-bold mb-4">Program Tersedia</h1>

    @foreach ($programs as $program)
    <div class="bg-white shadow p-4 mb-4 rounded-lg">
        <h2 class="text-xl font-semibold">{{ $program->name }}</h2>
        <p class="text-gray-600">{{ $program->description }}</p>
        <form action="{{ route('programs.student.register', $program->id) }}" method="POST" class="mt-2">
            @csrf
            <button type="submit" class="px-4 py-2 bg-blue-500 text-white rounded hover:bg-blue-600">
                Daftar
            </button>
        </form>
    </div>
    @endforeach
</div>
@endsection
