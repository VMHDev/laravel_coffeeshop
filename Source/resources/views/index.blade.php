@extends('layouts.general')

@section('content')
<!-- Carousel Starts --
	<div id="main-carousel" class="carousel slide" data-ride="carousel">
	<!-- Wrapper For Slides Starts --
		<div class="carousel-inner">
			<div class="item active">
				<img src="/images/slider-imgs/slide1-img.jpg" alt="Slider" class="img-responsive" />
			</div>
			<div class="item">
				<img src="/images/slider-imgs/slide2-img.jpg" alt="Slider" class="img-responsive" />
			</div>
		</div>
	<!-- Wrapper For Slides Ends --
	<!-- Controls Starts --
		<a class="left carousel-control" href="/#main-carousel" role="button" data-slide="prev">
			<span class="glyphicon glyphicon-chevron-left"></span>
		</a>
		<a class="right carousel-control" href="/#main-carousel" role="button" data-slide="next">
			<span class="glyphicon glyphicon-chevron-right"></span>
		</a>
	<!-- Controls Ends -->
<!--	</div> -->

<div class="mySlides bgimg-1 w3-display-container" id="home">
  <div class="w3-display-left w3-padding-xxlarge w3-text-white">
    <span class="w3-jumbo w3-animate-top w3-hide-small w3-text-orange">KHUYẾN MÃI LỚN</span><br>
    <span class="w3-large w3-animate-top w3-text-orange">Giảm giá đồng loạt các loại trà sữa</span>
    <p><a href="/promotion" class="w3-btn w3-animate-left w3-large w3-border w3-border-orange w3-white w3-margin-top w3-hover-opacity-off">Xem ngay</a></p>
  </div> 
  <div class="w3-display-bottomleft w3-padding-xxlarge w3-text-grey w3-large">
    <a href="#0" class="w3-hover-text-white"><i class="fa fa-facebook-official"></i></a>
    <a href="#0" class="w3-hover-text-white"><i class="fa fa-flickr"></i></a>
    <a href="#0" class="w3-hover-text-white"><i class="fa fa-instagram"></i></a>
    <a href="#0" class="w3-hover-text-white"><i class="fa fa-twitter"></i></a>
    <a href="#0" class="w3-hover-text-white"><i class="fa fa-linkedin"></i></a>
  </div>
</div>

<div class="mySlides bgimg-2 w3-display-container" id="home">
  <div class="w3-display-left w3-padding-xxlarge w3-text-white">
    <span class="w3-jumbo w3-animate-left w3-hide-small w3-text-blue">Ưu đãi</span><br>
    <span class="w3-large w3-animate-top w3-text-blue">Duy nhất chủ nhật -20% Cooler Summer</span>
    <p><a href="/details-MIT-CSM" class="w3-btn w3-animate-bottom w3-large w3-border w3-border-orange w3-white w3-margin-top w3-hover-opacity-off">Xem ngay</a></p>
  </div> 
  <div class="w3-display-bottomleft w3-padding-xxlarge w3-text-grey w3-large">
    <a href="#0" class="w3-hover-text-white"><i class="fa fa-facebook-official"></i></a>
    <a href="#0" class="w3-hover-text-white"><i class="fa fa-flickr"></i></a>
    <a href="#0" class="w3-hover-text-white"><i class="fa fa-instagram"></i></a>
    <a href="#0" class="w3-hover-text-white"><i class="fa fa-twitter"></i></a>
    <a href="#0" class="w3-hover-text-white"><i class="fa fa-linkedin"></i></a>
  </div>
</div>


<!-- Carousel Ends -->
<!-- Main Container Starts -->

