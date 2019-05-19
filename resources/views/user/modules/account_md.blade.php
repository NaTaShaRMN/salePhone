<div class="section">
			<!-- container -->
			<div class="container">
				<!-- row -->
				<div class="row">
					<b style="display: inline-block;margin-right: 30px;">Tên người dùng:</b> 			 {{Auth::user()->name}}
				</div>
				<div class="row">
					<b style="display: inline-block;margin-right: 30px;">Email:</b> 			{{Auth::user()->email}}
				</div>
				<div class="row">
					<b style="display: inline-block;margin-right: 30px;">Số điện thoại:</b>			 {{Auth::user()->phone}}
				</div>
				<!-- /row -->
			</div>
			<!-- /container -->

			<div class="container" style="margin-top: 20px;">
				<!-- row -->
				<div class="row">
					<div style="font-size: 20px;">Lịch sử đặt hàng:</div>

					<div class="order-summary">
						<div class="order-col">
							<div><strong>Sản phẩm</strong></div>
							<div><strong>Giá</strong></div>
						</div>
						<div class="order-products">
							
							@foreach($orderDetail as $o1)
							@foreach($o1->od as $o)
							<div class="order-col">
								<div><a href="/product/{{$o->product_id}}">{{$o->quantity}} x {{$o->product->name}} </a></div>
								<div><img style="width: 100px;" src="./storage/{{$o->product->links[0]->link}}" alt=""></div>
								<div>{{number_format($o->priced)}}</div>
							</div>
							@endforeach
							@endforeach
							
							
							
						</div>
					</div>
					

				</div>
				<!-- /row -->
			</div>

		</div>