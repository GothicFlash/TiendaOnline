<?php

namespace App\Http\Controllers\Sales;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Sale;
use App\Address;
use Mail;
use App\Mail\SaleConfirmation;
use Illuminate\Support\Facades\Auth;

class SalesController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
      $sales = Sale::get();
      return view('admin.sales.index',compact('sales'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    public function view()
    {
      $sales = Auth::user()->sales; //()->orderBy('date', 'desc')->paginate(0)
      return view('store.orders',compact('sales'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $cart = \Session::get('cart');
        $address = new Address;
        $sale = new Sale;
        //Generar pdf
        $pdf = \PDF::loadView('store.ticket',compact('request','cart'));
        $name = time().'.pdf';
        $path = public_path().'/tickets/'.$name;
        $file = $pdf->output();

        $sale->date = date('Y-m-d H:i:s');
        $sale->total = $request->total+(.10*$request->total);
        $sale->user_id = Auth::user()->id;
        $sale->state = 0;
        if(file_put_contents($path,$file)) {
          $sale->file = $name; //Se asigna el nombre del archivo a la venta y se agrega a la BD
        }
        if($sale->save()) {
          //Llenando direccion
          $address->number = $request->number;
          $address->streetName = $request->streetName;
          $address->city = $request->city;
          $address->country = $request->country;
          $address->postCode = $request->postCode;
          $address->sale_id = $sale->id;
          $address->save();
          foreach ($cart as $item) {
            $sale->products()->attach($item->id,['price' => $item->price, 'quantity' => $item->quantity]);
          }
          $this->sendEmail($request, $cart);
          \Session::forget('cart'); //Se vacia el carrito para volver a realiazar una compra
          return redirect()->route('sales-show');
        }
    }

    public function sendEmail($request, $cart) //Envia el correo de confirmación
    {
      $sentTo = Auth::user()->email;
      Mail::to($sentTo)->send(new SaleConfirmation($cart,$request));
    }

    public function validates(Sale $sale) //Cambia el estado del pedido a validado 1. Solo aplica para el administrador
    {
      $sale->state = 1;
      $sale->save();
      return redirect()->route('sales.index');
    }
    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
