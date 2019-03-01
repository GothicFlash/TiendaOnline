<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <link rel="stylesheet" href="{{ asset ('css/global.css') }}">
    <title>Detalle de compra</title>
  </head>
  <body>
    <p>Gracias por tu visita, tu compra ha sido generada y sera validada en los proximos dias</p><br><br>
    <div class="content">
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

      <h3>Direccion</h3>
      <table class="table table-striped">
        <thead>
          <tr>
            <th scope="col">Calle</th>
            <th scope="col">Ciudad</th>
            <th scope="col">Estado</th>
            <th scope="col">Codigo postal</th>
            <th scope="col">Numero</th>
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

      <h3 class="text-center">
        <span class="label label-success">
          Total: ${{ number_format($request->total,2) }}
        </span>
      </h3>
      <h3 class="text-center">
        <span class="label label-success">
          Total + IVA(10%): ${{ number_format($request->total+(.10*$request->total),2) }}
        </span>
      </h3>
    </div>
  </body>
</html>
