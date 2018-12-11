@extends('layouts.app')

@section('content')
<div class="container" id="login_background" style="margin-top: 4%">
    <div class="row justify-content-center">
        <div class="col-md-8 justify-content-center">
          <div class="login_card text-center">
            <h1 class="texto-degradado no_select">Bienvenido</h1>
            <i class="fas fa-user-circle" style="font-size: 250px;"></i>
            <form method="POST" action="{{ route('login') }}">
              @csrf
              <div class="form-group row justify-content-center">
                <div class="col-md-6 ">
                    <input id="email" type="email" placeholder="Correo electrónico" class="form-control{{ $errors->has('email') ? ' is-invalid' : '' }}" name="email" value="{{ old('email') }}" required autofocus>

                    @if ($errors->has('email'))
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $errors->first('email') }}</strong>
                        </span>
                    @endif
                </div>
              </div>
              <div class="form-group row justify-content-center">
                  <div class="col-md-6">
                      <input id="password" placeholder="Contraseña" type="password" class="form-control{{ $errors->has('password') ? ' is-invalid' : '' }}" name="password" required>

                      @if ($errors->has('password'))
                          <span class="invalid-feedback" role="alert">
                              <strong>{{ $errors->first('password') }}</strong>
                          </span>
                      @endif
                  </div>
              </div>
              <div class="form-group row justify-content-center">
                  <div class="col-md-6">
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
