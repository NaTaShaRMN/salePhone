		<div id="breadcrumb" class="section">
			<!-- container -->
			<div class="container">
				<!-- row -->
				<div class="row">
					<div class="col-md-12">
						<ul class="breadcrumb-tree">
							<li><a href="{{URL::to('index')}}">Home</a></li>
							<li class="active"></li>
						</ul>
					</div>
				</div>
				<!-- /row -->
			</div>
			<!-- /container -->
		</div>
		<!-- /BREADCRUMB -->

		<!-- SECTION -->
		<form action="{{URL::to('store')}}" method="get">
		<div class="section">
			<!-- container -->
			<div class="container">
				<!-- row -->
				<div class="row">
					<!-- ASIDE -->
					<div id="aside" class="col-md-3">
						<!-- aside Widget -->
						<div class="aside">
							<h3 class="aside-title">Nhãn hiệu nổi tiếng</h3>
							<div class="checkbox-filter">
								@foreach ($brand as $b)
									<div class="input-checkbox">
									<input type="checkbox" name="brand[]" 
									@foreach ($brandSelected as $sl)
										@if ($sl == $b->id )
											checked
										@endif
									@endforeach
									 value="{{$b->id}}" id="category-{{$b->id}}">
									<label for="category-{{$b->id}}">
										<span></span>
										{{$b->name}}
										<small></small>
									</label>
								</div>
								@endforeach
								
							</div>
						</div>
						<!-- /aside Widget -->

						<!-- aside Widget -->
						<!-- <div class="aside">
							<h3 class="aside-title">Price</h3>
							<div class="price-filter">
								<div id="price-slider"></div>
								<div class="input-number price-min">
									<input name="priceMin" id="price-min" type="number">
									<span class="qty-up">+</span>
									<span class="qty-down">-</span>
								</div>
								<span>-</span>
								<div class="input-number price-max">
									<input name="priceMax" id="price-max" type="number">
									<span class="qty-up">+</span>
									<span class="qty-down">-</span>
								</div>
							</div>
						</div> -->
						<!-- /aside Widget -->

						

						<!-- aside Widget -->
						<div class="aside">
							<h3 class="aside-title">Top selling</h3>
							
							@foreach($topSelling_product as $product)
							<div class="product-widget">
							<a href="{{URL::to('product',$product->id)}}"><div class="product-img">
									<img src="./storage/{{$product->link}}" alt="">
								</div>
								<a>
								<div class="product-body">
									<p class="product-category">Điện thoại</p>
									<h3 class="product-name"><a href="#">{{$product->name}}</a></h3>
									<h4 class="product-price">{{$product->price}} <del class="product-old-price"></del></h4>
								</div>
							</div>
							@endforeach
							
						</div>
						<!-- /aside Widget -->
					</div>
					<!-- /ASIDE -->

					<!-- STORE -->
					<div id="store" class="col-md-9">
						<!-- store top filter -->
						<div class="store-filter clearfix">
							<div class="store-sort">
								<label>
									Sort By:
									<select class="input-select" name="fil">
										<option value="0">Phổ biến</option>
									</select>
								</label>

								<label>
									Show:
									<select class="input-select" name="pag">
										<option value="9">9</option>
										<option value="18">18</option>
										<option value="36">36</option>
									</select>
								</label>
							</div>
							<div class="store-grid">
								<button class="btn btn-default" type="submit">Lọc sản phẩm</button>
							</div>
						</div>
						<!-- /store top filter -->

						<!-- store products -->
						<div class="row">
							@foreach ($product_asType as $product)

							<!-- product -->
							<div class="col-md-4 col-xs-6">
								<div class="product">
									<div class="product-img">
										<img src="./storage/{{$product->link}}" alt="" width="262" height="262">
										<div class="product-label">
											<?php
												if ($product->sale > 0)
												echo '
													<span class="sale">Sale</span>
													';
											?>
											<span class="new">NEW</span>
										</div>
									</div>
									<div class="product-body">
										<p class="product-category">Category</p>
										<h3 class="product-name"><a href="{{URL::to('product',$product->id)}}">{{$product->name}}</a></h3>
										<h4 class="product-price">{{$product->price}}đ<del class="product-old-price"></del></h4>
										<div class="product-rating">
											<i class="fa fa-star"></i>
											<i class="fa fa-star"></i>
											<i class="fa fa-star"></i>
											<i class="fa fa-star"></i>
											<i class="fa fa-star"></i>
										</div>
										<div class="product-btns">
											<button class="add-to-wishlist"><i class="fa fa-heart-o"></i><span class="tooltipp">add to wishlist</span></button>
										</div>
									</div>
									<div class="add-to-cart">
										<button class="add-to-cart-btn"><i class="fa fa-shopping-cart"></i> add to cart</button>
									</div>
								</div>
							</div>
							<!-- /product -->
							@endforeach
							{{ $product_asType->links() }}
						</div>
						<!-- /store products -->

						<!-- store bottom filter -->
						<?php
						if (count($product_asType)==0)
                		echo '<div class="store-filter clearfix">
                    	<span class="store-qty">Showing 0 products</span>"
                    
                		</div>' ?>
						<!-- /store bottom filter -->
					</div>
					<!-- /STORE -->
				</div>
				<!-- /row -->
			</div>
			<!-- /container -->
		</div>
		<!-- /SECTION -->

</form>
