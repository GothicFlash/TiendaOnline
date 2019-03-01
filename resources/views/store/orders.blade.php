@extends('store.layouts.app')
@section('title','Pedidos')
@section('title-content','Lista de pedidos')

@section('content')
  @if (count($sales))
    <table class="table">
      <thead class="thead-dark">
        <tr>
          <th scope="col">Id</th>
          <th scope="col">Productos</th>
          <th scope="col">Dirección</th>
          <th scope="col">Fecha</th>
          <th scope="col">Total</th>
          <th scope="col">Estado</th>
          <th scope="col">Recibo</th>
        </tr>
      </thead>
      <tbody>
      @foreach($sales as $sale)
        <tr class="{{ $sale->state?"bg-success":"" }}">
            <th scope="row">{{ $sale->id }}</th>
            <td>
              @foreach ($sale->products as $product)
                <li>({{ $product->pivot->quantity }}) {{ $product->name }}</li>
              @endforeach
            </td>
            <td>

                <li>Calle: {{ $sale->addresses()->value('streetName') }}</li>
                <li>Ciudad: {{ $sale->addresses()->value('country') }}</li>
                <li>Estado: {{ $sale->addresses()->value('city') }}</li>
                <li>Num: {{ $sale->addresses()->value('number') }}</li>
                <li>C.P: {{ $sale->addresses()->value('postCode') }}</li>
            </td>
            <td>{{ $sale->date }}</td>
            <td>{{ $sale->total }}</td>
            <td>{{ $sale->state?"Validado":"Pendiente"}}</td>
            <td>
              <a href="{{ asset('tickets/'.$sale->file) }}" target="_blank" class="btn btn-info">Abrir</a>
            </td>
        </tr>
      @endforeach
      </tbody>
    </table>
  @else
    <div class="alert alert-info">
      <h4><span>Aun no tienes pedidos</span></h4>
    </div>
  @endif
@endsection
