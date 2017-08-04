<!DOCTYPE html>
<html lang="es">

  <head>

    <meta charset="utf-8">
    <title>home</title>
    <link rel="stylesheet" href="{{ asset('plugins/bootstrap/css/bootstrap.css') }}">

  </head>

  <body>
    <script src="{{ asset('plugins/jquery/js/jquery-3.2.1.js') }}"></script>
    <script src="{{ asset('plugins/bootstrap/js/bootstrap.js') }}"></script>

    <header>

      @include('admin.template.partials.header')

    </header>

    <nav>

      @include('admin.template.partials.nav')

    </nav>

    <section>

      @include('admin.template.partials.section')

    </section>



  </body>
</html>
