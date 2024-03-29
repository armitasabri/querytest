<!doctype html>
<html lang="en">

<head>
	<!-- Required meta tags -->
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
	<link rel="icon" href="{{asset ('app-assets/css/img/favicon.png')}}" type="image/png">
	<title>های هیلز</title>
	<!-- Bootstrap CSS -->
	<link rel="stylesheet" href="{{asset ('app-assets/css/bootstrap.css')}}">
    <link rel="stylesheet" href="{{asset ('app-assets/css/bootstrap-v4-rtl-master/bootstrap-rtl.css')}} ">
	<link rel="stylesheet" href="{{asset ('app-assets/vendors/linericon/style.css')}}">
	<link rel="stylesheet" href="{{asset ('app-assets/css/font-awesome.min.css')}}">
	<link rel="stylesheet" href="{{asset ('app-assets/vendors/owl-carousel/owl.carousel.min.css')}}">
	<link rel="stylesheet" href="{{asset ('app-assets/vendors/lightbox/simpleLightbox.css')}}">
	<link rel="stylesheet" href="{{asset ('app-assets/vendors/nice-select/css/nice-select.css')}}">
	<link rel="stylesheet" href="{{asset ('app-assets/vendors/animate-css/animate.css')}}">
	<link rel="stylesheet" href="{{asset ('app-assets/vendors/jquery-ui/jquery-ui.css')}}">
	<!-- main css -->
	<link rel="stylesheet" href="{{asset ('app-assets/css/style.css')}}">
	<link rel="stylesheet" href="{{asset ('app-assets/css/responsive.css')}}">
</head>

