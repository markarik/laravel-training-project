@extends('layouts.app')

@section('content')
 <div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h1 class="modal-title" id="exampleModalLabel">Create</h1>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
      {!! Form::open(['action'=>'PostsController@store','method'=>'POST']) !!}
<div class="container">
        <div class="row">
            <div class="col-md-6">
             @csrf

        @method('PUT')
                <div class="form-group">
                    {{Form::Label('fname','First Name:')}}
                    {{form::text('fname','',['class'=>'form-control','placeholder'=>'FirstName'])}}
                </div>

                <div class="form-group">

                    {{Form::Label('lname','Last Name:')}}
                    {{form::text('lname','',['class'=>'form-control','placeholder'=>'LastName'])}}
                    </div>
                    <div class="form-group">

                    {{Form::Label('SurName','SurName:')}}
                    {{form::text('SurName','',['class'=>'form-control','placeholder'=>'SurName'])}}
                    </div>
                   
                    <div class="form-group">
                    {{Form::Label('Role','Role:')}}
                    {{form::text('Role','',['class'=>'form-control','placeholder'=>'Role'])}}
                    </div>
            </div>        
            <div class="col-md-6">
                    <div class="form-group">
                    {{Form::Label('IDNo','IDNo:')}}
                    {{form::text('IDNo','',['class'=>'form-control','placeholder'=>'IDNo'])}}
                    </div>
                    <div class="form-group">        
                    {{Form::Label('StaffNumber','StaffNumber:')}}
                    {{form::text('StaffNumber','',['class'=>'form-control','placeholder'=>'StaffNumber'])}}
                    </div>
                   
                    <div class="form-group">
                    {{Form::Label('Username','UserName:')}}
                    {{form::text('Username','',['class'=>'form-control','placeholder'=>'UserName'])}}
                    </div>
                    <div class="form-group">
                    {{Form::Label('Depertment','Depertment:')}}
                    {{form::text('Depertment','',['class'=>'form-control','placeholder'=>'Depertment'])}}                
                    </div>
             </div>
        </div>
        {{Form::submit('Submit',['class'=>'btn btn-success button'])}}
    </div> 

    

    {!! Form::close() !!}      
 
 
 
      </div>
      
    </div>
  </div>
</div>





@endsection


