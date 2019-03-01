<div class="header">
		<div class="headertop_desc">
			<div class="call">
				 <p><span>¿Necesitas ayuda?</span> LLámanos!!! <span class="number">(777) 229-3500</span></span></p>
			</div>
			@if (Route::has('login'))
      	<div class="account_desc">
        	@auth
						<ul class="dropdown">
							<li>{{ Auth::user()->name }}</li>
							<li><a href="{{ route('logout') }}">Cerrar sesión</a></li>
						</ul>
          @else
          	<a href="{{ route('login') }}">Iniciar sesión</a>
            <a href="{{ route('register') }}">Registrarse</a>
          @endauth
        </div>
      @endif
			<div class="clear"></div>
		</div>
		<div class="header_top">
			<div class="logo">
				<a href="{{ route('home') }}"><img src="{{ asset ('images/logo.png') }}" width="300px" height="150px" alt="" /></a>
			</div>
			  <script type="text/javascript">
			function DropDown(el) {
				this.dd = el;
				this.initEvents();
			}
			DropDown.prototype = {
				initEvents : function() {
					var obj = this;

					obj.dd.on('click', function(event){
						$(this).toggleClass('active');
						event.stopPropagation();
					});
				}
			}

			$(function() {

				var dd = new DropDown( $('#dd') );

				$(document).click(function() {
					// all dropdowns
					$('.wrapper-dropdown-2').removeClass('active');
				});

			});

		</script>
	 <div class="clear"></div>
  </div>

  <div class="header_bottom">
	     	<div class="menu">
	     		<ul>
			    	<li><a href="{{ route('home') }}">Inicio</a></li>
			    	<li><a href="../about">Acerca</a></li>
						@auth
							<li><a href="{{ route('sales-show') }}">Pedidos</a></li>
						@endauth
			    	<div class="clear"></div>
     			</ul>
	     	</div>
	     	<div class="clear"></div>
	     </div>
