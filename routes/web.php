<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\ProgramController;
use App\Http\Controllers\ParticipantController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\ReportController;
use App\Http\Controllers\HomeController;

// Route untuk halaman utama (jika ada landing page)
Route::get('/', function () {
    return view('landing');
});

// Dashboard (untuk semua user yang login & terverifikasi)
Route::get('/dashboard', [DashboardController::class, 'index'])
    ->middleware(['auth', 'verified'])
    ->name('dashboard');

Route::get('/', [HomeController::class, 'index']);

// Route untuk profile user
Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::post('/profile/remove-photo', [ProfileController::class, 'update'])->name('profile.remove-photo');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

//Hanya Participant
Route::middleware(['auth', 'role:participant'])->group(function () {
    // Lihat semua program yang tersedia
    Route::get('/program-participant', [ProgramController::class, 'indexForParticipant'])->name('programs.participant.index');

    // Daftar ke program tertentu
    Route::post('/program-participant/{program}/daftar', [ParticipantController::class, 'register'])->name('programs.student.register');

});

// Hanya Admin
Route::middleware(['auth', 'checkrole:admin'])->group(function () {
    Route::resource('users', UserController::class);
});

// Admin dan Koordinator
Route::middleware(['auth', 'checkrole:admin,coordinator'])->group(function () {
    Route::resource('programs', ProgramController::class);
    Route::resource('participants', ParticipantController::class);
    Route::get('/reports', [ReportController::class, 'index'])->name('reports.index');
});

require __DIR__ . '/auth.php';
