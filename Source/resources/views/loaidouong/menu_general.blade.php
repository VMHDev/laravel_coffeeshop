<ul class="list-unstyled">
	@foreach ($loaidouong as $ldu)
		<li><a href="/category-list-{{$ldu->IDLoaiDoUong}}">{{$ldu->TenDoUong}}</a></li>
	@endforeach
</ul>
