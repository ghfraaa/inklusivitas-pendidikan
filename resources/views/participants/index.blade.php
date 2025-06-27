@extends('layouts.app')

@section('header', 'Daftar Peserta')

@section('content')
<div class="p-4">
    <a href="{{ route('participants.create') }}" class="bg-blue-600 text-white px-4 py-2 rounded">+ Tambah Peserta</a>

    <table class="w-full mt-4 table-auto border">
        <thead class="bg-gray-100">
            <tr>
                <th class="px-4 py-2">Nama</th>
                <th class="px-4 py-2">Program</th>
                <th class="px-4 py-2">Status</th>
                <th class="px-4 py-2">Aksi</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($participants as $participant)
            <tr class="border-t">
                <td class="px-4 py-2">{{ $participant->nama_lengkap }}</td>
                <td class="px-4 py-2">{{ $participant->program->nama_program }}</td>
                <td class="px-4 py-2 capitalize">{{ $participant->status_pendaftaran }}</td>
                <td class="px-4 py-2 space-x-2">
                    <a href="{{ route('participants.show', $participant) }}" class="text-blue-500">Lihat</a>
                    <a href="{{ route('participants.edit', $participant) }}" class="text-yellow-500">Edit</a>
                    <form method="POST" action="{{ route('participants.destroy', $participant) }}" class="inline">
                        @csrf
                        @method('DELETE')
                        <button onclick="return confirm('Hapus peserta ini?')" class="text-red-500">Hapus</button>
                    </form>
                </td>
            </tr>
            @endforeach
        </tbody>
    </table>
</div>
@endsection
