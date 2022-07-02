@extends('dashboard.orgsupervisor.home')
@section('content')
 
    <main class="sm:container sm:mx-auto sm:max-w-lg sm:mt-10" >
        <div class="flex">
            <div class="w-full">
                
    
                    <header class="text-center font-semibold bg-gray-200 text-gray-700 py-5 px-6 sm:py-6 sm:px-8 sm:rounded-t-md">
                        {{ __('apload file') }}
                       
                       
                    </header>
    
                    <form class=" w-full px-6 space-y-6 sm:px-10 sm:space-y-8" method="POST" action="{{ url('aploadfiles') }}" enctype="multipart/form-data">
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
                                {{ __('apload') }}
                            </button>
    
                            
                        </div>
                    </form>
    
                </section>
            </div>
        </div>
    </main>
@endsection