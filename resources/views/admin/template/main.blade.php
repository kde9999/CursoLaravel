<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>@yield('title','Default')|Panel de Administracion</title>
  <link rel="stylesheet" href="{{asset('plugins/bootstrap/css/bootstrap.css')}}">
  </head>
  <body>
      @include ('admin.template.partials.nav')


      <section>
        @yield('content')
      </section>

      <script src="{{asset('plugins/jquery/js/jquery-3.1.1.js')}}"> </script>
      <script src="{{asset('plugins/bootstrap/js/bootstrap.js')}}"> </script>
      
  </body>
</html>
