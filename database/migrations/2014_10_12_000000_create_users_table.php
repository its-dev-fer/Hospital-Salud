<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateUsersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('users', function (Blueprint $table) {
          $table->increments('id');
          $table->string('name');
          $table->string('email')->unique();
          $table->timestamp('email_verified_at')->nullable();
          $table->string('password');
          $table->enum('rol',['personal','administrador']);
          $table->enum('turno',['matutino','vespertino']);
          $table->string('horario')->nullable();
          $table->string('celular')->nullable();
          $table->string('telefono_casa')->nullable();
          $table->string('direccion')->nullable();
          $table->string('foto')->nullable();
          $table->enum('estado',['activo','inactivo'])->nullable();
          $table->rememberToken();
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
        Schema::dropIfExists('users');
    }
}
