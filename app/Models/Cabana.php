<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Cabana extends Model
{
    use HasFactory;

    protected $fillable = [
        'nombre',
        'nivel',
        'aforo',
    ];

    public function reservas()
    {
        return $this->hasMany(Reserva::class);
    }

    public function servicios()
    {
        return $this->belongsToMany(Servicio::class, 'cabana_servicios');
    }
}
