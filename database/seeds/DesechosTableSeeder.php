<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Carbon\Carbon;

class DesechosTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run(){
        for($i = 0; $i < 20; $i++){
            $year = rand(2017, 2018);
            $month = rand(1, 12);
            $day = rand(1, 28);

            $date = Carbon::create($year, $month,  $day, 0,0,0);

            \DB::table('registro_desechos')->insert([
                'num_prog' => str_random(10),
                'num_unidad' => str_random(10),
                'caducidad' => $date->format('Y-m-d H:i:s') ,
                'defecto_conservacion' => str_random(10),
                'num_cs' => str_random(10),
                'num_registro' => str_random(10),
                'nombre_del_que_desecha' => str_random(10),
                'nombre_personal_pbi' => str_random(10),
                'created_at' => $date->format('Y-m-d H:i:s'),
                'updated_at' => $date->addWeeks(rand(1, 52))->format('Y-m-d H:i:s')
            ]);
        }
    }
}
