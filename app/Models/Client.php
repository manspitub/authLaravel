<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Foundation\Auth\User as Authenticatable;

class Client extends Authenticatable
{
    use HasFactory;

    // Nombre de la tabla (opcional si sigue la convención de nombres)
    protected $table = 'clients';

    // Campos asignables en masa (para evitar problemas con MassAssignmentException)
    protected $fillable = [
        'username',
        'name',
        'surname',
        'email',
        'password',
    ];

    // Ocultar ciertos atributos en respuestas JSON
    protected $hidden = [
        'password',
        'remember_token',
    ];

    // Tipo de datos casteados automáticamente
    protected $casts = [
        'email_verified_at' => 'datetime',
    ];
}
