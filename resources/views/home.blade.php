@extends('layouts.app')
@section('content')
    <h1>Posts</h1>
    @if( count($posts) )
      <div class="card">
        <ul class="list-group list-group-flush">
        @foreach( $posts as $post )
          <li class="list-group-item">
            <h3><a href="/posts/{{$post->id}}">{{$post->title}}</a></h3>
            <small>Written at {{$post->created_at}}</small>
          </li>
        @endforeach
        </ul>
      </div>
    @else
      <p>No posts found</p>
    @endif
@endsection
