<?php
// File: app/Models/Program.php
// Jalankan: php artisan make:model Program

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Program extends Model
{
    use HasFactory;

    protected $fillable = [
        'nama_program',
        'deskripsi',
        'jenis_disabilitas',
        'tingkat_pendidikan',
        'kapasitas',
        'tanggal_mulai',
        'tanggal_selesai',
        'status',
        'lokasi',
        'biaya',
        'created_by'
    ];

    protected $casts = [
        'tanggal_mulai' => 'date',
        'tanggal_selesai' => 'date',
        'biaya' => 'decimal:2'
    ];

    // Relationship dengan User (creator)
    public function creator()
    {
        return $this->belongsTo(User::class, 'created_by');
    }

    // Relationship dengan Participants
    public function participants()
    {
        return $this->hasMany(Participant::class);
    }

    // Accessor untuk jumlah peserta
    public function getJumlahPesertaAttribute()
    {
        return $this->participants()->count();
    }

    // Accessor untuk sisa kapasitas
    public function getSisaKapasitasAttribute()
    {
        return $this->kapasitas - $this->jumlah_peserta;
    }

    // Scope untuk program aktif
    public function scopeAktif($query)
    {
        return $query->where('status', 'aktif');
    }

    // Scope untuk program berdasarkan jenis disabilitas
    public function scopeByJenisDisabilitas($query, $jenis)
    {
        return $query->where('jenis_disabilitas', $jenis);
    }
}