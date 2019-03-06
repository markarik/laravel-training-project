@extends('layouts.app')

@section('content')

    <h1>{{$post->Username}}</h1>

   
<div>
    <table>
                <tr>
                    <th>First Name</th>
                    <th>Second Name</th>
                    <th>First Name</th>
                    <th>Role</th>
                    <th>ID Number</th>
                    <th>Staff Number</th>                                      
                    <th>Dapartment</th>
                    
                <tr>
                    <td>{{$post ->fname}}</td>
                    <td>{{$post ->lname}}</td>
                    <td>{{$post ->SurName}}</td>
                    <td>{{$post ->Role}}</td>
                    <td>{{$post ->IDNo}}</td>
                    <td>{{$post ->StaffNumber}}</td>                    
                    <td>{{$post ->Depertment}}</td>
                </tr>
</table>

<button type="button" class="btn btn-success button"><a href="/posts">Back</a></button>
<hr>
<small>Written on{{$post -> created_at}}</small>


@endsection