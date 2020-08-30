@extends('layouts.general')
@section('content')
<div style="margin: 10px">
		<h3 class="main-heading text-center">
			QUẢN LÝ LOẠI ĐỒ UỐNG
		</h3>
		<div class="w3-center w3-margin-bottom">
			<a href="#0" onclick="document.getElementById('themldu').style.display='block'"><img class="w3-animate-zoom" src="/images/icon/insert.png" title="Thêm đồ uống"/></a>
			<a href="#0" onclick="document.getElementById('thaydoildu').style.display='block'"><img class="w3-animate-zoom" src="/images/icon/modify.png" title="Thay đổi đồ uống"/></a>
		</div>
@include('loaidouong.them')
@include('loaidouong.thaydoi')
		<!-- Nested Row Starts -->
        
</div>
<script type="text/javascript">

$(document).ready(function(){
    $('[id^=gia]').keypress(validateNumber);
});


$(document).ready(function(){
    $('[id^=id]').keypress(validateid);
});
</script>
</script>
    <script type="text/javascript" src="/js/plugins/jquery.dataTables.min.js"></script>
    <script type="text/javascript" src="/js/plugins/dataTables.bootstrap.min.js"></script>
    <script type="text/javascript">$('#sampleTable').DataTable();</script>
@endsection