@extends('layouts.general')
@section('content')
<div style="margin: 10px">
		<h3 class="main-heading text-center">
			QUẢN LÝ ĐỒ UỐNG
		</h3>
		<div class="w3-center w3-margin-bottom">
			<a href="#0" onclick="document.getElementById('them').style.display='block'"><img class="w3-animate-zoom" src="/images/icon/insert.png" title="Thêm đồ uống"/></a>
			<a href="#0" onclick="document.getElementById('thaydoi').style.display='block'"><img class="w3-animate-zoom" src="/images/icon/modify.png" title="Thay đổi đồ uống"/></a>
		</div>
@include('admin.them')
@include('admin.thaydoi')
		<!-- Nested Row Starts -->
        
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
</script>
    <script type="text/javascript" src="/js/plugins/jquery.dataTables.min.js"></script>
    <script type="text/javascript" src="/js/plugins/dataTables.bootstrap.min.js"></script>
    <script type="text/javascript">$('#sampleTable').DataTable();</script>
@endsection