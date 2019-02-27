@extends('layouts.admin_app')
@section('content')

<div class="container">
  <div class="row">
    <div class="col-12">
      <div class="all-posts">

        <h1>Questi sono tutti i Post creati</h1>

        @foreach ($posts as $post)

          <h2> <a href="{{ route('admin.posts.show', $post->id) }}">{{ $post->title }}</a> <small>{{ $post->author }}</small> </h2>
          <p>{{ $post->content }}</p>

        @endforeach
      </div>

    </div>

  </div>
</div>


@endsection
