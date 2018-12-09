@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Personales</div>
                <div class="card-body">
                    <div class="table-responsive center"> 
                        <table class="table table-condensed">
                            <thead>
                            <tr>
                                <th>Personal</th>
                                <th>Turno</th>
                                <th>Estado</th>
                            </tr>
                            </thead>
                            <tbody>
                                @foreach($users as $user)
                                <tr>
                                    <td>{{$user->name}}</td>
                                    <td>{{$user->turno}}</td>
                                    <td>
                                         @if($user->direccion == 'espera')
                                            <button class="btn btn-warning alta" data-user='{"id": {{$user->id}}}' >
                                                Aceptar solicitud
                                            </button>
                                        @elseif($user->direccion == 'baja')
                                            <button type="button" class="btn btn-danger alta" data-user='{"id": {{$user->id}}}'>
                                                    Activar
                                            </button>
                                        @else
                                            <button type="button" class="btn btn-success baja" data-user='{"id": {{$user->id}}}'>
                                                    Baja
                                            </button>
                                        @endif
                                    </td>
                                </tr>
                                @endforeach
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection



