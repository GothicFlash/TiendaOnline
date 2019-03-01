@extends('store.layouts.app')
@section('title','Ventas en linea')
@section('content')
	<div class="content_top">
		<div class="back-links">
			<p>Inicio >>>> {{ ($product->category)? $product->category->name : "Sin categoria" }}</p>
		</div>
		<div class="clear"></div>
	</div>
	<div class="section group">
		<div class="cont-desc span_1_of_2">
			<div class="product-details">
				<div class="grid images_3_of_2">
					<div id="container">
						<div id="products_example">
							<div id="products">
								<div class="slides_container">
									@foreach ($product->images as $image)
										<a href="#" target="_blank">
											<img src="{{ asset('images/Products/'.$image->file) }}" width="480px" height="300px" alt=" " />
										</a>
									@endforeach
								</div>
								<ul class="pagination">
									@foreach ($product->images as $image)
										<img src="{{ asset('images/Products/'.$image->file) }}" width="55px" height="41px" alt=" " />
									@endforeach
								</ul>
							</div>
						</div>
					</div>
				</div>
				<div class="desc span_3_of_2">
					<h2>{{ $product->name }}</h2>
					<div class="price">
						<p>Price:
							<span>
								${{ number_format($product->price,2) }}
							</span>
						</p>
					</div>
					<div class="share-desc">
						<div class="button">
							<span>
								<a href="{{ route('cart-add',encrypt($product->id)) }}">Agregar al carrito</a>
							</span>
						</div>
						<div class="clear"></div>
					</div>
				</div>
				<div class="clear"></div>
			</div>
			<div class="product_desc">
				<div id="horizontalTab">
					<ul class="resp-tabs-list">
						<li>Detalles</li>
						<div class="clear"></div>
					</ul>
					<div class="resp-tabs-container">
						<div class="product-desc">
							<p>{{ $product->description }}</p>
						</div>
					</div>
				</div>
			</div>
			<script type="text/javascript">
				$(document).ready(function () {
					$('#horizontalTab').easyResponsiveTabs({
						type: 'default', //Types: default, vertical, accordion
						width: 'auto', //auto or any width like 600px
						fit: true   // 100% fit in a container
					});
				});
			</script>
		</div>
		<div class="rightsidebar span_3_of_1">
			<h2>CATEGORIAS</h2>
			<ul class="side-w3ls">
				<li>
					<a href="{{ route('home') }}">Todas</a>
				</li>
				@foreach ($categories as $category)
					<li>
						<a href="{{ route('product.search',encrypt($category->id)) }}">{{ $category->name }}</a>
					</li>
				@endforeach
			</ul>
		</div>
	</div>
@endsection
