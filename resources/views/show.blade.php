@extends('dashboard.coordinator.home')
@section('content')

<div class="flex justify-center py-2 ">
        <div class="w-4/6 bg-white p-6 rounded-lg">
        
              
      <h4 class="text-center text-2xl font-bold ">Students information</h4>
      <a href="{{ url('show') }}" class=" p-2  pl-5 pr-5 bg-blue-900 text-gray-100 text-lg rounded-lg focus:border-4 border-green-300">Convert into PDF</a>
            <h1 class="py-4">there are {{ $users->count() }} - users</h1>
     <table class="border-separate border border-blue-900 w-full text-black  text-xl  ">
         <tr class="border-b dark:bg-gray-800 dark:border-gray-700 odd:bg-white even:bg-gray-50 odd:dark:bg-gray-800 even:dark:bg-gray-700">
             <th class="border border-black">ID</th>
             <th class="border border-black">Name</th>
             <th class="border border-black">Email</th>
             <th class="border border-black">RegNo</th>
             <th class="border border-black">Programme</th>
             <th class="border border-black">PhoneNo</th>
             <th class="border border-black">Organization name</th>
             <th class="border border-black">Organization location</th>
             
         </tr>
         @foreach ($users as $user )
             <tr>
                 <td class="border border-black">{{ $user->id }}</td>
                 <td class="border border-black">{{ $user->name }}</td>
                 <td class="border border-black">{{ $user->email }}</td>
                 <td class="border border-black">{{ $user->RegNo }}</td>
                 <td class="border border-black">{{ $user->Programme }}</td>
                 <td class="border border-black">{{ $user->PhoneNo }}</td>
                 <td class="border border-black">{{ $user->Orgname }}</td>
                 <td class="border border-black">{{ $user->Orglocation }}</td>

                 
                
             </tr>
         @endforeach
     </table>
    </div>
 </div>
@endsection