<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class municipios extends Model
{
    use HasFactory;
    protected $table = 'municipios';
    protected $primaryKey ='id_municipios';
    protected $fillable = ['nombre','cp','id_estados']; 

}
