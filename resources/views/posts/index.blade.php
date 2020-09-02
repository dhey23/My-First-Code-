@extends('layouts.app')

@section('content')
<h1>POST</h1>
    @if(count($posts) > 0)
        @foreach ($posts as $post)
          <div class= "well">
              <hr>
              <h3><a href= "/posts/{{$post->id}}">{{$post->title}}</a></h3>
              <hr>
          </div>

        @endforeach
        
    @else
          <p>NO POST FOUND</p>

    @endif

@endsection