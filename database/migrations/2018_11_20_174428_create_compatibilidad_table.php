<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateCompatibilidadTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('compatibilidad', function (Blueprint $table) {
            $table->increments('num_prueba_cruzada');
            $table->string('receptor');
            $table->integer('num_expediente')->nullable();
            $table->string('servicio');
            $table->enum('grupo_directo',['A','B','AB','O','ONEG']);
            $table->string('control');
            $table->enum('grupo_inverso',['A1','A2','B','O']);
            $table->enum('lectina',['A1','H']);
            $table->enum('grupo',['ABO','RH']);
            $table->string('nombre_disponente');
            $table->integer('num_registro');
            $table->integer('num_unidad_externo');
            $table->string('componente');
            $table->string('AHG');
            $table->string('resultado');
            $table->string('inmunoglobulina');
            $table->string('c3d');
            $table->string('realizado_por');
            $table->string('observaciones');
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
        Schema::dropIfExists('compatibilidad');
    }
}
