@extends('admin.layouts.app')
@section('title','Categorias')
@section('title-content','Editar')
@section('content')
  <form action="{{route('categories.update',encrypt($category->id))}}" method="post">
    {{ csrf_field() }}
    {{ method_field('PATCH') }}
    <div class="form-group">
      <label for="formGroupExampleInput">Nombre</label>
      <input type="text" class="form-control" id="formGroupExampleInput" name="name" value="{{$category->name}}" required>
    </div>
    <button type="submit" class="btn btn-primary">Guardar</button>
  </form>
@endsection
