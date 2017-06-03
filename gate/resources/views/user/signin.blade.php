<?php var_dump($errors); ?>
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