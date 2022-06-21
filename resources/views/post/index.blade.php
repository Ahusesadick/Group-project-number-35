@extends('dashboard.coordinator.home')
@section('content')
<div class="flex justify-center py-2 ">
    <div class="w-4/6 bg-white p-6 rounded-lg">
                    <div class="card-body">
                        <a href="{{ url('/post/create') }}" class="hover:bg-pink-700 bg-white text-2xl font-serif text-blue-500 py-2" title="Add New Contact">
                            <i class="fa fa-plus" aria-hidden="true"></i> Add New Daily Activities
                        </a>
                        <br/>
                        <br/>
                        <div class="table-responsive">
                            <table class="border-separate border border-blue-900 w-full text-black  text-xl  ">
                                <thead>
                                    <tr class="border-b dark:bg-gray-800 dark:border-gray-700 odd:bg-white even:bg-gray-50 odd:dark:bg-gray-800 even:dark:bg-gray-700">
                                        <th class="border border-black">id</th>
                                        <th class="border border-black">Name</th>
                                        <th class="border border-black">Date</th>
                                        <th class="border border-black">Description</th>
                                        
                                        <th class="border border-black">Actions</th>
                                    </tr>
                                </thead>
                                <tbody>
                                @foreach($posts as $item)
                                    <tr class="border-b dark:bg-gray-800 dark:border-gray-700 odd:bg-white even:bg-gray-50 odd:dark:bg-gray-800 even:dark:bg-gray-700">
                                        <td class="border border-black">{{ $loop->iteration }}</td>
                                        <td class="border border-black">{{ $item->name }}</td>
                                        <td class="border border-black">{{ $item->date }}</td>
                                        <td class="border border-black">{{ $item->description }}</td>
                                        
 
                                        <td class="border border-black">
                                            <a href="{{ url('/post/' . $item->id) }}" title="View Student"><button class="py-2  p-2 pl-5 pr-5 bg-blue-900 text-gray-100 text-lg rounded-lg focus:border-4 border-green-300"><i class="fa fa-eye" aria-hidden="true"></i> View</button></a>
                                           
 
                                            <form method="POST" action="{{ url('/post' . '/' . $item->id) }}" accept-charset="UTF-8" style="display:inline">
                                                {{ method_field('DELETE') }}
                                                {{ csrf_field() }}
                                                <button type="submit" class="py-2  p-2 pl-5 pr-5 bg-red-700 text-gray-100 text-lg rounded-lg focus:border-4 border-red-300" title="Delete post" onclick="return confirm(&quot;Confirm delete?&quot;)"><i class="fa fa-trash-o" aria-hidden="true"></i> Delete</button>
                                            </form>
                                        </td>
                                    </tr>
                                @endforeach
                                </tbody>
                            </table>
                        </div>

                    </div>
    </div> 
          
@endsection