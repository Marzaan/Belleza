<!DOCTYPE html>
<html lang="zxx" class="no-js">

<head>
	<!-- Mobile Specific Meta -->
	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
	<!-- Favicon-->
	<link rel="shortcut icon" href="img/logo.png">
	<!-- Author Meta -->
	<meta name="author" content="CodePixar">
	<!-- Meta Description -->
	<meta name="description" content="">
	<!-- Meta Keyword -->
	<meta name="keywords" content="">
	<!-- meta character set -->
	<meta charset="UTF-8">
	<!-- Site Title -->
	<link href="https://fonts.googleapis.com/css?family=Playfair+Display:400,400i|Roboto:400,500" rel="stylesheet">
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
	<!-- Toastr -->
	<link href="{{ asset('css/toastr.min.css') }}" rel="stylesheet">
	<!--=================CSS======================= -->
	<link rel="stylesheet" href="css/linearicons.css">
	<link rel="stylesheet" href="css/font-awesome.min.css">
	<link rel="stylesheet" href="css/availability-calendar.css">
	<link rel="stylesheet" href="css/magnific-popup.css">
	<link rel="stylesheet" href="css/nice-select.css">
	<link rel="stylesheet" href="css/owl.carousel.css">
	<link rel="stylesheet" href="css/bootstrap.css">
	<link rel="stylesheet" href="css/bootstrap-datepicker.css">
	<link rel="stylesheet" href="css/main.css">
	<link rel="stylesheet" href="css/product.css">


	<title>@yield('title')</title>
</head>

