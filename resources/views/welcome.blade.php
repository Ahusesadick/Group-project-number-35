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
<body class=" fixed  bg-cover" style="background-image: url( {{ asset('images/9.jpg') }})">

    <h1  class="  text-center text-white font-bold text-3xl"><marquee>WELCOME TO OUR SYSTEM</marquee></h1>

<div class=" flex flex-col">
    @if(Route::has('user.login'))
        <div class=" py-8 absolute top-0 right-0 mt-4 mr-4 space-x-4 sm:mt-6 sm:mr-6 sm:space-x-6">
            @auth
                <a href="{{ url('/home') }}" class="no-underline hover:underline text-lg text-white font-bolder  uppercase">{{ __('Home') }}</a>
            @else
                <a href="{{ route('user.login') }}" class="no-underline hover:underline text-lg text-white font-bold font-bolder  uppercase">{{ __('Login') }}</a>
                @if (Route::has('user.register'))
                    <a href="{{ route('user.register') }}" class="no-underline hover:underline text-lg text-white font-bold font-bolder  uppercase">{{ __('Register') }}</a>
                @endif
            @endauth
        </div>
    @endif
  
      
  
    <div class="min-h-screen flex items-center justify-center">
        
        <div class="flex flex-col justify-around h-full">
            <div>
                <h1 class="mb-6 text-white font-bold font-serif  text-center  tracking-wider text-3xl sm:mb-8 sm:text-5xl">
                    {{ config('app.name', 'frsys') }}
                </h1>
                
            </div>
        </div>
    </div>
</div>



</body>
</html>
