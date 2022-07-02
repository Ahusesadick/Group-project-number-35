<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Laravel') }}</title>

    <!-- Styles -->
    <link href="{{ mix('css/app.css') }}" rel="stylesheet">
</head>
<body class=" fixed  bg-cover" style="background-image: url( {{ asset('images/system.jpg') }})">

   
    
<div class=" flex flex-col" >
    
    
  
    <h6 class="text-white font-bold text-xl py-2">Login as
                           
        <div class="inline-flex rounded-md shadow-sm">
            <a href="{{ route('user.login') }}" aria-current="page" class="py-2 px-4 text-sm font-medium text-blue-700 bg-white rounded-l-lg border border-gray-200 hover:bg-gray-100 focus:z-10 focus:ring-2 focus:ring-blue-700 focus:text-blue-700 dark:bg-gray-700 dark:border-gray-600 dark:text-white dark:hover:text-white dark:hover:bg-gray-600 dark:focus:ring-blue-500 dark:focus:text-white">
              Student
            </a>
            <a href="{{ route('supervisor.login') }}" class="py-2 px-4 text-sm font-medium text-gray-900 bg-white border-t border-b border-gray-200 hover:bg-gray-100 hover:text-blue-700 focus:z-10 focus:ring-2 focus:ring-blue-700 focus:text-blue-700 dark:bg-gray-700 dark:border-gray-600 dark:text-white dark:hover:text-white dark:hover:bg-gray-600 dark:focus:ring-blue-500 dark:focus:text-white">
              Host Supervisor
            </a>
            <a href="{{ route('coordinator.login') }}" class="py-2 px-4 text-sm font-medium text-gray-900 bg-white rounded-r-md border border-gray-200 hover:bg-gray-100 hover:text-blue-700 focus:z-10 focus:ring-2 focus:ring-blue-700 focus:text-blue-700 dark:bg-gray-700 dark:border-gray-600 dark:text-white dark:hover:text-white dark:hover:bg-gray-600 dark:focus:ring-blue-500 dark:focus:text-white">
              Coordinator
            </a>
            <a href="{{ route('orgsupervisor.login') }}" class="py-2 px-4 text-sm font-medium text-gray-900 bg-white rounded-r-md border border-gray-200 hover:bg-gray-100 hover:text-blue-700 focus:z-10 focus:ring-2 focus:ring-blue-700 focus:text-blue-700 dark:bg-gray-700 dark:border-gray-600 dark:text-white dark:hover:text-white dark:hover:bg-gray-600 dark:focus:ring-blue-500 dark:focus:text-white">
                Supervisor
              </a>
          </div>
          
                                </h6>
  
    <div class="min-h-screen flex items-center justify-center">
        
        <div class="flex flex-col justify-around h-full">
            <div>
                <h1  class="  text-center text-white font-bold text-3xl"></h1>
                <h1 class="mb-6 text-white font-bold font-serif  text-center  tracking-wider text-3xl sm:mb-8 sm:text-5xl">
                    {{ config('', ) }}
                </h1>
                
            </div>
        </div>
    </div>
</div>



</body>
</html>
