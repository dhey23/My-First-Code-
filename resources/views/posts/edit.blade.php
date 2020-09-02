@extends('layouts.app')

@section('content')
<h1>EDIT POST</h1>
{!! Form::open(['action'=> ['PostsController@update', $posts->id],'method' => 'POST']) !!}
<div class="form-group">
  {{Form::label('title', 'Title')}}
  {{Form::text('title', $posts->title, ['class' => 'form-control', 'placeholder' => 'Title'  ])}}
</div>

<div class="form-group">
  {{Form::label('body', 'Body')}}
  {{Form::textarea('body', $posts->body, ['class' => 'form-control', 'placeholder' => 'Body Text'])}}
</div>

{{Form::hidden('_method','PUT')}}
{{Form::submit('Update', ['class' => 'btn btn-primary'])}}

{!! Form::close() !!} 


  

@endsection