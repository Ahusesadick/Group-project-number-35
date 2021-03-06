@extends('dashboard.coordinator.home')
@section('content')

<div class="flex justify-center py-2 ">
    <div class="w-4/6 bg-white p-6 rounded-lg">
              
      <h4 class="text-center text-2xl font-bold ">Supervisors information</h4>
      <a href="{{ url('showsupervisor') }}" class=" p-2  pl-5 pr-5 bg-blue-900 text-gray-100 text-lg rounded-lg focus:border-4 border-green-300">Convert into PDF</a>
      <h1 class="py-4">there are {{ $supervisors->count() }} - supervisors</h1>
     <table class="border-separate border border-blue-900 w-full text-black  text-xl  ">
         <tr class="border-b dark:bg-gray-800 dark:border-gray-700 odd:bg-white even:bg-gray-50 odd:dark:bg-gray-800 even:dark:bg-gray-700">
             <th class="border border-black">ID</th>
             <th class="border border-black">Name</th>
             <th class="border border-black">Email</th>
            <th class="border border-black">PhoneNo</th>
             <th class="border border-black">Organization name</th>
             <th class="border border-black">Organization location</th>
         </tr>
         @foreach ($supervisors as $supervisor )
             <tr>
                 <td class="border border-black">{{ $supervisor->id }}</td>
                 <td class="border border-black">{{ $supervisor->name }}</td>
                 <td class="border border-black">{{ $supervisor->email }}</td>
                 
                 <td class="border border-black">{{ $supervisor->PhoneNo }}</td>
                 <td class="border border-black">{{ $supervisor->Orgname }}</td>
                 <td class="border border-black">{{ $supervisor->Orglocation }}</td>
                
             </tr>
         @endforeach
     </table>
    </div>
 </div>
@endsection

