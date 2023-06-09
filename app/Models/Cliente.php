<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Cliente extends Model
{
    use HasFactory;

    //relacion muchos a muchos
    public function juguetes(){
        return $this->belongsToMany(Juguete::class);
    }
}
