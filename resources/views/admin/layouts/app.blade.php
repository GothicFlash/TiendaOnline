<!DOCTYPE HTML>
<head>
<title>@yield('title')</title>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
<link href="{{ asset('css/style.css') }}" rel="stylesheet" type="text/css" media="all"/>
<link href="{{ asset('css/slider.css')}}" rel="stylesheet" type="text/css" media="all"/>
<link rel="stylesheet" href=" {{ url('/css/bootstrap.css')}}">
<link rel="shortcut icon" href="{{ asset('images/icono.png') }}" />
<script type="text/javascript" src="{{ asset('js/jquery-1.7.2.min.js') }}"></script>
<script type="text/javascript" src="{{ asset('js/move-top.js') }}"></script>
<script type="text/javascript" src="{{ asset('js/easing.js') }}"></script>
<script type="text/javascript" src="{{ asset('js/startstop-slider.js') }}"></script>
</head>
<body>
  <div class="wrap">
	@include('admin.partials.header')
  <div>
  <br>
  <main class="main">
    <div class="page-header text-center">
	    <h1>@yield('title-content')</h1>
	  </div>
    <div class="container">
      @yield('content')
    </div>
  </main>
  @include('admin.partials.footer')
</body>
</html>
