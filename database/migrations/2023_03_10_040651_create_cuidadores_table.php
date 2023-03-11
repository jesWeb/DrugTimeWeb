<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateCuidadoresTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('cuidadores', function (Blueprint $table) {
            $table->id('id_cuidador');
            $table->string('Nombre');
            $table->date('FechaN');
            $table->integer('Sexo');
            $table->integer('Parentesco');
            $table->string('Telefono')->unique();
            $table->string('email')->unique();
            $table->integer('imagenU');
            
            
            $table->softDeletes();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('cuidadores');
    }
}
