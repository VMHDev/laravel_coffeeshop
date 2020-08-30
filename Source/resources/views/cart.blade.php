
@extends('layouts.general')
@section('content')
<!-- Main Container Starts -->
	<div class="main-container container">
	<!-- Breadcrumb Starts -->

	<!-- Breadcrumb Ends -->
	<!-- Main Heading Starts -->
		<h3 class="main-heading text-center">
			GIỎ HÀNG
		</h3>
	<!-- Main Heading Ends -->
	<!-- Shopping Cart Table Starts -->
		<div class="table-responsive shopping-cart-table">
			<table class="table table-bordered">
				<thead>
					<tr>
						<td class="text-center">
							
						</td>
						<td class="text-center">
							CHI TIẾT
						</td>							
						<td class="text-center">
							SỐ LƯỢNG
						</td>
						<td class="text-center">
							GIÁ
						</td>
						<td class="text-center">
							TỔNG TIỀN
						</td>
						<td class="text-center">
							HÀNH ĐỘNG
						</td>
					</tr>
				</thead>
				<tbody>
					<tr>
						<td class="text-center">
							<a href="/product">
								<img src="/images/anhsosanh/HOT.jpg" alt="Product Name" title="Product Name" class="img-thumbnail" />
							</a>
						</td>
						<td class="text-center">
							<a href="/product-full">Hot Chocolate</a>
						</td>							
						<td class="text-center">
							<div class="input-group btn-block">
								<input type="text" name="quantity" value="2" size="1" class="form-control" />
							</div>								
						</td>
						<td class="text-center">
							27.000 vnđ
						</td>
						<td class="text-center">
							54.000 vnđ
						</td>
						<td class="text-center">
							<button type="submit" title="Update" class="btn btn-default tool-tip">
								<i class="fa fa-refresh"></i>
							</button>
							<button type="button" title="Remove" class="btn btn-default tool-tip">
								<i class="fa fa-times-circle"></i>
							</button>
						</td>
					</tr>
					<tr>
						<td class="text-center">
							<a href="/product">
								<img src="/images/anhsosanh/BHW.jpg" alt="Product Name" title="Product Name" class="img-thumbnail" />
							</a>
						</td>
						<td class="text-center">
							<a href="/product-full">Blue Hawaii</a>
						</td>							
						<td class="text-center">
							<div class="input-group btn-block">
								<input type="text" name="quantity" value="1" size="1" class="form-control" />
							</div>								
						</td>
						<td class="text-center">
							22.000 vnđ
						</td>
						<td class="text-center">
							22.000 vnđ
						</td>
						<td class="text-center">
							<button type="submit" title="Update" class="btn btn-default tool-tip">
								<i class="fa fa-refresh"></i>
							</button>
							<button type="button" title="Remove" class="btn btn-default tool-tip">
								<i class="fa fa-times-circle"></i>
							</button>
						</td>
					</tr>						
				</tbody>
				<tfoot>
					<tr>
					  <td colspan="4" class="text-right">
						<strong>Tổng :</strong>
					  </td>
					  <td colspan="2" class="text-left">
						$76.000 vnđ
					  </td>
					</tr>
				</tfoot>
			</table>				
		</div>
	<!-- Shopping Cart Table Ends -->
	<!-- Shipping Section Starts -->
		<section class="registration-area">
			<div class="row">
			<!-- Shipping & Shipment Block Starts -->
				<div class="col-sm-6">
				<!-- Taxes Block Starts -->
					<div class="panel panel-smart">
						<div class="panel-heading">
							<h3 class="panel-title">
								Vận chuyển &amp; Thuế
							</h3>
						</div>
						<div class="panel-body">
						<!-- Form Starts -->
							<form class="form-horizontal" role="form">
								<div class="form-group">
									<label for="inputCountry" class="col-sm-3 control-label">Tỉnh :</label>
									<div class="col-sm-9">
										<select class="form-control" id="inputCountry">
											<option>Hà Nội</option>
											<option>Đà Nẵng</option>
											<option>Tp. Hồ Chí Minh</option>									
										</select>
									</div>
								</div>
								<div class="form-group">
									<label for="inputRegion" class="col-sm-3 control-label">Huyện :</label>
									<div class="col-sm-9">
										<select class="form-control" id="inputRegion">
											<option>- ... -</option>
										</select>
									</div>
								</div>
								<div class="form-group">
									<label for="inputZipCode" class="col-sm-3 control-label">Mã vùng :</label>
									<div class="col-sm-9">
										<input type="text" class="form-control" id="inputZipCode" placeholder="Zip Code">
									</div>
								</div>
								<div class="form-group">
									<div class="col-sm-offset-3 col-sm-9">

										<input type="button" class="btn btn-main text-uppercase" onclick="alert('Thêm Thành Công')" value="Thêm"/>
									</div>
								</div>
							</form>
						<!-- Form Ends -->
						</div>
					</div>
				<!-- Taxes Block Ends -->
				<!-- Shipment Information Block Starts -->
					<div class="panel panel-smart">
						<div class="panel-heading">
							<h3 class="panel-title">
								Chuyển hàng
							</h3>
						</div>
						<div class="panel-body">
						<!-- Form Starts -->
							<form class="form-horizontal" role="form">
								<div class="form-group">
									<label for="inputFname" class="col-sm-3 control-label">Họ tên :</label>
									<div class="col-sm-9">
										<input type="text" class="form-control" id="inputFname" placeholder="họ tên">
									</div>
								</div>
								<div class="form-group">
									<label for="inputEmail" class="col-sm-3 control-label">Email :</label>
									<div class="col-sm-9">
										<input type="email" class="form-control" id="inputEmail" placeholder="email">
									</div>
								</div>
								<div class="form-group">
									<label for="inputPhone" class="col-sm-3 control-label">Điện thoại :</label>
									<div class="col-sm-9">
										<input type="text" class="form-control" id="inputPhone" placeholder="điện thoại">
									</div>
								</div>
								<div class="form-group">
									<label for="inputAddress1" class="col-sm-3 control-label">Địa chỉ :</label>
									<div class="col-sm-9">
										<input type="text" class="form-control" id="inputAddress1" placeholder="địa chỉ">
									</div>
								</div>
								<div class="form-group">
									<div class="col-sm-offset-3 col-sm-9">

										<input type="button" class="btn btn-main text-uppercase" onclick="alert('Gửi Thành Công')" value="Gửi"/>
									</div>
								</div>
							</form>
						<!-- Form Ends -->
						</div>
					</div>
				<!-- Shipment Information Block Ends -->
				</div>
			<!-- Shipping & Shipment Block Ends -->
			<!-- Discount & Conditions Blocks Starts -->
				<div class="col-sm-6">
				<!-- Discount Coupon Block Starts -->
					<div class="panel panel-smart">
						<div class="panel-heading">
							<h3 class="panel-title">
								Khuyến mãi
							</h3>
						</div>
						<div class="panel-body">
						<!-- Form Starts -->
							<form class="form-horizontal" role="form">
								<div class="form-group">
									<label for="inputCouponCode" class="col-sm-3 control-label">Mã :</label>
									<div class="col-sm-9">
										<input type="text" class="form-control" id="inputCouponCode" placeholder="mã">
									</div>
								</div>
								<div class="form-group">
									<div class="col-sm-offset-3 col-sm-9">

										<input type="button" class="btn btn-main text-uppercase" onclick="alert('Thêm Thành Công')" value="Thêm"/>
									</div>
								</div>
							</form>
						<!-- Form Ends -->
						</div>
					</div>
				<!-- Discount Coupon Block Ends -->
				<!-- Conditions Panel Starts -->
					<div class="panel panel-smart">
						<div class="panel-heading">
							<h3 class="panel-title">
								Qui định &amp; Điều kiện
							</h3>
						</div>
						<div class="panel-body">
							<p>
								Nội dung
							</p>
							<p>
								Nội dung
							</p>
							<p>
								Nội dung
							</p>								
						</div>
					</div>
				<!-- Conditions Panel Ends -->
				<!-- Total Panel Starts -->
					<div class="panel panel-smart">
						<div class="panel-heading">
							<h3 class="panel-title">
								Thanh toán
							</h3>
						</div>
						<div class="panel-body">
							<dl class="dl-horizontal">
								<dt>Khuyến mãi :</dt>
								<dd>0 đ</dd>
								<dt>Giá :</dt>
								<dd>76.000 vnđ</dd>
								<dt>Thuế :</dt>
								<dd>0 đ</dd>
								<dt>Vận chuyển :</dt>
								<dd>20.000 vnđ</dd>
							</dl>
							<hr />
							<dl class="dl-horizontal total">
								<dt>Tổng tiền :</dt>
								<dd>96.000 vnđ</dd>
							</dl>
							<hr />
							<div class="text-uppercase clearfix">
								<a href="/#" class="btn btn-main pull-left">
									<span class="hidden-xs">Tiếp tục mua sắm</span>
									<span class="visible-xs">Bước kế tiếp</span>
								</a>
								<a href="/#" class="btn btn-main pull-right">		
									Thanh toán
								</a>
							</div>
						</div>
					</div>
				<!-- Total Panel Ends -->
				</div>
			<!-- Discount & Conditions Blocks Ends -->
			</div>
		</section>
	<!-- Shipping Section Ends -->
	</div>
<!-- Main Container Ends -->
@endsection