<?php
// File: app/Models/User.php
// Update existing User model

namespace App\Models;

use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;
use Laravel\Sanctum\HasApiTokens;
use Illuminate\Database\Eloquent\Model;
use Carbon\Carbon;

class User extends Authenticatable
{
    use HasApiTokens, HasFactory, Notifiable;

    protected $fillable = [
        'name',
        'email',
        'password',
        'role',
    ];

    protected $hidden = [
        'password',
        'remember_token',
    ];

    protected $casts = [
        'email_verified_at' => 'datetime',
        'password' => 'hashed',
    ];
    

    // Relationship dengan Programs
    public function programs()
    {
        return $this->hasMany(Program::class, 'created_by');
    }

    // Check if user is admin
    public function isAdmin()
    {
        return $this->role === 'admin';
    }

    // Check if user is coordinator
    public function isCoordinator()
    {
        return $this->role === 'coordinator';
    }

    // Get role display name
    public function getRoleDisplayAttribute()
    {
        return $this->role === 'admin' ? 'Administrator' : 'Koordinator';
    }

    // Scope untuk admin
    public function scopeAdmin($query)
    {
        return $query->where('role', 'admin');
    }

    // Scope untuk coordinator
    public function scopeCoordinator($query)
    {
        return $query->where('role', 'coordinator');
    }
}