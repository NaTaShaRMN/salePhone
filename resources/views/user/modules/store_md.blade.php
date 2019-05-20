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
						
						<div class="aside">
							<h3 class="aside-title">Bộ nhớ</h3>
							<div class="checkbox-filter">
								@foreach ($storage as $b)
									<div class="input-checkbox">
									<input type="checkbox" name="storage[]" 
									@foreach ($storageSelected as $sl)
										@if ($sl == $b->id )
											checked
										@endif
									@endforeach
									 value="{{$b->id}}" id="storage-{{$b->id}}">
									<label for="storage-{{$b->id}}">
										<span></span>
										{{$b->size}} G
										<small></small>
									</label>
								</div>
								@endforeach
								
							</div>
						</div>
							
						<div class="aside">
							<h3 class="aside-title">Hệ điều hành</h3>
							<div class="checkbox-filter">
								@foreach ($operating_system as $b)
									<div class="input-checkbox">
									<input type="checkbox" name="operating_system[]" 
									@foreach ($operating_systemSelected as $sl)
										@if ($sl == $b->id )
											checked
										@endif
									@endforeach
									 value="{{$b->id}}" id="operating_system-{{$b->id}}">
									<label for="operating_system-{{$b->id}}">
										<span></span>
										{{$b->name}} 
										<small></small>
									</label>
								</div>
								@endforeach
								
							</div>
						</div>
						
						<!-- aside Widget -->
						<div class="aside">
							<h3 class="aside-title">Top selling</h3>
							
							@foreach($topSelling_product as $product)
							<div class="product-widget">
							<a href="{{URL::to('product',$product->id)}}"><div class="product-img">
									<img src="./storage/{{$product->links[0]->link}}" alt="">
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
										<img src="./storage/{{$product->links[0]->link}}" alt="" width="262" height="262">
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
										<h4 class="product-price">{{number_format($product->price)}} VNĐ<del class="product-old-price"></del></h4>
										<div class="product-rating">
											<i class="fa fa-star"></i>
											<i class="fa fa-star"></i>
											<i class="fa fa-star"></i>
											<i class="fa fa-star"></i>
											<i class="fa fa-star"></i>
										</div>
									</div>
									<div class="add-to-cart">
										<button class="add-to-cart-btn" type="button">
											<i class="fa fa-shopping-cart"></i> Thêm vào giỏ hàng
										</button>
										<input type="hidden" value="{{$product->id}}">
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
