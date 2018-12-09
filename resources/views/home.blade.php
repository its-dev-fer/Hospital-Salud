@extends('layouts.app')

@section('content')
<div class="row" id="cpanel">
  <div class="col-2 full_screen lado_izquierdo">
    <div class="row">
      @if(Auth::user()->rol == "administrador")
      <a id="_2_welcome" href="#" class="izq_item btn orange_btn"><i class="fas fa-home"></i>&nbsp;Bienvenida</a>
      <a id="_2_notifications" href="#" class="izq_item btn coral_btn"><i class="fas fa-bell"></i>&nbsp;Notificaciones</a>
      <a href="{{ url('/personales') }}" class="izq_item btn otro_orange_btn"><i class="fas fa-user"></i>&nbsp;Administrar personal</a>
      @endif
      
      <a id="_2_bitacoras_menu" href="#" class="izq_item btn pink_btn"><i class="fas fa-pencil-alt"></i>&nbsp;Gestionar bitácoras</a>
    </div>
  </div>
  @if(Auth::user()->rol == "administrador")
  <div class="col-10 full_screen lado_derecho" id="welcome_tab">
  @else
  <div class="col-10 full_screen lado_derecho" id="welcome_tab" style="display:none">
  @endif
    <div class="row">
      <div class="col-4">
        <div class="info_card">
          <div class="row">
            <div class="col-1">
              <i class="fas fa-users single_icon"></i>
            </div>
            <div class="col-10">
              <h3>{{ $usersCount }} usuarios registrados</h3>
            </div>
          </div>
        </div>
      </div>

      <div class="col-5">
        <div class="info_card">
          <div class="row">
            <div class="col-1">
              <i class="fas fa-book single_icon"></i>
            </div>
            <div class="col-10">
              <h3>{{ $bitacorasCount }} bitácoras</h3>
            </div>
          </div>
        </div>
      </div>

      <div class="col-3">
        <div class="info_card">
          <div class="row">
            <div class="col-1">
              <i class="fas fa-handshake single_icon"></i>
            </div>
            <div class="col-10">
              <h3>{{ $message }}</h3>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
  <div class="col-10 full_screen lado_derecho" id="notifications_tab" style="display:none">
    <div class="col-12">
      <div class="info_card">
        <div class="row">
          <div class="col-1">
            <i class="far fa-bell single_icon"></i>
          </div>
          <div class="col-10">
            <h3>Tienes 0 notificaciones</h3>
          </div>
        </div>
      </div>
    </div>
  </div>

  @if(Auth::user()->rol == "personal")
  <div class="col-10 full_screen lado_derecho" id="bitacoras_tab">
  @else
  <div class="col-10 full_screen lado_derecho" id="bitacoras_tab" style="display:none">
  @endif
    <div class="row">
      <div class="col-6">
        <div class="info_card">
          <div class="row">
            <div class="col-8">
              <h5>Bitácoras de compatibilidad</h5>
            </div>
            <div class="col-4">
              <a href="{{ url('/compatibilidad') }}" class="btn btn-success">Administrar</a>
            </div>
          </div>
        </div>
      </div>

      <div class="col-6">
        <div class="info_card">
          <div class="row">
            <div class="col-8">
              <h5>Bitácoras de egresos</h5>
            </div>
            <div class="col-4">
              <a href="#" class="btn btn-success">Administrar</a>
            </div>
          </div>
        </div>
      </div>

      <div class="col-6">
        <div class="info_card">
          <div class="row">
            <div class="col-8">
              <h5>Bitácoras de desechos</h5>
            </div>
            <div class="col-4">
              <a href="{{url('/desechos')}}" class="btn btn-success">Administrar</a>
            </div>
          </div>
        </div>
      </div>

      <div class="col-6">
        <div class="info_card">
          <div class="row">
            <div class="col-8">
              <h5>Libreta de egresos</h5>
            </div>
            <div class="col-4">
              <a href="#" class="btn btn-success">Administrar</a>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>
  <!--
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Dashboard</div>

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif

                    You are logged in!
                </div>
            </div>
        </div>
    </div>
  -->
@endsection
