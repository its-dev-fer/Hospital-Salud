<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\BitacoraCompatibilidad;

class BitacoraDeCompatibilidadController extends Controller
{
      public function index(){
        return view('compatibilidad',['bitacoras'=>BitacoraCompatibilidad::GetBitacoras()]);
      }
}
