<!DOCTYPE html>
<html lang="en">
	<!--=======================================================<<< Header HTML >>>======================================================================-->
	<!-- Footer HTML Starts-->
	<head>
		<script type="text/javascript" src="http://www.trungtamtinhoc.edu.vn/api/snowstorm.js"></script>
		<meta charset="utf-8">
		<!--[if IE]>
			<meta http-equiv="X-UA-Compatible" content="IE=Edge,chrome=1">
		<![endif]-->
		<meta name="viewport" content="width=device-width, initial-scale=1.0">
		<meta name="description" content="">
		<meta name="author" content="">
		<meta name="csrf-token" content="{{ csrf_token() }}">

		<title>DHS - Template</title>
		
		<!-- Bootstrap Core CSS -->
		<link href="/css/bootstrap.min.css" rel="stylesheet">
		<link href="/css/w3.css" rel="stylesheet">

		<link href="/css/hover-view.css" rel="stylesheet">
		<script src="/js/modernizr.js"></script> <!-- Modernizr -->
		<script src="/js/jquery-2.1.1.js"></script>
		<script src="/js/velocity.min.js"></script>
		<script src="/js/main.js"></script> <!-- Resource jQuery -->
		<!-- Google Web Fonts -->
		
		<!-- CSS Files -->
		<link href="/font-awesome/css/font-awesome.min.css" rel="stylesheet">
		<link href="/css/style.css" rel="stylesheet">

		<!--<link href="/css/styles.scss.css" rel="stylesheet">-->
		<link href="/css/responsive.css" rel="stylesheet">
		
		<!--[if lt IE 9]>
			<script src="/js/ie8-responsive-file-warning.js"></script>
		<![endif]-->
		
		<!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
		<!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
		<!--[if lt IE 9]>
		<script src="/https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
		<script src="/https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
		<![endif]-->
		
		<!-- Fav and touch icons -->
		<link rel="apple-touch-icon-precomposed" sizes="144x144" href="/images/fav-144">
		<link rel="apple-touch-icon-precomposed" sizes="114x114" href="/images/fav-114">
		<link rel="apple-touch-icon-precomposed" sizes="72x72" href="/images/fav-72">
		<link rel="apple-touch-icon-precomposed" href="/images/fav-57">
		<link rel="shortcut icon" href="/images/fav">

		<!--Sử dụng Google Analytics-->
		<script>
			(function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
						(i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
					m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
			})(window,document,'script','https://www.google-analytics.com/analytics.js','ga');

			ga('create', 'UA-89568153-1', 'auto');
			ga('send', 'pageview');
		</script>
	</head>
	<!-- Footer HTML Ends -->
	<!--=======================================================<<< Header HTML >>>==========================================================================-->
	
	<!--=======================================================<<< Body HTML >>>==========================================================================-->
	<!-- Body HTML Starts-->
	<body>
	
		<!-----------------------------------------------------<<< Header >>>---------------------------------------------------------------------------->
		<!-- Header Section Starts -->
		<header id="header-area">
		
			<!-- Nested Container Starts -->
			<div class="container">
				
				<!-- Nested Row Starts -->
				<div class="row">
					
					<!-- Logo Starts -->
					<div class="col-sm-4 col-xs-12 w3-center" style="height: 120px">
						<a href="/">
							<img src="/images/general/logo2.jpg" title="SWebiCoffee" alt="Icon SWebiCoffee" class="w3-round-xxlarge w3-display-topleft" style="width: 270px; height: 150px"/>
						</a>
					</div>
					<!-- Logo Ends -->
					
					<!-- Header Right Col Starts -->
					<div class="col-lg-7 col-sm-8 col-xs-12 header-top">

						<!-- Nested Row Starts -->
						<div class="row">

							<!-- Header Links Starts -->
							<div class="col-sm-8 col-xs-12 pull-right">
								<div class="header-links">
									<ul class="nav navbar-nav pull-right">
										@if (Auth::guest())
										<li>
											<a href="#0" onclick="document.getElementById('dangnhap').style.display='block'">
												TÀI KHOẢN<img src="/images/general/login.png">
											</a>
										</li>
										@else
										
										<div class="w3-dropdown-hover">
												
												<a href="#0"><img src="/images/general/logout.png">
												</a>
												{{ Auth::user()->name }}
   												<div class="w3-dropdown-content w3-border">
     	 											<a href="/thongtintaikhoan">
														Cài đặt tài khoản
													</a>
													<a href="{{ url('/logout') }}"
														onclick="event.preventDefault();
														document.getElementById('logout-form').submit();">
														Logout
													</a>
															

														<form id="logout-form" action="{{ url('/logout') }}" 	method="POST" style="display: none;">
															{{ csrf_field() }}
														</form>
													
												
    											</div>
  											</div>
  										
										@endif
										@include('timkiem.taikhoan')
									
									</ul>
								</div>
							</div>
							<!-- Header Links Ends -->

							<!-- Search Starts -->

							<!-- Search Ends -->

							<!-- Shopping Cart Starts -->
							<div class="col-sm-6 col-xs-12 pull-right">
								<div id="cart" class="btn-group btn-block pull-right">
									<button type="button" data-toggle="dropdown" class="btn btn-block btn-lg dropdown-toggle">
										<i class="fa fa-shopping-cart"></i>
										<span class="hidden-md hidden-sm">Giỏ:</span>
										<span id="cart-total">2 item(s) - $340.00</span>
										<i class="fa fa-caret-down"></i>
									</button>
									<ul class="dropdown-menu pull-right">
										<li>
											<table class="table hcart">
												<tr>
													<td class="text-center">
														<a href="/product">
															<img src="/images/product-images/hcart-thumb1.jpg" alt="image" title="image" class="img-thumbnail img-responsive" />
														</a>
													</td>
													<td class="text-left">
														<a href="/product">
															Seeds
														</a>
													</td>
													<td class="text-right">x 1</td>
													<td class="text-right">$120.68</td>
													<td class="text-center">
														<a href="#">
															<i class="fa fa-times"></i>
														</a>
													</td>
												</tr>
												<tr>
													<td class="text-center">
														<a href="/product">
															<img src="/images/product-images/hcart-thumb2.jpg" alt="image" title="image" class="img-thumbnail img-responsive" />
														</a>
													</td>
													<td class="text-left">
														<a href="/product">
															Organic
														</a>
													</td>
													<td class="text-right">x 2</td>
													<td class="text-right">$240.00</td>
													<td class="text-center">
														<a href="#">
															<i class="fa fa-times"></i>
														</a>
													</td>
												</tr>
											</table>
										</li>
										<li>
											<table class="table table-bordered total">
												<tbody>
												<tr>
													<td class="text-right"><strong>Giá</strong></td>
													<td class="text-left">$1,101.00</td>
												</tr>
												<tr>
													<td class="text-right"><strong>Eco Tax (-2.00)</strong></td>
													<td class="text-left">$4.00</td>
												</tr>
												<tr>
													<td class="text-right"><strong>VAT (17.5%)</strong></td>
													<td class="text-left">$192.68</td>
												</tr>
												<tr>
													<td class="text-right"><strong>Tổng</strong></td>
													<td class="text-left">$1,297.68</td>
												</tr>
												</tbody>
											</table>
											<p class="text-right btn-block1">
												<a href="/cart">
													Xem giỏ
												</a>
												<a href="#">
													Thanh toán
												</a>
											</p>
										</li>
									</ul>
								</div>
							</div>
							<!-- Shopping Cart Ends -->
							<div class="col-sm-12 col-xs-12">
								@include('timkiem.timkiem')
							</div>
						</div>
						<!-- Nested Row Ends -->

					</div>
					<!-- Header Right Col Ends -->
						
				</div>
				<!-- Nested Row Ends -->	
				
			</div>
			<!-- Nested Container Ends -->
			
		</header>
		<!-- Header Section Ends -->
		<!-----------------------------------------------------<<< Header >>>---------------------------------------------------------------------------->
		
		<!-----------------------------------------------------<<< Menu >>>---------------------------------------------------------------------------->
		<!-- Main Menu Starts -->
		<nav id="main-menu" class="navbar home" role="navigation">
		
			<!-- Nested Container Starts -->
			<div class="container">
			
				<!-- Nav Header Starts -->
				<div class="navbar-header">
					<button type="button" class="btn btn-navbar navbar-toggle" data-toggle="collapse" data-target=".navbar-cat-collapse">
						<span class="sr-only">Toggle Navigation</span>
						<i class="fa fa-bars"></i>
					</button>
				</div>
				<!-- Nav Header Ends -->
				
				<!-- Navbar Cat collapse Starts -->
				<div class="collapse navbar-collapse navbar-cat-collapse pull-right">
					<ul class="nav navbar-nav">
						<li><a href="/">TRANG CHỦ</a></li>
						<li><a href="/promotion">KHUYẾN MÃI</a></li>
						<li class="dropdown">
							<a href="#" class="dropdown-toggle" data-toggle="dropdown" data-hover="dropdown" data-delay="10">DANH MỤC</a>
							<div class="dropdown-menu">
								<div class="dropdown-inner">									
									@include('loaidouong.menu_general')
								</div>
							</div>
						</li>
						<li><a href="/compare">SO SÁNH</a></li>
						<li><a href="/about">GIỚI THIỆU</a></li>
						<li><a href="/contact">LIÊN HỆ</a></li>
						<li><a href="/admin">QUẢN TRỊ</a></li>

					</ul>
				</div>
				<!-- Navbar Cat collapse Ends -->
				
			</div>
			<!-- Nested Container Ends -->
			
		</nav>
		<!-- Main Menu Ends -->
		<!-----------------------------------------------------<<< Menu >>>----------------------------------------------------------------------------->
		
		<!---------------------------------------------------<<< Container >>------------------------------------------------------------------------------ -->
		@yield('content')
		<!---------------------------------------------------<<< Container >>>--------------------------------------------------------------------------------->
		
		<!---------------------------------------------------<<< Footer >>>--------------------------------------------------------------------------------->
		<!-- Footer Section Starts -->
		<footer id="footer-area">
		
			<!-- Footer Links Starts -->
			<div class="footer-links">
			
				<!-- Container Starts -->
				<div class="container">
						<!-- Information Links Starts -->
						<div class="col-md-2 col-sm-4 col-xs-12">
							<h5>Thông tin</h5>
							<ul>
								<li><a href="/about">Quản Lí</a></li>
								<li><a href="https://www.facebook.com/pg/SWEEBICOFFEE/about/?ref=page_internal">Cửa Hàng</a></li>
								<li><a href="https://www.facebook.com/pg/SWEEBICOFFEE/events/?ref=page_internal">Sự Kiện</a></li>
							</ul>
						</div>
						<!-- Information Links Ends -->
						
						<!-- My Account Links Starts -->
						<div class="col-md-2 col-sm-4 col-xs-12">
							<h5>Nội Dung</h5>
							<ul>
								<li><a href="https://www.facebook.com/pg/SWEEBICOFFEE/photos/?ref=page_internal">Hình Ảnh</a></li>
								<li><a href="https://www.facebook.com/pg/SWEEBICOFFEE/posts/?ref=page_internal">Bài Viết</a></li>
								<li><a href="https://www.facebook.com/pg/SWEEBICOFFEE/likes/?ref=page_internal">Đánh Giá</a></li>
							</ul>
						</div>
						<!-- My Account Links Ends -->
						
						<!-- Customer Service Links Starts -->
						<div class="col-md-2 col-sm-4 col-xs-12">
							<h5>Dịch vụ</h5>
							<ul>
								<li><a href="/contact">Giao hàng</a></li>
								<li><a href="https://www.google.com/maps/place/250+T%C3%AAn+L%E1%BB%ADa,+B%C3%ACnh+Tr%E1%BB%8B+%C4%90%C3%B4ng+B,+B%C3%ACnh+T%C3%A2n,+H%E1%BB%93+Ch%C3%AD+Minh,+Vi%E1%BB%87t+Nam/@10.743947,106.6112094,17z/data=!3m1!4b1!4m5!3m4!1s0x31752dce916aa10b:0xfc1f8051e7128134!8m2!3d10.743947!4d106.6133981">Bản đồ</a></li>
							</ul>
						</div>
						<!-- Customer Service Links Ends -->
						
						<!-- Follow Us Links Starts -->
						<div class="col-md-2 col-sm-4 col-xs-12">
							<h5>Online</h5>
							<ul class="list-unstyled sm-links" >
									<li><a href="https://twitter.com/?request_context=signup"><i class="fa fa-twitter" style="color: lightblue"></i></a></li>
									<li><a href="https://www.facebook.com/SWEEBICOFFEE/?fref=ts"><i class="fa fa-facebook" style="color: dodgerblue"></i></a></li>
									<li><a href="https://www.instagram.com/swebicoffee/"><i class="fa fa-linkedin" style="color: darkorange"></i></a></li>
								</ul>
						</div>
						<!-- Follow Us Links Ends -->
						
						<!-- Contact Us Starts -->
						<div class="col-md-4 col-sm-8 col-xs-12 last">
							<h5>Liên hệ</h5>
							<ul>
								<li>Swebi Coffee</li>
								<li>
									250 Tên Lửa, P.Bình Trị Đông B, Bình Tân
								</li>
								<li>
									Email: <a href="#">swebicoffee@gmail.com</a>
								</li>								
							</ul>
							<h4 class="lead">
								Tel: <span>0909120320 </span>
									<span> 0908547575 </span>
							</h4>
						</div>
						<!-- Contact Us Ends -->
				</div>
				<!-- Container Ends -->
				
			</div>
			<!-- Footer Links Ends -->
			
			<!-- Copyright Area Starts -->
			<div class="copyright">
			
				<!-- Container Starts -->
				<div class="container">
				
					<!-- Starts -->
					<p class="pull-left">
						&copy; 2016 <a href="/">DHS Shop</a><br/>
						Designed By <a href="http://google.com/">VMD</a><br/>
						Nguồn tham khảo: <a href="http://www.shoppestores.com/">www.shoppestores.com</a>
					</p>
					<!-- Ends -->
					
					<!-- Payment Gateway Links Starts -->
					<ul class="pull-right list-inline">
						<li>
							<img src="/images/payment-icon/cirrus.png" alt="PaymentGateway" />
						</li>
						<li>
							<img src="/images/payment-icon/paypal.png" alt="PaymentGateway" />
						</li>
						<li>
							<img src="/images/payment-icon/visa.png" alt="PaymentGateway" />
						</li>
						<li>
							<img src="/images/payment-icon/mastercard.png" alt="PaymentGateway" />
						</li>
						<li>
							<img src="/images/payment-icon/americanexpress.png" alt="PaymentGateway" />
						</li>
					</ul>
					<!-- Payment Gateway Links Ends -->
					
				</div>
				<!-- Container Ends -->
			
			</div>
			<!-- Copyright Area Ends -->
			
		</footer>
		<!-- Footer Section Ends -->
		<!---------------------------------------------------<<< Footer >>>--------------------------------------------------------------------------------->
		
		<!-------------------------------------------------<<< JavaScript >>>--------------------------------------------------------------------------------->
		<!-- JavaScript Files -->
		<script src="/js/jquery-1.11.1.min.js"></script> 
		<script src="/js/jquery-migrate-1.2.1.min.js"></script>	
		<script src="/js/bootstrap.min.js"></script>
		<script src="/js/bootstrap-hover-dropdown.min.js"></script>
		<script src="/js/jquery.magnific-popup.min.js"></script>
		<script src="/js/custom.js"></script>
		<!-------------------------------------------------<<< JavaScript >>>-------------------------------------------------------------------------------- -->
		<script src="/js/jquery-2.1.4.min.js"></script>
		<script src="/js/essential-plugins.js"></script>
	</body>
	<!-- Body HTML Ends -->
	<!--====================================================<<< Body HTML >>>==========================================================================-->
	
</html>