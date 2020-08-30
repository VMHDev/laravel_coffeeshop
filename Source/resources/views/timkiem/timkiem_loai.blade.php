@foreach ($loaidouong as $ldu)
	<option value="{{$ldu->IDLoaiDoUong}}">{{$ldu->TenDoUong}}</option>
@endforeach