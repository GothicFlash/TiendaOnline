@extends('admin.layouts.app')
@section('title','Productos')
@section('title-content','Editar')
@section('content')
  <form action="{{route('products.update',encrypt($product->id))}}" method="post" enctype="multipart/form-data">
    {{ csrf_field() }}
    {{ method_field('PATCH') }}
    <div class="form-group">
      <label for="formGroupExampleInput">Nombre</label>
      <input type="text" class="form-control" name="name" value="{{ $product->name }}" required>
    </div>
    <div class="form-group">
      <label for="formGroupExampleInput">Precio</label>
      <input type="number" step="0.5" class="form-control" name="price" value="{{ $product->price }}" required>
    </div>
    <div class="form-group">
      <label for="exampleFormControlTextarea1">Descripción</label>
      <textarea class="form-control" rows="3" name="description" required>{{ $product->description }}</textarea>
    </div>
    <div class="form-group">
      <select class="custom-select" name="category_id">
        <option selected>Categoria</option>
        @foreach ($categories as $category)
          @if ($category->name==$product->category->name)
            <option value="{{$category->id }}" selected>{{ $category->name }}</option>
          @else
            <option value="{{$category->id }}">{{ $category->name }}</option>
          @endif
        @endforeach
      </select>
    </div>
    <br><br>
    <button type="submit" class="btn btn-primary">Enviar</button>
  </form>
@endsection
