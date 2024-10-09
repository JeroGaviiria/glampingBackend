<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class CabanaNiveles extends Model
{
    use HasFactory;

    protected $table = 'cabana_niveles';

    protected $fillable = ['nombre', 'descripcion'];

    public function cabanas()
    {
        return $this->hasMany(Cabanas::class, 'nivel_id');
    }
}
