@extends('layouts.app')

@section('header', 'Manajemen Pengguna (Koordinator)')

@section('content')
<div class="p-4">
    <a href="{{ route('users.create') }}" class="bg-blue-600 text-white px-4 py-2 rounded">+ Tambah Koordinator</a>

    <table class="w-full mt-4 table-auto border">
        <thead class="bg-gray-100">
            <tr>
                <th class="px-4 py-2">Nama</th>
                <th class="px-4 py-2">Email</th>
                <th class="px-4 py-2">Aksi</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($users as $user)
            <tr class="border-t">
                <td class="px-4 py-2">{{ $user->name }}</td>
                <td class="px-4 py-2">{{ $user->email }}</td>
                <td class="px-4 py-2 space-x-2">
                    <a href="{{ route('users.edit', $user) }}" class="text-yellow-500">Edit</a>
                    <form action="{{ route('users.destroy', $user) }}" method="POST" class="inline">
                        @csrf
                        @method('DELETE')
                        <button onclick="return confirm('Hapus user ini?')" class="text-red-500">Hapus</button>
                    </form>
                </td>
            </tr>
            @endforeach
        </tbody>
    </table>
</div>
@endsection
