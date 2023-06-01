<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Venta extends Model
{
    use HasFactory;

    protected $table = 'cliente_juguete';
    protected $fillable = [
        'cliente_id',
        'juguete_id',
    ];

}
