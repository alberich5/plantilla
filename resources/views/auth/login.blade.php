@extends('layouts.app')

@section('content')
<div class="page login-page">
  <div class="container d-flex align-items-center">
    <div class="form-holder has-shadow">
      <div class="row">
        <!-- Logo & Information Panel-->
        <div class="col-lg-6">
          <div class="info d-flex align-items-center">
            <div class="content">
              <div class="logo">
                <h1>Sipab Inicio</h1>
              </div>
              <p>Nueva Evolucion del SIPAB</p>
            </div>
          </div>
        </div>
        <!-- Form Panel    -->
        <div class="col-lg-6 bg-white">
          <div class="form d-flex align-items-center">
            <div class="content">
              <form id="login-form" method="POST" action="{{ route('login') }}">
                {{ csrf_field() }}
                <div class="form-group">
                  <input id="username" type="text" name="username" value="{{ old('username') }}" required="" class="input-material">
                  <label for="login-username" class="label-material">Usuario</label>
                </div>
                <div class="form-group">
                  <input id="password" type="password" name="password" value="{{ old('password') }}" required="" class="input-material">
                  <label for="login-password" class="label-material">Contraseña</label>
                </div>
                <button type="submit" class="btn btn-primary">
                    Iniciar sesion
                </button>
                <!-- This should be submit button but I replaced it with <a> for demo purposes-->
              </form>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>
@endsection
