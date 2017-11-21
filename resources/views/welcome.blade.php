<!doctype html>
<html>
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>SIPAB</title>
    <link rel="stylesheet" href="//cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="//cdnjs.cloudflare.com/ajax/libs/animate.css/3.5.2/animate.min.css">
    <link rel="stylesheet" href="{{asset('css/mui/mui.css')}}">
    <script src="//cdn.muicss.com/mui-latest/extra/mui-combined.min.js"></script>
  </head>
  <body>
    <header class="mui-appbar mui--z1">
      <div class="mui-container">
        <table>
          <tr class="mui--appbar-height">
            <td class="mui--text-title">SIPAB</td>
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
      <div class="mui--text-display3 row wow zoomInDown">Bienvenido al Nuevo Sistema</div>
      <br>
      <br>
      <a href="{{ route('login') }}"> <button class="mui-btn mui-btn--raised">Entrar</button></a>
      <br>
      <br>
      <i class="fa fa-university fa-5x mui--color-pink-A100 mui--text-display3 row wow zoomIn" aria-hidden="true"></i>
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
