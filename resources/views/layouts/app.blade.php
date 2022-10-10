<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">

  <!-- CSRF Token -->
  <meta name="csrf-token" content="{{ csrf_token() }}">

  <title>{{ config('app.name', 'GYM') }}</title>
  {{-- <link rel="icon" type="image/x-icon" href="/public/favicon.ico"> --}}


  <!-- Fonts -->
  <link rel="dns-prefetch" href="//fonts.gstatic.com">
  <link href="https://fonts.googleapis.com/css?family=Nunito" rel="stylesheet">

  <!-- Styles -->
  <link href="{{ asset('css/app.css') }}" rel="stylesheet">
  <!-- Scripts -->
  {{-- @yield('script') --}}
</head>

<body>
  <div>
    ciao

    {{-- <main id="app">
      @yield('content')
    </main> --}}
  </div>
</body>

</html>
