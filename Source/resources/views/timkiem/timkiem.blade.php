<div>
	<form action="/search">	
		<div class="col-xs-12 col-sm-2 col-md-1 w3-round-xlarge pull-right w3-padding-4" style="margin-top: 1px">
			<span>
				<button class="btn btn-lg" type="submit">
					<i class="fa fa-search"></i>
				</button>
			</span>
		</div>
		<div class="col-xs-12 col-sm-10 col-md-10 pull-right w3-light-gray w3-round-xlarge  w3-padding-4">
			<div class="col-xs-12 col-sm-12 col-md-3 pull-right">
				<input name="ten" class="w3-input w3-border my_input" type="text" placeholder="Tìm">
			</div>
			<div class="col-xs-12 col-sm-12 col-md-3 pull-right">
				<select class="w3-select w3-border" name="giatu">
					<option value="" disabled selected>Giá từ</option>
					<option value="5000">5 000 vnđ</option>
					<option value="10000">10 000 vnđ</option>
					<option value="20000">20 000 vnđ</option>
					<option value="30000">30 000 vnđ</option>
				</select>
			</div>
			
			<div class="col-xs-12 col-sm-12 col-md-3 pull-right">
				<select class="w3-select w3-border" name="giaden">
					<option value="" disabled selected>Đến dưới</option>
					<option value="10000">10 000 vnđ</option>
					<option value="20000">20 000 vnđ</option>
					<option value="30000">30 000 vnđ</option>
					<option value="40000">40 000 vnđ</option>
				</select>
			</div>
			<div class="col-xs-12 col-sm-12 col-md-3 pull-right">
				<select class="w3-select w3-border" name="loai">
					<option value="" disabled selected>Loại</option>
					@include('timkiem.timkiem_loai')
				</select>
			</div>
		</div>
	</form>
</div>