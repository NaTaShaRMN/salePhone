<!-- BREADCRUMB -->
		<div id="breadcrumb" class="section">
			<!-- container -->
			<div class="container">
				<!-- row -->
				<div class="row">
					<div class="col-md-12">
						<h3 class="breadcrumb-header">Kiểm tra đơn hàng</h3>
						<ul class="breadcrumb-tree">
							<li><a href="#">Home</a></li>
							<li class="active">Thanh toán</li>
						</ul>
					</div>
				</div>
				<!-- /row -->
			</div>
			<!-- /container -->
		</div>
		<!-- /BREADCRUMB -->

		<!-- SECTION -->
		<form action="{{URL::to('addorder')}}" method="post" enctype="">
			@csrf
		<div class="section">
			<!-- container -->
			<div class="container">
				<!-- row -->
				<div class="row">

					<div class="col-md-12">
						<!-- Billing Details -->
						<div class="billing-details">
							<div class="section-title">
								<h3 class="title">Hóa đơn</h3>
							</div>
							<input type="hidden" name="id" value="@if(isset(Auth::user()->name))
							{{Auth::user()->id}}
						@else
							-1
						@endif">
							<div class="form-group">
								<input class="input" type="text" name="name" placeholder="Tên" required>
							</div>
							<div class="form-group">
								<input class="input" type="text" name="address" placeholder="Địa chỉ" required>
							</div>
							<div class="form-group">
								<input class="input" type="tel" name="phone" placeholder="Số điện thoại" required>
							</div>
						</div>
						<!-- /Billing Details -->

						<!-- Shiping Details -->
						<div class="shiping-details">
							<div class="section-title">
								<h3 class="title">Địa chỉ nhận hàng</h3>
							</div>
							<div class="input-checkbox">
								<input type="checkbox" name="check" id="shiping-address">
								<label for="shiping-address">
									<span></span>
									Nhận hàng ở địa chỉ khác
								</label>
								<div class="caption">
									<div class="form-group">
										<input class="input" type="text" name="nameN" placeholder="Tên">
									</div>
									<div class="form-group">
										<input class="input" type="text" name="addressN" placeholder="Địa chỉ">
									</div>
									<div class="form-group">
										<input class="input" type="tel" name="phoneN" placeholder="Số điện thoại">
									</div>
								</div>
							</div>
						</div>
						<!-- /Shiping Details -->

						<!-- Order notes -->
						<div class="order-notes" style="margin-bottom: 20px">
							<textarea class="input" name="description" placeholder="Order Notes"></textarea>
						</div>
						<!-- /Order notes -->
					</div>

					<!-- Order Details -->
					<div class="col-md-12 order-details">
						<div class="section-title text-center">
							<h3 class="title">Đơn hàng của bạn</h3>
						</div>
						<div class="order-summary">
							<div class="order-col">
								<div><strong>Sản phẩm</strong></div>
								<div><strong>Giá</strong></div>
							</div>
							<div class="order-products">

								
								@if(Cart::content())
								@foreach(Cart::instance('shopping')->content() as $product)
								
								<div class="order-col">
									<div>{{$product->qty}}x {{$product->name}}</div>
									<div><img style="width: 100px;" src="./storage/{{$product->options->img}}" alt=""></div>
									<div>{{number_format($product->price*$product->qty)}}</div>
								</div>
								@endforeach
								@endif
							</div>
							<div class="order-col">
								<div>Shiping</div>
								<div><strong>FREE</strong></div>
							</div>
							<div class="order-col">
								<div><strong>Tổng</strong></div>
								<div><strong class="order-total">@if(Session('cart')){{ number_format(Cart::instance('shopping')->subtotal(0,'',''))}} @else
										0 @endif</strong></div>
							</div>
						</div>
						<div class="payment-method">
							<div class="input-radio">
								<input type="radio" name="payment" id="payment-1">
								<label for="payment-1">
									<span></span>
									Ship COD
								</label>
								<div class="caption">
									<p>Thanh toán khi nhận hàng.</p>
								</div>
							</div>
						</div>
						<!-- <div class="input-checkbox">
							<input type="checkbox" id="terms">
							<label for="terms">
								<span></span>
								I've read and accept the <a href="#">terms & conditions</a>
							</label>
						</div> -->
						@if(isset(Auth::user()->name))
							<button type="submit" href="" class="primary-btn order-submit" style="width: 30%;margin: auto;">Đặt hàng</button>
						@else
							<a href="/login" class="primary-btn order-submit" style="width: 30%;margin: auto;">Đăng nhập</a>
						@endif
					
					</div>
					<!-- /Order Details -->

					
				</div>
				<!-- /row -->
			</div>
			<!-- /container -->
		</div>
		</form>
		<!-- /SECTION -->