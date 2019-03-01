<?php

namespace App\Http\Controllers\Products;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Category;
use App\Product;
use App\Image;

class ProductsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $products = Product::get()->where('state','=','1');
        return view('admin.products.view',compact('products'));
    }

    public function indexClient()
    {
      $categories = Category::get();
      $products = Product::get()->where('state','=','1');
      return view('store.index',compact('categories','products'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $categories = Category::get();
        return view('admin.products.create',compact('categories'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
      $product = new Product;
      $product->name = $request->name;
      $product->price = $request->price;
      $product->description = $request->description;
      $product->state = 1;
      $product->category_id = $request->category_id;
      $files = $request->file('files');
      if(is_array($files) && $product->save()) {
        $path = public_path().'/images/products/';
        foreach ($files as $file) {
          $image = new Image;
          $name = time().'.'.$file->getClientOriginalName();
          $file->move($path,$name);
          $image->file = $name;
          $image->product_id = $product->id;
          $image->save();
        }
        return redirect('/admin/products');
      }
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show(Product $product)
    {
        $categories = Category::get();
        return view('store.preview',compact('product','categories'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit(Product $product)
    {
      $categories = Category::get();
      return view('admin.products.edit',compact('product','categories'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Product $product)
    {
      $product->name = $request->name;
      $product->price = $request->price;
      $product->description = $request->description;
      $product->category_id = $request->category_id;
      $product->save();
      return redirect()->route('products.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(Product $product)
    {
      $product->state = 0;
      $product->save();
      return redirect('/admin/products');
    }

    public function searchProduct($id)
    {
      $categories = Category::get();
      $products = Product::get()->where('category_id', '=', decrypt($id))->where('state', '=', '1');
      return view('store.index',compact('categories','products'));
    }
}
