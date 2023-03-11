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
            $table->id('id_clientes');
            $table->string('Nombre');
            $table->date('FechaN');
            $table->integer('Sexo');
            $table->integer('Peso');
            $table->integer('Alergias');
            $table->string('Enfermedad-C');
            $table->string('Telefono')->unique();
            $table->string('email')->unique();
            $table->string('password');
            $table->integer('imagenU');
            
            $table->timestamps();
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
