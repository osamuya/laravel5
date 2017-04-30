<h1>Form</h1>


<form action="/members/signin" method="post">
	<div><input type="text" name="user_name"></div>
	<div><input type="password" name="user_password"></div>
	<div><input type="password" name="user_password2"></div>
	<input type="hidden" name="_token" value="{{csrf_token()}}"></div>
	<div><input type="submit" value="送信"></div>
</form>