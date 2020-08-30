@extends('layouts.general')
@section('content')
	<div class="main-container container w3-center">
		<h3 class="main-heading text-center">
			QUẢN LÝ
		</h3>
		<div class="row w3-center">
			<div class="col-sm-4 col-md-4">
				<a href="/admin/douong"><img src="/images/general/douong.png" alt="image"/></a>
				<a href="/admin/douong"><h3 class="w3-center w3-label w3-orange w3-padding w3-round-large"> Đồ uống</h3></a>
			</div>
			<div class="col-sm-4 col-md-4">
				<a href="/admin/loaidouong"><img src="/images/general/loai.png" alt="image"/></a>
				<a href="/admin/loaidouong"><h3 class="w3-center w3-label w3-orange w3-padding w3-round-large"> Loại đồ uống</h3></a>
			</div>
			<div class="col-sm-4 col-md-4">
				<a href="/admin/nguoidung"><img src="/images/general/khuyenmai.png" alt="image"/></a>
				<a href="/admin/nguoidung"><h3 class="w3-center w3-label w3-orange w3-padding w3-round-large"> Người dùng</h3></a>
			</div>
		</div>
	</div>
<script type="text/javascript">
function validateNumber(event) {
    var key = window.event ? event.keyCode : event.which;
    if ( key === 46) {
        return false;
    }
    else return true;
};
$(document).ready(function(){
    $('[id^=gia]').keypress(validateNumber);
});

function validateid(event) {
    var key = window.event ? event.keyCode : event.which;

    if (event.keyCode === 8) {
        return true;
    }
    else if ( !(key >= 48 && key <= 57) && !(key >= 65 && key <= 90) && !(key >= 97 && key <= 122)) {
        return false;
    }
    else return true;
};
$(document).ready(function(){
    $('[id^=id]').keypress(validateid);
});
</script>
@endsection