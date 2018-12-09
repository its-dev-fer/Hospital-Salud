@extends('layouts.app')
@section('content')
<!--
$table->increments('num_prueba_cruzada');
$table->string('receptor');
$table->integer('num_expediente')->nullable();
$table->string('servicio');
$table->enum('grupo_directo',['A','B','AB','O','ONEG']);
$table->string('control');
$table->enum('grupo_inverso',['A1','A2','B','O']);
$table->enum('lectina',['A1','H']);
$table->enum('grupo',['ABO','RH']);
$table->string('nombre_disponente');
$table->integer('num_registro');
$table->integer('num_unidad_externo');
$table->string('componente');
$table->string('AHG');
$table->string('resultado');
$table->string('inmunoglobulina');
$table->string('c3d');
$table->string('realizado_por');
$table->string('observaciones');
 -->
<table class="table table-striped">
  <thead class="thead-dark">
    <tr>
      <th class="text-center align-middle">No. prueba cruzada</th>
      <th class="text-center align-middle">Receptor</th>
      <th class="text-center align-middle">No. de expediente</th>
      <th class="text-center align-middle">Servicio</th>
      <th class="text-center align-middle">Grupo directo</th>
      <th class="text-center align-middle">Control</th>
      <th class="text-center align-middle">Grupo inverso</th>
      <th class="text-center align-middle">Lectina</th>
      <th class="text-center align-middle">Grupo</th>
      <th class="text-center align-middle">Disponente</th>
      <th class="text-center align-middle">No. unidad externo</th>
      <th class="text-center align-middle">Componente</th>
      <th class="text-center align-middle">AHG</th>
      <th class="text-center align-middle">Resultado</th>
      <th class="text-center align-middle">Inmunoglobulina</th>
      <th class="text-center align-middle">C3D</th>
      <th class="text-center align-middle">Realizado por</th>
      <th class="text-center align-middle">Observaciones</th>
    </tr>
  </thead>
  <tbody>
    @foreach($bitacoras as $b)
    <tr>
      <td>{{ $b->num_prueba_cruzada }}</td>
      <td>{{ $b->receptor }}</td>
      <td>{{ $b->num_expediente }}</td>
      <td>{{ $b->servicio }}</td>
      <td>{{ $b->grupo_directo }}</td>
      <td>{{ $b->control }}</td>
      <td>{{ $b->grupo_inverso }}</td>
      <td>{{ $b->lectina }}</td>
      <td>{{ $b->grupo }}</td>
      <td>{{ $b->nombre_disponente }}</td>
      <td>{{ $b->num_unidad_externo }}</td>
      <td>{{ $b->componente }}</td>
      <td>{{ $b->AHG }}</td>
      <td>{{ $b->resultado }}</td>
      <td>{{ $b->inmunoglobulina }}</td>
      <td>{{ $b->c3d }}</td>
      <td>{{ $b->realizado_por }}</td>
      <td>{{ $b->observaciones }}</td>
    </tr>
    @endforeach
  </tbody>
</table>

<div class="row justify-content-center">
  {{$bitacoras->links()}}
</div>
@endsection
