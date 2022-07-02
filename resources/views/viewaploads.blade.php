@extends('dashboard.coordinator.home')
@section('content')
 
        


    <div class="flex justify-center py-2 ">
        <div class="w-4/6 bg-white p-6 rounded-lg">
            
           
                        <div class="card-body">
                            
                            {{$data->name}}
                            
                        
                            <iframe  height="600"  width="1300" src="/asse/{{$data->file}}"></iframe>
                           
                        </div>
        </div> 
        
@endsection
