<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class typeUsers extends Model
{
    use HasFactory;

    //relacion
    public function  clientes() {
        return $this->hasMany(cliente::class);
        }
        
    public function  maquinas() {
        return $this->hasMany(maquina::class);
     }

}
