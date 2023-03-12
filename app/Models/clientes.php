<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class clientes extends Model
{
    use HasFactory;
    use SoftDeletes;

    protected $fillable =[
        'nombre',
        'FechaN',
        'Sexo',
        'Peso',
        'Alergias',
        'Enfermedad-C',
        'Telefono',
        'email',
        'password',
    ];

   //relacion uno a muchos 
  public function typeUsers() {
   return $this->belongsTo(typeUser::class);
    }
   public function cuidadores () {
    return $this->belongsTo(cuidador::class);
   }
 //  public function estados() {
   // return $this->belongsTo(estados::class);
   // }
  //public function medicamentos() {
  // return $this->belongsTo(medicamentos::class);
   // }
   //public function tratamientos() {
    //return $this->belongsTo(tratamientos::class);
   // }
  // public function maquinas() {
   // return $this->belongsTo(maquinas::class);
    //}

  
       

      
    
}
