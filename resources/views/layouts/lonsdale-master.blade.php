<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link 
          href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/css/bootstrap.min.css" 
          rel="stylesheet" integrity="sha384-eOJMYsd53ii+scO/bJGFsiCZc+5NDVN2yr8+0RDqr0Ql0h+rP48ckxlpbzKgwra6" 
          crossorigin="anonymous"
        />
        <title>Lonsdale</title>
        <link 
          rel="stylesheet" 
          href="{{ URL::to('css/styles.css') }}" 
        />
        <style>
          body {
            background-color: #333;
            color: #fff;
          }
          .es-header {
            background-color: #444;
            color: #fff;
            height: 30vh;
            padding-top: 10vh;
          }
          .es-footer {
            background-color: #444;
            color: #fff;
            height: 30vh;
            padding-top: 10vh;
          }
        </style>
    </head>
    <body>
        @include('partials.header-one')
        @include('nav-components.navbar-frontend-one')
        <main class="es-main">
            @yield('content')
        </main>
        @include('partials.footer-one')
    </body>
</html>
