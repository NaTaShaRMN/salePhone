<footer id="footer">
			<!-- top footer -->
			<div class="section">
				<!-- container -->
				<div class="container">
					<!-- row -->
					<div class="row">
						<div class="col-md-3 col-xs-6">
							<div class="footer">
								<h3 class="footer-title">Liên lạc với chúng tôi</h3>
								<ul class="footer-links">
									<li><a href="https://www.youtube.com/watch?v=dGm6_u4ULss"><i class="fa fa-map-marker"></i>Đại học Công Nghệ (UET)</a></li>
									<li><a href="https://www.youtube.com/watch?v=dGm6_u4ULss"><i class="fa fa-phone"></i>0987654321</a></li>
									<li><a href="https://www.youtube.com/watch?v=dGm6_u4ULss"><i class="fa fa-envelope-o"></i>yasuo20gg@gmail.com</a></li>
								</ul>
							</div>
						</div>

						<div class="col-md-3 col-xs-6">
							<div class="footer">
								<h3 class="footer-title">Thể Loại</h3>
								<ul class="footer-links">
									@foreach ($brand as $b)
									<li><a href="/store?brand[]={{$b->id}}">{{$b->name}} </a></li>
									@endforeach 
								</ul>
							</div>
						</div>

						<div class="clearfix visible-xs"></div>

						<div class="col-md-3 col-xs-6">
							<div class="footer">
								<h3 class="footer-title">Thông Tin</h3>
								<ul class="footer-links">
									<li><a href="https://github.com/thenam153/salePhone">Về chúng tôi</a></li>
									<li><a href="https://github.com/thenam153/salePhone">Liên lạc</a></li>
									<li><a href="https://github.com/thenam153/salePhone">Chính sách và điều khoản</a></li>
								</ul>
							</div>
						</div>

						<div class="col-md-3 col-xs-6">
							<div class="footer">
								<h3 class="footer-title">Dịch vụ</h3>
								<ul class="footer-links">
									<li><a href="/account">Tài khoản</a></li>
									<li><a href="/checkout">Xem giỏ hàng</a></li>
									<li><a href="/account">Kiểm tra đơn hàng</a></li>
									<li><a href="https://github.com/thenam153/salePhone">Trợ giúp</a></li>
								</ul>
							</div>
						</div>
					</div>
					<!-- /row -->
				</div>
				<!-- /container -->
			</div>
			<!-- /top footer -->

			<!-- bottom footer -->
			<div id="bottom-footer" class="section">
				<div class="container">
					<!-- row -->
					<div class="row">
						<div class="col-md-12 text-center">
							<ul class="footer-payments">
								<li><a href="#"><i class="fa fa-cc-visa"></i></a></li>
								<li><a href="#"><i class="fa fa-credit-card"></i></a></li>
								<li><a href="#"><i class="fa fa-cc-paypal"></i></a></li>
								<li><a href="#"><i class="fa fa-cc-mastercard"></i></a></li>
								<li><a href="#"><i class="fa fa-cc-discover"></i></a></li>
								<li><a href="#"><i class="fa fa-cc-amex"></i></a></li>
							</ul>
							<span class="copyright">
								<!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
								Copyright &copy;<script>document.write(new Date().getFullYear());</script> All rights reserved | This template is made with <i class="fa fa-heart-o" aria-hidden="true"></i> by <a href="https://colorlib.com" target="_blank">Colorlib</a>
							<!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
							</span>
						</div>
					</div>
						<!-- /row -->
				</div>
				<!-- /container -->
			</div>
			<!-- /bottom footer -->
		</footer>