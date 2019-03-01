@extends('store.layouts.app')
@section('title','Carrito')
@section('title-content','Carrito de compras')
@section('content')
  @if(count($cart))
    <p class="text-center">
      <a href="{{ route('cart-trash') }}" class="btn btn-danger">Vaciar carrito</a>
    </p>
    <table class="table">
      <thead class="thead-dark">
        <tr>
          <th scope="col">Imagen</th>
          <th scope="col">Producto</th>
          <th scope="col">Precio</th>
          <th scope="col">Cantidad</th>
          <th scope="col">Subtotal</th>
          <th scope="col">Quitar</th>
        </tr>
      </thead>
      <tbody>
      	@foreach($cart as $item)
          <tr>
      		    <th>
                <img src="{{ asset('images/Products/'.$item->images->pluck('file')->first())}}" width="150px" height="150px" alt=""/>
              </th>
      			  <td>{{ $item->name }}</td>
      			  <td>{{ number_format($item->price,2) }}</td>
              <td>
                <input id="product_{{$item->id}}" type="number" min="1" max="100" value="{{ $item->quantity }}">
                <a class="btn btn-warning btn-update-item" data-href="{{ route('cart-update',encrypt($item->id)) }}" data-id="{{ $item->id }}">
                  <img src="{{ asset ('images/update.png') }}" width="10px" height="10px" alt="" />
                </a>
              </td>
              <td>{{ number_format($item->price * $item->quantity,2) }}</td>
              <td>
                <a href="{{ route('cart-delete',encrypt($item->id)) }}" class="btn btn-danger">Quitar</a>
              </td>
      		</tr>
      	@endforeach
      </tbody>
    </table>
    <h3 class="text-center">
      <span class="label label-success">
        Total: ${{ number_format($total,2) }}
      </span>
    </h3>
    <h3 class="text-center">
      <span class="label label-success">
        Total + IVA(10%): ${{ number_format($total+(.10*$total),2) }}
      </span>
    </h3>
    <div class="text-center">
      <a href="{{ route('home') }}" class="btn btn-info btn-responsive btninter">Seguir comprando</a>
      <a href="{{ route('order-detail') }}" class="btn btn-info btn-responsive btninter right">Continuar</a>
    </div>
  @else
    <div class="alert alert-info">
      <h4><span>No hay productos en el carrito</span></h4>
    </div>
  @endif
@endsection
