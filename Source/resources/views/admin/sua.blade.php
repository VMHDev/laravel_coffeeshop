<div id="sua{{$du->IDDoUong}}" class="w3-modal">
	<div class="w3-modal-content w3-animate-top" style="max-width: 500px">
		<div class="w3-container w3-light-grey" style="padding-bottom: 16px">
			<h3 class="w3-center w3-label">CẬP NHẬT</h3>
			<form class="w3-container w3-light-blue w3-round-large" role="form" enctype="multipart/form-data" action="/admin/douong/{{$du->IDDoUong}}" method="POST">{{ csrf_field() }}
				<input name="_method" type="hidden" value="PUT">
					<div class="w3-section">
						<div class="form-group col-sm-12 col-md-12 col-xs-12 w3-margin-bottom">
							<label for="ten" class="col-sm-3 w3-label">
								Tên
							</label>
							<div class="col-sm-9">
								<input class="w3-input w3-border w3-round-large " type="text" placeholder="Tên" name="ten" value="{{$du->TenDoUong}}" required>
							</div>
						</div>
					<div class="form-group col-sm-12 col-md-12 col-xs-12 w3-margin-bottom">
						<label for="mota" class="col-sm-3 w3-label">
							Mô tả
						</label>
						<div class="col-sm-9">
							<input class="w3-input w3-border w3-round-large" type="text" placeholder="Mô tả" name="mota" value="{{$du->MoTa}}" required>
						</div>
					</div>
					<div class="form-group col-sm-12 col-md-12 col-xs-12 w3-margin-bottom">
						<label for="hinhanh" class="col-sm-3 w3-label">
							Hình ảnh
						</label>
						<div class="col-sm-7">
							<input type="file" name="hinhanh">
						</div>
					</div>
					<div class="form-group col-sm-12 col-md-12 col-xs-12 w3-margin-bottom">
					
						<label for="anhdaidien" class="col-sm-3 w3-label">
							Ảnh đại diện
						</label>
						<div class="col-sm-7">
							<input type="file" name="anhdaidien">
						</div>
					</div>
					<div class="form-group col-sm-12 col-md-12 col-xs-12 w3-margin-bottom">
						<label for="loai" class="col-sm-3 w3-label">
							Loại
						</label>
						<div class="col-sm-9">
							@include('timkiem.loai', ['IDLoaiDoUong' => $du->IDLoaiDoUong])
						</div>
					</div>
					<div class="form-group col-sm-12 col-md-12 col-xs-12 w3-margin-bottom">
						<label for="giatien" class="col-sm-3 w3-label">
							Giá tiền
						</label>
						<div class="col-sm-9">
							<input class="w3-input w3-border w3-round-large" id="gia" size="6" type="number" maxlength="6" placeholder="Giá tiền (vnđ)" name="giatien" value="{{$du->GiaTien}}" required>
						</div>
					</div>
					
					<div class="col-xs-12 col-sm-6 col-md-6">
						<button class="w3-btn-block w3-green w3-section w3-padding w3-round-large" type="submit">Cập nhật</button>
					</div>
					<div class="col-xs-12 col-sm-6 col-md-6">
						<span class="w3-btn-block w3-red w3-section w3-padding w3-round-large" onclick="document.getElementById('sua{{$du->IDDoUong}}').style.display='none'">Hủy</span>
					</div>
				</div>
			</form>
		</div>
	</div>
</div>

