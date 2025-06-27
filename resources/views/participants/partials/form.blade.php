<div class="grid grid-cols-1 gap-4">
    <div>
        <label class="block">Nama Lengkap</label>
        <input type="text" name="nama_lengkap" value="{{ old('nama_lengkap', $participant->nama_lengkap) }}" class="w-full border rounded px-3 py-2" required>
    </div>
    <div>
        <label class="block">Email</label>
        <input type="email" name="email" value="{{ old('email', $participant->email) }}" class="w-full border rounded px-3 py-2">
    </div>
    <div>
        <label class="block">No. Telepon</label>
        <input type="text" name="no_telepon" value="{{ old('no_telepon', $participant->no_telepon) }}" class="w-full border rounded px-3 py-2">
    </div>
    <div>
        <label class="block">Tanggal Lahir</label>
        <input type="date" name="tanggal_lahir" value="{{ old('tanggal_lahir', $participant->tanggal_lahir ? $participant->tanggal_lahir->format('Y-m-d') : '') }}" class="w-full border rounded px-3 py-2">
    </div>
    <div>
        <label class="block">Jenis Kelamin</label>
        <select name="jenis_kelamin" class="w-full border rounded px-3 py-2">
            <option value="L" {{ old('jenis_kelamin', $participant->jenis_kelamin) == 'L' ? 'selected' : '' }}>Laki-laki</option>
            <option value="P" {{ old('jenis_kelamin', $participant->jenis_kelamin) == 'P' ? 'selected' : '' }}>Perempuan</option>
        </select>
    </div>
    <div>
        <label class="block">Jenis Disabilitas</label>
        <input type="text" name="jenis_disabilitas" value="{{ old('jenis_disabilitas', $participant->jenis_disabilitas) }}" class="w-full border rounded px-3 py-2">
    </div>
    <div>
        <label class="block">Kebutuhan Khusus</label>
        <textarea name="kebutuhan_khusus" class="w-full border rounded px-3 py-2">{{ old('kebutuhan_khusus', $participant->kebutuhan_khusus) }}</textarea>
    </div>
    <div>
        <label class="block">Alamat</label>
        <input type="text" name="alamat" value="{{ old('alamat', $participant->alamat) }}" class="w-full border rounded px-3 py-2">
    </div>
    <div>
        <label class="block">Nama Wali</label>
        <input type="text" name="nama_wali" value="{{ old('nama_wali', $participant->nama_wali) }}" class="w-full border rounded px-3 py-2">
    </div>
    <div>
        <label class="block">Kontak Wali</label>
        <input type="text" name="kontak_wali" value="{{ old('kontak_wali', $participant->kontak_wali) }}" class="w-full border rounded px-3 py-2">
    </div>
    <div>
        <label class="block">Program</label>
        <select name="program_id" class="w-full border rounded px-3 py-2">
            @foreach($programs as $program)
                <option value="{{ $program->id }}" {{ old('program_id', $participant->program_id) == $program->id ? 'selected' : '' }}>
                    {{ $program->nama_program }}
                </option>
            @endforeach
        </select>
    </div>
    <div>
        <label class="block">Status Pendaftaran</label>
        <select name="status_pendaftaran" class="w-full border rounded px-3 py-2">
            <option value="pending" {{ old('status_pendaftaran', $participant->status_pendaftaran) == 'pending' ? 'selected' : '' }}>Pending</option>
            <option value="diterima" {{ old('status_pendaftaran', $participant->status_pendaftaran) == 'diterima' ? 'selected' : '' }}>Diterima</option>
            <option value="ditolak" {{ old('status_pendaftaran', $participant->status_pendaftaran) == 'ditolak' ? 'selected' : '' }}>Ditolak</option>
        </select>
    </div>
</div>
