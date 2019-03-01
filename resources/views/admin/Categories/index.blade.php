@extends('admin.layouts.app')
@section('title','Categorias')
@section('title-content','Lista de categorias')
@section('content')
  <table class="table">
    <thead class="thead-dark">
      <tr>
        <th scope="col">Id</th>
        <th scope="col">Nombre</th>
        <th scope="col"></th>
        <th scope="col"></th>
      </tr>
    </thead>
    <tbody>
  	@foreach($categories as $category)
      <tr>
  		    <th scope="row">{{ $category->id }}</th>
  			  <td>{{ $category->name }}</td>
          <td>
            <a href="/admin/categories/{{encrypt($category->id)}}/edit" class="btn btn-primary">Editar
						</a>
          </td>
  			  <td>
            <form class="" action="/admin/categories/{{$category->id}}" method="post">
                {{ csrf_field() }}
                {{ method_field("delete") }}
            	<button type="sumbit" class="btn btn-danger" name="Delete" onClick="return confirm('Eliminar categoria?')">Eliminar</button>
            </form>
          </td>
  		</tr>
  	@endforeach
  </tbody>
</table>
<div class="text-center">
  <button class="btn btn-info btn-responsive btninter" onclick ="location='{{ asset('/admin/categories/create') }}'">Agregar</button>
</div>
@endsection
