@foreach($loaidouong as $ldu)
<select class="w3-select w3-border w3-round-large" name="loai">
								<option value="{{$ldu->IDLoaiDoUong}}" selected>{{$ldu->TenDoUong}}</option>
									@include('timkiem.timkiem_loai')
							</select>
@endforeach