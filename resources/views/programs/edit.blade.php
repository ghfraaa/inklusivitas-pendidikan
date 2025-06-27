@extends('layouts.app')

@section('header', 'Edit Program')

@section('content')
<div class="p-4 max-w-2xl mx-auto">
    <form action="{{ route('programs.store') }}" method="POST">
        @csrf
        @include('programs.partials.form', ['program' => new \App\Models\Program])
        <button type="submit" class="mt-4 bg-blue-600 text-white px-4 py-2 rounded">Simpan</button>
    </form>

</div>
@endsection
