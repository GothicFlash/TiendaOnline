<?php

namespace App\Http\Controllers\Cart;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Product;

class CartController extends Controller
{
    public function __construct()
    {
      if(!\Session::has('cart')) {
        \Session::put('cart', array());
      }
    }
    //Mostrar carrito
    public function show()
    {
      $cart = \Session::get('cart');
      $total = $this->total();
      return view('store.cart',compact('cart','total'));
    }
    //Añadir producto
    public function add(Product $product)
    {
      $cart = \Session::get('cart');
      $cart[$product->id] = $product;
      $cart[$product->id]->quantity = 1;
      \Session::put('cart', $cart);

      return redirect()->route('cart-show');
    }
    //Borrar producto
    public function delete(Product $product)
    {
      $cart = \Session::get('cart');
      unset($cart[$product->id]);
      \Session::put('cart', $cart);
      return redirect()->route('cart-show');
    }
    //Actualizar producto
    public function update(Product $product, $quantity)
    {
      $cart = \Session::get('cart');
      $cart[$product->id]->quantity = $quantity;
      \Session::put('cart', $cart);
      return redirect()->route('cart-show');
    }
    //Vaciar carrito
    public function trash()
    {
      \Session::forget('cart');
      return redirect()->route('cart-show');
    }
    //Calcular total
    public function total()
    {
      $cart = \Session::get('cart');
      $total = 0;
      foreach ($cart as $item) {
        $total += $item->price * $item->quantity;
      }
      return $total;
    }
    //Detalle de compra con carrito
    public function orderDetail()
    {
      $cart = \Session::get('cart');
      $total = $this->total();
      return view('store.sale-detail',compact('cart','total'));
    }
}
