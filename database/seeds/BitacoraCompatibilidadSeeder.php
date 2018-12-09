<?php

use Illuminate\Database\Seeder;
use App\BitacoraCompatibilidad;

class BitacoraCompatibilidadSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */


     /*
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
     */
    public function run()
    {
      for($i = 0; $i < 20; $i++){
        $bitacora = new BitacoraCompatibilidad;
        $bitacora->receptor = "Luis Fernando";
        $bitacora->num_expediente = rand(1,20);
        $bitacora->servicio = "servicio";
        $bitacora->grupo_directo = "A";
        $bitacora->control = "Control";
        $bitacora->lectina = "A1";
        $bitacora->grupo = "ABO";
        $bitacora->nombre_disponente = "Augusto";
        $bitacora->num_registro = rand(1,20);
        $bitacora->num_unidad_externo = rand(1,20);
        $bitacora->componente = "Componente";
        $bitacora->AHG = "AHG";
        $bitacora->resultado = "Positivo";
        $bitacora->inmunoglobulina = "IgA";
        $bitacora->c3d = "C3D";
        $bitacora->realizado_por = "Luis Fernando";
        $bitacora->observaciones = "Ninguna";
        $bitacora->save();
      }
    }
}
