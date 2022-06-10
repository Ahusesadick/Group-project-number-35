@extends('post.layout')
@section('content')
 
 
<div class="card">
  <div class="text-4xl py-2 font-bold">STUDENT DAILY RECORDED EVENTS</div>
  <div class="card-body">
   
 
        <div class="text-2xl font-serif px-2 py-2 pl-2 pr-2 font-bold">
        <h5 class="card-title">Name :  <span>{{ Auth::guard('web')->user()->name }}</span> </h5>
        <p class="card-text">Date : {{ $posts->date }}</p>
        <p class="card-text">Description : {{ $posts->description }}</p>
  </div>
       
    </hr>
  
  </div>
</div>