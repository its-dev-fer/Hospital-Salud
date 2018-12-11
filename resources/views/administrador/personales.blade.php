@extends('layouts.app')

@section('content')
<div class="container" style="margin-top:20px;">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">
                  <div class="row">
                    <div class="col-8">
                      Personales
                    </div>
                    <div class="col-4">
                      <a href="/alta" class="btn btn-success">
                        <i class="fas fa-user-plus"></i>
                        Agregar personal
                      </a>
                    </div>
                  </div>
                </div>
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
                              @if(count($users)>0)
                                @foreach($users as $user)
                                <tr id="{{ 'td_'.$user->id}}">
                                    <td>{{$user->name}}</td>
                                    <td>{{$user->turno}}</td>
                                    <td>
                                      @if($user->estado == 'activo')
                                        <button type="button" class="btn btn-danger baja" data-user='{{$user->id}}'>Dar de baja</button>
                                      @else
                                        <button type="button" class="btn btn-success darAlta" data-user='{{$user->id}}'>Activar</button>
                                      @endif
                                    </td>
                                </tr>
                                @endforeach
                              @else
                                <tr>
                                  No hay usuarios
                                </tr>
                              @endif
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
