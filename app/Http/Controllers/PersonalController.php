<?php

namespace App\Http\Controllers;
use App\User;
use Illuminate\Http\Request;

class PersonalController extends Controller{
    public function personales(){
        return view('administrador/personales', ['users' => \App\User::get()]);
    }

    public function alta(){
        
        $id = $_POST['id'];
        \DB::table('users')
                    ->where('id', $id)
                    ->update(['estado' => 'aceptado']);
                    //falta añadir el campo "estado" en la DB
        return view('administrador/personales', ['users' => \App\User::get()]);
    }

    public function baja(){
        
        $id = $_POST['id'];

        \DB::table('users')
                    ->where('id', $id)
                    ->update(['estado' => 'espera']);
                    //falta añadir el campo "estado" en la DB
        return view('administrador/personales', ['users' => \App\User::get()]);
    }
}
