<h3>Datos del usuario</h3>
<table>
  <thead>
    <tr>
      <th>Nombre</th>
      <th>Email</th>
    </tr>
  </thead>
  <tbody>
    <td>{{ Auth::user()->name }}</td>
    <td>{{ Auth::user()->email }}</td>
  </tbody>
</table>

<h3>Direccion</h3>
<table>
  <thead>
    <tr>
      <th>Calle</th>
      <th>Ciudad</th>
      <th>Estado</th>
      <th>Codigo postal</th>
      <th>Numero</th>
    </tr>
  </thead>
  <tbody>
    <td>{{ $request->streetName }}</td>
    <td>{{ $request->country }}</td>
    <td>{{ $request->city }}</td>
    <td>{{ $request->postCode }}</td>
    <td>{{ $request->number }}</td>
  </tbody>
</table>

<h3>Datos del pedido</h3>
<table>
  <thead>
    <tr>
      <th>Producto</th>
      <th>Precio</th>
      <th>Cantidad</th>
      <th>Subtotal</th>
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

<h3>
  <span>
    Total: ${{ number_format($request->total,2) }}
  </span>
</h3>
<h3>
  <span>
    Total + IVA(10%): ${{ number_format($request->total+(.10*$request->total),2) }}
  </span>
</h3>
