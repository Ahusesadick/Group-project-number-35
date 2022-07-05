<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Laravel') }}</title>

    <!-- Scripts -->
    <script src="{{ asset('js/app.js') }}" defer></script>
    
    <!-- Styles -->
    <link href="{{ mix('css/app.css') }}" rel="stylesheet">
</head>
<body class="bg-gray-100 h-screen antialiased leading-none font-sans">
    <div id="app">
        <header class="bg-blue-900 py-6">

            
            <a href="#" class="flex items-center pl-2.5 mb-">
                <img src="{{ asset('images/12.png') }}" class="w-100 mr-3 h-6 sm:h-15" alt="Flowbite Logo" />
                
             </a>

             
            <div class="container mx-auto flex justify-between items-center px-6">
                <div>
                    <a href="{{ url('/') }}" class="text-lg font-semibold text-gray-100 no-underline">
                        {{ config('app.name', 'FIELD REPORT SYSTEM IN HIGH LEARNING INSTITUTION') }}
                    </a>
                </div>
                <nav class="space-x-4 text-gray-300 text-sm sm:text-base">
                    @guest
                        <a class="no-underline hover:underline" href="{{ route('user.login') }}">{{ __('Login') }}</a>
                        @if (Route::has('register'))
                            <a class="no-underline hover:underline" href="{{ route('user.register') }}">{{ __('Register') }}</a>
                        @endif
                    @else
                        <span>{{ Auth::guard('web')->user()->name }}</span>

                        <a href="{{ route('user.logout') }}"
                           class="no-underline hover:underline"
                           onclick="event.preventDefault();
                                document.getElementById('logout-form').submit();">{{ __('Logout') }}</a>
                        <form id="logout-form" action="{{ route('user.logout') }}" method="post" class="hidden">
                            {{ csrf_field() }}
                        </form>
                    @endguest
                </nav>
            </div>
        </header>
        
        <div class="sidenav ">
            <div class="flex fixed w-60 h-full shadow-md bg-black px-1 fixed  ">
                <ul class="py-5 relative text-white font-bold  text-left text-xl underline ">
                    
                    
                    <li>
                        <a href="{{ url('user/home') }}" class=" py-9 flex items-center p-2 text-base font-normal text-white rounded-lg dark:text-white hover:bg-blue-900 dark:hover:bg-gray-700">
                           <svg class="w-6 h-6 text-white transition duration-75 dark:text-white group-hover:text-white dark:group-hover:text-white" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg"><path d="M2 10a8 8 0 018-8v8h8a8 8 0 11-16 0z"></path><path d="M12 2.252A8.014 8.014 0 0117.748 8H12V2.252z"></path></svg>
                           <span class="ml-3 ">Dashboard</span>
                        </a>
                     </li>
                    
                    <li>
                        <a href="{{ url('post') }}" class="py-9 flex items-center p-2 text-base font-normal text-white rounded-lg transition duration-75 hover:bg-blue-900 dark:hover:bg-gray-700 dark:text-white group">
                           <svg class="flex-shrink-0 w-6 h-6 text-white transition duration-75 dark:text-white group-hover:text-white dark:group-hover:text-white" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg"><path d="M9 2a1 1 0 000 2h2a1 1 0 100-2H9z"></path><path fill-rule="evenodd" d="M4 5a2 2 0 012-2 3 3 0 003 3h2a3 3 0 003-3 2 2 0 012 2v11a2 2 0 01-2 2H6a2 2 0 01-2-2V5zm3 4a1 1 0 000 2h.01a1 1 0 100-2H7zm3 0a1 1 0 000 2h3a1 1 0 100-2h-3zm-3 4a1 1 0 100 2h.01a1 1 0 100-2H7zm3 0a1 1 0 100 2h3a1 1 0 100-2h-3z" clip-rule="evenodd"></path></svg>
                           <span class="ml-3">STUDENTS REPORT</span>
                        </a>
                     </li>
                     <li>
                        <a href="{{ url('/uploadpage') }}" class="py-9 flex items-center p-2 text-base font-normal text-white rounded-lg transition duration-75 hover:bg-blue-900 dark:hover:bg-gray-700 dark:text-white group">
                           <svg class="flex-shrink-0 w-6 h-6 text-white transition duration-75 dark:text-white group-hover:text-white dark:group-hover:text-white" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg"><path d="M9 2a1 1 0 000 2h2a1 1 0 100-2H9z"></path><path fill-rule="evenodd" d="M4 5a2 2 0 012-2 3 3 0 003 3h2a3 3 0 003-3 2 2 0 012 2v11a2 2 0 01-2 2H6a2 2 0 01-2-2V5zm3 4a1 1 0 000 2h.01a1 1 0 100-2H7zm3 0a1 1 0 000 2h3a1 1 0 100-2h-3zm-3 4a1 1 0 100 2h.01a1 1 0 100-2H7zm3 0a1 1 0 100 2h3a1 1 0 100-2h-3z" clip-rule="evenodd"></path></svg>
                           <span class="ml-3">upload report</span>
                        </a>
                     </li>
                  
                </ul>
              </div>
        </div>

    <div class="flex justify-center py-10 ">
        
       
        <div class="w-3/6 bg-blue-200  p-6 rounded-lg">
            <h3 class="text-center py-2 text-2xl font-bold"> Input your daily working activities</h3>

            

            <form action="{{ url('post') }}" method="post" class="py-8 bg-blue-300 rounded-lg ">
                @if(Session::has('success'))
                <div class="p-4 mb-4 text-sm text-green-700 bg-green-100 rounded-lg dark:bg-green-200 dark:text-green-800" role="alert">
                    {{ Session::get('success') }}
                </div>
                @endif
                @csrf
                <div class="grid gap-6 mb-6 lg:grid-cols-2">

                    
                    
                    <div>
                        <label for="date" class="block mb-2 text-sm font-medium font-bold text-gray-900 dark:text-gray-300">Input your activities Date here</label>
                        <input name="date" value="{{ old('date') }}" required autocomplete="date" autofocus type="date" id="date" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" placeholder="John" required>
                    </div>
                    <div>
                        <label for="description" class="block mb-2 text-sm font-medium text-gray-900 font-bold dark:text-gray-400">Input your daily activities here</label>
                        <textarea  name="description" value="{{ old('description') }}" required autocomplete="description" autofocus id="description" rows="4" class="  block p-2.5 w-full text-sm text-gray-900 bg-gray-50 rounded-lg border border-gray-300 focus:ring-blue-500 focus:border-blue-500 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" placeholder="Your Events..."></textarea>

                    </div>
                    <button type="submit" class=" absolute bottom-1/2 left-1/2 text-white  bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-lg text-sm  sm:w-auto px-5 py-4 text-center dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800">Submit</button>
                </div>
            </form>
        </div>
      </div> 

    <footer>
        @include('dashboard.footer')
    </footer>
</body>
</html>
