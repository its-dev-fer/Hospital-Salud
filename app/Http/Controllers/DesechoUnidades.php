<?php

namespace App\Http\Controllers;
use App\Desechos;
use Illuminate\Http\Request;
use App\Services\PayUService\Exception;

class DesechoUnidades extends Controller{
    
    public function index(){
        $size = \App\Desechos::all();
        $size = count($size);
        return view('desechos', ['size'=>$size]);
    }

    public function insert(Request $request){
        try{
            \App\Desechos::create([
                'num_prog' => $request->input('num_prog'),
                'num_unidad' => $request->input('num_unidad'),
                'caducidad' => $request->input('caducidad'),
                'defecto_conservacion' => $request->input('defecto_conservacion'),
                'num_cs' => $request->input('num_cs'),
                'num_registro' => $request->input('num_registro'),
                'nombre_del_que_desecha' => $request->input('nombre_desechador'),
                'nombre_personal_pbi' => $request->input('nombre_pbi')
            ]);
            echo "sucess";
        }catch(\Exception $e){
            echo "error";
        }

    }

    public function show(Request $request){
        if($request->ajax()){
            $page = $request->get('page');
            $perPage = $request->get('perPage');
            $end = $page * $perPage;
            $start = ($end - $perPage)+1;
            $arrayData = \App\Desechos::pagination($start, $end)->get();
            $output = '';
            if(count($arrayData)>0){
                foreach($arrayData as $data){
                    $output .= '
                        <tr>
                            <td class="row_1">'.$data->id.'</td>
                            <td class="row_2">'.$data->num_prog.'</td>
                            <td class="row_3">'.$data->num_unidad.'</td>
                            <td class="row_4">'.$data->caducidad.'</td>
                            <td class="row_5">'.$data->defecto_conservacion.'</td>
                            <td class="row_6">'.$data->num_cs.'</td>
                            <td class="row_7">'.$data->num_registro.'</td>
                            <td class="row_8">'.$data->nombre_del_que_desecha.'</td>
                            <td class="row_9">'.$data->nombre_personal_pbi.'</td>
                        </tr>
                    ';
                }
            }else{
                $output  = '
                    <tr>
                        <td align="center" colspan="9"><h1>Sin datos</h1></td>
                    </tr>
                ';
            }
            $data = $output;
            echo json_encode($data);
        }
    }
}

