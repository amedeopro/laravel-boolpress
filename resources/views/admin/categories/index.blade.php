@extends('layouts.admin_app')
@section('content')
  <div class="container">
    <div class="row">
      <div class="col-12">
        <a href="{{route('admin.categories.create')}}" class="btn btn-primary">AGGIUNGI CATEGORIA</a>
      </div>
    </div>
  </div>
  <div class="container">
    <div class="row">
      <div class="col-12">
        <h1>Queste sono le categorie disponibili</h1>
        <ul>
          @foreach ($categories as $category)
            <li>
              Nome Categoria: {{ $category->title }}
              <ul>
                <li>Slug: {{ $category->slug }}</li> <a href="{{route('admin.categories.edit', $category->id)}}"> Modifica categoria</a>
              </ul>
            </li>
          @endforeach
        </ul>
      </div>
    </div>
  </div>
@endsection
