@extends('layouts.front_app')

@section('content')

  <div class="container">
    <div class="row">
      <div class="col-12">
        <h1>{{$post->title}}</h1>
        <h3>{{$post->author}}</h3>
        <p>{!! $post->content !!}</p>
        <a href="{{route('home')}}" class="btn btn-secondary">TORNA INDIETRO</a>
      </div>
    </div>
  </div>

@endsection
