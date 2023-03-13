<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateClientesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('clientes', function (Blueprint $table) {
            $table->id();
            $table->string('Nombre');
            $table->date('FechaN');
            $table->char('Sexo');
            $table->integer('Peso');
            $table->integer('Alergias');
            $table->string('Enfermedad-C');
            $table->string('Telefono')->unique();
            $table->string('email')->unique();
            $table->string('password');
            $table->integer('imagenU');
            $table->timestamps();
            //llaves fotraneas
            $table->unsignedBigInteger('type_users_id');
            $table->foreign('type_users_id')->references('id')->on ('type_users');
            
           $table->unsignedBigInteger('cuidadores_id');
            $table->foreign('cuidadores_id')->references('id')->on ('cuidadores');  

           $table->unsignedBigInteger('estados_id');
            $table->foreign('estados_id')->references('id')->on ('estados');  

            $table->unsignedBigInteger('medicamentos_id');
            $table->foreign('medicamentos_id')->references('id')->on ('medicamentos'); 

            $table->unsignedBigInteger('tratamientos_id');
            $table->foreign('tratamientos_id')->references('id')->on ('tratamientos');  
              
            $table->unsignedBigInteger('maquinas_id');
            $table->foreign('maquinas_id')->references('id')->on ('maquinas');  
              
            //$table->unsignedBigInteger('');
            //$table->foreign('')->references('')->on ('');  
        
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
        Schema::dropIfExists('clientes');
    }
}
