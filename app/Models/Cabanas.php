<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Cabanas extends Model
{
    use HasFactory;

    protected $table = 'cabanas';

    protected $fillable = ['nombre', 'aforo', 'nivel_id'];

    public function nivel()
    {
        return $this->belongsTo(CabanaNiveles::class, 'nivel_id');
    }

    public function servicios()
    {
        return $this->belongsToMany(Servicios::class, 'cabana_servicios', 'cabana_id', 'servicio_id');
    }
}
