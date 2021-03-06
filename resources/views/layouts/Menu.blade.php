<!DOCTYPE html>
<html lang="{{ app()->getLocale() }}">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>Menu principal</title>
    <!-- Styles -->
    <link href="{{asset('css/app.css')}}" rel="stylesheet" type="text/css">
    <link rel="stylesheet" href="{{ asset('omar/css/style.default.css') }}" id="theme-stylesheet">
    @yield('css')
   </head>
<body>
    <div id="app" class="fondoMenu">
        <nav class="navbar navbar-default navbar-static-top">

            <div class="container">
                <div class="navbar-header">

                    <!-- Collapsed Hamburger -->
                    <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#app-navbar-collapse">
                        <span class="sr-only">Toggle Navigation</span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                    </button>

                    <!-- Branding Image -->
                    <a class="sipab" href="{{ url('/') }}">

                    </a>

                </div>

                <div class="collapse navbar-collapse" id="app-navbar-collapse">
                  <!--<center><h2>POLICIA AUXILIAR BANCARIA INDUSTRIAL Y COMERCIAL</h2><center>-->
                    <!-- Left Side Of Navbar -->
                    <ul  class="nav navbar-nav">



                    </ul>

                    <!-- Right Side Of Navbar -->
                    <ul class="nav navbar-nav navbar-left">
                      <li class="letras2" style="background: ;  ">

                          <h2>  POLICIA AUXILIAR BANCARIA INDUSTRIAL Y COMERCIAL </h2>


                      </li>
                    </ul>
                    <ul class="nav navbar-nav navbar-right">

                       <h2></h2>
                        <!-- Authentication Links -->
                        @if (Auth::guest())
                            <li><a href="{{ route('login') }}">Iniciar sesion</a></li>
                            <li><a href="{{ route('register') }}">Registrar</a></li>
                        @else



                            <li class="dropdown">
                                <a href="#" class="dropdown-toggle letras" data-toggle="dropdown" role="button" aria-expanded="false">
                                    {{ Auth::user()->username }} <span class="caret"></span>
                                </a>

                                <ul class="dropdown-menu" role="menu">
                                    <li>
                                        <a href="{{ route('logout') }}"
                                            onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                                            Cerrar Sesion
                                        </a>

                                        <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                            {{ csrf_field() }}
                                        </form>
                                    </li>

                                    <li>



                                    </li>
                                </ul>
                            </li>
                        @endif
                      <!--  <img src="{{ asset('/img/uno.png') }}" class="img-responsive" width="50" height="50">-->



                    </ul>
                </div>
            </div>
        </nav>

        @yield('content')
    </div>


    <!-- Scripts -->


   <script type="text/javascript" src="{{asset('js/app.js')}}"></script>
        @yield('js')

</body>
</html>
