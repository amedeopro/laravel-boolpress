@extends('layouts.admin_app')

@section('content')

  <div class="container">
    <div class="row">
      <div class="col-12">
        <h1>{{ $post->title }}</h1>
        <h3>{{$post->author}}</h3>
        <p>{!! $post->content !!}</p>
      </div>

    </div>
  </div>
@endsection
