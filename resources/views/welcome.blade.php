<!doctype html>
<html>
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>SIPAB</title>
    <link rel="stylesheet" href="//cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="//cdnjs.cloudflare.com/ajax/libs/animate.css/3.5.2/animate.min.css">
    <link rel="stylesheet" type="text/css" href="{{asset('omar/css/propio.css')}}">
    <link rel="stylesheet" href="{{asset('css/mui/mui.css')}}">
    <script src="//cdn.muicss.com/mui-latest/extra/mui-combined.min.js"></script>
  </head>
  <body id="welcome">
    <header class="mui-appbar mui--z1">
      <div class="mui-container">
        <table>
          <tr class="mui--appbar-height">
            <td class="mui--text-title inicio" style=" width:100%;text-decoration: none; color:white;"><a href="" style="">SIPAB</a></td>
              <a href="{{ route('login') }}" style="float: right; font-size: 1.4em; margin-top: 1.8%;">Inicio Sesion</a></td>
            <td class="mui--text-right">
              <ul class="mui-list--inline mui--text-body2">
              </ul>
            </td>
          </tr>
        </table>
      </div>
    </header>
    <div id="content-wrapper" class="mui--text-center">
      <div class="mui--appbar-height"></div>
      <br>
      <br>
      <div class="mui--text-display3 row wow zoomInDown">Aqui va el Texto</div>
      <br>
      
      
      <br>
      <br>
      <center>
      <div class="wrapper">
       <i class="fa fa-university fa-5x mui--color-pink-A100 mui--text-display3 row wow zoomIn" aria-hidden="true"></i>
       <div class="tooltip">ver</div>
      </div>
      <center>
    </div>
    <footer>
      <div class="mui-container mui--text-center mui--text-bottom">

      </div>
    </footer>
    <script src="//cdnjs.cloudflare.com/ajax/libs/wow/1.1.2/wow.min.js"></script>
    <script>
      new WOW().init();
    </script>
  </body>
</html>
