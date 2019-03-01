<!DOCTYPE HTML>
<head>
<title>Ventas en linea</title>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
<link href="{{ asset('css/style.css') }}" rel="stylesheet" type="text/css" media="all"/>
<link href="{{ asset('css/slider.css')}}" rel="stylesheet" type="text/css" media="all"/>
<link rel="shortcut icon" href="{{ asset('images/icono.png') }}" />
<script type="text/javascript" src="{{ asset('js/jquery-1.7.2.min.js') }}"></script>
<script type="text/javascript" src="{{ asset('js/move-top.js') }}"></script>
<script type="text/javascript" src="{{ asset('js/easing.js') }}"></script>
<script type="text/javascript" src="{{ asset('js/startstop-slider.js') }}"></script>
</head>
<body>
  <div class="wrap">
	@include('store.partials.header')
  </div>
  <main class="main">
    <div class="content">
      @yield('content')
    </div>
  </main>
  @include('store.partials.footer')
  <script type="text/javascript">
   $(document).ready(function() {
     $().UItoTop({ easingType: 'easeOutQuart' });

   });
 </script>
 <script src="{{ asset('js/main.js') }}"></script>
 <a href="#" id="toTop"><span id="toTopHover"> </span></a>
</body>
</html>
