<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class maquinas extends Model
{
    use HasFactory;
   
   
   public function  clientes() {
       return $this->hasMany(cliente::class);
    }

    //relacion uno a muchos 
  public function typeUsers() {
    return $this->belongsTo(typeUser::class);
     }
    public function cuidadores () {
     return $this->belongsTo(cuidador::class);
    }

    public function medicamentos() {
    return $this->belongsTo(medicamento::class);
     }
   
     public function tratamientos() {
     return $this->belongsTo(tratamiento::class);
    }
   


}
