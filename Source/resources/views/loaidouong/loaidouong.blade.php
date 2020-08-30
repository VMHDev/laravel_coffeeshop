<div id="nguoidung{{$nd->id}}" class="w3-modal">
	<div class="w3-modal-content w3-animate-top" style="max-width: 500px">
		<div class="w3-container w3-light-grey" style="padding-bottom: 16px">
			<h3 class="w3-center w3-label">CẬP NHẬT</h3>
			<form class="w3-container w3-light-blue w3-round-large" role="form" action="/admin/nguoidung-sua-{{$nd->id}}" method="POST">{{ csrf_field() }}
				<input name="_method" type="hidden" value="PUT">
					<div class="w3-section">
						<div class="form-group col-sm-12 col-md-12 col-xs-12 w3-margin-bottom">
							<label for="ten" class="col-sm-3 w3-label">
								Tên
							</label>
							<div class="col-sm-9">
								<input class="w3-input w3-border w3-round-large " type="text" placeholder="Tên" name="ten" value="{{$nd->name}}" required>
							</div>
						</div>
						<div class="form-group col-sm-12 col-md-12 col-xs-12 w3-margin-bottom">
							<label for="ten" class="col-sm-3 w3-label">
								email
							</label>
							<div class="col-sm-9">
								<input class="w3-input w3-border w3-round-large " type="text" placeholder="Email" name="email" value="{{$nd->email}}" required>
							</div>
						</div>
					<div class="form-group col-sm-12 col-md-12 col-xs-12 w3-margin-bottom">
						<label for="loai" class="col-sm-3 w3-label">
							Quyền
						</label>
						<div class="col-sm-9">
							<select class="w3-select w3-border w3-round-large" name="quyen">
								<option value="user" selected>{{$nd->role}}</option>
								@if ($nd->role === 'admin')
									<option value="user">user</option>
								@else
									<option value="admin">admin</option>
								@endif	
							</select>
						</div>
					</div>
					
					
					<div class="col-xs-12 col-sm-6 col-md-6">
						<button class="w3-btn-block w3-green w3-section w3-padding w3-round-large" type="submit">Cập nhật</button>
					</div>
					<div class="col-xs-12 col-sm-6 col-md-6">
						<span class="w3-btn-block w3-red w3-section w3-padding w3-round-large" onclick="document.getElementById('nguoidung{{$nd->id}}').style.display='none'">Hủy</span>
					</div>
				</div>
			</form>
		</div>
	</div>
</div>

<div id="nguoidung-xoa{{$nd->id}}{{ Auth::user()->id }}" class="w3-modal">
	<div class="w3-modal-content w3-animate-zoom" style="max-width: 400px">
		<div class="w3-container w3-padding-16 w3-light-grey w3-center">
			<h3 class="w3-center w3-label">THÔNG BÁO</h3>
			<form class="w3-container w3-light-blue w3-round-large" action="/admin/nguoidung-xoa-{{$nd->id}}{{ Auth::user()->id }}" method="POST">{{ csrf_field() }}
			<input name="_method" type="hidden" value="DELETE">
				<div class="w3-section">
					<p class="w3-center">Xóa ID: {{$nd->id}}?</p>
					<div class="col-xs-12 col-sm-6 col-md-6">
						<button class="w3-btn-block w3-green w3-section w3-padding w3-round-large" type="submit">OK</button>
					</div>
					<div class="col-xs-12 col-sm-6 col-md-6">
						<span class="w3-btn-block w3-red w3-section w3-padding w3-round-large" onclick="document.getElementById('nguoidung-xoa{{$nd->id}}{{ Auth::user()->id }}').style.display='none'">Hủy</span>
					</div>
				</div>
			</form>
		</div>
	</div>
</div>



