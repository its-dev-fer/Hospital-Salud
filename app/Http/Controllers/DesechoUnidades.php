<?php

namespace App\Http\Controllers;
use App\Desechos;
use Illuminate\Http\Request;

class DesechoUnidades extends Controller{
    
    public function index(){
        return view('desechos');
    }

    public function insert(Request $request){
        \App\Desechos::create([
            'num_prog' => $request->input('1'),
            'num_unidad' => $request->input('2'),
            'caducidad' => $request->input('3'),
            'defecto_conservacion' => $request->input('4'),
            'num_cs' => $request->input('5'),
            'num_registro' => $request->input('6'),
            'nombre_del_que_desecha' => $request->input('7'),
            'nombre_personal_pbi' => $request->input('8')
        ]);
    }
}
