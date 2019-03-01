<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/
Route::get('/',[ //Ruta principal
  'uses' => 'Products\ProductsController@indexClient',
  'as' => 'home'
]);

//Inyector de dependencias
Route::bind('product', function($id){ //Devuelve un producto cuando se busca en la url
  return App\Product::where('id', decrypt($id))->first();
});

Route::bind('category', function($id){ //Devuelve una categoria cuando se busca en la url
  return App\Category::where('id', decrypt($id))->first();
});

Route::bind('sale', function($id){ //Devuelve una venta cuando se busca en la url
  return App\Sale::where('id', $id)->first();
});

//Rutas del cliente general
Route::get('sales/show',[ //Muestra un listado de pedidos pendientes y no pendientes
  'uses' => 'Sales\SalesController@view',
  'as' => 'sales-show'
]);

Route::get('find/{id}',[  //Busca los productos segun su categoria
  'uses' => 'Products\ProductsController@searchProduct',
  'as' => 'product.search'
]);

Route::get('product/{product}',[ //Muestra el detalle de un producto en especifico
  'uses' => 'Products\ProductsController@show', 
  'as' => 'detail-product'
]);

//Rutas para el carrito de compra
Route::get('cart/show',[ //Muestra el carrito con los productos que este contenga
  'uses' => 'Cart\CartController@show',
  'as' => 'cart-show'
]);

Route::get('cart/add/{product}',[ //Agrega un producto al carrito
  'uses' => 'Cart\CartController@add',
  'as' => 'cart-add'
]);

Route::get('cart/delete/{product}',[ //Elimina un producto del carrito
  'uses' => 'Cart\CartController@delete',
  'as' => 'cart-delete'
]);

Route::get('cart/trash',[ //Vacia el carrito de compras por completo
  'uses' => 'Cart\CartController@trash',
  'as' => 'cart-trash'
]);

Route::get('cart/update/{product}/{quantity?}',[ //Actualiza la cantidad de un producto en el carrito
  'uses' => 'Cart\CartController@update',
  'as' => 'cart-update'
]);

Route::get('order-detail',[ //Muestra el detalle de todos los productos que se hayan agregado al carrito
  'middleware' => 'auth', //Verifica que solo se accesa a esta ruta si el usuario inicio sesion
  'uses' => 'Cart\CartController@orderDetail',
  'as' => 'order-detail'
]);

//Rutas de usuario administrador
Route::group([ 'middleware' => ['auth'], 'prefix' => 'admin'], function() //'middleware' => ['auth'],
{
  Route::resource('categories','Categories\CategoriesController');
  Route::resource('products','Products\ProductsController');
  Route::resource('clients','Clients\ClientsController');
  Route::resource('sales','Sales\SalesController');
  Route::get('sales/{sale}',[
    'uses' => 'Sales\SalesController@validates',
    'as' => 'validate-sale'
  ]);
});

//Rutas generales
Route::get('about', function () {
    return view('store.about');
});

//Rutas de login y registro
Route::get('login','Auth\LoginController@showLoginForm')->middleware('guest');
Route::post('login','Auth\LoginController@login')->name('login');
Route::get('logout','Auth\LoginController@logout')->name('logout');

$this->get('register', 'Auth\RegisterController@showRegistrationForm')->name('register');
$this->post('register', 'Auth\RegisterController@register');
