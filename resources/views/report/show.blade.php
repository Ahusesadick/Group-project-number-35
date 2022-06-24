@extends('dashboard.coordinator.home')
@section('content')
<div class="flex justify-center py-2 ">
  <div class="w-4/6 bg-white p-6 rounded-lg">
 
 
<div class="card">
  <div class="text-2xl">STUDENT REPORT FROM SUPERVISOR</div>
  <div class="card-body">
   
 
        <div class="text-xl font-serif px-2 py-2 pl-2 pr-2 font-bold">
        <h5 class="card-title">Sname : {{ $reports->Sname }}</h5>
        <p class="card-text">RegNo : {{ $reports->RegNo }}</p>
        <p class="card-text">progame : {{ $reports->programe }}</p>
        <p class="card-text">date_reported : {{ $reports->date_reported }}</p>
        <p class="card-text">date_finished : {{ $reports->date_finished }}</p>
        <p class="card-text">day_attend : {{ $reports->day_attend }}</p>
        <p class="card-text">day_missing : {{ $reports->day_missing }}</p>
        <p class="card-text">Org_name : {{ $reports->Org_name }}</p>
        <p class="card-text">Attitude toward field training : {{ $reports->Attitude }}</p>
        <p class="card-text">organizes work well : {{ $reports->organizes }}</p>
        <p class="card-text">completes assigned tasks on time/punctual at work : {{ $reports->panctual }}</p>
        <p class="card-text">Has initiative/resourcefulness: {{ $reports->resourcefulness }}</p>
        <p class="card-text">accuracy of work : {{ $reports->accuracy }}</p>
        <p class="card-text">adapts to working conditions : {{ $reports->adapts }}</p>
        <p class="card-text">has_ability_to_get_along_with_others_work : {{ $reports->has_ability_to_get_along_with_others_work }}</p>
        <p class="card-text">Follows_upon_assignments : {{ $reports->Follows_upon_assignments }}</p>
        <p class="card-text">ability_to_communicate_with_supervisor : {{ $reports->ability_to_communicate_with_supervisor }}</p>
        <p class="card-text">ability_to_apply_theory_in_practice : {{ $reports->ability_to_apply_theory_in_practice }}</p>
        <p class="card-text">ability_to_judge : {{ $reports->ability_to_judge }}</p>
        <p class="card-text">Adherence_to_general_code_of_conduct : {{ $reports->Adherence_to_general_code_of_conduct }}</p>
        <p class="card-text">comments : {{ $reports->comments }}</p>
        <p class="card-text">name : {{ $reports->name }}</p>
        <p class="card-text">designation : {{ $reports->designation }}</p>
        <p class="card-text">contact : {{ $reports->contact }}</p>
        <p class="card-text">email : {{ $reports->email }}</p>
        <p class="card-text">date : {{ $reports->date }}</p>
        <p class="card-text">signature : {{ $reports->signature }}</p>
      
  </div>
       
    </hr>
  
  </div>
</div>
  </div>
</div>
@endsection