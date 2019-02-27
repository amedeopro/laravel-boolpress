@extends('layouts.admin_app')
@section('content')
  <div class="container">
    <div class="row">
      <div class="col-12">
        <form class="form-group" action="{{ route('admin.posts.store') }}" method="post">
          @csrf
          <div class="form-group">
            <label for="title">Titolo</label>
            <input type="text" name="title" placeholder="Inserisci un titolo" class="form-control">
          </div>

          <div class="form-group">
            <label for="author">Autore</label>
            <input type="text" name="author" placeholder="Inserisci l'autore" class="form-control">
          </div>

          <div class="form-group">
            <label for="content">Contenuto</label>
            <textarea class="form-control" name="content" rows="8" cols="80"></textarea>
          </div>

          <div class="form-group">
            <input type="submit" class="form-control" value="INSERISCI NUOVO ARTICOLO">
          </div>
        </form>
      </div>
    </div>
  </div>
@endsection