<body>

	<!--================Header Menu Area =================-->
	<header class="header_area">
		<div class="top_menu row m0">
			<div class="container-fluid">
				<div class="float-left">
					<p>Call Us: 012 44 5698 7456 896</p>
				</div>
				<div class="float-right">
					<ul class="right_side">
						<li>
						<a href="{{route('login')}}">
								Login/Register
							</a>
						</li>
						<li>
							<a href="#">
								My Account
							</a>
						</li>
						<li>
							<a href="{{route('contact')}}">
								Contact Us
							</a>
						</li>
					</ul>
				</div>
			</div>
		</div>
		<div class="main_menu">
			<nav class="navbar navbar-expand-lg navbar-light">
				<div class="container-fluid">
					<!-- Brand and toggle get grouped for better mobile display -->
				<a class="navbar-brand logo_h" href="{{route('home')}}">
						<img src="{{asset ('app-assets/img/logo.png')}}" alt="">
					</a>
					<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent"
					 aria-expanded="false" aria-label="Toggle navigation">
						<span class="icon-bar"></span>
						<span class="icon-bar"></span>
						<span class="icon-bar"></span>
					</button>
					<!-- Collect the nav links, forms, and other content for toggling -->
					<div class="collapse navbar-collapse offset" id="navbarSupportedContent">
						<div class="row w-100">
							<div class="col-lg-7 pr-0">
								<ul class="nav navbar-nav center_nav pull-right">
									<li class="nav-item active">
										<a class="nav-link" href="{{route('home')}}">Home</a>
									</li>
									<li class="nav-item submenu dropdown">
										<a href="#" class="nav-link dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">Shop</a>
										<ul class="dropdown-menu">
											<li class="nav-item">
												<a class="nav-link" href="{{route('category')}}">Shop Category</a>
												<li class="nav-item">
													<a class="nav-link" href="{{route('singleproduct')}}">Product Details</a>
													<li class="nav-item">
														<a class="nav-link" href="{{route('productcheckout')}}">Product Checkout</a>
														<li class="nav-item">
															<a class="nav-link" href="{{route('cart')}}">Shopping Cart</a>
														</li>
														<li class="nav-item">
															<a class="nav-link" href="{{route('faktor')}}">Confirmation</a>
														</li>
										</ul>
										</li>
										{{-- <li class="nav-item submenu dropdown">
											<a href="#" class="nav-link dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">Blog</a>
											<ul class="dropdown-menu">
												<li class="nav-item">
													<a class="nav-link" href="blog.html">Blog</a>
												</li>
												<li class="nav-item">
													<a class="nav-link" href="single-blog.html">Blog Details</a>
												</li>
											</ul>
										</li> --}}
										<li class="nav-item submenu dropdown">
											<a href="#" class="nav-link dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">Pages</a>
											<ul class="dropdown-menu">
												<li class="nav-item">
													<a class="nav-link" href="{{route('login')}}">Login</a>
													<li class="nav-item">
														<a class="nav-link" href="{{route('tracking')}}">Tracking</a>
														{{-- <li class="nav-item">
															<a class="nav-link" href="elements.html">Elements</a>
														</li> --}}
											</ul>
											</li>
											<li class="nav-item">
												<a class="nav-link" href="{{route('contact')}}"  style="margin-right:30px;">Contact</a>
											</li>
								</ul>
							</div>

							<div class="col-lg-5">
								<ul class="nav navbar-nav navbar-right right_nav pull-right">
									<hr>
									<li class="nav-item">
										<a href="#" class="icons">
											<i class="fa fa-search" aria-hidden="true"></i>
										</a>
									</li>

									<hr>

									<li class="nav-item">
										<a href="#" class="icons">
											<i class="fa fa-user" aria-hidden="true"></i>
										</a>
									</li>

									<hr>

									<li class="nav-item">
										<a href="#" class="icons">
											<i class="fa fa-heart-o" aria-hidden="true"></i>
										</a>
									</li>

									<hr>

									<li class="nav-item">
										<a href="#" class="icons">
											<i class="lnr lnr lnr-cart"></i>
										</a>
									</li>

									<hr>
								</ul>
							</div>
						</div>
					</div>
				</div>
			</nav>
		</div>
	</header>
	<!--================Header Menu Area =================-->

	<!--================Home Banner Area =================-->
	<section class="banner_area">
		<div class="banner_inner d-flex align-items-center">
			<div class="container">
				<div class="banner_content text-center">
					<h2>Order Confirmation</h2>
					<div class="page_link">
						<a href="{{route('home')}}">Home</a>
						<a href="{{route('faktor')}}">Confirmation</a>
					</div>
				</div>
			</div>
		</div>
	</section>
	<!--================End Home Banner Area =================-->

	<!--================Order Details Area =================-->
	<section class="order_details p_120">
		<div class="container">
			<h3 class="title_confirmation">Thank you. Your order has been received.</h3>
			<div class="row order_d_inner">
				<div class="col-lg-4">
					<div class="details_item">
						<h4>Order Info</h4>
						<ul class="list">
							<li>
								<a href="#">
									<span>Order number</span> : 60235</a>
							</li>
							<li>
								<a href="#">
									<span>Date</span> : Los Angeles</a>
							</li>
							<li>
								<a href="#">
									<span>Total</span> : USD 2210</a>
							</li>
							<li>
								<a href="#">
									<span>Payment method</span> : Check payments</a>
							</li>
						</ul>
					</div>
				</div>
				<div class="col-lg-4">
					<div class="details_item">
						<h4>Billing Address</h4>
						<ul class="list">
							<li>
								<a href="#">
									<span>Street</span> : 56/8</a>
							</li>
							<li>
								<a href="#">
									<span>City</span> : Los Angeles</a>
							</li>
							<li>
								<a href="#">
									<span>Country</span> : United States</a>
							</li>
							<li>
								<a href="#">
									<span>Postcode </span> : 36952</a>
							</li>
						</ul>
					</div>
				</div>
				<div class="col-lg-4">
					<div class="details_item">
						<h4>Shipping Address</h4>
						<ul class="list">
							<li>
								<a href="#">
									<span>Street</span> : 56/8</a>
							</li>
							<li>
								<a href="#">
									<span>City</span> : Los Angeles</a>
							</li>
							<li>
								<a href="#">
									<span>Country</span> : United States</a>
							</li>
							<li>
								<a href="#">
									<span>Postcode </span> : 36952</a>
							</li>
						</ul>
					</div>
				</div>
			</div>
			<div class="order_details_table">
				<h2>Order Details</h2>
				<div class="table-responsive">
					<table class="table">
						<thead>
							<tr>
								<th scope="col">Product</th>
								<th scope="col">Quantity</th>
								<th scope="col">Total</th>
							</tr>
						</thead>
						<tbody>
							<tr>
								<td>
									<p>Pixelstore fresh Blackberry</p>
								</td>
								<td>
									<h5>x 02</h5>
								</td>
								<td>
									<p>$720.00</p>
								</td>
							</tr>
							<tr>
								<td>
									<p>Pixelstore fresh Blackberry</p>
								</td>
								<td>
									<h5>x 02</h5>
								</td>
								<td>
									<p>$720.00</p>
								</td>
							</tr>
							<tr>
								<td>
									<p>Pixelstore fresh Blackberry</p>
								</td>
								<td>
									<h5>x 02</h5>
								</td>
								<td>
									<p>$720.00</p>
								</td>
							</tr>
							<tr>
								<td>
									<h4>Subtotal</h4>
								</td>
								<td>
									<h5></h5>
								</td>
								<td>
									<p>$2160.00</p>
								</td>
							</tr>
							<tr>
								<td>
									<h4>Shipping</h4>
								</td>
								<td>
									<h5></h5>
								</td>
								<td>
									<p>Flat rate: $50.00</p>
								</td>
							</tr>
							<tr>
								<td>
									<h4>Total</h4>
								</td>
								<td>
									<h5></h5>
								</td>
								<td>
									<p>$2210.00</p>
								</td>
							</tr>
						</tbody>
					</table>
				</div>
			</div>
		</div>
	</section>
	<!--================End Order Details Area =================-->

	<!--================ Subscription Area ================-->
	<section class="subscription-area section_gap">
		<div class="container">
			<div class="row justify-content-center">
				<div class="col-lg-8">
					<div class="section-title text-center">
						<h2>Subscribe for Our Newsletter</h2>
						<span>We won’t send any kind of spam</span>
					</div>
				</div>
			</div>
			<div class="row justify-content-center">
				<div class="col-lg-6">
					<div id="mc_embed_signup">
						<form target="_blank" novalidate action="https://spondonit.us12.list-manage.com/subscribe/post?u=1462626880ade1ac87bd9c93a&id=92a4423d01"
						 method="get" class="subscription relative">
							<input type="email" name="EMAIL" placeholder="Email address" onfocus="this.placeholder = ''" onblur="this.placeholder = 'Email address'"
							 required="">
							<!-- <div style="position: absolute; left: -5000px;">
									<input type="text" name="b_36c4fd991d266f23781ded980_aefe40901a" tabindex="-1" value="">
								</div> -->
							<button type="submit" class="newsl-btn">Get Started</button>
							<div class="info"></div>
						</form>
					</div>
				</div>
			</div>
		</div>
	</section>
	<!--================ End Subscription Area ================-->

	<!--================ start footer Area  =================-->
	<footer class="footer-area section_gap">
		<div class="container">
			<div class="row">
				<div class="col-lg-3  col-md-6 col-sm-6">
					<div class="single-footer-widget">
						<h6 class="footer_title">About Us</h6>
						<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore dolore magna aliqua.</p>
					</div>
				</div>
				<div class="col-lg-4 col-md-6 col-sm-6">
					<div class="single-footer-widget">
						<h6 class="footer_title">Newsletter</h6>
						<p>Stay updated with our latest trends</p>
						<div id="mc_embed_signup">
							<form target="_blank" action="https://spondonit.us12.list-manage.com/subscribe/post?u=1462626880ade1ac87bd9c93a&amp;id=92a4423d01"
							 method="get" class="subscribe_form relative">
								<div class="input-group d-flex flex-row">
									<input name="EMAIL" placeholder="Email Address" onfocus="this.placeholder = ''" onblur="this.placeholder = 'Email Address '"
									 required="" type="email">
									<button class="btn sub-btn">
										<span class="lnr lnr-arrow-right"></span>
									</button>
								</div>
								<div class="mt-10 info"></div>
							</form>
						</div>
					</div>
				</div>
				<div class="col-lg-3 col-md-6 col-sm-6">
					<div class="single-footer-widget instafeed">
						<h6 class="footer_title">Instagram Feed</h6>
						<ul class="list instafeed d-flex flex-wrap">
							<li>
								<img src="{{asset ('app-assets/img/instagram/Image-01.jpg')}}"" alt="">
							</li>
							<li>
								<img src="{{asset ('app-assets/img/instagram/Image-02.jpg')}}" alt="">
							</li>
							<li>
								<img src="{{asset ('app-assets/img/instagram/Image-03.jpg')}}" alt="">
							</li>
							<li>
								<img src="{{asset ('app-assets/img/instagram/Image-04.jpg')}}" alt="">
							</li>
							<li>
								<img src="{{asset ('app-assets/img/instagram/Image-05.jpg')}}" alt="">
							</li>
							<li>
								<img src="{{asset ('app-assets/img/instagram/Image-06.jpg')}}" alt="">
							</li>
							<li>
								<img src="{{asset ('app-assets/img/instagram/Image-07.jpg')}}" alt="">
							</li>
							<li>
								<img src="{{asset ('app-assets/img/instagram/Image-08.jpg')}}" alt="">
							</li>
						</ul>
					</div>
				</div>
				<div class="col-lg-2 col-md-6 col-sm-6">
					<div class="single-footer-widget f_social_wd">
						<h6 class="footer_title">Follow Us</h6>
						<p>Let us be social</p>
						<div class="f_social">
							<a href="#">
								<i class="fa fa-facebook"></i>
							</a>
							<a href="#">
								<i class="fa fa-twitter"></i>
							</a>
							<a href="#">
								<i class="fa fa-dribbble"></i>
							</a>
							<a href="#">
								<i class="fa fa-behance"></i>
							</a>
						</div>
					</div>
				</div>
			</div>
			<div class="row footer-bottom d-flex justify-content-between align-items-center">
				<p class="col-lg-12 footer-text text-center"><!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
