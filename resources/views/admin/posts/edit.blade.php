@extends('layouts.admin_app')
@section('content')
  <div class="container">
    <div class="row">
      <div class="col-12">
        <form class="form-group" action="{{ route('admin.posts.update', $post->id) }}" method="post">
          @csrf
          @method('PUT')
          <h1>Stai aggiornando l'articolo: {{ $post->title }}</h1>
          <div class="form-group">
            <label for="title">Titolo</label>
            <input type="text" name="title" value="{{ $post->title}}" class="form-control">
          </div>

          <div class="form-group">
            <label for="author">Autore</label>
            <input type="text" name="author" value="{{ $post->author}}" class="form-control">
          </div>

          <div class="form-group">
            <label for="content">Contenuto</label>
            <textarea class="form-control" name="content" rows="8" cols="80">{!! $post->content !!}</textarea>
          </div>

          <div class="form-group">
            <input type="submit" class="form-control" value="AGGIORNA ARTICOLO">
          </div>
        </form>
      </div>
    </div>
  </div>
@endsection
