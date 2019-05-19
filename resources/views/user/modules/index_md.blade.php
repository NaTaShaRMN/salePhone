
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
									@foreach($brands as $brand)
									<li class="@if ($loop->index === 0) active @endif"><a data-toggle="tab" href="#brand{{$brand->id}}">{{$brand->name}}</a></li>
									@endforeach
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
								@foreach($brands as $brand)
								<div id="brand{{$brand->id}}" class="tab-pane @if ($loop->index === 0) active @endif">
									<div class="products-slick" data-nav="#slick-nav-1">
										<!-- product -->
										@foreach($brand->products as $product)
											<div class="product">
												<div class="product-img">
													<img src="./storage/{{$product->link}}" alt="">
													<div class="product-label">
														<span class="sale">{{$product->sale}}%</span>
														<span class="new">New</span>
													</div>
												</div>
												<div class="product-body">
													<p class="product-category">{{$brand->name}}</p>
													<h3 class="product-name"><a href="/product/{{$product->id}}">{{$product->name}}</a></h3>
													<h4 class="product-price">{{number_format($product->price*(1-$product->sale/100))}}<del class="product-old-price">{{number_format($product->price)}}</del></h4>
													<div class="product-rating">
														<i class="fa fa-star"></i>
														<i class="fa fa-star"></i>
														<i class="fa fa-star"></i>
														<i class="fa fa-star"></i>
														<i class="fa fa-star"></i>
													</div>
												</div>
												<div class="add-to-cart">
													<button class="add-to-cart-btn"><i class="fa fa-shopping-cart"></i> add to cart</button>
													<input type="hidden" value="{{$product->id}}">
												</div>
											</div>
										@endforeach

										<!-- /product -->
									</div>
									<div id="slick-nav-1" class="products-slick-nav"></div>
								</div>
								@endforeach
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
		<div id="hot-deal" style="background-image: url('/storage/{{$silde->image}}');min-height: 350px;" class="section">
			<!-- container -->
			<div class="container">
				<!-- row -->
				<div class="row">
					<div class="col-md-12">
						<div class="hot-deal">
							<!-- <ul class="hot-deal-countdown">
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
							</ul> -->
							<h2 class="text-uppercase">{{$silde->text}}</h2>
							<a class="primary-btn cta-btn" href="{{$silde->link}}">Shop now</a>
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
										
										@foreach ($topSell as $product)
										
										<!-- product -->
										<div class="product">
											<div class="product-img">
												<img src="/storage/{{$product->link}}" alt="">
												<div class="product-label">
													<span class="sale">Sale</span>
													<span class="new">NEW</span>
												</div>
											</div>
											<div class="product-body">
												<p class="product-category">Điện thoại</p>
											<h3 class="product-name"><a href="asdasda">{{$product->name}}</a></h3>
												<h4 class="product-price"> {{number_format($product->price*(1- $product->sale/100))}}<del class="product-old-price">{{number_format($product->price)}}</del></h4>
												<!-- <div class="product-rating">
													<i class="fa fa-star"></i>
													<i class="fa fa-star"></i>
													<i class="fa fa-star"></i>
													<i class="fa fa-star"></i>
													<i class="fa fa-star"></i>
												</div> -->
												<div class="product-btns">
													<button class="add-to-wishlist"><i class="fa fa-heart-o"></i><span class="tooltipp">Thêm vào yêu thích</span></button>
												</div>
											</div>
											<div class="add-to-cart">
												<button class="add-to-cart-btn"><i class="fa fa-shopping-cart"></i>Thêm vào giỏ hàng</button>
												<input type="hidden" value="{{$product->id}}">
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
					@foreach($brands as $brand)
					@if ($loop->index < 4)
					<div class="col-md-3 col-xs-6">
						<div class="section-title">
							<a href="/store?brand[]={{$brand->id}}"><h4 class="title">{{$brand->name}} Nổi Bật</h4></a>
							<div class="section-nav">
								<div id="slick-nav-3" class="products-slick-nav"></div>
							</div>
						</div>

						<div class="products-widget-slick" data-nav="#slick-nav-3">
							<div>
								
								@foreach($brand->products as $product)
								<!-- product widget -->
								<div class="product-widget">
									<a href="">
									<div class="product-img">
									<img src="/storage/{{$product->link}}" alt="">
									</div>
									</a>
									<div class="product-body">
										<p class="product-category">Điện thoại</p>
									<h3 class="product-name"><a href="">{{$product->name}}</a></h3>
									<h4 class="product-price">{{number_format($product->price)}} VNĐ<del class="product-old-price"></del></h4>
									</div>
								</div>
								<!-- /product widget -->
								@endforeach
							</div>
							
						</div>
					</div>
					@endif
					@endforeach

				</div>
				<!-- /row -->
			</div>
			<!-- /container -->
		</div>
		<!-- /SECTION