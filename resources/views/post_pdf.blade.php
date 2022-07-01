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
    <div class="flex justify-center py-2 ">
        <div class="w-4/6 bg-white p-6 rounded-lg">

            <a href="{{ url('post_pdf/pdf') }}" class="  p-2 pl-5 pr-5 bg-blue-900 text-gray-100 text-lg rounded-lg focus:border-4 border-green-300">Convert into PDF</a>


            <h1 class="py-6">there are {{ $post_data->count() }} - posts</h1>
                        <div class="card-body">
                            
                           
                            <div class="table-responsive">
                                <table class="border-separate border border-blue-900 w-full text-black  text-xl  ">
                                    <thead>
                                        <tr class="border-b dark:bg-gray-800 dark:border-gray-700 odd:bg-white even:bg-gray-50 odd:dark:bg-gray-800 even:dark:bg-gray-700">
                                            <th class="border border-black">id</th>
                                            <th class="border border-black">Name</th>
                                            <th class="border border-black">Date</th>
                                            <th class="border border-black">Description</th>
                                            
                                           
                                        </tr>
                                    </thead>
                                    <tbody>
                                        
                                    @foreach($post_data as $post)
                                        <tr class="border-b dark:bg-gray-800 dark:border-gray-700 odd:bg-white even:bg-gray-50 odd:dark:bg-gray-800 even:dark:bg-gray-700">
                                            <td class="border border-black">{{ $loop->iteration }}</td>
                                            <td class="border border-black">{{ $post->name }}</td>
                                            <td class="border border-black">{{ $post->date }}</td>
                                            <td class="border border-black">{{ $post->description }}</td>
                                            
     
                                            
                                        </tr>
                                    @endforeach
                                  
                                    </tbody>
                                </table>
                            </div>
    
                        </div>
        </div> 
              
</body>
</html>
