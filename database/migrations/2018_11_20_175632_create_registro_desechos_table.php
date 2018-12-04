<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateRegistroDesechosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('registro_desechos', function (Blueprint $table) {
            $table->increments('id');
            $table->string('num_prog');
            $table->string('num_unidad');
            $table->string('caducidad');
            $table->string('defecto_conservacion');
            $table->string('num_cs');
            $table->string('num_registro');
            $table->string('nombre_del_que_desecha');
            $table->string('nombre_personal_pbi');
            $table->timestamps();//created_ad => fecha de baja
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('registro_desechos');
    }
}
