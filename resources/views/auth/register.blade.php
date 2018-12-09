@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
          <div class="login_card text-center">
            <h5 class="texto-degradado no_select">Registro de personal</h5>
            <form method="POST" action="{{ route('register') }}">
                @csrf
                <div class="form-group row">
                    <label for="name" class="col-md-4 col-form-label text-md-right">Nombre:</label>

                    <div class="col-md-6">
                        <input id="name" type="text" class="form-control{{ $errors->has('name') ? ' is-invalid' : '' }}" name="name" value="{{ old('name') }}" required placeholder="Nombre del personal químico" autofocus>

                        @if ($errors->has('name'))
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $errors->first('name') }}</strong>
                            </span>
                        @endif
                    </div>
                </div>
                <div class="form-group row">
                    <label for="email" class="col-md-4 col-form-label text-md-right">Correo electrónico</label>

                    <div class="col-md-6">
                        <input id="email" type="email" class="form-control{{ $errors->has('email') ? ' is-invalid' : '' }}" name="email" value="{{ old('email') }}" placeholder="usuario@dominio.com" required>

                        @if ($errors->has('email'))
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $errors->first('email') }}</strong>
                            </span>
                        @endif
                    </div>
                </div>
                <div class="form-group row">
                    <label for="password" class="col-md-4 col-form-label text-md-right">Contraseña:</label>

                    <div class="col-md-6">
                        <input id="password" type="password" class="form-control{{ $errors->has('password') ? ' is-invalid' : '' }}" name="password" required>

                        @if ($errors->has('password'))
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $errors->first('password') }}</strong>
                            </span>
                        @endif
                    </div>
                </div>

                <div class="form-group row">
                    <label for="password-confirm" class="col-md-4 col-form-label text-md-right">Confirma tu contraseña: </label>

                    <div class="col-md-6">
                        <input id="password-confirm" type="password" class="form-control" name="password_confirmation" required>
                    </div>
                </div>

                <div class="form-group row">
                    <label for="roles" class="col-md-4 col-form-label text-md-right">Rol:</label>

                    <div class="col-md-6">
                        <select id="roles" class="form-control" name="rol" disabled>
                            <option value="personal" selected>Personal Químico</option>
                        </select>
                    </div>
                </div>

                <div class="form-group row">
                    <label for="turnos" class="col-md-4 col-form-label text-md-right">Turno:</label>

                    <div class="col-md-6">
                        <select id="turnos" class="form-control" name="turno">
                            <option value="matutino" selected>Matutino</option>
                            <option value="vespertino">Vespertino</option>
                        </select required>
                    </div>
                </div>

                <div class="form-group row">
                    <label for="_horario" class="col-md-4 col-form-label text-md-right">Horario:</label>

                    <div class="col-md-6">
                        <input id="_horario" class="form-control" type="text" name="horario" placeholder="De 00:00 horas a 00:00 horas" required>
                    </div>
                </div>

                <div class="form-group row">
                    <label for="_celular" class="col-md-4 col-form-label text-md-right">Número de celular:</label>

                    <div class="col-md-6">
                        <input id="_celular" class="form-control" type="text" name="celular" placeholder="961 000 11 22"pattern="[0-9]{10}" required>
                    </div>
                </div>

                <div class="form-group row">
                    <label for="_casa" class="col-md-4 col-form-label text-md-right">Número fijo:</label>

                    <div class="col-md-6">
                        <input id="_casa" class="form-control" type="text" name="casa" placeholder="61 0 12 34 (Vacío en caso de no tener)"pattern="[0-9]{7}">
                    </div>
                </div>

                <div class="form-group row">
                    <label for="_direccion" class="col-md-4 col-form-label text-md-right">Dirección:</label>

                    <div class="col-md-6">
                        <input id="_direccion" class="form-control" type="text" name="direccion" placeholder="Av. ... No. XXX-X Col. ...." required>
                    </div>
                </div>

                <div class="form-group row">
                    <label for="_foto" class="col-md-4 col-form-label text-md-right">Imagen de perfil:</label>

                    <div class="col-md-6">
                        <input id="_foto" class="form-control" type="file" name="foto" placeholder="Subir archivo" accept="image/*" required>
                    </div>
                </div>

                <div class="form-group row mb-0">
                    <div class="col-md-12">
                        <button type="submit" class="btn degradado_coral big_rounded_button">
                            Registrar personal
                        </button>
                    </div>
                </div>
            </form>
          </div>
          <!--
            <div class="card">
                <div class="card-header">Registrar personal</div>
                <div class="card-body">
                    <form method="POST" action="{{ route('register') }}">
                        @csrf
                        <div class="form-group row">
                            <label for="name" class="col-md-4 col-form-label text-md-right">Nombre:</label>

                            <div class="col-md-6">
                                <input id="name" type="text" class="form-control{{ $errors->has('name') ? ' is-invalid' : '' }}" name="name" value="{{ old('name') }}" required placeholder="Nombre del personal químico" autofocus>

                                @if ($errors->has('name'))
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $errors->first('name') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="email" class="col-md-4 col-form-label text-md-right">Correo electrónico</label>

                            <div class="col-md-6">
                                <input id="email" type="email" class="form-control{{ $errors->has('email') ? ' is-invalid' : '' }}" name="email" value="{{ old('email') }}" placeholder="usuario@dominio.com" required>

                                @if ($errors->has('email'))
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $errors->first('email') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>


                    </form>
                </div>
            </div>
        </div>-->
    </div>
</div>
@endsection
