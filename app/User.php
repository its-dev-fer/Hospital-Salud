<?php

namespace App;

use Illuminate\Notifications\Notifiable;
use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Foundation\Auth\User as Authenticatable;

class User extends Authenticatable
{
    use Notifiable;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    /*
        $table->enum('rol',['personal','administrador']);
            $table->enum('turno',['matutino','vespertino']);
            $table->string('horario')->nullable();
            $table->string('celular')->nullable();
            $table->string('telefono_casa')->nullable();
            $table->integer('num_casa')->nullable();
            $table->string('direccion')->nullable();
            $table->string('foto')->nullable();
        */
    protected $fillable = [
        'name', 'email', 'password','rol','turno','horario','celular','telefono_casa','direccion','foto',
    ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'password', 'remember_token',
    ];
}
