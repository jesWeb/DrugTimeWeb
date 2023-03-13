<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class estados extends Model
{
    use HasFactory;
    //protected $table = 'estados';
    //protected $primaryKey ='id_estados';
    //protected $fillable = ['nombre']; 
    protected $fillable =[
        'nombre'
    ];
    
    
    public function  cliente() {
        return $this->hasMany(cliente::class);
        }




}
