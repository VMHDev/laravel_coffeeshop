<div id="thaydoildu" style="display: none">
	<div>
		<table id="sampleTable" class="table table-hover table-bordered">
				  
				  <thead>
					<tr>
						<th class="w3-center">Chế độ</th>
					  <th class="w3-center">ID<a href="#0"><img src="/images/general/sapxepaz.png" class="pull-right"></a></th>
					  <th class="w3-center">Tên<a href="#0"><img src="/images/general/sapxepaz.png" class="pull-right"></a></th>
					  <th class="w3-center">Hình ảnh</th>
					  </tr>
				  </thead>
					
				  <tbody>
				  @foreach($loaidouong as $ldu)
					<tr>
					  <td class="w3-center">
						<a href="#0" onclick="document.getElementById('sualdu{{$ldu->IDLoaiDoUong}}').style.display='block'"><img src="/images/icon/update.png" title="Sửa"/></a>
						<a href="#0" class="w3-margin-left" onclick="document.getElementById('xoaldu{{$ldu->IDLoaiDoUong}}').style.display='block'"><img src="/images/icon/delete.png" title="Xóa"/></a>
					  </td>
					  <td>{{$ldu->IDLoaiDoUong}}
					  	@include('loaidouong.xoa')
						@include('loaidouong.sua')
					  </td>
					  <td>{{$ldu->TenDoUong}}</td>
					  <td class="w3-center">
					  	<img src="/{{$ldu->idDaiDien}}" class="table_img hover-image w3-round-large w3-border w3-padding-4 w3-padding-right w3-padding-left w3-border-orange">
					  </td>
					 	
					</tr>

					@endforeach
					
				  </tbody>
			</table>
	  </div>
</div>



