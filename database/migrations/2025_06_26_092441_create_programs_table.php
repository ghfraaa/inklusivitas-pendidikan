<?php
// File: database/migrations/xxxx_create_programs_table.php
// Jalankan: php artisan make:migration create_programs_table

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up()
    {
        Schema::create('programs', function (Blueprint $table) {
            $table->id();
            $table->string('nama_program');
            $table->text('deskripsi');
            $table->string('jenis_disabilitas');
            $table->string('tingkat_pendidikan');
            $table->integer('kapasitas');
            $table->date('tanggal_mulai');
            $table->date('tanggal_selesai');
            $table->enum('status', ['aktif', 'nonaktif', 'selesai'])->default('aktif');
            $table->string('lokasi');
            $table->decimal('biaya', 10, 2)->nullable();
            $table->unsignedBigInteger('created_by');
            $table->timestamps();
            
            $table->foreign('created_by')->references('id')->on('users')->onDelete('cascade');
        });
    }

    public function down()
    {
        Schema::dropIfExists('programs');
    }
};