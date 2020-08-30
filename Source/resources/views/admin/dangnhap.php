@extends('layouts.general')
@section('content')
	<div class="w3-modal-content w3-animate-zoom">
		<div class="w3-container w3-padding-18 w3-light-grey w3-center">
			<h3 class="w3-label">ĐĂNG NHẬP</h3>
			<form class="form-horizontal w3-container w3-light-blue w3-round-large" role="form" method="POST" action="{{ url('/login') }}">{{ csrf_field() }}
				<div class="w3-section">
					<div class="form-group{{ $errors->has('email') ? ' has-error' : '' }}">
							<label for="email" class="col-md-3 control-label">E-Mail</label>

							<div class="col-md-8">
								<input id="email" type="email" class="w3-input w3-border w3-round-large" name="email" value="{{ old('email') }}" required autofocus>

								@if ($errors->has('email'))
									<span class="help-block">
										<strong>{{ $errors->first('email') }}</strong>
									</span>
								@endif
							</div>
					</div>

					<div class="form-group{{ $errors->has('password') ? ' has-error' : '' }}">
						<label for="password" class="col-md-3 control-label">Mật khẩu</label>

						<div class="col-md-8">
							<input id="password" type="password" class="w3-input w3-border w3-round-large" name="password" required>

							@if ($errors->has('password'))
								<span class="help-block">
									<strong>{{ $errors->first('password') }}</strong>
								</span>
							@endif
						</div>
					</div>

					<div class="form-group">
						<div>
							<input class="w3-check" type="checkbox" name="remember"> Lưu mật khẩu
							<a href="{{ url('/password/reset') }}" class="w3-margin-left w3-small">Quên mật khẩu?</a>
						</div>
					</div>
					<div class="col-xs-12 col-sm-6 col-sm-offset-3 col-md-6 col-md-offset-3">
						<button class="w3-btn-block w3-green w3-section w3-padding w3-round-large" type="submit">Đăng nhập</button>
					</div>
				</div>
			</form>
			<a href="/dangky">hoặc đăng ký</a>
		</div>


	</div>

@endsection
