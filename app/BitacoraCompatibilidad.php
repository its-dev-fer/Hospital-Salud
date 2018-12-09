<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class BitacoraCompatibilidad extends Model
{
    protected $table = 'compatibilidad';

    public static function scopeGetBitacoras()
    {
      return BitacoraCompatibilidad::orderBy('num_prueba_cruzada','asc')->paginate(5);
    }
}
