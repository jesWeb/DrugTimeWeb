<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class cuidadores extends Model
{
    use HasFactory;
    protected $fillable =[
        'Nombre',
        'FechaN',
        'Sexo',
        'Parentesco',
        'Telefono',
        'email',
    ];
    
    //
    public function clientes() {
        return $this->hasMany(cliente::class);
        }

    public function  maquinas() {
            return $this->hasMany(maquina::class);
         }    

}
