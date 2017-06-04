<!-- resources/views/base.blade.php -->

<html>
	<head>
<!--		<script type="text/javascript" src="/assets/js/jquery-1.11.3.min.js"></script>-->
		<script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.4/jquery.min.js"></script>
		<title>@yield('title')</title>
	 </head>
	 <body>
	@section('sidebar')
		here is maybe sidebar and something.
	@show

	<div class="container">
		 @yield('content')
	</div>
	 </body>
</html>