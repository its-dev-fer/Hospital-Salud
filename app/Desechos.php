<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Desechos extends Model
{
    protected $table = 'registro_desechos';
    protected $fillable = ['num_prog', 'num_unidad', 'caducidad', 'defecto_conservacion', 'num_cs', 'num_registro', 'nombre_del_que_desecha', 'nombre_personal_pbi'];

    public function scopePagination($query, $start, $end){
        return $query->whereBetween('id', [$start, $end]);
    }
}
 