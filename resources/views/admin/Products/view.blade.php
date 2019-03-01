@extends('admin.layouts.app')
@section('title','Productos')
@section('title-content','Lista de productos')
@section('content')
  <table class="table">
    <thead class="thead-dark">
      <tr>
        <th scope="col">Id</th>
        <th scope="col">Imagen</th>
        <th scope="col">Nombre</th>
        <th scope="col">Precio</th>
        <th scope="col">Descripción</th>
        <th scope="col">Categoria</th>
        <th scope="col"></th>
        <th scope="col"></th>
      </tr>
    </thead>
    <tbody>
  	@foreach($products as $product)
      <tr>
  		    <th scope="row">{{ $product->id }}</th>
  			  <td>
            <img src="{{ asset('images/Products/'.$product->images->pluck('file')->first())}}" width="100px" height="100px" alt="212" />
          </td>
          <td>{{ $product->name }}</td>
          <td>{{ $product->price }}</td>
          <td>{{ $product->description }}</td>
          <td>{{ $product->category->name }}</td>
          <td>
            <a href="{{route('products.edit',encrypt($product->id))}}" class="btn btn-primary">Editar</a>
          </td>
  			  <td>
            <form class="" action="/admin/products/{{encrypt($product->id)}}" method="post">
                {{ csrf_field() }}
                {{ method_field("delete") }}
            	<button type="sumbit" class="btn btn-danger" name="Delete" onClick="return confirm('Eliminar producto?')">Eliminar</button>
            </form>
          </td>
  		</tr>
  	@endforeach
  </tbody>
</table>
<div class="text-center">
  <button class="btn btn-info btn-responsive btninter" onclick ="location='{{ asset('admin/products/create') }}'">Agregar</button>
</div>
@endsection
