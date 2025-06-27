@extends('layouts.app')

@section('header', 'Tambah Koordinator')

@section('content')
<div class="p-4 max-w-xl mx-auto">
    <form method="POST" action="{{ route('users.store') }}">
        @csrf
        @include('users.partials.form', ['user' => new \App\Models\User])
        <button type="submit" class="mt-4 bg-blue-600 text-white px-4 py-2 rounded">Simpan</button>
    </form>
</div>
@endsection
