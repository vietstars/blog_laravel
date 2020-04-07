@extends('layouts.app')
@section('content')
	<a href="/posts" class="btn btn-default">Go Back</a>
    <h1>{{$post->title}}</h1>
    <p>{{$post->body}}</p>
    <hr />
	<small>Written at {{$post->created_at}}</small>
	<hr />	
	@if( !Auth::guest() && Auth::user()->id==$post->user_id )
	{!! Form::open(array('action' => array('PostsController@destroy',$post->id), 'method' => 'POST', 'class' => 'pull-right')) !!}
		<a href="/posts/{{$post->id}}/edit" class="btn btn-default">Edit</a>
		{{Form::hidden('_method','DELETE')}}
	    {{Form::submit('Delete',array('class'=>'btn btn-danger float-right'))}}
	{!! Form::close() !!}
	@endif
@endsection