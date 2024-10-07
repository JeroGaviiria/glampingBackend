<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Token extends Model
{
    use HasFactory;

    protected $fillable = [
        'usuario_id',
        'token',
        'created_at',
    ];

    public function usuario()
    {
        return $this->belongsTo(Usuario::class);
    }
}
