<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Juguete extends Model
{
    use HasFactory;

    //relacion muchos a muchos 
    public function clientes(){
        return $this->belongsToMany(Cliente::class);
    }
}
