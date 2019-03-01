@extends('admin.layouts.app')
@section('title','Clientes')
@section('title-content','Lista de clientes')
@section('content')
  <table class="table">
    <thead class="thead-dark">
      <tr>
        <th scope="col">Id</th>
        <th scope="col">Nombre</th>
        <th scope="col">Email</th>
        <th scope="col">Tipo</th>
      </tr>
    </thead>
    <tbody>
  	@foreach($clients as $client)
      <tr>
  		    <th scope="row">{{ $client->id }}</th>
  			  <td>{{ $client->name }}</td>
          <td>{{ $client->email }}</td>
          <td>{{ $client->type }}</td>
  		</tr>
  	@endforeach
  </tbody>
</table>
@endsection
