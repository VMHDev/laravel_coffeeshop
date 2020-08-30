@extends('layouts.general')
@section('content')
    <!-- Main Container Starts -->
    <div class="main-container container">
        <h3 class="main-heading text-center">
            CHI TIẾT KHUYẾN MÃI
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
                            <div class="image-detail">
                                <img src="/{{$chitiet->IDHinhAnh}}" alt="Image" class="hover-image w3-round-xxlarge w3-border w3-padding-4 w3-padding-right w3-padding-left w3-border-orange w3-margin-bottom" />
                            </div>
                        </div>
                        <!-- Left Ends -->
                        <!-- Right Starts -->
                        <div class="col-xs-12 col-sm-5 product-details">


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
                                <span class="w3-large lineThrough">{{ $chitiet->GiaTien }}</span>
                                <span class="price-new">{{$chitiet->GiaKM}} vnđ</span>
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
                    <h4 class="heading">Cùng khuyến mãi</h4>

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
                                                    <a href="/details_km-{{ $du->IDDoUongKM }}-{{$du->IDCTKM}}"> <img class="hover-image w3-round-xxlarge w3-border w3-padding-4 w3-padding-right du-padding-left w3-border-orange" src="/{{$du->IDHinhAnh}}"/></a>
                                                </div>
                                                @include('timkiem.hover')
                                            </div>
                                        </div>
                                        <div class="w3-margin-top">
                                            <h4>{{$du->TenDoUong}}</h4>
                                            <div class="w3-round-xlarge w3-padding-tiny w3-blue">
                                                <span class="w3-large lineThrough">{{ $du->GiaTien }}</span>
                                                <span class="w3-xxlarge">{{ $du->GiaKM }} vnđ</span>
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