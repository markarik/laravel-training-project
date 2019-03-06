@extends('layouts.app')

@section('content')

  @if(count($post)>0)
   
        @foreach($post as $posts)
        <div class="media text-muted pt-3">
      <svg class="bd-placeholder-img mr-2 rounded" width="32" height="32" xmlns="http://www.w3.org/2000/svg" preserveAspectRatio="xMidYMid slice" focusable="false" role="img" aria-label="Placeholder: 32x32"><title>Placeholder</title><rect width="100%" height="100%" fill="#007bff"></rect><text x="50%" y="50%" fill="#007bff" dy=".3em">32x32</text></svg>
      <div class="media-body pb-3 mb-0 small lh-125 border-bottom border-gray">
        <div class="d-flex justify-content-between align-items-center w-100">
          <strong class="text-gray-dark"><a href="#">{{$posts->Username}}</a></strong>
          <a href="/posts/{{$posts->id}}">View</a>
          
        </div>
        <span class="d-block"><small>Written on {{$posts->created_at}}</small></span>
      </div>
    </div>
          
        @endforeach
    {{$post->links()}}

    @else
    <p>No Posts</p>
  @endif

@endsection


