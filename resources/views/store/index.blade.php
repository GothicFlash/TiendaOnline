@extends('store.layouts.appindex')
@section('content')
  <div class="header_slide">
    <div class="header_bottom_left">
      <div class="categories">
        <ul>
          <h3>Categorias</h3>
          <li><a href="{{ route('home') }}">Todas</a></li>
          @foreach($categories as $category)
            <li><a href="{{ route('product.search',encrypt($category->id)) }}">{{ $category->name }}</a></li>
          @endforeach
        </ul>
      </div>
    </div>
    <div class="header_bottom_right">
      <div class="slider">
        <div id="slider">
          <div id="mover">
            <div id="slide-1" class="slide">
              <div class="slider-img">
                <a href="preview.html">
                  <img src="{{asset('images/slide-1-image.png')}}" alt="learn more" />
                </a>
              </div>
              <div class="slider-text">
                <h1>LO NUEVO DE<br><span>AHORA</span></h1>
                <h2>PRECIOS UNICOS</h2>
                <div class="features_list">
                  <h4>Productos de las mejores marcas</h4>
                </div>
              </div>
              <div class="clear"></div>
            </div>
            <div class="slide">
              <div class="slider-text">
                <h1>SMART<br><span>TV's</span></h1>
              </div>
              <div class="slider-img">
                <a href="preview.html">
                  <img src="{{asset('images/slide-3-image.jpg')}}" alt="learn more" />
                </a>
              </div>
              <div class="clear"></div>
            </div>
            <div class="slide">
              <div class="slider-img">
                <a href="preview.html">
                  <img src="{{asset('images/slide-2-image.jpg')}}" alt="learn more" />
                </a>
              </div>
              <div class="slider-text">
                <h1>CONSOLAS<br><span>Y MAS</span></h1>
              </div>
              <div class="clear"></div>
            </div>
          </div>
        </div>
        <div class="clear"></div>
      </div>
    </div>
    <div class="clear"></div>
  </div>
  <div class="content_top">
    <div class="heading">
      <h3>Productos</h3>
    </div>
    <div class="clear"></div>
  </div>
  <div class="section group">
    @foreach($products as $product)
      <div class="grid_1_of_4 images_1_of_4">
        <a href="">
          <img src="{{ asset('images/Products/'.$product->images->pluck('file')->first())}}" width="212px" height="212px" alt=""/>
        </a>
        <h2>{{ $product->name }}</h2>
        <div class="price-details">
          <div class="price-number">
            <p><span class="rupees">${{ $product->price }}</span></p>
          </div>
          <div class="add-cart">
            <h4>
              <a href="{{ route('detail-product', encrypt($product->id)) }}">Ver detalles</a>
            </h4>
          </div>
          <div class="clear"></div>
        </div>
      </div>
    @endforeach
  </div>
@endsection