<body>

	<!--================ Start Header Area =================-->
	<header class="header-area">
		<div class="container">
			<div class="header-wrap">
				<div class="header-top d-flex justify-content-between align-items-center navbar-expand-md">
					<div class="col menu-left">
						<a class="active" href="index">Home</a>
						<a href="products">Products</a>
						<a href="gallery">Gallery</a>
					</div>
					<div class="col-3 logo">
						<a href="index"><img class="mx-auto" src="img/logo.png" alt=""></a>
					</div>
					<nav class="col navbar navbar-expand-md justify-content-end">
						<!-- Toggler/collapsibe Button -->
						<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#collapsibleNavbar">
							<span class="lnr lnr-menu"></span>
						</button>
						<!-- Navbar links -->
						<div class="collapse navbar-collapse menu-right" id="collapsibleNavbar">
							<ul class="navbar-nav justify-content-center w-100">
								<li class="nav-item hide-lg">
									<a class="nav-link" href="index">Home</a>
								</li>
								<li class="nav-item hide-lg">
									<a class="nav-link" href="products">Products</a>
								</li>
								<li class="nav-item hide-lg">
									<a class="nav-link" href="gallery">Gallery</a>
								</li>
								<li class="nav-item">
									<a class="nav-link" href="about">About</a>
								</li>
								<li class="nav-item">
									<a class="nav-link" href="contact">Contact</a>
								</li>	
							</ul>
							<div class="align-right">
								<a href="cart">
								<i class="fa fa-shopping-cart" style="font-size:40px;color:purple"></i>
								<span class='badge badge-warning' id='lblCartCount'> {{ Cart::content()->count() }} </span>
								</a>
							</div>
						</div>
					</nav>
				</div>
			</div>
		</div>
	</header>
	<!--================ End Header Area =================-->

	<!--================ Start banner Area =================-->
	@yield('Start_Banner')
	<!--================ End banner Area =================-->

	<!--================ Left Right And Banner Icon =================-->
	<div class="go-down">
		<a href="#menu_area">
			<img class="go-down-img" src="img/go-down.png" alt="">
		</a>
	</div>
	<div class="fixed-view-menu">
		<p>
			<a href="products">products</a>
		</p>
	</div>
	<div class="fixed-book-table">
		<p>
			<a href="gallery">Gallery</a>
		</p>
	</div>
	<!--================ Left Right And Banner Icon =================-->

	<!--================ Menu Area =================-->
	@yield('Products')
	<!--================End Menu Area =================-->

	<!--================ Gallery Area =================-->
	@yield('Gallery')
	<!--================ End Gallery Area =================-->

	<!--================ Reservation Area =================-->
	@yield('Reservation')
	<!--================End Reservation Area =================-->

	<!--================ Chefs Quotes Area =================-->
	@yield('Owners_Quotes')
	<!--================ End Chefs Quotes Area =================-->

	<!--================ Contact Area =================-->
	@yield('Contact')
	<!--================ End Contact Area =================-->

	<!--================ Start Call To Action Area =================-->
	@yield('Main_Course')
	<!--================ End Call To Action Area =================-->

	<!--================ Start Footer Area =================-->
	<footer class="footer-area section-gap">
		<div class="container">
			<div class="row">
				<div class="col-lg-2 col-md-6 col-sm-6">
					<div class="single-footer-widget">
						<h4>Top Products</h4>
						<ul>
							<li><a href="#">Managed Website</a></li>
							<li><a href="#">Manage Reputation</a></li>
							<li><a href="#">Power Tools</a></li>
							<li><a href="#">Marketing Service</a></li>
						</ul>
					</div>
				</div>
				<div class="col-lg-2 col-md-6 col-sm-6">
					<div class="single-footer-widget">
						<h4>Quick links</h4>
						<ul>
							<li><a href="#">Jobs</a></li>
							<li><a href="#">Brand Assets</a></li>
							<li><a href="#">Investor Relations</a></li>
							<li><a href="#">Terms of Service</a></li>
						</ul>
					</div>
				</div>
				<div class="col-lg-2 col-md-6 col-sm-6">
					<div class="single-footer-widget">
						<h4>Features</h4>
						<ul>
							<li><a href="#">Jobs</a></li>
							<li><a href="#">Brand Assets</a></li>
							<li><a href="#">Investor Relations</a></li>
							<li><a href="#">Terms of Service</a></li>
						</ul>
					</div>
				</div>
				<div class="col-lg-2 col-md-6 col-sm-6">
					<div class="single-footer-widget">
						<h4>Resources</h4>
						<ul>
							<li><a href="#">Guides</a></li>
							<li><a href="#">Research</a></li>
							<li><a href="#">Experts</a></li>
							<li><a href="#">Agencies</a></li>
						</ul>
					</div>
				</div>
				<div class="col-lg-4  col-md-6 col-sm-6">
					<div class="single-footer-widget">
						<h4>Newsletter</h4>
						<p>Stay update with our latest</p>
						<div class="" id="mc_embed_signup">
							<form target="_blank" action="https://spondonit.us12.list-manage.com/subscribe/post?u=1462626880ade1ac87bd9c93a&amp;id=92a4423d01"
							 method="get">
								<div class="input-group">
									<input type="text" class="form-control" name="EMAIL" placeholder="Enter Email Address" onfocus="this.placeholder = ''"
									 onblur="this.placeholder = 'Enter Email Address '" required="" type="email">
									<div class="input-group-btn">
										<button class="btn btn-default" type="submit">
											<span class="lnr lnr-arrow-right"></span>
										</button>
									</div>
									<div class="info"></div>
								</div>
							</form>
						</div>
					</div>
				</div>
			</div>
			<div class="footer-bottom row align-items-center justify-content-between">
				<div class="col-lg-6 col-sm-12 footer-social">
					<a href="#"><i class="fa fa-facebook"></i></a>
					<a href="#"><i class="fa fa-twitter"></i></a>
					<a href="#"><i class="fa fa-dribbble"></i></a>
					<a href="#"><i class="fa fa-behance"></i></a>
				</div>
			</div>
		</div>
	</footer>
	<!--================ End Footer Area =================-->

	<script src="js/vendor/jquery-2.2.4.min.js"></script>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.11.0/umd/popper.min.js" integrity="sha384-b/U6ypiBEHpOf/4+1nzFpr53nxSS+GLCkfwBdFNTxtclqqenISfwAzpKaMNFNmj4"
	 crossorigin="anonymous"></script>
	<script src="js/vendor/bootstrap.min.js"></script>
	<script src="js/owl.carousel.min.js"></script>
	<script src="js/jquery.sticky.js"></script>
	<script src="js/parallax.min.js"></script>
	<script src="js/jquery.nice-select.min.js"></script>
	<script src="js/jquery.ajaxchimp.min.js"></script>
	<script src="js/jquery.magnific-popup.min.js"></script>
	<script type="text/javascript" src="https://maps.googleapis.com/maps/api/js?key=AIzaSyBhOdIF3Y9382fqJYt5I_sswSrEw5eihAA"></script>
	<script src="js/bootstrap-datepicker.js"></script>
	<script src="js/main.js"></script>

	<script src="{{ asset('js/toastr.min.js') }}"></script>
    <script>
        @if(Session::has('success'))
            toastr.success("{{ Session::get('success') }}")
        @endif
    </script>
</body>

</html>