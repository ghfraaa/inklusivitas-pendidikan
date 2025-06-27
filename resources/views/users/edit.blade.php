@extends('layouts.app')

@section('header', 'Edit Koordinator')

@section('content')
<div class="p-4 max-w-xl mx-auto">
    <form method="POST" action="{{ route('users.update', $user) }}">
        @csrf
        @method('PUT')
        @include('users.partials.form', ['user' => $user])
        <button type="submit" class="mt-4 bg-blue-600 text-white px-4 py-2 rounded">Update</button>
    </form>
</div>
@endsection
