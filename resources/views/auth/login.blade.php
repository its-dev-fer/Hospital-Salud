@extends('layouts.app')

@section('content')
<div class="container" style="margin-top: 20px;">
    <div class="row justify-content-center">
        <div class="col-md-8 justify-content-center">
          <div class="login_card text-center">
            <h5 class="texto-degradado no_select">Hospital Regional de Alta Especialidad "Ciudad Salud"</h5>
            <form method="POST" action="{{ route('login') }}">
              @csrf
              <div class="form-group row">
                <label for="email" class="col-sm-4 col-form-label text-md-right" style="color:#FFFFFF">Correo electrónico: </label>
                <div class="col-md-6">
                    <input id="email" type="email" class="form-control{{ $errors->has('email') ? ' is-invalid' : '' }}" name="email" value="{{ old('email') }}" required autofocus>

                    @if ($errors->has('email'))
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $errors->first('email') }}</strong>
                        </span>
                    @endif
                </div>
              </div>
              <div class="form-group row">
                  <label for="password" class="col-md-4 col-form-label text-md-right" style="color:#FFFFFF">Contraseña: </label>

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
                  <div class="col-md-6 offset-md-4">
                      <div class="form-check">
                          <input class="form-check-input" type="checkbox" name="remember" id="remember" {{ old('remember') ? 'checked' : '' }}>

                          <label class="form-check-label" for="remember" style="color: #FFFFFF">
                              Recordarme
                          </label>
                      </div>
                  </div>
              </div>
              <div class="form-group row mb-0">
                  <div class="col-md-12">
                      <button type="submit" class="btn degradado_coral big_rounded_button">
                          Iniciar sesión
                      </button>
                  </div>
                  <div class="col-md-12">
                    <a class="btn btn-link" href="{{ route('password.request') }}" style="color: #FFFFFF"> 
                        Olvidé mi contraseña
                    </a>
                  </div>
              </div>
            </form>
          </div>
        </div>
    </div>
</div>
@endsection
