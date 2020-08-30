<div class="col-md-3">
	<!-- Categories Links Starts -->
	<h3 class="side-heading">Danh mục</h3>

	<!--Load danh sách các loại đồ uống từ database lên-->
	<div class="list-group">
		@foreach ($loaidouong as $ldu)
			<a href="/category-list-{{$ldu->IDLoaiDoUong}}" class="list-group-item">
				<i class="fa fa-chevron-right">{{ $ldu->TenDoUong }}</i>
			</a>
		@endforeach
	</div>
<!-- Categories Links Ends -->

	<!-- Bestsellers Links Starts -->
	<h3 class="side-heading">Bán chạy nhất</h3>

	@include('douong.banchaynhat')
	<!-- Bestsellers Links Ends -->

</div>
<!-- Sidebar Ends -->