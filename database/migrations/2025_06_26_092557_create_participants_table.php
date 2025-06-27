<?php
// File: database/migrations/xxxx_create_participants_table.php
// Jalankan: php artisan make:migration create_participants_table

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up()
    {
        Schema::create('participants', function (Blueprint $table) {
            $table->id();
            $table->string('nama_lengkap');
            $table->string('email')->unique();
            $table->string('no_telepon');
            $table->date('tanggal_lahir');
            $table->enum('jenis_kelamin', ['L', 'P']);
            $table->string('jenis_disabilitas');
            $table->text('kebutuhan_khusus')->nullable();
            $table->text('alamat');
            $table->string('nama_wali')->nullable();
            $table->string('kontak_wali')->nullable();
            $table->unsignedBigInteger('program_id');
            $table->enum('status_pendaftaran', ['pending', 'diterima', 'ditolak'])->default('pending');
            $table->timestamps();
            
            $table->foreign('program_id')->references('id')->on('programs')->onDelete('cascade');
        });
    }

    public function down()
    {
        Schema::dropIfExists('participants');
    }
};