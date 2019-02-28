@extends('layouts.front_app')
@section('content')
  <div class="container">
    <div class="row">
      <div class="col-12">
        <h1>ultimi 5 post inseriti</h1>
        @foreach ($posts as $post)
          <h3><a href="{{ route('show', $post->id)}}">{{$post->title}}</a> <small>{{$post->author}}</small> </h3>
          <p>{!! str_limit($post->content, 40, ' (...)') !!}</p>
        @endforeach
      </div>
    </div>
  </div>
@endsection
