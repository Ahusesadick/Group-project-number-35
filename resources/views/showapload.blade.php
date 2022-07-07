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
          <li>
			<a href="{{ url('/report.show') }}" class="block py-2 pr-4 pl-3 text-gray-700 border-b border-gray-100 hover:bg-gray-50 md:hover:bg-transparent md:border-0 md:hover:text-blue-700 md:p-0 dark:text-gray-400 md:dark:hover:text-white dark:hover:bg-gray-700 dark:hover:text-white md:dark:hover:bg-transparent dark:border-gray-700">REPORT</a>
		  </li>
          <li>
			<a href="{{ url('/uploadpagess') }}" class="block py-2 pr-4 pl-3 text-gray-700 border-b border-gray-100 hover:bg-gray-50 md:hover:bg-transparent md:border-0 md:hover:text-blue-700 md:p-0 dark:text-gray-400 md:dark:hover:text-white dark:hover:bg-gray-700 dark:hover:text-white md:dark:hover:bg-transparent dark:border-gray-700">Send report to coordinator</a>
		  </li>
          
        </ul>
      </div>
    </div>
    </nav>
        


    <div class="flex justify-center py-2 ">
        <div class="w-4/6 bg-white p-6 rounded-lg">
            
            <h1 class="py-4">there are {{ $data->count() }} - apload</h1>
                        <div class="card-body">
                            
                           
                            <div class="table-responsive">
                                <table class="border-separate border border-blue-900 w-full text-black  text-xl  ">
                                    <thead>
                                        <tr class="border-b dark:bg-gray-800 dark:border-gray-700 odd:bg-white even:bg-gray-50 odd:dark:bg-gray-800 even:dark:bg-gray-700">
                                            
                                            <th class="border border-black">name</th>
                                            <th class="border border-black">file</th>
                                            
                                            <th class="border border-black">Download</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                @if ($data->count()>0)
                                    
                                   
                                    @foreach($data as $data)
                                        <tr class="border-b dark:bg-gray-800 dark:border-gray-700 odd:bg-white even:bg-gray-50 odd:dark:bg-gray-800 even:dark:bg-gray-700">
                                            
                                            
                                            <td class="border border-black">{{ $data->name }}</td>
                                            <td class="border border-black"><a href="{{ url('/view',$data->id)}}" title="View Supervisor"><button class="w-full p-2 pl-5 pr-5 bg-blue-900 text-gray-100 text-lg rounded-lg focus:border-4 border-green-300"><i class="fa fa-eye" aria-hidden="true"></i> View</button></a></td>
                                            <td class="border border-black"><a href="{{ url('/download',$data->file) }}" title="View Supervisor"><button class="w-full p-2 pl-5 pr-5 bg-blue-900 text-gray-100 text-lg rounded-lg focus:border-4 border-green-300"><i class="fa fa-eye" aria-hidden="true"></i> Download</button></a></td>
                                            
     
                                            <td class="border border-black">
                                                
                                               
     
                                                
                                            </td>
                                        </tr>
                                    @endforeach
                                @endif
                                  
                                    </tbody>
                                </table>
                            </div>
    
                        </div>
        </div> 
        
</body>
</html>
