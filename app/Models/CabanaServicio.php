<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class CabanaServicio extends Model
{
    use HasFactory;

    protected $table = 'cabana_servicios';

    public $timestamps = false; 

    protected $fillable = [
        'cabana_id',
        'servicio_id',
    ];
}
