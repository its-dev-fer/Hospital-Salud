<?php

namespace App\Http\Controllers;
use App\User;
use Illuminate\Http\Request;
use Hash;

class PersonalController extends Controller{
    public function personales(){
        return view('administrador/personales', ['users' => \App\User::where('rol','personal')-> get()]);
    }

    public function alta(){
        return view('administrador.crear');
    }

    public function baja(Request $r){
      $response = array();
      $u = User::where('id',$r->id)->first();
      $u->estado = "inactivo";
      if($u->save()){
        array_push($response,User::count());
          return response()->json($response);
      }
    }

    public function create(Request $r){
      User::create([
          'name' => $r->name,
          'email' => $r->email,
          'password' => Hash::make($r->password),
          'rol' => "personal",
          'turno' => $r->turno,
          'horario' => $r->horario,
          'celular' => $r->celular,
          'telefono_casa' => $r->casa,
          'direccion' => $r->direccion,
          'foto' => $r->foto,
          'estado' => "inactivo"
      ]);

      return redirect("/personales");
    }

    public function activar(Request $r){

      $u = User::where('id',$r->id)->first();
      $u->estado = "activo";
      if($u->save()){
          return response()->json("OK");
      }

    }
}
