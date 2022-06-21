@extends('dashboard.coordinator.home')
@section('content')
<div class="flex justify-center py-2 ">
  <div class="w-4/6 bg-white p-6 rounded-lg">

<div class="card">
  <div class="text-4xl py-2 font-bold">STUDENT DAILY RECORDED EVENTS</div>
  <div class="card-body">
   
 
        <div class="text-2xl font-serif px-2 py-2 pl-2 pr-2 font-bold">

          <p class="card-text">Name : {{ $posts->name  }}</p>
        <p class="card-text">Date : {{ $posts->date }}</p>
        <p class="card-text">Description : {{ $posts->description }}</p>
  </div>
       
    </hr>
  
  </div>
</div>
  </div>
</div>
@endsection