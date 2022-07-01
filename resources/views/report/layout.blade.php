
<!DOCTYPE html>
<html>
<head>
    <title>report</title>
    
    <script src="{{ asset('js/app.js') }}" defer></script>
    
    <!-- Styles -->
    <link href="{{ mix('css/app.css') }}" rel="stylesheet">
</head>
<body class="py-2 bg-grey-100 h-screen antialiased leading-none font-sans">
  
<div class="container">
    @yield('content')
</div>
   
</body>
</html>