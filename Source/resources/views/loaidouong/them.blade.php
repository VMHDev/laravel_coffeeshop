<div id="themldu" class="w3-modal">
	<div class="w3-modal-content w3-animate-top" style="max-width: 500px">
		<div class="w3-container w3-light-grey" style="padding-bottom: 16px">
			<h3 class="w3-center w3-label">THÊM MỚI</h3>
			<form class="w3-container w3-light-blue w3-round-large" role="form" enctype="multipart/form-data" action="/admin/loaidouong" method="POST">{{ csrf_field() }}
				<div class="w3-section">
					<div class="form-group  col-sm-12 col-md-12 col-xs-12 w3-margin-bottom">
						<label for="id" class="col-sm-3 w3-label">
							ID
						</label>
						<div class="col-sm-9">
							<input class="w3-input w3-border w3-round-large" id="id" type="text" placeholder="ID" name="id" style="text-transform:uppercase;" on keyup="javascript:this.value=this.value.toUpperCase();" size="3" maxlength="3" required>
						</div>
					</div>
					<div class="form-group  col-sm-12 col-md-12 col-xs-12 w3-margin-bottom">
						<label for="ten" class="col-sm-3 w3-label">
							Tên loại
						</label>
						<div class="col-sm-9">
							<input class="w3-input w3-border w3-round-large" type="text" placeholder="Tên" name="ten" required>
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
					
					<div class="col-xs-12 col-sm-6 col-md-6">
						<button class="w3-btn-block w3-green w3-section w3-padding w3-round-large" type="submit">Thêm</button>
					</div>
					<div class="col-xs-12 col-sm-6 col-md-6">
						<span class="w3-btn-block w3-red w3-section w3-padding w3-round-large" onclick="document.getElementById('themldu').style.display='none'">Hủy</span>
					</div>
				</div>
			</form>
		</div>
	</div>
</div>
