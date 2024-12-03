<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Laravel\Sanctum\HasApiTokens;

class Usuario extends Model
{
    use HasApiTokens, HasFactory;

    protected $fillable = [
        'nombre',
        'email',
        'password',
        'tipo',
    ];

    protected $hidden = ['password'];

    public function reservas()
    {
        return $this->hasMany(Reserva::class);
    }

    public function tokens()
    {
        return $this->hasMany(Token::class);
    }
}
