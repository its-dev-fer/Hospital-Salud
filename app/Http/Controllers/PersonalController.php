<?php

namespace App\Http\Controllers;
use App\User;
use Illuminate\Http\Request;

class PersonalController extends Controller{
    public function personales(){
        $users = \DB::table('users')->where('rol', 'personal')->get();
        return view('administrador/personales', ['users' => $users]);
    }

    public function alta(){
    
        $id = $_POST['id'];
        \DB::table('users')
                    ->where('id', $id)
                    ->update(['direccion' => 'activo']);
        $users = \DB::table('users')->where('rol', 'personal')->get();
        return  ['users' => $users];
    }

    public function baja(){
        $id = $_POST['id'];
       \DB::table('users')
                    ->where('id', $id)
                    ->update(['direccion' => 'baja']);
        $users = \DB::table('users')->where('rol', 'personal')->get();
        return ['users' => $users];
    }

}
