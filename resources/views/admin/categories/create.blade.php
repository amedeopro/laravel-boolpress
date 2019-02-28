@extends('layouts.admin_app')
@section('content')
  <div class="container">
    <div class="row">
      <div class="col-12">
        <form class="form-group" action="{{route('admin.categories.store')}}" method="post">
          @csrf
          @method('POST')

          <div class="form-group">
            <label for="title">Nome della categoria</label>
            <input type="text" class="form-control" name="title" placeholder="Inserisci il nome della categoria">
          </div>

          <div class="form-group">
            <input type="submit" class="form-control" value="INSERISCI NUOVA CATEGORIA">
          </div>
        </form>
      </div>
    </div>
  </div>
@endsection
