@extends('admin.layouts.app')
@section('title','Productos')
@section('title-content','Crear')
@section('content')
  <form action="{{ url('/admin/products') }}" method="post" enctype="multipart/form-data">
    {{ csrf_field() }}
    <div class="form-group">
      <label for="formGroupExampleInput">Nombre</label>
      <input type="text" class="form-control" name="name" required>
    </div>
    <div class="form-group">
      <label for="formGroupExampleInput">Precio</label>
      <input type="number" step="0.5" value="0.0" class="form-control" name="price" required>
    </div>
    <div class="form-group">
      <label for="exampleFormControlTextarea1">Descripción</label>
      <textarea class="form-control" rows="3" name="description"></textarea>
    </div>
    <div class="form-group">
      <select class="custom-select" name="category_id">
        <option selected>Categoria</option>
        @foreach ($categories as $category)
          <option value="{{$category->id }}">{{ $category->name }}</option>
        @endforeach
      </select>
    </div>
    <div class="form-group custom-file">
      <input type="file" class="custom-file-input" name="files[]" multiple>
      <label class="custom-file-label" for="customFile">Seleccionar imagenes</label>
    </div>
    <br><br>
    <button type="submit" class="btn btn-primary">Enviar</button>
  </form>
@endsection
