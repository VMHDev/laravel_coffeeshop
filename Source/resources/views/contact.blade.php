@extends('layouts.general')

@section('content')
<!-- Main Container Starts -->
	<div class="main-container container">
	<!-- Breadcrumb Starts -->

	<!-- Breadcrumb Ends -->
	<!-- Main Heading Starts -->
		<h3 class="main-heading text-center">
			LIÊN HỆ
		</h3>
	<!-- Main Heading Ends -->
        <div class="row">
            <div class="col-sm-12">
                <div class="panel panel-smart">
		    <!-- Google Map Starts -->
		    <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3919.8556101871727!2d106.61064145007245!3d10.745609562663272!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x31752dcc181fa0e3%3A0xe4868d9ec3721ffd!2sSwebi+Coffee!5e0!3m2!1svi!2s!4v1480166793811" width="100%" height="254" frameborder="0" style="border:0" allowfullscreen></iframe>
		    <!-- Google Map Ends -->
                </div>
            </div>
        </div>
	<!-- Starts -->
		<div class="row">
		<!-- Contact Details Starts -->
			<div class="col-sm-4">
				<div class="panel panel-smart">
					<div class="panel-heading">
						<h3 class="panel-title">Mọi thắc mắc liên hệ</h3>
					</div>
					<div class="panel-body">
						<ul class="list-unstyled contact-details">
							<li class="clearfix">
								<i class="fa fa-home pull-left"></i>
								<span class="pull-left">
									Swebi Coffee <br />
									250 Tên Lửa, P.Bình Trị Đông B, Bình Tân <br />
								</span>
							</li>
							<li class="clearfix">
								<i class="fa fa-phone pull-left"></i>
								<span class="pull-left">
									0908 325 025 <br />
									0909 868 142
								</span>
							</li>
							<li class="clearfix">
								<i class="fa fa-envelope-o pull-left"></i>
								<span class="pull-left">
									vmindujohnny@gmail.com <br />
									vmhung@gmail.com <br />
									crushssc@gmail.com
								</span>
							</li>
						</ul>
					</div>
				</div>
			</div>
		<!-- Contact Details Ends -->
		<!-- Contact Form Starts -->
			<div class="col-sm-8">
				<div class="panel panel-smart">
					<div class="panel-heading">
						<h3 class="panel-title">Gửi thư</h3>
					</div>
					<div class="panel-body">
						<form class="form-horizontal" role="form">
							<div class="form-group">
								<label for="name" class="col-sm-2 control-label">
									Họ tên
								</label>
								<div class="col-sm-10">
									<input type="text" class="form-control" name="name" id="name" placeholder="Họ Tên">
								</div>
							</div>
							<div class="form-group">
								<label for="email" class="col-sm-2 control-label">
									Email
								</label>
								<div class="col-sm-10">
									<input type="email" class="form-control" name="email" id="email" placeholder="Email">
								</div>
							</div>
							<div class="form-group">
								<label for="subject" class="col-sm-2 control-label">
									Chủ đề
								</label>
								<div class="col-sm-10">
									<input type="text" class="form-control" name="subject" id="subject" placeholder="Chủ Đề">
								</div>
							</div>
							<div class="form-group">
								<label for="message" class="col-sm-2 control-label">
									Nội Dung
								</label>
								<div class="col-sm-10">
									<textarea name="message" id="message" class="form-control" rows="5" placeholder="Nội Dung"></textarea>
								</div>
							</div>

							<div class="form-group">
								<div class="col-sm-offset-2 col-sm-10">
									<input type="button" class="btn btn-main text-uppercase" onclick="alert('Phản hồi của bạn đã được ghi lại')" value="Gửi"/>
								</div>
							</div>
						</form>
					</div>
				</div>
			</div>
		<!-- Contact Form Ends -->
		</div>
	<!-- Ends -->
	</div>
<!-- Main Container Ends -->
@endsection