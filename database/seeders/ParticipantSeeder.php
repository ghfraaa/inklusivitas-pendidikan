<?php
// File: database/seeders/ParticipantSeeder.php
// Jalankan: php artisan make:seeder ParticipantSeeder

namespace Database\Seeders;

use App\Models\Participant;
use Illuminate\Database\Seeder;

class ParticipantSeeder extends Seeder
{
    public function run()
    {
        $participants = [
            // Program 1 - Autisme
            [
                'nama_lengkap' => 'Ahmad Rizki',
                'email' => 'rizki@example.com',
                'no_telepon' => '081234567890',
                'tanggal_lahir' => '2015-03-15',
                'jenis_kelamin' => 'L',
                'jenis_disabilitas' => 'Autisme',
                'kebutuhan_khusus' => 'Membutuhkan pendampingan khusus dalam komunikasi',
                'alamat' => 'Jl. Merdeka No. 123, Jakarta Selatan',
                'nama_wali' => 'Siti Nurhaliza',
                'kontak_wali' => '081234567891',
                'program_id' => 1,
                'status_pendaftaran' => 'diterima'
            ],
            [
                'nama_lengkap' => 'Putri Ayu',
                'email' => 'putri@example.com',
                'no_telepon' => '081234567892',
                'tanggal_lahir' => '2014-08-22',
                'jenis_kelamin' => 'P',
                'jenis_disabilitas' => 'Autisme',
                'kebutuhan_khusus' => 'Sensitif terhadap suara keras',
                'alamat' => 'Jl. Sudirman No. 456, Jakarta Selatan',
                'nama_wali' => 'Bambang Sutrisno',
                'kontak_wali' => '081234567893',
                'program_id' => 1,
                'status_pendaftaran' => 'diterima'
            ],
            
            // Program 2 - Tunarungu
            [
                'nama_lengkap' => 'Dani Setiawan',
                'email' => 'dani@example.com',
                'no_telepon' => '081234567894',
                'tanggal_lahir' => '2011-05-10',
                'jenis_kelamin' => 'L',
                'jenis_disabilitas' => 'Tunarungu',
                'kebutuhan_khusus' => 'Menggunakan alat bantu dengar',
                'alamat' => 'Jl. Asia Afrika No. 789, Bandung',
                'nama_wali' => 'Sri Handayani',
                'kontak_wali' => '081234567895',
                'program_id' => 2,
                'status_pendaftaran' => 'diterima'
            ],
            [
                'nama_lengkap' => 'Maya Sari',
                'email' => 'maya@example.com',
                'no_telepon' => '081234567896',
                'tanggal_lahir' => '2012-01-30',
                'jenis_kelamin' => 'P',
                'jenis_disabilitas' => 'Tunarungu',
                'kebutuhan_khusus' => 'Komunikasi menggunakan bahasa isyarat',
                'alamat' => 'Jl. Braga No. 321, Bandung',
                'nama_wali' => 'Agus Purnomo',
                'kontak_wali' => '081234567897',
                'program_id' => 2,
                'status_pendaftaran' => 'pending'
            ],
            
            // Program 3 - Tunanetra
            [
                'nama_lengkap' => 'Eko Prasetyo',
                'email' => 'eko@example.com',
                'no_telepon' => '081234567898',
                'tanggal_lahir' => '2007-11-12',
                'jenis_kelamin' => 'L',
                'jenis_disabilitas' => 'Tunanetra',
                'kebutuhan_khusus' => 'Menggunakan tongkat putih dan buku Braille',
                'alamat' => 'Jl. Pemuda No. 654, Surabaya',
                'nama_wali' => 'Ratna Dewi',
                'kontak_wali' => '081234567899',
                'program_id' => 3,
                'status_pendaftaran' => 'diterima'
            ],
            
            // Program 4 - Cerebral Palsy
            [
                'nama_lengkap' => 'Indah Permata',
                'email' => 'indah@example.com',
                'no_telepon' => '081234567800',
                'tanggal_lahir' => '2016-02-28',
                'jenis_kelamin' => 'P',
                'jenis_disabilitas' => 'Cerebral Palsy',
                'kebutuhan_khusus' => 'Membutuhkan kursi roda dan bantuan mobilitas',
                'alamat' => 'Jl. Malioboro No. 987, Yogyakarta',
                'nama_wali' => 'Sutomo Wijaya',
                'kontak_wali' => '081234567801',
                'program_id' => 4,
                'status_pendaftaran' => 'diterima'
            ],
            
            // Program 5 - Down Syndrome
            [
                'nama_lengkap' => 'Fajar Ramadhan',
                'email' => 'fajar@example.com',
                'no_telepon' => '081234567802',
                'tanggal_lahir' => '2019-07-05',
                'jenis_kelamin' => 'L',
                'jenis_disabilitas' => 'Down Syndrome',
                'kebutuhan_khusus' => 'Pembelajaran dengan metode visual dan repetisi',
                'alamat' => 'Jl. Gatot Subroto No. 147, Medan',
                'nama_wali' => 'Dewi Kartika',
                'kontak_wali' => '081234567803',
                'program_id' => 5,
                'status_pendaftaran' => 'diterima'
            ],
            [
                'nama_lengkap' => 'Sinta Maharani',
                'email' => 'sinta@example.com',
                'no_telepon' => '081234567804',
                'tanggal_lahir' => '2018-12-20',
                'jenis_kelamin' => 'P',
                'jenis_disabilitas' => 'Down Syndrome',
                'kebutuhan_khusus' => 'Membutuhkan pendampingan dalam aktivitas sehari-hari',
                'alamat' => 'Jl. Ahmad Yani No. 258, Medan',
                'nama_wali' => 'Hendra Kusuma',
                'kontak_wali' => '081234567805',
                'program_id' => 5,
                'status_pendaftaran' => 'pending'
            ]
        ];

        foreach ($participants as $participant) {
            Participant::create($participant);
        }
    }
}