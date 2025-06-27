@extends('layouts.app')

@section('header', 'Tambah Peserta')

@section('content')
<div class="p-4 max-w-2xl mx-auto">
    <form action="{{ route('participants.store') }}" method="POST">
        @csrf
        @include('participants.partials.form', ['participant' => new \App\Models\Participant])
        <button class="mt-4 px-4 py-2 bg-blue-600 text-white rounded">Simpan</button>
    </form>
</div>
@endsection

