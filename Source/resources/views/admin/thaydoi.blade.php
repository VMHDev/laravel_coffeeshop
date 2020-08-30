<div id="thaydoi" style="display: none">
	<div>
		<table id="sampleTable" class="table table-hover table-bordered">
				  
				  <thead>
					<tr>
						<th class="w3-center">Chế độ</th>
					  <th class="w3-center">ID<a href="#0"><img src="/images/general/sapxepaz.png" class="pull-right"></a></th>
					  <th class="w3-center">Tên<a href="#0"><img src="/images/general/sapxepaz.png" class="pull-right"></a></th>
					  <th class="w3-center">Mô tả<a href="#0"><img src="/images/general/sapxepaz.png" class="pull-right"></a></th>
					  <th class="w3-center">Hình ảnh</th>
					  <th class="w3-center">Loại<a href="#0"><img src="/images/general/sapxep.png" class="pull-right"></a></th>
					  <th class="w3-center">Giá (vnđ)<a href="#0"><img src="/images/general/sapxep19.png" class="pull-right"></a></th>
					</tr>
				  </thead>
					
				  <tbody>
				  @foreach($douong as $du)
					<tr>
					  <td class="w3-center">
						<a href="#0" onclick="document.getElementById('sua{{$du->IDDoUong}}').style.display='block'"><img src="/images/icon/update.png" title="Sửa"/></a>
						<a href="#0" class="w3-margin-left" onclick="document.getElementById('xoa{{$du->IDDoUong}}').style.display='block'"><img src="/images/icon/delete.png" title="Xóa"/></a>
					  </td>
					  <td>{{$du->IDDoUong}}
					  	@include('admin.xoa')
						@include('admin.sua')
					  </td>
					  <td>{{$du->TenDoUong}}</td>
					  <td>{{$du->MoTa}}</td>
					  <td class="w3-center">
					  	<img src="/{{$du->IDHinhAnh}}" class="table_img hover-image w3-round-large w3-border w3-padding-4 w3-padding-right w3-padding-left w3-border-orange">
					  </td>
					  <td>{{$du->TenLoai}}</td>
					  <td><p class="pull-right">{{$du->GiaTien}}</p></td>	
					</tr>

					@endforeach
					
				  </tbody>
			</table>
	  </div>
</div>



