@extends('layouts.app')

@section('header', 'Daftar Program Inklusif')

@section('content')
<div class="p-4">
    <a href="{{ route('programs.create') }}" class="bg-blue-600 text-white px-4 py-2 rounded">+ Tambah Program</a>

    <table class="w-full mt-4 table-auto border">
        <thead class="bg-gray-100">
            <tr>
                <th class="px-4 py-2">Nama Program</th>
                <th class="px-4 py-2">Jenis Disabilitas</th>
                <th class="px-4 py-2">Kapasitas</th>
                <th class="px-4 py-2">Sisa</th>
                <th class="px-4 py-2">Status</th>
                <th class="px-4 py-2">Aksi</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($programs as $program)
            <tr class="border-t">
                <td class="px-4 py-2">{{ $program->nama_program }}</td>
                <td class="px-4 py-2">{{ $program->jenis_disabilitas }}</td>
                <td class="px-4 py-2">{{ $program->kapasitas }}</td>
                <td class="px-4 py-2">{{ $program->sisa_kapasitas }}</td>
                <td class="px-4 py-2 capitalize">{{ $program->status }}</td>
                <td class="px-4 py-2 space-x-2">
                    <a href="{{ route('programs.show', $program) }}" class="text-blue-500">Lihat</a>
                    <a href="{{ route('programs.edit', $program) }}" class="text-yellow-500">Edit</a>
                    <form method="POST" action="{{ route('programs.destroy', $program) }}" class="inline">
                        @csrf
                        @method('DELETE')
                        <button onclick="return confirm('Hapus program ini?')" class="text-red-500">Hapus</button>
                    </form>
                </td>
            </tr>
            @endforeach
        </tbody>
    </table>
</div>
@endsection
