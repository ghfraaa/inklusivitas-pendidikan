<div class="grid grid-cols-1 md:grid-cols-2 gap-6">
    <!-- Nama Program -->
    <div>
        <label class="block text-sm font-semibold text-gray-700 mb-2">Nama Program</label>
        <input type="text" name="nama_program" value="{{ old('nama_program', $program->nama_program) }}"
            class="w-full px-4 py-3 border border-gray-300 rounded-lg bg-gray-50 outline-none focus:ring-2 focus:ring-indigo-500"
            required>
    </div>

    <!-- Jenis Disabilitas -->
    <div>
        <label class="block text-sm font-semibold text-gray-700 mb-2">Jenis Disabilitas</label>
        <input type="text" name="jenis_disabilitas" value="{{ old('jenis_disabilitas', $program->jenis_disabilitas) }}"
            class="w-full px-4 py-3 border border-gray-300 rounded-lg bg-gray-50 outline-none focus:ring-2 focus:ring-indigo-500">
    </div>

    <!-- Tingkat Pendidikan -->
    <div>
        <label class="block text-sm font-semibold text-gray-700 mb-2">Tingkat Pendidikan</label>
        <input type="text" name="tingkat_pendidikan" value="{{ old('tingkat_pendidikan', $program->tingkat_pendidikan) }}"
            class="w-full px-4 py-3 border border-gray-300 rounded-lg bg-gray-50 outline-none focus:ring-2 focus:ring-indigo-500">
    </div>

    <!-- Kapasitas -->
    <div>
        <label class="block text-sm font-semibold text-gray-700 mb-2">Kapasitas</label>
        <input type="number" name="kapasitas" value="{{ old('kapasitas', $program->kapasitas) }}"
            class="w-full px-4 py-3 border border-gray-300 rounded-lg bg-gray-50 outline-none focus:ring-2 focus:ring-indigo-500"
            required>
    </div>

    <!-- Tanggal Mulai -->
    <div>
        <label class="block text-sm font-semibold text-gray-700 mb-2">Tanggal Mulai</label>
        <input type="date" name="tanggal_mulai"
            value="{{ old('tanggal_mulai', optional($program->tanggal_mulai)->format('Y-m-d')) }}"
            class="w-full px-4 py-3 border border-gray-300 rounded-lg bg-gray-50 outline-none focus:ring-2 focus:ring-indigo-500"
            required>
    </div>

    <!-- Tanggal Selesai -->
    <div>
        <label class="block text-sm font-semibold text-gray-700 mb-2">Tanggal Selesai</label>
        <input type="date" name="tanggal_selesai"
            value="{{ old('tanggal_selesai', optional($program->tanggal_selesai)->format('Y-m-d')) }}"
            class="w-full px-4 py-3 border border-gray-300 rounded-lg bg-gray-50 outline-none focus:ring-2 focus:ring-indigo-500"
            required>
    </div>

    <!-- Status -->
    <div>
        <label class="block text-sm font-semibold text-gray-700 mb-2">Status</label>
        <select name="status"
            class="w-full px-4 py-3 border border-gray-300 rounded-lg bg-gray-50 outline-none focus:ring-2 focus:ring-indigo-500">
            <option value="aktif" {{ old('status', $program->status) == 'aktif' ? 'selected' : '' }}>Aktif</option>
            <option value="nonaktif" {{ old('status', $program->status) == 'nonaktif' ? 'selected' : '' }}>Nonaktif</option>
        </select>
    </div>

    <!-- Lokasi -->
    <div>
        <label class="block text-sm font-semibold text-gray-700 mb-2">Lokasi</label>
        <input type="text" name="lokasi" value="{{ old('lokasi', $program->lokasi) }}"
            class="w-full px-4 py-3 border border-gray-300 rounded-lg bg-gray-50 outline-none focus:ring-2 focus:ring-indigo-500">
    </div>

    <!-- Biaya -->
    <div>
        <label class="block text-sm font-semibold text-gray-700 mb-2">Biaya</label>
        <input type="number" step="0.01" name="biaya" value="{{ old('biaya', $program->biaya) }}"
            class="w-full px-4 py-3 border border-gray-300 rounded-lg bg-gray-50 outline-none focus:ring-2 focus:ring-indigo-500">
    </div>

    <!-- Deskripsi (Full width) -->
    <div class="md:col-span-2">
        <label class="block text-sm font-semibold text-gray-700 mb-2">Deskripsi</label>
        <textarea name="deskripsi" rows="4"
            class="w-full px-4 py-3 border border-gray-300 rounded-lg bg-gray-50 outline-none focus:ring-2 focus:ring-indigo-500">{{ old('deskripsi', $program->deskripsi) }}</textarea>
    </div>
</div>
