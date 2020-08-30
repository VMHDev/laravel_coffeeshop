@extends('layouts.general')
@section('content')
<div style="margin: 10px">
		<h3 class="main-heading text-center">
			QUẢN LÝ NGƯỜI DÙNG
		</h3>
		
		<div class="w3-center w3-margin-bottom">
			<a href="#0" onclick="document.getElementById('themtk').style.display='block'"><img src="/images/icon/insert.png" title="Thêm"/></a>
		</div>
		<div id="themtk" class="w3-modal">
    <div class="w3-modal-content w3-animate-zoom" style="max-width: 500px">
        <span onclick="document.getElementById('themtk').style.display='none'" class="w3-closebtn w3-container w3-padding-1 w3-display-topright" title="Đóng">&times;</span>
        <div class="w3-container w3-padding-16 w3-light-grey w3-center">
            <h3 class="w3-label">THÊM TÀI KHOẢN</h3>
            <form class="form-horizontal w3-container w3-light-blue w3-round-large" role="form" action="/admin/nguoidungthem" method="POST" >{{ csrf_field() }}
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
                        <button class="w3-btn-block w3-green w3-section w3-padding w3-round-large" type="submit">Thêm</button>
                    </div>
                </div>
            </form>
            
        </div>
    </div>
</div>
<div>
		<table id="sampleTable" class="table table-hover table-bordered">
				  
				  <thead>
					<tr>
						<th class="w3-center">Chế độ</th>
					  <th class="w3-center">ID<a href="#0"><img src="/images/general/sapxepaz.png" class="pull-right"></a></th>
					  <th class="w3-center">Tên<a href="#0"><img src="/images/general/sapxepaz.png" class="pull-right"></a></th>
					  <th class="w3-center">Email<a href="#0"><img src="/images/general/sapxepaz.png" class="pull-right"></a></th>
					  <th class="w3-center">Ngày tạo</th>
					  <th class="w3-center">Cập nhật gần nhất<a href="#0"><img src="/images/general/sapxep.png" class="pull-right"></a></th>
					  <th class="w3-center">Quyền<a href="#0"><img src="/images/general/sapxep19.png" class="pull-right"></a></th>
					</tr>
				  </thead>
					
				  <tbody>
				  @foreach($nguoidung as $nd)
					<tr>
					  <td class="w3-center">
						<a href="#0" onclick="document.getElementById('nguoidung{{$nd->id}}').style.display='block'"><img src="/images/icon/update.png" title="Sửa"/></a>
						<a href="#0" onclick="document.getElementById('nguoidung-xoa{{$nd->id}}{{ Auth::user()->id }}').style.display='block'"><img src="/images/icon/delete.png" title="Xóa"/></a>
						
					  </td>
					  
					  <td class="w3-center">{{$nd->id}}
						@include('nguoidung.nguoidung')
					  </td>
					  <td>{{$nd->name}}</td>
					  <td>{{$nd->email}}</td>
					  <td>{{$nd->created_at}}</td>
					  <td>{{$nd->updated_at}}</td>
					  <td class="w3-center">
					  	{{$nd->role}}
					  </td>
					  
					</tr>

					@endforeach
					
				  </tbody>
			</table>
	  </div>
	  <script type="text/javascript" src="/js/plugins/jquery.dataTables.min.js"></script>
    <script type="text/javascript" src="/js/plugins/dataTables.bootstrap.min.js"></script>
    <script type="text/javascript">$('#sampleTable').DataTable();</script>
	</div>
@endsection