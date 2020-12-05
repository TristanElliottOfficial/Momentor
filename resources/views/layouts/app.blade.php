<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <!--
      | ============================
      | Meta Information (Required)
      | ============================
      |   The meta tags below are required to have a value that corrisponds to the,
      |   meta name.
      |   ==
      |   Verison: 1.0.0
    -->
    <meta charset="{{ config('momentor.charset') }}">
    <meta name="{{ __('author') }}" content="{{ config('momentor.author') }}">
    <meta name="{{ __('keywords') }}" content="{{ config('momentor.keywords') }}">
    <meta name="{{ __('viewport') }}" content="{{ config('momentor.viewport') }}">
    <meta name="{{ __('application-name') }}" content="{{ config('momentor.name') }}">
    <meta name="{{ __('description') }}" content="{{ config('momentor.description') }}">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Momentor') }} - @yield('title')</title>

    <!--
      | ============================
      | JavaScript Assets
      | ============================
      |   We are loading the scripts in the head for two reasons.
      |   1. So Vue.js gets loaded before the page content, making sure we have
      |      Vue active to load our custom components.
      |   2. So our other custom Javascript functions can load before the page
      |      content.
      | ============================
      | Libraries & Frameworks
      | ============================
      |   - Vue.js ( v2.5.17 )
      |   - jQuery ( v3.2 )
      |   - Popper.js ( v1.12 )
      |   - Alpine.js [ Only with The Blade Components ] ( v2.7.3 )
      |   - Momentor.js ( v1.0.0 alpha )
    -->
    <script src="{{ asset('js/app.js') }}" defer></script>
    <script src="{{ asset('js/momentor.js') }}" defer></script>
    @yield('scripts')

    <!--
      | ============================
      | Font & Icon Assets
      | ============================
      |   We are loading the fonts and icons from our local project and from a CDN.
      | ============================
      |   - Google Fonts Roboto
      |   - Font Awesome Pro
    -->
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
        <div id="sidebar" class="sidebar-wrapper">
          Sidebar
        </div>
        <main id="main" class="main-wrapper">
          @yield('content')
        </main>
      </div>
    </div>
</body>
</html>
