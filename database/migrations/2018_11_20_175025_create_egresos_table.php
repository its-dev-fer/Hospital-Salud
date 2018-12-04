<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateEgresosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('egresos', function (Blueprint $table) {
            $table->increments('folio');
            $table->integer('num_prueba_cruzada');
            $table->enum('grupo_sanguineo',['A','B','O','RH']);
            $table->string('componente');
            $table->integer('num_unidad_externo');
            $table->integer('num_registro');
            $table->string('nombre_paciente');
            $table->enum('grupo_sanguineo_paciente',['A','B','O','RH']);
            $table->integer('sala');
            $table->string('especialidad');
            $table->string('turno');
            $table->string('entrego_unidad');
            $table->string('hora');
            $table->string('recibe_unidad');            
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
        Schema::dropIfExists('egresos');
    }
}