Copyright &copy;<script>document.write(new Date().getFullYear());</script> All rights reserved | This template is made with <i class="fa fa-heart-o" aria-hidden="true"></i> by <a href="https://colorlib.com" target="_blank">Colorlib</a>
<!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
				</p>
			</div>
		</div>
	</footer>
	<!--================ End footer Area  =================-->




	<!-- Optional JavaScript -->
	<!-- jQuery first, then Popper.js, then Bootstrap JS -->
	<script src="{{asset ('app-assets/js/jquery-3.2.1.min.js')}}"></script>
	<script src="{{asset ('app-assets/js/popper.js')}}"></script>
	<script src="{{asset ('app-assets/js/bootstrap.min.js')}}"></script>
	<script src="{{asset ('app-assets/js/stellar.js')}}"></script>
	<script src="{{asset ('app-assets/vendors/lightbox/simpleLightbox.min.js')}}"></script>
	<script src="{{asset ('app-assets/vendors/nice-select/js/jquery.nice-select.min.js')}}"></script>
	<script src="{{asset ('app-assets/vendors/isotope/imagesloaded.pkgd.min.js')}}"></script>
	<script src="{{asset ('app-assets/vendors/isotope/isotope-min.js')}}"></script>
	<script src="{{asset ('app-assets/vendors/owl-carousel/owl.carousel.min.js')}}"></script>
	<script src="{{asset ('app-assets/js/jquery.ajaxchimp.min.js')}}"></script>
	<script src="{{asset ('app-assets/js/mail-script.js')}}"></script>
	<script src="{{asset ('app-assets/vendors/jquery-ui/jquery-ui.js')}}"></script>
	<script src="{{asset ('app-assets/vendors/counter-up/jquery.waypoints.min.js')}}"></script>
	<script src="{{asset ('app-assets/vendors/counter-up/jquery.counterup.js')}}"></script>
	<script src="{{asset ('app-assets/js/theme.js')}}"></script>
</body>

</html>