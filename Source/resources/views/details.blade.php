
@extends('layouts.general')
@section('content')

<!-- Main Container Starts -->
	<div class="main-container container">
		<h3 class="main-heading text-center">
			CHI TIẾT
		</h3>
	<!-- Nested Row Starts -->
		<div class="row">
		<!-- Primary Content Starts -->
			<div class="col-md-9">
			<!-- Breadcrumb Starts -->

			<!-- Breadcrumb Ends -->
			<!-- Product Info Starts -->

				<div class="row product-info">
				@foreach($douong as $chitiet)
				<!-- Left Starts -->
					<div class="col-xs-8 col-sm-7 images-block w3-center">
							<img class="table_img hover-image w3-round-large w3-border w3-padding-4 w3-padding-right w3-padding-left w3-border-orange" src="/{{$chitiet->IDHinhAnh}}" onclick="document.getElementById('hinh').style.display='block'"/>
							<div id="hinh" class="w3-modal">
								<div class="w3-modal-content w3-animate-zoom" style="max-width: 500px">
									<span onclick="document.getElementById('hinh').style.display='none'" class="w3-closebtn w3-container w3-padding-1 w3-display-topright" title="Đóng">&times;</span>
									<img src="/{{$chitiet->IDHinhAnh}}" style="width:100%" />
								</div>
							</div>
						@foreach($hinhdaidien as $hdd)
							<img class="table_img hover-image w3-round-large w3-border w3-padding-4 w3-padding-right w3-padding-left w3-border-orange" src="/{{$hdd->DuongDan}}" onclick="document.getElementById('hinh{{$hdd->DuongDan}}').style.display='block'"/>
							<div id="hinh{{$hdd->DuongDan}}" class="w3-modal">
								<div class="w3-modal-content w3-animate-zoom" style="max-width: 500px">
									<span onclick="document.getElementById('hinh{{$hdd->DuongDan}}').style.display='none'" class="w3-closebtn w3-container w3-padding-1 w3-display-topright" title="Đóng">&times;</span>
									<img src="/{{$hdd->DuongDan}}" style="width:100%" />
								</div>
							</div>
						@endforeach
					</div>
					
				<!-- Left Ends -->
				<!-- Right Starts -->
					<div class="col-xs-12 col-sm-5 product-details">
						@if (Auth::guest())
						@else
							@foreach($solan as $sl)
							<h2 class="w3-text-blue">
							Số lần xem: {{$sl->sl}}
							</h2>
						@endforeach
						@endif
						
					<!-- Product Name Starts -->
						<h2>
							{{$chitiet->TenDoUong}}
						</h2>
					<!-- Product Name Ends -->
					<!-- Manufacturer Starts -->
						<ul class="list-unstyled manufacturer">
							<li><span>Yêu thích:</span> 300</li>
							<li>
								<span>Tình trạng:</span> <strong class="label label-success">In Stock</strong>
							</li>
						</ul>
					<!-- Manufacturer Ends -->
					<!-- Price Starts -->
						<div class="price">
							<span class="price-head">Giá:</span>
							<span class="price-new">{{$chitiet->GiaTien}} vnđ</span>
						</div>
					<!-- Price Ends -->
					<!-- Available Options Starts -->
						<div class="options">
							<div class="form-group">
								<label class="control-label text-uppercase" for="input-quantity">Qty:</label>
								<input type="text" name="quantity" value="1" size="2" id="input-quantity" class="form-control" />
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
					<!-- Available Options Ends -->

					</div>
				<!-- Right Ends -->
					@endforeach
				</div>
			<!-- product Info Ends -->
			<!-- Tabs Starts -->
				<div class="tabs-panel panel-smart">
		<!-- Nav Tabs Starts -->
					<ul class="nav nav-tabs">
						<li class="active">
							<a href="/#tab-description">Mô tả</a>
						</li>
						<li>
							<a href="/#tab-review">Phản hồi</a>
						</li>
					</ul>
		<!-- Nav Tabs Ends -->
				<!-- Tab Content Starts -->
					<div class="tab-content clearfix">

			<!-- Description Starts -->
						<div class="tab-pane active" id="tab-description">
							<p>
								{{$chitiet->MoTa}}
							</p>
						</div>
			<!-- Description Ends -->
			<!-- Specification Starts -->

			<!-- Additional Information Ends -->
			<!-- Review Starts -->
						<div class="tab-pane" id="tab-review">
							@foreach($douongtb as $tb)
							<p>
								<p class="w3-text-blue">{{$tb->UserName}}</p>
								{{$tb->DanhGia}}
							</p>
							@endforeach
							{!! $douongtb->render() !!}
							</br>
							<div class="w3-padding-bottom col-sm-12 w3-border-top"></div>
							<form class="form-horizontal" action="/bl-{{$chitiet->IDDoUong}}">
								@if (Auth::guest())
								<div class="form-group required">
									<label class="col-sm-2 control-label" for="input-name">Tên</label>
									<div class="col-sm-10">							
										<input type="text" name="tenbl" id="input-name" class="form-control" />			
									</div>
								</div>
								@else
								<div class="w3-modal">
									<label class="col-sm-2 control-label" for="input-name">Tên</label>
									<div class="col-sm-10">
										<input type="text" name="tenbl" value="{{ Auth::user()->name }}" id="input-name" class="form-control" />
									</div>
								</div>
								@endif
								<div class="form-group required">
									<label class="col-sm-2 control-label" for="input-review">Ý kiến</label>
									<div class="col-sm-10">
										<textarea name="ykienbl" rows="5" id="input-review" class="form-control"></textarea>
									</div>
								</div>
								<div class="buttons">
									<div class="col-sm-offset-2 col-sm-10">
										<button type="submit" id="button-review" class="btn btn-main">
											Gửi
										</button>
									</div>
								</div>
						</form>

					</div>
			<!-- Review Ends -->
				</div>
		<!-- Tab Content Ends -->
			</div>
	<!-- Tabs Ends -->
			<!-- Product Description Ends -->
			<!-- Related Products Starts -->
				<div class="product-info-box">
					<h4 class="heading">Tương tự</h4>

				<!-- Products Row Starts -->
					<div class="row">
					@foreach ($tuongtu as $du)
					<!-- Product #1 Starts -->
						<div class="col-md-4 col-sm-6">
							<div class="product-col no-box-shadow side-product">
								<div class="image"	>
								<div class="test w3-center">
										<div class="grid">
											<div class="show-image">
												@if (Auth::guest())
													<a href="/details-{{$du->IDLoaiDoUong}}-{{$du->IDDoUong}}-0"> <img class="hover-image w3-round-xxlarge w3-border w3-padding-4 w3-padding-right w3-padding-left w3-border-orange" src="/{{$du->IDHinhAnh}}"/></a>
												@else
													<a href="/details-{{$du->IDLoaiDoUong}}-{{$du->IDDoUong}}-{{ Auth::user()->id }}"> <img class="hover-image w3-round-xxlarge w3-border w3-padding-4 w3-padding-right w3-padding-left w3-border-orange" src="/{{$du->IDHinhAnh}}"/></a>
												@endif
											</div>
											@include('timkiem.hover')
										</div>
									</div>

									<div class="w3-margin-top">
										<h4>
											@if (Auth::guest())
												<a href="/detail-{{$du->IDLoaiDoUong}}-{{$du->IDDoUong}}-0">{{$du->TenDoUong}}</a></h4>
											@else
												<a href="/detail-{{$du->IDLoaiDoUong}}-{{$du->IDDoUong}}-{{ Auth::user()->id }}">{{$du->TenDoUong}}</a></h4>
											@endif
										<div class="w3-badge w3-blue">
											<span class="w3-large">{{$du->GiaTien}} vnđ</span>
										</div>
									</div>
								</div>
							</div>
							</div>

					<!-- Product #1 Ends -->
					@endforeach
					</div>

				<!-- Products Row Ends -->
				</div>
			<!-- Related Products Ends -->
			</div>
		<!-- Primary Content Ends -->
		<!-- Sidebar Starts -->
			<div class="col-md-3">
			<!-- Categories Links Starts -->
			<!-- Bestsellers Links Starts -->
				<h3 class="side-heading">Bán chạy nhất</h3>
				@include('douong.banchaynhat')
			<!-- Bestsellers Links Ends -->
			</div>
		<!-- Sidebar Ends -->
		</div>
	<!-- Nested Row Ends -->
	</div>
<!-- Main Container Ends -->

@endsection