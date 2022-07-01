@extends('report.layout')
@section('content')

<a href="{{ url('report.show') }}" class="py-4 p-2  pl-5 pr-5 bg-blue-900 text-gray-100 text-lg rounded-lg focus:border-4 border-green-300">Convert into PDF</a>
<div class="flex justify-center py-2 ">
  
  <div class="w-4/6  p-6 rounded-lg">

    
 
 
<div class="card">
  <div class="py-2 text-xl font-bold">STUDENT REPORT FROM SUPERVISOR  </div>
  
  
  <div class="card-body">
   
 
        <div class="space-y-2 font-serif px-  pl-2 pr-2 text-xl">
        <h5 class="card-title"><b>Sname</b> :---> {{ $reports->Sname }}</h5>
        <p class="card-text"><b>RegNo</b> :---> {{ $reports->RegNo }}</p>
        <p class="card-text"><b>programe</b> :---> {{ $reports->programe }}</p>
        <p class="card-text"><b>date_reported</b> :---> {{ $reports->date_reported }}</p>
        <p class="card-text"><b>date_finished</b> :---> {{ $reports->date_finished }}</p>
        <p class="card-text"><b>day_attend</b> :---> {{ $reports->day_attend }}</p>
        <p class="card-text"><b>day_missing</b> :---> {{ $reports->day_missing }}</p>
        <p class="card-text"><b>Org_name</b> :---> {{ $reports->Org_name }}</p>
        <p class="card-text"><b>Attitude toward field training</b> :---> {{ $reports->Attitude }}</p>
        <p class="card-text"><b>organizes work well</b> :---> {{ $reports->organizes }}</p>
        <p class="card-text"><b>completes assigned tasks on time/punctual at work</b> :---> {{ $reports->panctual }}</p>
        <p class="card-text"><b>Has initiative/resourcefulness</b>:---> {{ $reports->resourcefulness }}</p>
        <p class="card-text"><b>accuracy of work</b> :---> {{ $reports->accuracy }}</p>
        <p class="card-text"><b>adapts to working conditions</b> :---> {{ $reports->adapts }}</p>
        <p class="card-text"><b>has_ability_to_get_along_with_others_work</b> :---> {{ $reports->has_ability_to_get_along_with_others_work }}</p>
        <p class="card-text"><b>Follows_upon_assignments</b> :---> {{ $reports->Follows_upon_assignments }}</p>
        <p class="card-text"><b>ability_to_communicate_with_supervisor</b> :---> {{ $reports->ability_to_communicate_with_supervisor }}</p>
        <p class="card-text"><b>ability_to_apply_theory_in_practice</b> :---> {{ $reports->ability_to_apply_theory_in_practice }}</p>
        <p class="card-text"><b>ability_to_judge</b> :---> {{ $reports->ability_to_judge }}</p>
        <p class="card-text"><b>Adherence_to_general_code_of_conduct</b> :---> {{ $reports->Adherence_to_general_code_of_conduct }}</p>
        <p class="card-text"><b>comments</b> :---> {{ $reports->comments }}</p>
        <p class="card-text"><b>name</b> :---> {{ $reports->name }}</p>
        <p class="card-text"><b>designation</b> :---> {{ $reports->designation }}</p>
        <p class="card-text"><b>contact</b> :---> {{ $reports->contact }}</p>
        <p class="card-text"><b>email</b> :---> {{ $reports->email }}</p>
        <p class="card-text"><b>date</b> :---> {{ $reports->date }}</p>
        <p class="card-text"><b>signature</b> :---> {{ $reports->signature }}</p>
      
  </div>
       
    </hr>
  
  </div>
</div>
  </div>
</div>
<footer>
  @include('dashboard.footer')
</footer>
@endsection