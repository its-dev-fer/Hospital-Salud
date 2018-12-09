<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;
use Carbon\Carbon;
use App\BitacoraCompatibilidad;
use App\BitacoraEgresos;
use App\Desechos;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
      $bCount = BitacoraCompatibilidad::count() + BitacoraEgresos::count() + Desechos::count();
        if(Carbon::now()->hour > 12){
          $message = "Buenas tardes";
        }else if(Carbon::now()->hour > 19){
          $message = "Buenas noches";
        }else{
          $message = "Buenos días";
        }
        return view('home',[
          'usersCount' =>  User::count(),
          'bitacorasCount' => $bCount ,
          'message' => $message
        ]);
    }
}
