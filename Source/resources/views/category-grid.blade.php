@extends('layouts.general')

@section('content')
	<div class="main-container container">
		<h3 class="main-heading text-center">
			DANH MỤC
		</h3>
		<!-- Nested Row Starts -->
		<div class="row">

			<!-- Primary Content Starts -->
			<div class="col-md-9">
	@foreach($loaidouong as $ldu)
	<img src="/{{$ldu->idDaiDien}}" style="width:100%; height: auto" />
	<h2 class="main-heading2">

	{{$ldu->TenDoUong}}

	</h2>
	<div class="product-filter">
		<div class="row">
			<div class="col-md-4">
				<div class="display">


					<a href="/category-list-{{$ldu->IDLoaiDoUong}}" class="active">
						<i class="fa fa-th-list" title="List View"></i>
					</a>
					<a href="/category-grid-{{$ldu->IDLoaiDoUong}}">
						<i class="fa fa-th" title="Grid View"></i>
					</a>

				</div>
			</div>
			<div class="col-md-2 text-right">
				<label class="control-label">Sort</label>
			</div>
			<div class="col-md-3 text-right">
				<select class="form-control">
					<option value="default" selected="selected">Default</option>
					<option value="NAZ">Name (A - Z)</option>
					<option value="NZA">Name (Z - A)</option>
				</select>
			</div>
		</div>
	</div>
	<!-- Product Grid Display Starts -->
	<div class="row">
		<!-- Product # Starts -->
		@foreach ($douong as $du)
			<div class="col-md-4 col-sm-4">
				<div class="product-col">
					<div class="image w3-round-xxlarge">
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
										<a href="/details-{{$du->IDLoaiDoUong}}-{{$du->IDDoUong}}-0">{{$du->TenDoUong}}</a>
									@else
										<a href="/details-{{$du->IDLoaiDoUong}}-{{$du->IDDoUong}}-{{ Auth::user()->id }}">{{$du->TenDoUong}}</a>
									@endif
								</h4>
								<div class="w3-badge w3-blue">
									<span class="w3-large">{{$du->GiaTien}} vnđ</span>
								</div>
							</div>
					</div>
				</div>
			</div>
		@endforeach
		
		<!-- Product # Ends -->
	</div>
	{!! $douong->render() !!}
	@endforeach
			</div>
			<!-- Primary Content Ends -->

			<!-- Sidebar Starts -->

			<!-- Nested Row Ends -->
		@include('loaidouong.menu_loai')
		</div>

	</div>
	<!-- Product Grid Display Ends -->
@endsection