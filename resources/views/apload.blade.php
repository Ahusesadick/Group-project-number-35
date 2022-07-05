<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">

    <script src="{{ asset('js/app.js') }}" defer></script>
    
    <!-- Styles -->
    <link href="{{ mix('css/app.css') }}" rel="stylesheet">
    <title>upload </title>
</head>
<body class=" bg-blue-100" >
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

    <main class="sm:container sm:mx-auto sm:max-w-lg sm:mt-10" >
        <div class="flex">
            <div class="w-full">
                
    
                    <header class="text-center font-semibold bg-gray-200 text-gray-700 py-5 px-6 sm:py-6 sm:px-8 sm:rounded-t-md">
                        {{ __('upload file') }}
                       
                       
                    </header>
    
                    <form class=" w-full px-6 space-y-6 sm:px-10 sm:space-y-8" method="POST" action="{{ url('aploadfile') }}" enctype="multipart/form-data">
                        @if (Session::get('success'))
                    <div class="p-4 mb-4 text-sm text-green-700 bg-green-100 rounded-lg dark:bg-green-200 dark:text-green-800" role="alert">
                        {{ Session::get('success') }}
                    </div>
               @endif
               @if (Session::get('fail'))
               <div class="p-4 mb-4 text-sm text-red-700 bg-red-100 rounded-lg dark:bg-red-200 dark:text-red-800" role="alert">
                   {{ Session::get('fail') }}
               </div>
               @endif
                        @csrf
    
                        <div class="flex flex-wrap">
                            <label for="filename" class="block text-black text-sm font-bold mb-2 sm:mb-4">
                                {{ __('filename') }}:
                            </label>
    
                            <input id="name" type="name"
                                class="form-input w-full @error('email') border-red-500 @enderror" name="name"
                                value="{{ old('name') }}" required autocomplete="filename" autofocus>
    
                            @error('name')
                            <p class="text-red-500 text-xs italic mt-4">
                                {{ $message }}
                            </p>
                            @enderror
                        </div>
    
                        <div class="flex flex-wrap">
                            <label for="file" class="block text-black text-sm font-bold mb-2 sm:mb-4">
                                {{ __('file') }}:
                            </label>
    
                            <input id="file" type="file"
                                class="form-input w-full @error('file') border-red-500 @enderror" name="file"
                                required>
    
                            @error('file')
                            <p class="text-red-500 text-xs italic mt-4">
                                {{ $message }}
                            </p>
                            @enderror
                        </div>
    
                        
    
                        <div class="flex flex-wrap">
                            <button type="submit"
                            class="w-full select-none font-bold whitespace-no-wrap p-3 rounded-lg text-base leading-normal no-underline text-gray-100 bg-blue-500 hover:bg-blue-700 sm:py-4">
                                {{ __('upload') }}
                            </button>
    
                            
                        </div>
                    </form>
    
                </section>
            </div>
        </div>
    </main>
    <footer>
        @include('dashboard.footer')
    </footer> 
</body>
</html>