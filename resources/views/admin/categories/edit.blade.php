@extends('layouts.admin_app')
@section('content')
  <div class="container">
    <div class="row">
      <div class="col-12">
        <form class="form-group" action="{{route('admin.categories.update', $category->id)}}" method="post">
          @csrf
          @method('PUT')

          <div class="form-group">
            <label for="title">Nome della categoria</label>
            <input type="text" class="form-control" name="title" value="{{ $category->title}}">
          </div>

          <div class="form-group">
            <input type="submit" class="form-control" value="AGGIORNA CATEGORIA">
          </div>
        </form>
      </div>
    </div>
  </div>
@endsection
