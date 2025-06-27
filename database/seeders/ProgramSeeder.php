<?php
// File: database/seeders/ProgramSeeder.php
// Jalankan: php artisan make:seeder ProgramSeeder

namespace Database\Seeders;

use App\Models\Program;
use Illuminate\Database\Seeder;

class ProgramSeeder extends Seeder
{
    public function run()
    {
        $programs = [
            [
                'nama_program' => 'Program Pendidikan Inklusif Anak Autisme',
                'deskripsi' => 'Program pendidikan khusus yang dirancang untuk anak-anak dengan spektrum autisme. Program ini menggunakan metode pembelajaran visual dan terstruktur untuk membantu anak-anak autisme berkembang secara optimal.',
                'jenis_disabilitas' => 'Autisme',
                'tingkat_pendidikan' => 'SD',
                'kapasitas' => 15,
                'tanggal_mulai' => '2024-07-01',
                'tanggal_selesai' => '2024-12-20',
                'status' => 'aktif',
                'lokasi' => 'Jakarta Selatan',
                'biaya' => 750000.00,
                'created_by' => 1
            ],
            [
                'nama_program' => 'Kelas Khusus Anak Tunarungu',
                'deskripsi' => 'Program pendidikan dengan bahasa isyarat sebagai media utama pembelajaran. Dilengkapi dengan teknologi hearing aid dan pembelajaran visual interaktif.',
                'jenis_disabilitas' => 'Tunarungu',
                'tingkat_pendidikan' => 'SMP',
                'kapasitas' => 12,
                'tanggal_mulai' => '2024-07-15',
                'tanggal_selesai' => '2024-12-15',
                'status' => 'aktif',
                'lokasi' => 'Bandung',
                'biaya' => 600000.00,
                'created_by' => 2
            ],
            [
                'nama_program' => 'Program Pendidikan Anak Tunanetra',
                'deskripsi' => 'Program pendidikan dengan metode Braille dan teknologi audio. Menggunakan alat bantu teknologi untuk mendukung pembelajaran anak tunanetra.',
                'jenis_disabilitas' => 'Tunanetra',
                'tingkat_pendidikan' => 'SMA',
                'kapasitas' => 10,
                'tanggal_mulai' => '2024-08-01',
                'tanggal_selesai' => '2025-01-31',
                'status' => 'aktif',
                'lokasi' => 'Surabaya',
                'biaya' => 800000.00,
                'created_by' => 3
            ],
            [
                'nama_program' => 'Kelas Inklusif Anak Cerebral Palsy',
                'deskripsi' => 'Program pendidikan dengan dukungan fisioterapi dan terapi okupasi. Dirancang khusus untuk anak dengan cerebral palsy untuk meningkatkan kemampuan motorik dan kognitif.',
                'jenis_disabilitas' => 'Cerebral Palsy',
                'tingkat_pendidikan' => 'SD',
                'kapasitas' => 8,
                'tanggal_mulai' => '2024-09-01',
                'tanggal_selesai' => '2025-02-28',
                'status' => 'aktif',
                'lokasi' => 'Yogyakarta',
                'biaya' => 950000.00,
                'created_by' => 4
            ],
            [
                'nama_program' => 'Program Pendidikan Anak Down Syndrome',
                'deskripsi' => 'Program pendidikan dengan pendekatan individual dan pembelajaran berbasis permainan. Fokus pada pengembangan kemampuan sosial dan kemandirian.',
                'jenis_disabilitas' => 'Down Syndrome',
                'tingkat_pendidikan' => 'TK',
                'kapasitas' => 20,
                'tanggal_mulai' => '2024-06-01',
                'tanggal_selesai' => '2024-11-30',
                'status' => 'selesai',
                'lokasi' => 'Medan',
                'biaya' => 500000.00,
                'created_by' => 1
            ]
        ];

        foreach ($programs as $program) {
            Program::create($program);
        }
    }
}