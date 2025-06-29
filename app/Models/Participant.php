<?php
// File: app/Models/Participant.php
// Jalankan: php artisan make:model Participant

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Carbon\Carbon;

class Participant extends Model
{
    use HasFactory;

    protected $fillable = [
        'nama_lengkap',
        'email',
        'no_telepon',
        'tanggal_lahir',
        'jenis_kelamin',
        'jenis_disabilitas',
        'kebutuhan_khusus',
        'alamat',
        'nama_wali',
        'kontak_wali',
        'program_id',
        'status_pendaftaran'
    ];

    protected $casts = [
        'tanggal_lahir' => 'datetime'
    ];

    // Relationship dengan Program
    public function program()
    {
        return $this->belongsTo(Program::class);
    }

    // Accessor untuk umur
    public function getUmurAttribute(): mixed
    {
        return Carbon::instance($this->tanggal_lahir)->age;
    }

    // Accessor untuk jenis kelamin lengkap
    public function getJenisKelaminLengkapAttribute()
    {
        return $this->jenis_kelamin === 'L' ? 'Laki-laki' : 'Perempuan';
    }

    // Scope untuk status tertentu
    public function scopeByStatus($query, $status)
    {
        return $query->where('status_pendaftaran', $status);
    }

    // Scope untuk program tertentu
    public function scopeByProgram($query, $programId)
    {
        return $query->where('program_id', $programId);
    }
}