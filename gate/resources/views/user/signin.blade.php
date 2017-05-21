<form method="post" action="/user/signin/complete/{{$access_hash}}" id="" name="" class="">
	<input type="text" name="newUser" id="" class="">
	<input type="password" name="newPassword" id="" class="">
	<input type="hidden" name="_token" value="{{csrf_token()}}">
	<input type="submit" name="submit" id="submit" class="submit" value="Signin">
</form>