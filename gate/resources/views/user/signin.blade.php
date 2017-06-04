@extends('base')


@section('content')
<?php
// 普通のエラー
//var_dump($errors);
?>





<script>
//	alert("foobar");
	
$(function(){
	$("#ajaxtest").bind('click',function(){
		$.ajax({
			type: 'POST',
			url: "/user/signin/complete/{{$access_hash}}",
			cache: false,
			timeout: 10000,
//			dataType: 'json',
			data: {
				Email: '<?php echo mt_rand(111,999); ?>@gmail.com',
				Password: '<?php echo mt_rand(1,9999); ?>',
				_token: '{{csrf_token()}}'
			}
		}).done(function(data) {
			alert('success!!');
			console.log(JSON.stringify(data));
		}).fail(function(data) {
			alert('error!!');
//			console.log(data);
			// json
			console.log(JSON.stringify(data));
		});
	});
});
</script>

	<p>Form</p>
@if (count($errors) > 0)
    <div class="alert alert-danger">
        <ul>
            @foreach ($errors->all() as $key=>$error)
                <li>{{$key}}-{{ $error }}</li>
            @endforeach
        </ul>
    </div>
@endif
	<form method="post" action="/user/signin/complete/{{$access_hash}}" id="" name="" class="">
	<input type="text" name="Email" id="" class="">
	<input type="password" name="Password" id="" class="">
	<input type="hidden" name="_token" value="{{csrf_token()}}">
	<input type="submit" name="submit" id="submit" class="submit" value="Signin">
	</form>
<h1>Ajaxのテスト</h1>
<a href="#" id="ajaxtest">test</a>
@endsection