<!---	<div class="main-container container">    TẠM THỜI KHÔNG HIỆN CÁI NÀY, ĐỢI CÓ ĐỦ CSDL RỒI LÀM PHẦN NÀY
	<!-- Featured Products Starts --
		<section class="products-list">			
			<div class="container">
			<!-- Heading Starts --
				<h2 class="product-head">TIÊU BIỂU</h2>
			<!-- Heading Ends -->
			<!-- Products Row Starts --
				<div class="row">
				<!-- Product #1 Starts --
					<div class="col-md-6 col-sm-12">
						<div class="product-col">
							<div class="image">
								<span class="label-new">Mới</span>
								<span class="label-sale">Giảm giá</span>
								<img src="/images/product-images/1.jpg" alt="product" class="img-responsive img-center-sm" />
							</div>
							<div class="caption">
								<h4><a href="/details">Wheels for SUV Cars</a></h4>
								<div class="description">
									Nội dung ...
								</div>
								<div class="price">
									<span class="price-new">$199.50</span> 
									<span class="price-old">$249.50</span>
								</div>
								<div class="cart-button button-group">
									<button type="button" class="btn btn-wishlist">
										<i class="fa fa-heart"></i>
									</button>
									<button type="button" class="btn btn-cart">
										<i class="fa fa-shopping-cart"></i>			
										Thêm vào giỏ
									</button>								
								</div>
							</div>
						</div>
					</div>
				<!-- Product #1 Ends --
				<!-- Product #2 Starts --
					
					<div class="col-md-6 col-sm-12">
						<div class="product-col">
							<div class="image">
								<span class="label-new">Mới</span>
								<img src="/images/product-images/3.jpg" alt="product" class="img-responsive img-center-sm" />
							</div>
							<div class="caption">
								<h4><a href="/details">Wheels for SUV Cars</a></h4>
								<div class="description">
									Nội dung ...
								</div>
								<div class="price">
									<span class="price-new">$199.50</span> 
									<span class="price-old">$249.50</span>
								</div>
								<div class="cart-button button-group">
									<button type="button" class="btn btn-wishlist">
										<i class="fa fa-heart"></i>
									</button>
									<button type="button" class="btn btn-cart">
										<i class="fa fa-shopping-cart"></i>			
										Thêm vào giỏ
									</button>								
								</div>
							</div>
						</div>
					</div>
				<!-- Product #2 Ends --
				</div>
			<!-- Products Row Ends --
			</div>
		</section>
	<!-- Featured Products Ends --
	<!-- 2 Column Banners Starts --
		<div class="col2-banners">
			<div class="container">
				<ul class="row list-unstyled">
					<li class="col-sm-4">
						<img src="/images/banners/2col-banner1.jpg" alt="banners" class="img-responsive" />
					</li>
					<li class="col-sm-8">
						<img src="/images/banners/2col-banner2.jpg" alt="banners" class="img-responsive" />
					</li>
				</ul>
			</div>
		</div>
	<!-- 2 Column Banners Ends --
	<!-- Latest Products Starts --
		<section class="products-list">			
			<div class="container">
			<!-- Heading Starts -->
			<!--	<h2 class="product-head">MỚI NHẤT</h2>
			<!-- Heading Ends -->
			<!-- Products Row Starts --
				<div class="row">
				<!-- Product #1 Starts --
					<div class="col-md-3 col-sm-6">
						<div class="product-col">
							<div class="image">
								<span class="label-new">Mới</span>
								<span class="label-sale">Giảm giá</span>
								<img src="/images/product-images/5.jpg" alt="product" class="img-responsive img-center-sm" />
							</div>
							<div class="caption">
								<h4>
									<a href="/details">Wheels for SUV Cars</a>
								</h4>
								<div class="price">
									<span class="price-new">$199.50</span> 
									<span class="price-old">$249.50</span>
								</div>
								<div class="cart-button button-group">
									<button type="button" class="btn btn-wishlist">
										<i class="fa fa-heart"></i>
									</button>
									<button type="button" class="btn btn-cart">
										<i class="fa fa-shopping-cart"></i>			
										Thêm vào giỏ
									</button>								
								</div>
							</div>
						</div>
					</div>
				<!-- Product #1 Ends --
				<!-- Product #2 Starts --
					<div class="col-md-3 col-sm-6">
						<div class="product-col">
							<div class="image">
								<img src="/images/product-images/6.jpg" alt="product" class="img-responsive img-center-sm" />
							</div>
							<div class="caption">
								<h4>
									<a href="/details">Wheels for SUV Cars</a>
								</h4>
								<div class="price">
									<span class="price-new">$199.50</span> 
									<span class="price-old">$249.50</span>
								</div>
								<div class="cart-button button-group">
									<button type="button" class="btn btn-wishlist">
										<i class="fa fa-heart"></i>
									</button>
									<button type="button" class="btn btn-cart">
										<i class="fa fa-shopping-cart"></i>			
										Thêm vào giỏ
									</button>								
								</div>
							</div>
						</div>
					</div>
				<!-- Product #2 Ends --
				<!-- Product #3 Starts --
					<div class="col-md-3 col-sm-6">
						<div class="product-col">
							<div class="image">
								<span class="label-sale">Giảm giá</span>
								<img src="/images/product-images/7.jpg" alt="product" class="img-responsive img-center-sm" />
							</div>
							<div class="caption">
								<h4>
									<a href="/details">Wheels for SUV Cars</a>
								</h4>
								<div class="price">
									<span class="price-new">$199.50</span> 
									<span class="price-old">$249.50</span>
								</div>
								<div class="cart-button button-group">
									<button type="button" class="btn btn-wishlist">
										<i class="fa fa-heart"></i>
									</button>
									<button type="button" class="btn btn-cart">
										<i class="fa fa-shopping-cart"></i>			
										Thêm vào giỏ
									</button>								
								</div>
							</div>
						</div>
					</div>
				<!-- Product #3 Ends --
				<!-- Product #4 Starts 
					<div class="col-md-3 col-sm-6">
						<div class="product-col">
							<div class="image">
								<img src="/images/product-images/8.jpg" alt="product" class="img-responsive img-center-sm" />
							</div>
							<div class="caption">
								<h4>
									<a href="/details">Wheels for SUV Cars</a>
								</h4>
								<div class="price">
									<span class="price-new">$199.50</span> 
									<span class="price-old">$249.50</span>
								</div>
								<div class="cart-button button-group">
									<button type="button" class="btn btn-wishlist">
										<i class="fa fa-heart"></i>
									</button>
									<button type="button" class="btn btn-cart">
										<i class="fa fa-shopping-cart"></i>			
										Thêm vào giỏ
									</button>								
								</div>
							</div>
						</div>
					</div>
				<!-- Product #4 Ends 
				</div>
			<!-- Products Row Ends 
			</div>
		</section>
	<!-- Latest Products Ends 
	<!-- Brands Starts 
		<ul class="list-unstyled row brand-list">
			<li class="col-xs-2"><img src="/images/brand/brand-img1.jpg" alt="Brand" class="img-responsive" /></li>
			<li class="col-xs-2"><img src="/images/brand/brand-img2.jpg" alt="Brand" class="img-responsive" /></li>
			<li class="col-xs-2"><img src="/images/brand/brand-img3.jpg" alt="Brand" class="img-responsive" /></li>
			<li class="col-xs-2"><img src="/images/brand/brand-img4.jpg" alt="Brand" class="img-responsive" /></li>
			<li class="col-xs-2"><img src="/images/brand/brand-img5.jpg" alt="Brand" class="img-responsive" /></li>
			<li class="col-xs-2"><img src="/images/brand/brand-img6.jpg" alt="Brand" class="img-responsive" /></li>
		</ul>
	<!-- Brands Ends 
	</div> --->
	<ul class="list-unstyled row brand-list">
        <li class="col-xs-2"><a href="/gallery"><img src="/images/gallery/1.jpg" alt="Brand" class="img-responsive brand" /></a></li>
        <li class="col-xs-2"><a href="/gallery"><img src="/images/gallery/3.jpg" alt="Brand" class="img-responsive brand" /></a></li>
        <li class="col-xs-2"><a href="/gallery"><img src="/images/gallery/5.jpg" alt="Brand" class="img-responsive brand" /></a></li>
        <li class="col-xs-2"><a href="/gallery"><img src="/images/gallery/2.jpg" alt="Brand" class="img-responsive brand" /></a></li>
        <li class="col-xs-2"><a href="/gallery"><img src="/images/gallery/10.jpg" alt="Brand" class="img-responsive brand" /></a></li>
        <li class="col-xs-2"><a href="/gallery"><img src="/images/gallery/11.jpg" alt="Brand" class="img-responsive brand" /></a></li>

		</ul>
		<script>
var myIndex = 0;
carousel();

function carousel() {
    var i;
    var x = document.getElementsByClassName("mySlides");
    for (i = 0; i < x.length; i++) {
      x[i].style.display = "none";  
    }
    myIndex++;
    if (myIndex > x.length) {myIndex = 1}    
    x[myIndex-1].style.display = "block";  
    setTimeout(carousel, 7000);    
}
</script>
<!-- Main Container Ends -->
@endsection