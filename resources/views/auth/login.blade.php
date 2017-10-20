@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <div class="panel panel-default">
            <h2>SIPAB 2017 PRODUCCION</h2>
                <div class="panel-heading"  ALIGN=center>INICIAR SESION</div>
                <div class="panel-body">
                    <form class="form-horizontal" method="POST" action="{{ route('login') }}">
                        {{ csrf_field() }}

                        <div class="col-md-offset-3 input-group col-md-8">
                        @if ($errors->has('username'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('username') }}</strong>
                                    </span>
                        @endif

                        @if ($errors->has('password'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('password') }}</strong>
                                    </span>
                        @endif
                        </div>
                        
                        <div class="col-md-10 form-group{{ $errors->has('username') ? ' has-error' : '' }}">

                                <div class="col-md-offset-4 input-group col-md-8">
                                <span class="input-group-addon" id="basic-addon1">
                                   <i class="material-icons md-18">account_circle</i>
                                     
                                </span>

                                <input id="username" type="username" class="form-control" name="username" value="{{ old('username') }}" required autofocus placeholder="Nombre de usuario" aria-describedby="basic-addon1" >

                                </div>


                                
                            
                        </div>





                        <div class="col-md-10 form-group{{ $errors->has('password') ? ' has-error' : '' }}">

                                <div class="col-md-offset-4 input-group col-md-8">
                                <span class="input-group-addon " id="basic-addon2">
                                    <i class="material-icons">vpn_key</i>
                                </span>
                                <input id="password" type="password" class="form-control" name="password" value="{{ old('password') }}" required autofocus placeholder="Contraseña" aria-describedby="basic-addon2" >
                                </div>

                                
                            
                        </div>



                        

                        <div class="form-group">
                            <div class="col-md-6 col-md-offset-4">
                                <div class="checkbox">
                                    <label>
                                        <input type="checkbox" name="remember" {{ old('remember') ? 'checked' : '' }}> Recordar
                                    </label>
                                </div>
                            </div>
                        </div>

                        <div class="form-group col-md-12">
                 
                        <div class="g-recaptcha col-md-offset-3 col-md-6" data-sitekey="6LeRPy0UAAAAAOBVv-A9LVIZDhV8cqW1THvCfOqg"></div>
                        </div>


                        
                        <div class="form-group col-md-10">
                          
                                <button type="submit" class="btn btn-primary col-md-offset-4 col-md-8">
                                    Iniciar sesion
                                </button>

                           
                        </div>

                        <div class="form-group">
                            <div class="col-md-8 col-md-offset-4">
                                

                                <a class="btn btn-link" href="{{ route('password.request') }}">
                                    ¿Olvidaste tu contraseña?
                                </a>
                            </div>
                        </div>




                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
<script src='https://www.google.com/recaptcha/api.js'></script>
@endsection
