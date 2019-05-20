<header>
			<!-- TOP HEADER -->
			<!-- <div id="top-header">
				<div class="container">
					<ul class="header-links pull-left">
						<li><a href="#"><i class="fa fa-phone"></i> +021-95-51-84</a></li>
						<li><a href="#"><i class="fa fa-envelope-o"></i> email@email.com</a></li>
						<li><a href="#"><i class="fa fa-map-marker"></i> 1734 Stonecoal Road</a></li>
					</ul>
					<ul class="header-links pull-right">
						<li><a href="#"><i class="fa fa-dollar"></i> USD</a></li>
						<li><a href="#"><i class="fa fa-user-o"></i> My Account</a></li>
					</ul>
				</div>
			</div> -->
			<!-- /TOP HEADER -->

			<!-- MAIN HEADER -->
			<div id="header">
				<!-- container -->
				<div class="container">
					<!-- row -->
					<div class="row">
						<!-- LOGO -->
						<div class="col-md-3">
							<div class="header-logo">
								<a href="{{URL::to('index')}}" class="logo">
									<img src="./img/logo.png" alt="">
								</a>
							</div>
						</div>
						<!-- /LOGO -->

						<!-- SEARCH BAR -->
						<div class="col-md-6">
							<div class="header-search">
							<form action="{{URL::to('store')}}" method="get" role="search">
								<select class="input-select" name="brand[]">
									<option value="">Tất cả </option>
									@foreach ($brand as $b)
									<option value="{{$b->id}}">{{$b->name}}</option>
									@endforeach 
								</select>
								<input class="input" placeholder="Tìm kiếm . . . " @if(isset($search)) value="{{$search}}" @endif name="search">
								<button class="search-btn">Search</button>
							</form>
						</div>
							
						</div>
						<!-- /SEARCH BAR -->

						<div class="col-md-3 clearfix">
							<div class="header-ctn">
								<!-- Wishlist -->
								<div>
									@if(isset(Auth::user()->name))
									<a href="{{ URL::to('account') }}" style="    margin-bottom: 10px;" class="flex-c-m trans-04 p-lr-25">
										{{Auth::user()->name}}
									</a>
									<a href="{{ URL::to('logout') }}" class="flex-c-m trans-04 p-lr-25">
										Đăng xuất
									</a>
									@else
									<a href="{{ URL::to('login') }}" style="    margin-bottom: 10px;" class="flex-c-m trans-04 p-lr-25">
										Đăng nhập
									</a>
						
									<a href="{{ URL::to('register') }}" class="flex-c-m trans-04 p-lr-25">
										Đăng ký
									</a>
									@endif
								</div>
								<!-- /Wishlist -->
								<!-- Cart -->
								<div class="dropdown">
									<a class="dropdown-toggle" data-toggle="dropdown" aria-expanded="true">
										<i class="fa fa-shopping-cart"></i>
										<span>Giỏ hàng</span>
										<div class="qty" id="qtytotal">@if(Session('cart')){{Cart::instance('shopping')->count()}} @else
										0 @endif</div>
									</a>
									<div class="cart-dropdown">
										<div class="cart-list">
											@if(Cart::content())
											@foreach(Cart::instance('shopping')->content() as $product)
											<div class="product-widget">
												<div class="product-img">
													<img src="./storage/{{$product->options->img}}" alt="">
												</div>
												<div class="product-body">
													<h3 class="product-name"><a href="#">{{$product->name}}</a></h3>
													<h4 class="product-price"><span class="qty">{{$product->qty}}</span>
														x {{number_format($product->price)}}</h4>
												</div>
												<button class="delete">
													<i class="fa fa-close">
													</i>
												</button>
												<input type="hidden" value="{{$product->rowId}}">
											</div>
											@endforeach
											@endif
											<!-- <div class="product-widget">
												<div class="product-img">
													<img src="./img/product02.png" alt="">
												</div>
												<div class="product-body">
													<h3 class="product-name"><a href="#">product name goes here</a></h3>
													<h4 class="product-price"><span class="qty">3x</span>$980.00</h4>
												</div>
												<button class="delete"><i class="fa fa-close"></i></button>
											</div>

											<div class="product-widget">
												<div class="product-img">
													<img src="./img/product02.png" alt="">
												</div>
												<div class="product-body">
													<h3 class="product-name"><a href="#">product name goes here</a></h3>
													<h4 class="product-price"><span class="qty">3x</span>$980.00</h4>
												</div>
												<button class="delete"><i class="fa fa-close"></i></button>
											</div>

											<div class="product-widget">
												<div class="product-img">
													<img src="./img/product02.png" alt="">
												</div>
												<div class="product-body">
													<h3 class="product-name"><a href="#">product name goes here</a></h3>
													<h4 class="product-price"><span class="qty">3x</span>$980.00</h4>
												</div>
												<button class="delete"><i class="fa fa-close"></i></button>
											</div> -->
										</div>
										<div class="cart-summary">
											<h5 id="totall">Tổng: @if(Session('cart')){{ number_format(Cart::instance('shopping')->subtotal(0,'',''))}} @else
										0 @endif</h5>
										</div>
										<div class="cart-btns" style="margin: auto;">
											<a href="/checkout" style="    width: 100%;">Thanh toán  <i class="fa fa-arrow-circle-right"></i></a>
										</div>
									</div>
								</div>
								<!-- /Cart -->

								<!-- Menu Toogle -->
								<div class="menu-toggle">
									<a href="#">
										<i class="fa fa-bars"></i>
										<span>Menu</span>
									</a>
								</div>
								<!-- /Menu Toogle -->
							</div>
						</div>
					</div>
					<!-- row -->
				</div>
				<!-- container -->
			</div>
			<!-- /MAIN HEADER -->
		</header>