@extends('layouts.general')
@section('content')
<div class="main-container container">
		<h3 class="main-heading text-center">
			THÔNG TIN TÀI KHOẢN
		</h3>
		<!-- Nested Row Starts -->
		<div class="row">
			<!-- Primary Content Starts -->
			<div class="col-md-9">
			
				<!-- Breadcrumb Starts -->
				<!-- Breadcrumb Ends -->
				
				<!-- About Content Starts -->
				<div class="page-box">
					<div class="row">
						<div class="w3-container">
						<div class="col-sm-8">
							<h3>Tên:</h3> <h3 class="w3-margin-left w3-text-blue">{{ Auth::user()->name }}</h3>
						</div>
						<div class="col-sm-4">
							<a href="#0" onclick="document.getElementById('taikhoan{{ Auth::user()->id }}').style.display='block'"><img src="/images/icon/update.png" title="Thay đổi"/></a>
						</div>
						</div>
						<div class="w3-container">
							<div class="col-sm-8">
							<h3>Quyền:</h3><h3 class="w3-margin-left w3-text-blue"> {{ Auth::user()->role }}</h3>
							</div>
							<div class="col-sm-4"></div>
						</div>
						<div class="w3-container">
							<div class="col-sm-8">
							<h3>ID (email):</h3><h3 class="w3-margin-left w3-text-blue"> {{ Auth::user()->email }}</h3>
							</div>
							<div class="col-sm-4"></div>
							</div>
							<div class="w3-container">
							<div class="col-sm-8">
							
							<h3>Mật khẩu:</h3><h3 class="w3-margin-left w3-text-blue"> ********</h3>
							</div>
							<div class="col-sm-4">
								<a href="#0" onclick="document.getElementById('matkhau-{{ Auth::user()->id }}').style.display='block'"><img src="/images/icon/update.png" title="Thay đổi"/></a>
							</div>
							</div>
						<div class="w3-container">
							<div class="col-sm-8">
							<h3>Ngày tạo:</h3><h3 class="w3-margin-left w3-text-blue"> {{ Auth::user()->created_at }}</h3>
							</div>
							<div class="col-sm-4"></div>
						</div>
						<div class="w3-container">
							<div class="col-sm-8">
							<h3>Cập nhật gần nhất:</h3><h3 class="w3-margin-left w3-text-blue"> {{ Auth::user()->updated_at }}</h3>
							</div>
							<div class="col-sm-4"></div>
						</div>
						<div class="col-sm-4">
						</div>
						</div>
						<ul class="list-unstyled list-inline sm-links">
								<li><a href="/#"><i class="fa fa-twitter"></i></a></li>
								<li><a href="/#"><i class="fa fa-facebook"></i></a></li>
								<li><a href="/#"><i class="fa fa-linkedin"></i></a></li>
							</ul>
					</div>
					<br />
					
				</div>					
				<!-- About Content Ends -->
				
				
				<!-- Testimonials Starts -->
				
		</div>
		<!-- Nested Row Ends -->
		
	</div>
	@include('admin.taikhoan')
@endsection