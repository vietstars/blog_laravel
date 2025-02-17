@extends('layouts.app')
@section('content')
    <h1>Create Post</h1>
    {!! Form::open(array('action' => 'PostsController@store', 'method' => 'POST', 'enctype' => 'multipart/form-data')) !!}
	    <div class="form-group">
	    	{{Form::label('title','Title')}}
	    	{{Form::text('title','',array('class'=>'form-control','placeholder'=>'Title'))}}
	    </div>
	    <div class="form-group">
	    	{{Form::label('body','Body')}}
	    	{{Form::textarea('body','',array('class'=>'form-control','placeholder'=>'Body'))}}
	    </div>
	    <div class="form-group">
	    	{{Form::file('cover_image')}}
	    </div>
	    {{Form::submit('Submit',array('class'=>'btn btn-primary'))}}
	{!! Form::close() !!}
@endsection