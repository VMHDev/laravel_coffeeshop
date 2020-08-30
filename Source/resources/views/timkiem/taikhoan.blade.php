<div id="dangnhap" class="w3-modal">
    <div class="w3-modal-content w3-animate-zoom" style="max-width: 500px">
        <span onclick="document.getElementById('dangnhap').style.display='none'" class="w3-closebtn w3-container w3-padding-1 w3-display-topright" title="Đóng">&times;</span>
        <div class="w3-container w3-padding-16 w3-light-grey w3-center">
            <h3 class="w3-label">ĐĂNG NHẬP</h3>
            <form class="form-horizontal w3-container w3-light-blue w3-round-large" role="form" method="POST" action="{{ url('/login') }}">{{ csrf_field() }}
                <div class="w3-section">
                    <div class="form-group{{ $errors->has('email') ? ' has-error' : '' }}">
                            <label for="email" class="col-md-3 control-label">E-Mail</label>

                            <div class="col-md-8">
                                <input id="email" type="email" class="w3-input w3-border w3-round-large" name="email" value="{{ old('email') }}" placeholder="Example@abc.com" required autofocus>

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
                            <input id="password" type="password" class="w3-input w3-border w3-round-large" name="password" placeholder="Password" required>

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
            <a href="#0" onclick="document.getElementById('dangky').style.display='block'; document.getElementById('dangnhap').style.display='none'">Đăng ký</a>
        </div>
    </div>
</div>


<div id="dangky" class="w3-modal">
    <div class="w3-modal-content w3-animate-zoom" style="max-width: 500px">
        <span onclick="document.getElementById('dangky').style.display='none'" class="w3-closebtn w3-container w3-padding-1 w3-display-topright" title="Đóng">&times;</span>
        <div class="w3-container w3-padding-16 w3-light-grey w3-center">
            <h3 class="w3-label">ĐĂNG KÝ</h3>
            <form class="form-horizontal w3-container w3-light-blue w3-round-large" role="form" method="POST" action="{{ url('/register') }}">{{ csrf_field() }}
                <div class="w3-section">
                    <div class="form-group{{ $errors->has('name') ? ' has-error' : '' }}">
                        <label for="name" class="col-md-3 control-label">Họ tên</label>
                        <div class="col-md-8">
                            <input id="name" type="text" class="w3-input w3-border w3-round-large" name="name" value="{{old('name') }}" placeholder="Họ Tên" required autofocus>
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
                            <input id="email" type="email" class="w3-input w3-border w3-round-large" name="email" value="{{ old('email') }}" placeholder="Example@abc.com" required>
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
                            <input id="password" type="password" class="w3-input w3-border w3-round-large" name="password" placeholder="Mật khẩu" required>

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
                            <input id="password-confirm" type="password" class="w3-input w3-border w3-round-large" name="password_confirmation" placeholder="Nhập lại mật khẩu" required>
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
            <a href="#0" onclick="document.getElementById('dangnhap').style.display='block'; document.getElementById('dangky').style.display='none'">Đăng nhập</a>
        </div>
    </div>
</div>