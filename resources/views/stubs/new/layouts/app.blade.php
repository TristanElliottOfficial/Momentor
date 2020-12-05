<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Momentor') }} - @yield('title')</title>

    <!-- Scripts -->
    <script src="{{ asset('js/app.js') }}" defer></script>
    @yield('scripts')

    <!-- Fonts -->
    <link href="{{ asset('fonts/css/all.min.css') }}" rel="stylesheet">

    <!-- Styles -->
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
</head>
<body class="admin">
    <!--
      | ============================
      | Momentor Vue.js
      | ============================
      |  The following code below is licensed under MIT. If you wish to contribute
      |  code to our project, please could you follow the style guide. If you have
      |  contributed to our project even a small grammer change we appreciate your
      |  help. shoot me an email if you have contibuted and i will put it on our
      |  website.
      | ============================
      |  Author: Tristan Elliott
      |  Email Address: Tristan@tristanelliott.co.za
      |  GitHub Repo:
      |
    -->
    <div id="app">
      <div class="page-wrapper">
        <aside id="sidebar" class="sidebar-wrapper">
          Sidebar
        </aside>
        <main id="main" class="main-wrapper">
          @yield('content')
        </main>
      </div>
    </div>
</body>
</html>
