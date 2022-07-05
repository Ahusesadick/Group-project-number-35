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


    <div class="flex justify-center py-2 ">
        <div class="w-4/6 bg-white p-6 rounded-lg">
            <a href="{{ url('post.index') }}" class=" p-2  pl-5 pr-5 bg-blue-900 text-gray-100 text-lg rounded-lg focus:border-4 border-green-300">Convert into PDF</a>
            <h1 class="py-4">there are {{ $posts->count() }} - posts</h1>
            <h1 class="text-2xl font-bold text-center">NAME:    {{ Auth::guard('web')->user()->name }}..........REG NUMBER:    {{ Auth::guard('web')->user()->RegNo }}...........PROGRAMME:      {{ Auth::guard('web')->user()->Programme }}</h1>
            
                        <div class="card-body">
                            
                           
                            <div class="table-responsive py-4">
                                <table class="border-separate border border-blue-900 w-full text-black  text-xl  ">
                                    <thead>
                                        <tr class="border-b dark:bg-gray-800 dark:border-gray-700 odd:bg-white even:bg-gray-50 odd:dark:bg-gray-800 even:dark:bg-gray-700">
                                            <th class="border border-black">id</th>
                                                                                      
                                            <th class="border border-black">Date</th>
                                            <th class="border border-black">Description</th>
                                            
                                            <th class="border border-black">Actions</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                @if ($posts->count()>0)
                                    
                                   
                                    @foreach($posts as $item)
                                        <tr class="border-b dark:bg-gray-800 dark:border-gray-700 odd:bg-white even:bg-gray-50 odd:dark:bg-gray-800 even:dark:bg-gray-700">
                                            <th class="border border-black">{{ $item->id }}</th>
                                                                                       
                                            <td class="border border-black">{{ $item->date }}</td>
                                            <td class="border border-black">{{ $item->description }}</td>
                                            
     
                                            <td class="border border-black">
                                                
                                               
     
                                                <form method="POST" action="{{ url('/post' . '/' . $item->id) }}" accept-charset="UTF-8" style="display:inline">
                                                    {{ method_field('DELETE') }}
                                                    {{ csrf_field() }}
                                                    <button type="submit" class="py-2  p-2 pl-5 pr-5 bg-red-700 text-gray-100 text-lg rounded-lg focus:border-4 border-red-300" title="Delete post" onclick="return confirm(&quot;Confirm delete?&quot;)"><i class="fa fa-trash-o" aria-hidden="true"></i> Delete</button>
                                                </form>
                                            </td>
                                        </tr>
                                    @endforeach
                                @endif
                                  
                                    </tbody>
                                </table>
                            </div>
    
                        </div>
        </div> 
        <footer>
            @include('dashboard.footer')
        </footer>     
</body>
</html>
