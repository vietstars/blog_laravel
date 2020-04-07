@extends('layouts.app')
@section('content')
    <h1>Edit Post</h1>
    {!! Form::open(array('action' => array('PostsController@update',$post->id), 'method' => 'POST')) !!}
	    <div class="form-group">
	    	{{Form::label('title','Title')}}
	    	{{Form::text('title',$post->title,array('class'=>'form-control','placeholder'=>'Title'))}}
	    </div>
	    <div class="form-group">
	    	{{Form::label('body','Body')}}
	    	{{Form::textarea('body',$post->body,array('class'=>'form-control','placeholder'=>'Body'))}}
	    </div>
	    {{Form::hidden('_method','PUT')}}
	    {{Form::submit('Submit',array('class'=>'btn btn-primary'))}}
	{!! Form::close() !!}
@endsection