<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'frsys') }}</title>

    <!-- Scripts -->
    <script src="{{ asset('js/app.js') }}" defer></script>
    
    <!-- Styles -->
    <link href="{{ mix('css/app.css') }}" rel="stylesheet">
</head>
<body class="bg-gray-100 h-screen antialiased leading-none font-sans">
    <div id="app">
        <header class="bg-blue-900 py-6 " >
            <div class="container mx-auto flex justify-between items-center px-6">
                <div>
                    <a href="{{ url('/') }}" class="text-lg font-semibold text-gray-100 no-underline">
                        {{ config('app.name', 'FIELD REPORT SYSTEM IN HIGH LEARNING INSTITUTION') }}
                    </a>
                </div>
                <nav class="space-x-4 text-gray-300 text-sm sm:text-base">
                       
                        <span>{{ Auth::guard('coordinator')->user()->name }}</span>

                        <a href="{{ route('coordinator.logout') }}"
                           class="no-underline hover:underline"
                           onclick="event.preventDefault();
                                document.getElementById('logout-form').submit();">{{ __('Logout') }}</a>
                        <form id="logout-form" action="{{ route('coordinator.logout') }}" method="post" class="hidden">
                            {{ csrf_field() }}
                        </form>
                   
                </nav>
            </div>
           
        </header>

        <div class="sidenav">
            <div class="flex fixed w-60 h-full shadow-md bg-black px-1 fixed  ">
                <ul class="relative text-white font-bold  text-left text-xl underline ">
                    
                    <li><a href="{{ url('coordinator/home') }}" class="p-4"><h3 class="hover:bg-pink-700">HOME</h3></a></li>
                    <li><a href="{{ url('users') }}" class="p-4"><h3 class="hover:bg-pink-700">STUDENT LISTS</h3></a></li>
                    <li><a href="{{ url('supervisors') }}" class="p-4"><h3 class="hover:bg-pink-700">SUPERVISOR LISTS</h3></a></li>
                    <li><a href="{{ url('post') }}" class="p-4"><h3 class="hover:bg-pink-700">view students report here</h3></a></li>
                    <li><a href="{{ url('report') }}" class="p-4"><h3 class="hover:bg-pink-700">view supervisor report here</h3></a></li>
                    
                </ul>
              </div>
        </div>
    </div>
       

    
      

    <footer>
        @include('dashboard.footer')
    </footer>
    @yield('content')
</body>
</html>
