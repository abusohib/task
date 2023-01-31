<html>
<head>
    <title>Laravel 8 CRUD Application </title>

    <!-- Scripts -->
     <script src="{{ asset('js/app.js') }}" defer></script>

      <!-- Styles -->
     <link href="{{ asset('css/app.css') }}" rel="stylesheet">
</head>
<body>
  
<div class="container">
    @yield('content')
</div>
   
</body>
</html>