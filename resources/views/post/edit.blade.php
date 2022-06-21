@extends('post.layout')
@section('content')


<div class="flex justify-center py-10 ">
       
    <div class="w-3/6 bg-blue-200  p-6 rounded-lg">
        <h3 class="text-center py-2 text-2xl font-bold"> Edit your daily working activities</h3>

        

        <form action="{{ url('post/' .$posts->id) }}" method="post" class="py-8 bg-blue-300 rounded-lg ">
            @if(Session::has('success'))
            <div class="p-4 mb-4 text-sm text-green-700 bg-green-100 rounded-lg dark:bg-green-200 dark:text-green-800" role="alert">
                {{ Session::get('success') }}
            </div>
            @endif
            {!! csrf_field() !!}
            @method("PATCH")
            <div class="grid gap-6 mb-6 lg:grid-cols-2">
                <div>
                    <label for="name" class="block mb-2 text-sm font-medium text-gray-900 font-bold dark:text-gray-400">Input your name here</label>
                    <input id="name" type="text" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500 @error('name')  border-red-500 @enderror"
                                name="name" value="{{ old('name') }}" required autocomplete="name" autofocus>

                </div>
                <div>
                    <label for="date" class="block mb-2 text-sm font-medium font-bold text-gray-900 dark:text-gray-300">Input your activities Date here</label>
                    <input name="date" type="date" value="{{ $posts->date }}" id="date" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" placeholder="John" required>
                </div>
                <div>
                    <label for="description" class="block mb-2 text-sm font-medium text-gray-900 font-bold dark:text-gray-400">Input your daily activities here</label>
                    <textarea  name="description"  id="description" rows="4" class="block p-2.5 w-full text-sm text-gray-900 bg-gray-50 rounded-lg border border-gray-300 focus:ring-blue-500 focus:border-blue-500 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" placeholder="Your Events..."></textarea>

                </div>
                <button type="submit" class="absolute bottom-1/2 right-1/2 text-white  bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-lg text-sm  sm:w-auto px-5 py-4 text-center dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800">Submit</button>
            </div>
        </form>
    </div>
  </div> 