@extends('layouts.general')
@section('content')
    <div class="main-container container">
        <h3 class="main-heading text-center">
            ĐĂNG KÝ
        </h3>
        <!-- Nested Row Starts -->
        <div class="row">
        <div class="w3-container w3-padding-18">

            <form class="form-horizontal w3-container w3-light-blue w3-round-large" role="form" method="POST" action="{{ url('/register') }}">{{ csrf_field() }}
                <div class="w3-section">
                    <div class="form-group{{ $errors->has('name') ? ' has-error' : '' }}">
                        <label for="name" class="col-md-3 control-label">Họ tên</label>
                        <div class="col-md-8">
                            <input id="name" type="text" class="w3-input w3-border w3-round-large" name="name" value="" placeholder="họ tên" required autofocus>
                            @if ($errors->has('name'))
                                <span class="help-block">
                                    <strong>{{ $errors->first('name') }}</strong>
                                </span>
                            @endif
                        </div>
                    </div>
                    <div class="form-group{{ $errors->has('email') ? ' has-error' : '' }}">
                        <label for="email" class="col-md-3 control-label">E-Mail</label>
                        <div class="col-md-8">
                            <input id="email" type="email" class="w3-input w3-border w3-round-large" name="email" value="{{ old('email') }}" placeholder="example@abc.com" required>
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
                            <input id="password" type="password" class="w3-input w3-border w3-round-large" name="password" placeholder="mật khẩu" required>

                            @if ($errors->has('password'))
                                <span class="help-block">
                                    <strong>{{ $errors->first('password') }}</strong>
                                </span>
                            @endif
                        </div>
                    </div>

                    <div class="form-group">
                        <label for="password-confirm" class="col-md-3 control-label">Nhập lại</label>

                        <div class="col-md-8">
                            <input id="password-confirm" type="password" class="w3-input w3-border w3-round-large" name="password_confirmation" placeholder="nhập lại mật khẩu" required>
                        </div>
                    </div>

                    <div class="form-group">
                        <label for="password-confirm" class="col-md-3 control-label">Captcha</label>

                        <div class="col-md-8">
                            {!! app('captcha')->display() !!}

                            @if ($errors->has('g-recaptcha-response'))
                                <span class="help-block">
                                    <strong>{{ $errors->first('g-recaptcha-response') }}</strong>
                                </span>
                            @endif
                        </div>
                    </div>

                    <div class="col-xs-12 col-sm-6 col-sm-offset-3 col-md-6 col-md-offset-3">
                        <button class="w3-btn-block w3-green w3-section w3-padding w3-round-large" type="submit">Đăng ký</button>
                    </div>
                </div>
            </form>
            <a href="/dangnhap" class="w3-section w3-center">hoặc đăng nhập</a>

        </div>
</div>
</div>
@endsection