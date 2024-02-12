<!doctype html>
<html lang="es">
  <head>
    <meta charset="utf-8"/>
    <meta name="viewport" content="width=device-width, initial-scale=1, viewport-fit=cover"/>
    <meta http-equiv="X-UA-Compatible" content="ie=edge"/>
    <title>@yield('title')</title>
    <!-- CSS files -->
    <link href="{{url('assets/css/tabler.min.css?1684106062')}}" rel="stylesheet"/>
    <link href="{{url('assets/css/tabler-flags.min.css?1684106062')}}" rel="stylesheet"/>
    <link href="{{url('assets/css/tabler-payments.min.css?1684106062')}}" rel="stylesheet"/>
    <link href="{{url('assets/css/tabler-vendors.min.css?1684106062')}}" rel="stylesheet"/>
    <link href="{{url('assets/css/demo.min.css?1684106062')}}" rel="stylesheet"/>
    <style>
      @import url('https://rsms.me/inter/inter.css');
      :root {
      	--tblr-font-sans-serif: 'Inter Var', -apple-system, BlinkMacSystemFont, San Francisco, Segoe UI, Roboto, Helvetica Neue, sans-serif;
      }
      body {
      	font-feature-settings: "cv03", "cv04", "cv11";
      }
    </style>
  </head>
  <body  class=" d-flex flex-column bg-white">
    @yield('content')
    <!-- Libs JS -->
    <!-- Tabler Core -->
    <script src="{{url('assets/js/tabler.min.js?1684106062')}}" defer></script>
    <script src="{{url('assets/js/demo.min.js?1684106062')}}" defer></script>
  </body>
</html>