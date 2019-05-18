<!-- SECTION -->
		<div class="section">
			<!-- container -->
			<div class="container">
				<!-- row -->
				<div class="row">
					<!-- shop -->
					@foreach($col as $c)
					<div class="col-md-4 col-xs-6">
						<div class="shop">
							<div class="shop-img">
								<img src="/storage/{{$c->image}}" alt="" width="360px" height="240px">
							</div>
							<div class="shop-body">
								<h3>{{$c->text}}</h3>
							<a href="{{$c->link}}" class="cta-btn">Mua ngay <i class="fa fa-arrow-circle-right"></i></a>
							</div>
						</div>
					</div>
						<!-- /shop -->
					@endforeach
					<!-- shop -->
					
				</div>
				<!-- /row -->
			</div>
			<!-- /container -->
		</div>
		<!-- /SECTION -->

		<!-- SECTION -->
		<div class="section">
			<!-- container -->
			<div class="container">
				<!-- row -->
				<div class="row">

					<!-- section title -->
					<div class="col-md-12">
						<div class="section-title">
							<h3 class="title">Sản phẩm mới</h3>
							<div class="section-nav">
								<ul class="section-tab-nav tab-nav">
										<li class="active"><a data-toggle="tab" href="#tab2">Laptops</a></li>
										<li><a data-toggle="tab" href="#tab2">Smartphones</a></li>
										<li><a data-toggle="tab" href="#tab2">Cameras</a></li>
										<li><a data-toggle="tab" href="#tab2">Accessories</a></li>
								</ul>
							</div>
						</div>
					</div>
					<!-- /section title -->

					<!-- Products tab & slick -->
					<div class="col-md-12">
						<div class="row">
							<div class="products-tabs">
								<!-- tab -->
								<div id="tab1" class="tab-pane active">
									<div class="products-slick" data-nav="#slick-nav-1">
										
										@foreach($new_product as $product)
										<!-- product -->
										<div class="product">
											<div class="product-img">
												<img src="./storage/{{$product->link}}" alt="">
												
											</div>
											<div class="product-body">
												<p class="product-category">Điện thoại</p>
											<h3 class="product-name"><a href="{{URL::to('product',$product->id)}}">{{$product->name}}</a></h3>
												<h4 class="product-price">{{$product->price}}đ <del class="product-old-price"></del></h4>
												<div class="product-rating">
													<i class="fa fa-star"></i>
													<i class="fa fa-star"></i>
													<i class="fa fa-star"></i>
													<i class="fa fa-star"></i>
													<i class="fa fa-star"></i>
												</div>
												<div class="product-btns">
													<button class="add-to-wishlist"><i class="fa fa-heart-o"></i><span class="tooltipp">add to wishlist</span></button>
													<button class="add-to-compare"><i class="fa fa-exchange"></i><span class="tooltipp">add to compare</span></button>
													<button class="quick-view"><i class="fa fa-eye"></i><span class="tooltipp">quick view</span></button>
												</div>
											</div>
											<div class="add-to-cart">
											<a href=""><button class="add-to-cart-btn" ><i class="fa fa-shopping-cart"></i> Add to cart</button> </a>
											</div>
										</div>
										<!-- /product -->
										@endforeach
										
									</div>
									<div id="slick-nav-1" class="products-slick-nav"></div>
								</div>
								<!-- /tab -->
							</div>
						</div>
					</div>
					<!-- Products tab & slick -->
				</div>
				<!-- /row -->
			</div>
			<!-- /container -->
		</div>
		<!-- /SECTION -->

		<!-- HOT DEAL SECTION -->
		<div id="hot-deal" class="section">
			<!-- container -->
			<div class="container">
				<!-- row -->
				<div class="row">
					<div class="col-md-12">
						<div class="hot-deal">
							<ul class="hot-deal-countdown">
								<li>
									<div>
										<h3>02</h3>
										<span>Days</span>
									</div>
								</li>
								<li>
									<div>
										<h3 id="h">10</h3>
										<span>Hours</span>
									</div>
								</li>
								<li>
									<div>
										<h3 id="m">34</h3>
										<span>Mins</span>
									</div>
								</li>
								<li>
									<div>
										<h3 id="s">60</h3>
										<span>Secs</span>
									</div>
								</li>
							</ul>
							<h2 class="text-uppercase">hot deal this week</h2>
							<p>New Collection Up to 50% OFF</p>
							<a class="primary-btn cta-btn" href="{{URL::to('index')}}">Shop now</a>
						</div>
					</div>
				</div>
				<!-- /row -->
			</div>
			<!-- /container -->
		</div>
		<!-- /HOT DEAL SECTION -->

		
		<!-- SECTION -->
		<div class="section">
			<!-- container -->
			<div class="container">
				<!-- row -->
				<div class="row">

					<!-- section title -->
					<div class="col-md-12">
						<div class="section-title">
							<h3 class="title">Giảm giá nhiều nhất</h3>
							<div class="section-nav">
								<ul class="section-tab-nav tab-nav">
									<li class="active"><a data-toggle="tab" href="#tab2">Laptops</a></li>
									<li><a data-toggle="tab" href="#tab2">Smartphones</a></li>
									<li><a data-toggle="tab" href="#tab2">Cameras</a></li>
									<li><a data-toggle="tab" href="#tab2">Accessories</a></li>
								</ul>
							</div>
						</div>
					</div>
					<!-- /section title -->

					<!-- Products tab & slick -->
					<div class="col-md-12">
						<div class="row">
							<div class="products-tabs">
								<!-- tab -->
								<div id="tab2" class="tab-pane fade in active">
									<div class="products-slick" data-nav="#slick-nav-2">
										
										@foreach($topSelling_product as $product)
										<!-- product -->
										<div class="product">
											<div class="product-img">
												<img src="./storage/{{$product->link}}" alt="">
												
											</div>
											<div class="product-body">
												<p class="product-category">Điện thoại</p>
											<h3 class="product-name"><a href="{{URL::to('product',$product->id)}}">{{$product->name}}</a></h3>
												<h4 class="product-price">{{$product->price}}đ <del class="product-old-price"></del></h4>
												<div class="product-rating">
													<i class="fa fa-star"></i>
													<i class="fa fa-star"></i>
													<i class="fa fa-star"></i>
													<i class="fa fa-star"></i>
													<i class="fa fa-star"></i>
												</div>
												<div class="product-btns">
													<button class="add-to-wishlist"><i class="fa fa-heart-o"></i><span class="tooltipp">add to wishlist</span></button>
													<button class="add-to-compare"><i class="fa fa-exchange"></i><span class="tooltipp">add to compare</span></button>
													<button class="quick-view"><i class="fa fa-eye"></i><span class="tooltipp">quick view</span></button>
												</div>
											</div>
											<div class="add-to-cart">
												<button class="add-to-cart-btn"><i class="fa fa-shopping-cart"></i> add to cart</button>
											</div>
										</div>
										<!-- /product -->
											@endforeach
										
									</div>
									<div id="slick-nav-2" class="products-slick-nav"></div>
								</div>
								<!-- /tab -->
							</div>
						</div>
					</div>
					<!-- /Products tab & slick -->
				</div>
				<!-- /row -->
			</div>
			<!-- /container -->
		</div>
		<!-- /SECTION -->

		<!-- SECTION -->
		<div class="section">
			<!-- container -->
			<div class="container">
				<!-- row -->
				<div class="row">
					<div class="col-md-4 col-xs-6">
						<div class="section-title">
							<h4 class="title">iPhone Nổi Bật</h4>
							<div class="section-nav">
								<div id="slick-nav-3" class="products-slick-nav"></div>
							</div>
						</div>

						<div class="products-widget-slick" data-nav="#slick-nav-3">
							
							
							<div>
									@foreach ($topSelling_bottom_iPhone as $iPhone)
								<!-- product widget -->
								<div class="product-widget">
									<a href="{{URL::to('product',$product->id)}}">
									<div class="product-img">
									<img src="./storage/{{$iPhone->link}}" alt="">
									</div>
									</a>
									<div class="product-body">
										<p class="product-category">Điện thoại</p>
									<h3 class="product-name"><a href="{{URL::to('product',$product->id)}}">{{$iPhone->name}}</a></h3>
									<h4 class="product-price">{{$iPhone->price}}đ<del class="product-old-price"></del></h4>
									</div>
								</div>
								<!-- /product widget -->
								@endforeach
							</div>
							
						</div>
					</div>

					<div class="col-md-4 col-xs-6">
						<div class="section-title">
							<h4 class="title">Samsung Nổi Bật</h4>
							<div class="section-nav">
								<div id="slick-nav-4" class="products-slick-nav"></div>
							</div>
						</div>

						<div class="products-widget-slick" data-nav="#slick-nav-4">
							<div>
								@foreach($topSelling_bottom_Samsung as $samSung)
								<!-- product widget -->
								<div class="product-widget">
									<a href="{{URL::to('product',$product->id)}}">
									<div class="product-img">
									<img src="./storage/{{$samSung->link}}" alt="">
									</div>
									</a>
									<div class="product-body">
										<p class="product-category">Điện thoại</p>
										<h3 class="product-name"><a href="{{URL::to('product',$product->id)}}">{{$samSung->name}}</a></h3>
										<h4 class="product-price">{{$samSung->price}}đ<del class="product-old-price"></del></h4>
									</div>
								</div>
								<!-- /product widget -->
								@endforeach
								
							</div>
						</div>
					</div>

					<div class="clearfix visible-sm visible-xs"></div>

					<div class="col-md-4 col-xs-6">
						<div class="section-title">
							<h4 class="title">Oppo Nổi Bật</h4>
							<div class="section-nav">
								<div id="slick-nav-5" class="products-slick-nav"></div>
							</div>
						</div>

						<div class="products-widget-slick" data-nav="#slick-nav-5">
							<div>
								@foreach($topSelling_bottom_Oppo as $oppo)
								<!-- product widget -->
								<div class="product-widget">
									<a href="{{URL::to('product',$product->id)}}">
									<div class="product-img">
										<img src="./storage/{{$oppo->link}}" alt="">
									</div>
									</a>
									<div class="product-body">
										<p class="product-category">Điện thoại</p>
									<h3 class="product-name"><a href="{{URL::to('product',$product->id)}}">{{$oppo->name}}</a></h3>
										<h4 class="product-price">{{$oppo->price}}đ<del class="product-old-price"></del></h4>
									</div>
								</div>
								<!-- /product widget -->
								@endforeach
								
							</div>
						</div>
					</div>

				</div>
				<!-- /row -->
			</div>
			<!-- /container -->
		</div>
		<!-- /SECTION -->