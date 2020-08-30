<div class="id01 thaydoi">
		<a href="#0" class="view-2" onclick="document.getElementById('sua{{$du->IDDoUong}}').style.display='block'"><img class="w3-animate-zoom" src="/images/icon/update.png" title="Sửa"/></a>
		<a href="#0" class="view-2" onclick="document.getElementById('xoa{{$du->IDDoUong}}').style.display='block'"><img class="w3-animate-zoom" src="/images/icon/delete.png" title="Xóa"/></a>
</div>
@include('admin.xoa')
@include('admin.sua')