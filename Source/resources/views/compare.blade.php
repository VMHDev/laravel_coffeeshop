
@extends('layouts.general')
@section('content')
<!-- Main Container Starts -->
	<div class="main-container container">
	<!-- Breadcrumb Starts -->

	<!-- Breadcrumb Ends -->
	<!-- Main Heading Starts -->
		<h3 class="main-heading text-center">
			SO SÁNH SẢN PHẨM
		</h3>
	<!-- Main Heading Ends -->
	<!-- Compare Table Starts -->
		<div class="table-responsive compare-table">
			<table class="table table-bordered">
				<thead>
					<tr>
						<td>No</td>
						<td></td>
						<td>Tên</td>
						<td>Giá</td>
						<td>Loại</td>
						<td>Đánh giá</td>
					</tr>
				</thead>
				<tbody>
					<tr>
						<td>1</td>
						<td>
							<img src="/images/anhsosanh/CCB.jpg" alt="image" title="image" class="img-thumbnail" />
						</td>
						<td class="name">
							<a href="/details-FAB-CKC"> <span style="font-size: 30px; color:red "><strong>Cookie & Cream Blended</strong> </span></a>
						</td>
						<td>
							<span style="font-size: 20px; color: red"><strong>27.000 vnđ </strong></span>
						</td>
						<td>
							<span style="font-size: 20px; color: red"><strong>Ice Blended </strong></span>
						</td>
						<td class="rating">
							<i class="fa fa-star"></i>
							<i class="fa fa-star"></i>
							<i class="fa fa-star"></i>
							<i class="fa fa-star"></i>
							<i class="fa fa-star"></i>
						</td>
					</tr>
					<tr>
						<td>2</td>
						<td>
							<img src="/images/anhsosanh/BBR.jpg" alt="image" title="image" class="img-thumbnail" />
						</td>
						<td class="name">
							<a href="/details-SSM-BBR"> <span style="font-size: 30px; color:red"><strong>Blue Berry</strong> </span></a>
						</td>							
						<td>
							<span style="font-size: 20px; color: red"><strong>35.000 vnđ </strong></span>
						</td>
						<td>

							<span style="font-size: 20px; color: red"><strong>Special Smoothies Blended </strong></span>
						</td>
						<td class="rating">
							<i class="fa fa-star"></i>
							<i class="fa fa-star"></i>
							<i class="fa fa-star"></i>
							<i class="fa fa-star"></i>
							<i class="fa fa-star-o"></i>
						</td>
					</tr>
					<tr>
						<td>3</td>
						<td>
							<img src="/images/anhsosanh/CAP.jpg" alt="image" title="image" class="img-thumbnail" />
						</td>
						<td class="name">
							<a href="/details-ESP-CAP"> <span style="font-size: 30px; color:red"><strong>Capuccino</strong> </span></a>
						</td>							
						<td>
							<span style="font-size: 20px; color: red"><strong>25.000 vnđ </strong></span>
						</td>
						<td>
							<span style="font-size: 20px; color: red"><strong>Espresso</strong></span>
						</td>
						<td class="rating">
							<i class="fa fa-star"></i>
							<i class="fa fa-star"></i>
							<i class="fa fa-star"></i>
							<i class="fa fa-star-o"></i>
							<i class="fa fa-star-o"></i>
						</td>
					</tr>
					<tr>
						<td>4</td>
						<td>
							<img src="/images/anhsosanh/CDY.jpg" alt="image" title="image" class="img-thumbnail" />
						</td>
						<td class="name">
							<a href="/details-SOD-CDY"> <span style="font-size: 30px; color: red"><strong>Soda Candy</strong> </span></a>
						</td>
						<td>

							<span style="font-size: 20px; color: red"><strong>22.000 vnđ</strong></span>
						</td>
						<td>

							<span style="font-size: 20px; color: red"><strong>Swebi Soda </strong></span>
						</td>
						<td class="rating">
							<i class="fa fa-star"></i>
							<i class="fa fa-star"></i>
							<i class="fa fa-star"></i>
							<i class="fa fa-star-o"></i>
							<i class="fa fa-star-o"></i>
						</td>
					</tr>
				</tbody>
			</table>
		</div>
	<!-- Compare Table Ends -->
	</div>
<!-- Main Container Ends -->
@endsection