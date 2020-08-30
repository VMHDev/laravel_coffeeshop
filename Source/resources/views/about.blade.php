@extends('layouts.general')
@section('content')
<div class="main-container container">
		<h3 class="main-heading text-center">
			GIỚI THIỆU
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
						<div class="col-sm-4">
							<img src="/images/about/about1.jpg" alt="image" class="img-responsive img-circle" />
						</div>
						<div class="col-sm-8">
							<h3>Võ Minh Duy</h3>
							<h4>Manager</h4>
							<ul class="list-unstyled list-inline sm-links">
								<li><a href="/#"><i class="fa fa-twitter"></i></a></li>
								<li><a href="https://www.facebook.com/johnny.mindu?fref=ts"><i class="fa fa-facebook"></i></a></li>
								<li><a href="/#"><i class="fa fa-linkedin"></i></a></li>
							</ul>
							<p>
								MSSV: 1461268
								Lớp: 14CK2
							</p>
						</div>
					</div>
					<br />
					
				</div>					
				<!-- About Content Ends -->
				
				<hr />
				
				<!-- Testimonials Starts -->
				<h2 class="sub-heading text-center">
					Hợp tác cùng
				</h2>

					<!-- Testimonial #1 Starts -->
					<div class="media panel-smart clearfix">
						<img src="/images/about/about2.jpg" alt="image" class="img-responsive pull-left img-thumbnail" />
						<div class="media-body">
							<blockquote>
								<p>
									MSSV: 1461390
									Lớp: 14CK2
								</p>
								<footer>
									Vũ Mạnh Hùng, <cite>Manager</cite>
								</footer>
								<ul class="list-unstyled list-inline sm-links">
									<li><a href="/#"><i class="fa fa-twitter"></i></a></li>
									<li><a href="https://www.facebook.com/vmh2017?fref=ts"><i class="fa fa-facebook"></i></a></li>
									<li><a href="/#"><i class="fa fa-linkedin"></i></a></li>
								</ul>
							</blockquote>
						</div>
					</div>
					<!-- Testimoni l #1 Ends -->
				
					<!-- Testimonial #2 Starts -->
					<div class="media panel-smart clearfix">
						<img src="/images/about/about3.jpg" alt="image" class="img-responsive pull-left img-thumbnail" />
						<div class="media-body">
							<blockquote>
								<p>
									MSSV: 1461578
									Lớp: 14CK2
								</p>
								<footer>
									Trần Phương Giang Sang, <cite>Consultant</cite>
								</footer>
								<ul class="list-unstyled list-inline sm-links">
									<li><a href="/#"><i class="fa fa-twitter"></i></a></li>
									<li><a href="https://www.facebook.com/tpgs1906"><i class="fa fa-facebook"></i></a></li>
									<li><a href="/#"><i class="fa fa-linkedin"></i></a></li>
								</ul>
							</blockquote>
						</div>
					</div>
					<!-- Testimonial #2 Ends -->
				<!-- Testimonials Ends -->
				
			</div>
			<!-- Primary Content Ends -->
			
			<!-- Sidebar Starts -->
			
			<!-- Sidebar Ends -->
			<div class="col-md-3">
				<a href="/gallery">
					<h3 class="side-heading">Bộ sưu tập</h3>
				</a>

				<!--Load danh sách các loại đồ uống từ database lên-->

			</div>
		</div>
		<!-- Nested Row Ends -->
		
	</div>
@endsection