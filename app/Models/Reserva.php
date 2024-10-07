<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Reserva extends Model
{
    use HasFactory;

    protected $fillable = [
        'usuario_id',
        'cabana_id',
        'fecha',
    ];

    public function usuario()
    {
        return $this->belongsTo(Usuario::class);
    }

    public function cabana()
    {
        return $this->belongsTo(Cabana::class);
    }
}

