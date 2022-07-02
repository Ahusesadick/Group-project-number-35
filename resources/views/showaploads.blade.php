@extends('dashboard.coordinator.home')
@section('content')



    <div class="flex justify-center py-2 ">
        <div class="w-4/6 bg-white p-6 rounded-lg">
            
            <h1 class="py-4">there are {{ $data->count() }} - apload</h1>
                        <div class="card-body">
                            
                           
                            <div class="table-responsive">
                                <table class="border-separate border border-blue-900 w-full text-black  text-xl  ">
                                    <thead>
                                        <tr class="border-b dark:bg-gray-800 dark:border-gray-700 odd:bg-white even:bg-gray-50 odd:dark:bg-gray-800 even:dark:bg-gray-700">
                                            
                                            <th class="border border-black">name</th>
                                            <th class="border border-black">file</th>
                                            
                                            <th class="border border-black">Download</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                @if ($data->count()>0)
                                    
                                   
                                    @foreach($data as $data)
                                        <tr class="border-b dark:bg-gray-800 dark:border-gray-700 odd:bg-white even:bg-gray-50 odd:dark:bg-gray-800 even:dark:bg-gray-700">
                                            
                                            
                                            <td class="border border-black">{{ $data->name }}</td>
                                            <td class="border border-black"><a href="{{ url('/views',$data->id)}}" title="View "><button class="w-full p-2 pl-5 pr-5 bg-blue-900 text-gray-100 text-lg rounded-lg focus:border-4 border-green-300"><i class="fa fa-eye" aria-hidden="true"></i> View</button></a></td>
                                            <td class="border border-black"><a href="{{ url('/downloads',$data->file) }}" title="View "><button class="w-full p-2 pl-5 pr-5 bg-blue-900 text-gray-100 text-lg rounded-lg focus:border-4 border-green-300"><i class="fa fa-eye" aria-hidden="true"></i> Download</button></a></td>
                                            
     
                                            <td class="border border-black">
                                                
                                               
     
                                                
                                            </td>
                                        </tr>
                                    @endforeach
                                @endif
                                  
                                    </tbody>
                                </table>
                            </div>
    
                        </div>
        </div> 
        
@endsection
