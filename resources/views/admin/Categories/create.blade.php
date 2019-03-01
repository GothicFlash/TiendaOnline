@extends('admin.layouts.app')
@section('title','Categorias')
@section('title-content','Crear')
@section('content')
  <form action="/admin/categories" method="post">
    {{ csrf_field() }}
    <div class="form-group">
      <label for="formGroupExampleInput">Nombre</label>
      <input type="text" class="form-control" id="formGroupExampleInput" name="name" required>
    </div>
    <button type="submit" class="btn btn-primary">Agregar</button>
  </form>
@endsection
