<?php

namespace App\Models;

use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;
use Laravel\Sanctum\HasApiTokens;

class User extends Authenticatable
{
    use HasApiTokens, Notifiable;

    protected $fillable = [
        'name', 'email', 'password', 'role',
    ];

    /**
     * Vérifie si l'utilisateur a un rôle spécifique.
     */
    public function hasRole($role)
    {
        return $this->role === $role;
    }
}

