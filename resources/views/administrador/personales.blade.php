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
                                    @if($user->email_verified_at == null)
                                        <td> <button class="btn btn-danger alta" data-user='{"id": {{$user->id}}}' >
                                            Aceptar solicitud
                                        </button> </td>
                                    @else
                                        <td> <button type="button" class="btn btn-success baja" data-user='{"id": {{$user->id}}}'>
                                                Dar de baja
                                            </button>
                                        </td>
                                    @endif
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



