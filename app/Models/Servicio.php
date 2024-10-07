<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Servicio extends Model
{
    use HasFactory;

    protected $fillable = [
        'nombre',
    ];

    public function cabanas()
    {
        return $this->belongsToMany(Cabana::class, 'cabana_servicios');
    }
}