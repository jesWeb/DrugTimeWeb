<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class tratamientos extends Model
{
    use HasFactory;
    
    //
   public function  clientes() {
        return $this->hasMany(clientes::class);
    }

    public function  maquinas() {
        return $this->hasMany(maquina::class);
     }

}
