<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <script src="{{ asset('js/app.js') }}" defer></script>
    
    <!-- Styles -->
    <link href="{{ mix('css/app.css') }}" rel="stylesheet">
</head>
<body class="bg-gray-100 h-screen antialiased leading-none font-sans">
    <div class="flex justify-center py-10 ">
       
        <div class="w-3/6 bg-blue-200  p-6 rounded-lg">
            <h3 class="text-center py-2 text-2xl font-bold"> Input your daily working activities</h3>

            

            <form method="post" action="{{ route('update.post') }}" class="py-8 bg-blue-300 rounded-lg ">
                @if(Session::has('success'))
                <div class="p-4 mb-4 text-sm text-green-700 bg-green-100 rounded-lg dark:bg-green-200 dark:text-green-800" role="alert">
                    {{ Session::get('success') }}
                </div>
                @endif
                @csrf
                <div class="grid gap-6 mb-6 lg:grid-cols-2">
                    <input type="hidden" name="id" value="{{ $post->id }}">
                    <div>
                        <label for="date" class="block mb-2 text-sm font-medium font-bold text-gray-900 dark:text-gray-300">Input your activities Date here</label>
                        <input name="date" type="date" id="date" value="{{ $post->date }}" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" placeholder="John" required>
                    </div>
                    <div>
                        <label for="description" class="block mb-2 text-sm font-medium text-gray-900 font-bold dark:text-gray-400">Input your daily activities here</label>
                        <textarea  name="description"  id="description" rows="4" class="block p-2.5 w-full text-sm text-gray-900 bg-gray-50 rounded-lg border border-gray-300 focus:ring-blue-500 focus:border-blue-500 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" placeholder="Your Events...">{{ $post->description }}</textarea>

                    </div>
                    <button type="submit" class="absolute bottom-1/2 right-1/2 text-white  bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-lg text-sm  sm:w-auto px-5 py-4 text-center dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800">Submit</button>
                </div>
            </form>
        </div>
      </div> 

</body>
</html>