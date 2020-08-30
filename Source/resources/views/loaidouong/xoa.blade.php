<div id="xoaldu{{$ldu->IDLoaiDoUong}}" class="w3-modal">
	<div class="w3-modal-content w3-animate-zoom" style="max-width: 400px">
		<div class="w3-container w3-padding-16 w3-light-grey w3-center">
			<h3 class="w3-center w3-label">THÔNG BÁO</h3>
			<form class="w3-container w3-light-blue w3-round-large" action="/admin/loaidouong/{{$ldu->IDLoaiDoUong}}" method="POST">{{ csrf_field() }}
			<input name="_method" type="hidden" value="DELETE">
				<div class="w3-section">
					<p class="w3-center">Xóa ID: {{$ldu->IDLoaiDoUong}}?</p>
					<div class="col-xs-12 col-sm-6 col-md-6">
						<button class="w3-btn-block w3-green w3-section w3-padding w3-round-large" type="submit">OK</button>
					</div>
					<div class="col-xs-12 col-sm-6 col-md-6">
						<span class="w3-btn-block w3-red w3-section w3-padding w3-round-large" onclick="document.getElementById('xoaldu{{$ldu->IDLoaiDoUong}}').style.display='none'">Hủy</span>
					</div>
				</div>
			</form>
		</div>
	</div>
</div>