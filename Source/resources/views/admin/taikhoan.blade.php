
<div id="taikhoan{{ Auth::user()->id }}" class="w3-modal">
	<div class="w3-modal-content w3-animate-top" style="max-width: 500px">
		<div class="w3-container w3-light-grey" style="padding-bottom: 16px">
			<h3 class="w3-center w3-label">ĐỔI TÊN</h3>
			<form class="w3-container w3-light-blue w3-round-large" action="/doiten-{{ Auth::user()->id }}" method="POST">{{ csrf_field() }}
				<input name="_method" type="hidden" value="PUT">
					<div class="w3-section">
						<div class="form-group col-sm-12 col-md-12 col-xs-12 w3-margin-bottom">
							<label for="tentk" class="col-sm-3 w3-label">
								Tên
							</label>
							<div class="col-sm-9">
								<input class="w3-input w3-border w3-round-large " type="text" placeholder="Tên" name="tentk" value="{{ Auth::user()->name }}" required>
							</div>
						</div>
					<div class="col-xs-12 col-sm-6 col-md-6">
						<button class="w3-btn-block w3-green w3-section w3-padding w3-round-large" type="submit">Cập nhật</button>
					</div>
					<div class="col-xs-12 col-sm-6 col-md-6">
						<span class="w3-btn-block w3-red w3-section w3-padding w3-round-large" onclick="document.getElementById('taikhoan{{ Auth::user()->id }}').style.display='none'">Hủy</span>
					</div>
				</div>
			</form>
		</div>
	</div>
</div>
<div id="matkhau-{{ Auth::user()->id }}" class="w3-modal">
	<div class="w3-modal-content w3-animate-top" style="max-width: 500px">
		<div class="w3-container w3-light-grey" style="padding-bottom: 16px">
			<h3 class="w3-center w3-label">ĐỔI MẬT KHẨU</h3>
			<form class="form-horizontal w3-container w3-light-blue w3-round-large" action="/doimatkhau-{{ Auth::user()->id }}" method="POST">{{ csrf_field() }}
				<input name="_method" type="hidden" value="PUT">
					<div class="w3-section">
					<div class="form-group{{ $errors->has('password') ? ' has-error' : '' }}">
                        <label for="password" class="col-md-3 control-label">Mật khẩu cũ</label>

                        <div class="col-md-8">
                            <input id="password" type="password" class="w3-input w3-border w3-round-large" name="matkhaucu" placeholder="mật khẩu" required>

                            @if ($errors->has('password'))
                                <span class="help-block">
                                    <strong>{{ $errors->first('password') }}</strong>
                                </span>
                            @endif
                        </div>
                    </div>
                    <div class="form-group{{ $errors->has('password') ? ' has-error' : '' }}">
                        <label for="password" class="col-md-3 control-label">Mật khẩu mới</label>

                        <div class="col-md-8">
                            <input id="password" type="password" class="w3-input w3-border w3-round-large" name="matkhaumoi" placeholder="mật khẩu" required>

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
                            <input id="password-confirm" type="password" class="w3-input w3-border w3-round-large" name="nhaplaimatkhau" placeholder="nhập lại mật khẩu" required>
                        </div>
                    </div>
					<div class="col-xs-12 col-sm-6 col-md-6">
						<button class="w3-btn-block w3-green w3-section w3-padding w3-round-large" type="submit">Cập nhật</button>
					</div>
					<div class="col-xs-12 col-sm-6 col-md-6">
						<span class="w3-btn-block w3-red w3-section w3-padding w3-round-large" onclick="document.getElementById('matkhau-{{ Auth::user()->id }}').style.display='none'">Hủy</span>
					</div>
				</div>
			</form>
		</div>
	</div>
</div>
