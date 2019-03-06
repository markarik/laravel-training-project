@extends('layouts.app')

@section('content')


<div class="container">
  <div class="card-deck mb-3 text-center">
    <div class="card mb-4 shadow-sm">
     
      <div class="card-body">
        <h1 class="card-title pricing-card-title">Update</h1>       
        <button type="button" class="btn btn-success button"><a href="/Posts/Show" data-toggle="modal" data-target="#exampleModal">Click</a></button>
        
      </div>
    </div>


    <div class="card mb-4 shadow-sm">     
      <div class="card-body">
        <h1 class="card-title pricing-card-title">View Users</h1>       
        <button type="button" class="btn btn-success button"><a href="/posts">Click</a></button>
      </div>
    </div>


    <div class="card mb-4 shadow-sm">     
      <div class="card-body">
        <h1 class="card-title">Drop</h1>      
        <button class="btn btn-success">Click</button>
      </div>
    </div>
  </div>



  <div class="container">
  <div class="card-deck mb-3 text-center">
    <div class="card mb-4 shadow-sm">     
      <div class="card-body">
        <h1 class="card-title pricing-card-title">Edit</h1>     
        <button class="btn btn-success">Click</button>
      </div>
    </div>


    <div class="card mb-4 shadow-sm">     
      <div class="card-body">
        <h1 class="card-title pricing-card-title">Generate Report</h1>       
        <button class="btn btn-success">Click</button>
      </div>
    </div>    
  </div>


 
@endsection