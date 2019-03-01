@extends('admin.layouts.app')
@section('title','Ventas')
@section('title-content','Lista de pedidos')
@section('content')
  @if (count($sales))
    <h3>Pedidos pendientes</h3>
    @if (count($sales->where('state',0)))
      <table class="table">
        <thead class="thead-dark">
          <tr>
            <th scope="col">Id</th>
            <th scope="col">Cliente</th>
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
            @if (!$sale->state)
              <tr>
          		    <th scope="row">{{ $sale->id }}</th>
          			  <td>{{ $sale->user->name }}</td>
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
                  <td>
                    <a href="{{ route('validate-sale',$sale->id) }}" class="btn btn-success">Validar</a>
                  </td>
                  <td>
                    <a href="{{ asset('tickets/'.$sale->file) }}" target="_blank" class="btn btn-info">Abrir</a>
                  </td>
          		</tr>
            @endif
        	@endforeach
        </tbody>
      </table>
    @else
      <div class="alert alert-info">
        <h4><span>No hay pedidos pendientes que mostrar</span></h4>
      </div>
    @endif
    <h3>Pedidos validados</h3>
    @if (count($sales->where('state',1)))
      <table class="table">
        <thead class="thead-dark">
          <tr>
            <th scope="col">Id</th>
            <th scope="col">Cliente</th>
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
            @if ($sale->state)
              <tr>
          		    <th scope="row">{{ $sale->id }}</th>
          			  <td>{{ $sale->user->name }}</td>
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
                  <td>Validado</td>
                  <td>
                    <a href="{{ asset('tickets/'.$sale->file) }}" target="_blank" class="btn btn-info">Abrir</a>
                  </td>
          		</tr>
            @endif
        	@endforeach
        </tbody>
      </table>
    @else
      <div class="alert alert-info">
        <h4><span>No hay pedidos validados que mostrar</span></h4>
      </div>
    @endif
  @else
    <div class="alert alert-info">
      <h4><span>No hay pedidos que mostrar</span></h4>
    </div>
  @endif
@endsection
