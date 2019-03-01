@extends('store.layouts.app')
@section('title','Compra')
@section('title-content','Detalle del pedido')
@section('content')
  <div class="row">
    <h3>Datos del usuario</h3>
    <table class="table table-striped">
      <thead>
        <tr>
          <th scope="col">Nombre</th>
          <th scope="col">Email</th>
        </tr>
      </thead>
      <tbody>
        <td>{{ Auth::user()->name }}</td>
        <td>{{ Auth::user()->email }}</td>
      </tbody>
    </table>
  </div>
  <div class="row">
    <h3>Datos del pedido</h3>
    <table class="table table-striped">
      <thead>
        <tr>
          <th scope="col">Producto</th>
          <th scope="col">Precio</th>
          <th scope="col">Cantidad</th>
          <th scope="col">Subtotal</th>
        </tr>
      </thead>
      <tbody>
        @foreach ($cart as $item)
          <tr>
            <td>{{ $item->name }}</td>
            <td>{{ $item->price }}</td>
            <td>{{ $item->quantity }}</td>
            <td>{{ number_format($item->quantity*$item->price,2)}}</td>
          </tr>
        @endforeach
      </tbody>
    </table>
  </div>
  <h3 class="text-center">
    <span class="label label-success">
      Total: ${{ number_format($total,2) }}
    </span>
  </h3>
  <div class="content">
    <h3>Direccion de envio</h3>
    <form action="{{ url('/admin/sales') }}" method="post">
      {{ csrf_field() }}
      <input type="hidden" class="form-control" name="total" value="{{$total}}">
      <div class="form-group">
        <label for="formGroupExampleInput">Calle</label>
        <input type="text" class="form-control" name="streetName" required>
      </div>
      <div class="form-group">
        <label for="formGroupExampleInput">Ciudad</label>
        <input type="text" class="form-control" name="country" required>
      </div>
      <div class="form-group">
        <label for="exampleFormControlTextarea1">Estado</label>
        <input type="text" class="form-control" name="city" required>
      </div>
      <div class="form-group">
        <label for="exampleFormControlTextarea1">Numero</label>
        <input type="number" class="form-control" name="number" required>
      </div>
      <div class="form-group">
        <label for="exampleFormControlTextarea1">Codigo Postal</label>
        <input type="number" step="100" class="form-control" name="postCode" required>
      </div>
      <br><br>
      <div class="text-center">
        <a href="{{ route('cart-show') }}" class="btn btn-info btn-responsive btninter">Regresar</a>
        <button type="submit" class="btn btn-warning btn-responsive btninter right">Realizar compra</a>
      </div>
    </form>
  </div>
@endsection
