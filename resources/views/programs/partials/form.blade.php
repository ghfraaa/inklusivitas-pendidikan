<div class="grid grid-cols-1 gap-4">
    <div>
        <label class="block font-medium">Nama Program</label>
        <input type="text" name="nama_program" value="{{ old('nama_program', $program->nama_program) }}" class="w-full border rounded px-3 py-2" required>
    </div>

    <div>
        <label class="block font-medium">Deskripsi</label>
        <textarea name="deskripsi" class="w-full border rounded px-3 py-2" rows="3">{{ old('deskripsi', $program->deskripsi) }}</textarea>
    </div>

    <div>
        <label class="block font-medium">Jenis Disabilitas</label>
        <input type="text" name="jenis_disabilitas" value="{{ old('jenis_disabilitas', $program->jenis_disabilitas) }}" class="w-full border rounded px-3 py-2">
    </div>

    <div>
        <label class="block font-medium">Tingkat Pendidikan</label>
        <input type="text" name="tingkat_pendidikan" value="{{ old('tingkat_pendidikan', $program->tingkat_pendidikan) }}" class="w-full border rounded px-3 py-2">
    </div>

    <div>
        <label class="block font-medium">Kapasitas</label>
        <input type="number" name="kapasitas" value="{{ old('kapasitas', $program->kapasitas) }}" class="w-full border rounded px-3 py-2">
    </div>

    <div>
        <label class="block font-medium">Tanggal Mulai</label>
        <input type="date" name="tanggal_mulai" value="{{ old('tanggal_mulai', $program->tanggal_mulai ? $program->tanggal_mulai->format('Y-m-d') : '') }}" class="w-full border rounded px-3 py-2">
    </div>

    <div>
        <label class="block font-medium">Tanggal Selesai</label>
        <input type="date" name="tanggal_selesai" value="{{ old('tanggal_selesai', $program->tanggal_selesai ? $program->tanggal_selesai->format('Y-m-d') : '') }}" class="w-full border rounded px-3 py-2">
    </div>

    <div>
        <label class="block font-medium">Status</label>
        <select name="status" class="w-full border rounded px-3 py-2">
            <option value="aktif" {{ old('status', $program->status) == 'aktif' ? 'selected' : '' }}>Aktif</option>
            <option value="nonaktif" {{ old('status', $program->status) == 'nonaktif' ? 'selected' : '' }}>Nonaktif</option>
        </select>
    </div>

    <div>
        <label class="block font-medium">Lokasi</label>
        <input type="text" name="lokasi" value="{{ old('lokasi', $program->lokasi) }}" class="w-full border rounded px-3 py-2">
    </div>

    <div>
        <label class="block font-medium">Biaya</label>
        <input type="number" name="biaya" step="0.01" value="{{ old('biaya', $program->biaya) }}" class="w-full border rounded px-3 py-2">
    </div>
</div>
