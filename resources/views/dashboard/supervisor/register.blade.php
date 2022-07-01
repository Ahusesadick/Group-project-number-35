<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <script src="{{ asset('js/app.js') }}" defer></script>
    
    <!-- Styles -->
    <link href="{{ mix('css/app.css') }}" rel="stylesheet">
    <title>register</title>
</head>
<body class=" bg-no-repeat bg-cover bg-fixed" style="background-image: url( {{ asset('images/2.jpg') }})">
    <a href="#" class="flex items-center pl-2.5 mb-">
        <img src="{{ asset('images/12.png') }}" class="w-100 mr-3 h-6 sm:h-15" alt="Flowbite Logo" />
        
     </a>
    <main class="sm:container sm:mx-auto sm:max-w-lg sm:mt-10 " >
        <div class="flex">
            <div class="w-full">
                <section class="flex flex-col break-words bg-white sm:border-1 sm:rounded-md sm:shadow-sm sm:shadow-lg">
    
                    <header class=" text-center font-semibold bg-gray-200 text-gray-700 py-5 px-6 sm:py-6 sm:px-8 sm:rounded-t-md">
                        {{ __('Register here as Supervisor') }}
                    </header>
    
                    <form class="w-full px-6 space-y-6 sm:px-10 sm:space-y-8 " method="POST"
                        action="{{ route('supervisor.create') }}">

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
                    <div class="grid gap-9 grid-cols-2">
    
                        <div class="flex flex-wrap">
                            <label for="name" class="block text-gray-700 text-sm font-bold mb-2 sm:mb-4">
                                {{ __('Name') }}:
                            </label>
    
                            <input id="name" type="text" class="form-input w-full @error('name')  border-red-500 @enderror"
                                name="name" value="{{ old('name') }}" required autocomplete="name" autofocus>
    
                            @error('name')
                            <p class="text-red-500 text-xs italic mt-4">
                                {{ $message }}
                            </p>
                            @enderror
                        </div>
    
                        <div class="flex flex-wrap">
                            <label for="email" class="block text-gray-700 text-sm font-bold mb-2 sm:mb-4">
                                {{ __('E-Mail Address') }}:
                            </label>
    
                            <input id="email" type="email"
                                class="form-input w-full @error('email') border-red-500 @enderror" name="email"
                                value="{{ old('email') }}" required autocomplete="email">
    
                            @error('email')
                            <p class="text-red-500 text-xs italic mt-4">
                                {{ $message }}
                            </p>
                            @enderror
                        </div>
                        
                        <div class="flex flex-wrap">
                            <label for="PhoneNo" class="block text-gray-700 text-sm font-bold mb-2 sm:mb-4">
                                {{ __('Phone Number') }}:
                            </label>
    
                            <input id="PhoneNo" type="numeral"
                                class="form-input w-full @error('PhoneNo') border-red-500 @enderror" name="PhoneNo"
                                value="{{ old('PhoneNo') }}" required autocomplete="PhoneNo">
    
                            @error('PhoneNo')
                            <p class="text-red-500 text-xs italic mt-4">
                                {{ $message }}
                            </p>
                            @enderror
                        </div>
                        <div class="flex flex-wrap">
                            <label for="Orgname" class="block text-gray-700 text-sm font-bold mb-2 sm:mb-4">
                                {{ __('Organization Name') }}:
                            </label>
    
                            <input id="Orgname" type="text"
                                class="form-input w-full @error('Orgname') border-red-500 @enderror" name="Orgname"
                                value="{{ old('Orgname') }}" required autocomplete="Orgname">
    
                            @error('Orgname')
                            <p class="text-red-500 text-xs italic mt-4">
                                {{ $message }}
                            </p>
                            @enderror
                        </div>
                        <div class="flex flex-wrap">
                            <label for="Orglocation" class="block text-gray-700 text-sm font-bold mb-2 sm:mb-4">
                                {{ __('Organization location') }}:
                            </label>
    
                            <input id="Orglocation" type="text"
                                class="form-input w-full @error('Orglocation') border-red-500 @enderror" name="Orglocation"
                                value="{{ old('Orglocation') }}" required autocomplete="Orglocation">
    
                            @error('Orglocation')
                            <p class="text-red-500 text-xs italic mt-4">
                                {{ $message }}
                            </p>
                            @enderror
                        </div>
    
                        <div class="flex flex-wrap">
                            <label for="password" class="block text-gray-700 text-sm font-bold mb-2 sm:mb-4">
                                {{ __('Password') }}:
                            </label>
    
                            <input id="password" type="password"
                                class="form-input w-full @error('password') border-red-500 @enderror" name="password"
                                required autocomplete="new-password">
    
                            @error('password')
                            <p class="text-red-500 text-xs italic mt-4">
                                {{ $message }}
                            </p>
                            @enderror
                        </div>
    
                        <div class="flex flex-wrap">
                            <label for="cpassword" class="block text-gray-700 text-sm font-bold mb-2 sm:mb-4">
                                {{ __('Confirm Password') }}:
                            </label>
    
                            <input id="cpassword" type="password" class="form-input w-full"
                                name="cpassword" required autocomplete="cpassword">
                        </div>
    
                        <div class="flex flex-wrap">
                            <button type="submit"
                                class="w-full select-none font-bold whitespace-no-wrap p-3 rounded-lg text-base leading-normal no-underline text-gray-100 bg-blue-500 hover:bg-blue-700 sm:py-4">
                                {{ __('Register') }}
                            </button>
                    </div> 
                            <p class="w-full text-xs text-center text-gray-700 my-6 sm:text-sm sm:my-8">
                                {{ __('Already have an account?') }}
                                <a class="text-blue-500 hover:text-blue-700 no-underline hover:underline" href="{{ route('supervisor.login') }}">
                                    {{ __('Login') }}
                                </a>
                            </p>
                        </div>
                       
                    </form>
    
                </section>
            </div>
        </div>
    </main>
</body>
</html>