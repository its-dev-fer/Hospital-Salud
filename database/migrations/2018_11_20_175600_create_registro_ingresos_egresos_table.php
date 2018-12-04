<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateRegistroIngresosEgresosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('registro_ingresos_egresos', function (Blueprint $table) {
            $table->increments('id');
            $table->string('no_prog');
            $table->string('nombre_disponente');
            $table->string('procedencia');
            $table->integer('temperatura');
            $table->enum('metodo_extraccion',['habitual','otro']);
            $table->enum('tipo_donacion',['familiar','regular','otro']);
            $table->integer('vol_ml');
            $table->enum('componente',['Sangre Total','Concentrado de eritrocitos','Plasma Fresco Congelado','Proteina C Reactiva','Concentrado de plaquetas']);
            $table->string('fecha_caducidad');
            $table->enum('grupo_sanguineo',['A1','B','O','RH']);
            $table->enum('factor_rh',['Positivo','Negativo']);
            $table->float('hemoglobina', 8, 2);
            $table->float('hematocrito', 8, 2);
            $table->string('VIH');
            $table->string('hepatitis_b');
            $table->string('hepatitis_c');
            $table->string('chagas');
            $table->string('sifilis');
            $table->string('brucelosis');
            $table->string('paludismo');
            $table->string('otros');
            $table->string('procedimiento_efectuado');
            $table->string('fecha_egreso');
            $table->string('hora_egreso');
            $table->string('nombre_receptor');
            $table->integer('num_expediente');
            $table->integer('num_cama');
            $table->float('volumen_transferido', 8, 2);
            $table->string('grupo_rh_receptor');
            $table->string('indico_transfusion');
            $table->string('recibe_unidad');
            $table->string('entrega_unidad');
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
        Schema::dropIfExists('registro_ingresos_egresos');
    }
}
