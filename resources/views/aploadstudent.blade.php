<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">

    <script src="{{ asset('js/app.js') }}" defer></script>
    
    <!-- Styles -->
    <link href="{{ mix('css/app.css') }}" rel="stylesheet">
    <title>apload file</title>
</head>
<body class=" bg-blue-100" >
</div>
<div id="app">
    <header class="bg-blue-900 py-6">
        
        <a href="#" class="flex items-center pl-2.5 mb-">
            <img src="{{ asset('images/12.png') }}" class="w-100 mr-3 h-6 sm:h-15" alt="Flowbite Logo" />
            
         </a>
            
        
        <div class="container mx-auto flex justify-between items-center px-6 ">
            <div>
                
                <a href="{{ url('/') }}" class="text-2xl  font-semibold text-gray-100 no-underline">
                    {{ config('app.name', 'FIELD REPORT SYSTEM IN HIGH LEARNING INSTITUTION') }}
                </a>
            </div>
            
        </div>
        
    </header>
    
    
<nav class="bg-white border-gray-200 px-2 sm:px-4 py-2.5 rounded dark:bg-gray-800">

  
  <div class="hidden w-full md:block md:w-auto" id="mobile-menu">
    <ul class="flex flex-col mt-4 md:flex-row md:space-x-8 md:mt-0 md:text-sm md:font-medium">
      <li>
        <a href="{{ url('supervisor/home') }}" class="block py-2 pr-4 pl-3 text-white bg-blue-700 rounded md:bg-transparent md:text-blue-700 md:p-0 dark:text-white" aria-current="page">Home</a>
      </li>
      <li>
        <a href="{{ url('show') }}" class="block py-2 pr-4 pl-3 text-gray-700 border-b border-gray-100 hover:bg-gray-50 md:hover:bg-transparent md:border-0 md:hover:text-blue-700 md:p-0 dark:text-gray-400 md:dark:hover:text-white dark:hover:bg-gray-700 dark:hover:text-white md:dark:hover:bg-transparent dark:border-gray-700">Student report</a>
      </li>
      <li>
        <a href="{{ url('/uploadpagestudent') }}" class="block py-2 pr-4 pl-3 text-gray-700 border-b border-gray-100 hover:bg-gray-50 md:hover:bg-transparent md:border-0 md:hover:text-blue-700 md:p-0 dark:text-gray-400 md:dark:hover:text-white dark:hover:bg-gray-700 dark:hover:text-white md:dark:hover:bg-transparent dark:border-gray-700">Send student report to supervisor</a>
      </li>
      
    </ul>
  </div>
</div>
</nav>
    <main class="sm:container sm:mx-auto sm:max-w-lg sm:mt-10" >
        <div class="flex">
            <div class="w-full">
                
    
                    <header class="text-center font-semibold bg-gray-200 text-gray-700 py-5 px-6 sm:py-6 sm:px-8 sm:rounded-t-md">
                        {{ __('upload file') }}
                       
                       
                    </header>
    
                    <form class=" w-full px-6 space-y-6 sm:px-10 sm:space-y-8" method="POST" action="{{ url('aploadfilestudent') }}" enctype="multipart/form-data">
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
</body>
</html>