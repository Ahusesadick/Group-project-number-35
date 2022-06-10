
<!DOCTYPE html>
<html>
<head>
    <title>post</title>
    
    <script src="{{ asset('js/app.js') }}" defer></script>
    
    <!-- Styles -->
    <link href="{{ mix('css/app.css') }}" rel="stylesheet">
</head>
<body class="bg-blue-100 h-screen antialiased leading-none font-sans">
  
<div class="container">
    @yield('content')
</div>
   
</body>
</html>