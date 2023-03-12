<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateMaquinasTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('maquinas', function (Blueprint $table) {
            $table->id();
            $table->string('Nombre');
            $table->integer('modelo');
            $table->timestamps();
             //llaves fotraneas
             $table->unsignedBigInteger('type_users_id');
             $table->foreign('type_users_id')->references('id')->on ('type_users');
             
            $table->unsignedBigInteger('cuidadores_id');
             $table->foreign('cuidadores_id')->references('id')->on ('cuidadores');  
 
             $table->unsignedBigInteger('medicamentos_id');
             $table->foreign('medicamentos_id')->references('id')->on ('medicamentos'); 
 
             $table->unsignedBigInteger('tratamientos_id');
             $table->foreign('tratamientos_id')->references('id')->on ('tratamientos');  
               
             
            $table->softDeletes();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('maquinas');
    }
}
