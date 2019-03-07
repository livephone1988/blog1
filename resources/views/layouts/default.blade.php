<!DOCTYPE html>
<html>
<head>
	<title>@yield('title','Blog App') - just for fun</title>
	<link rel="stylesheet" href="{{ mix('css/app.css') }}">
</head>
<body>
	@include('layouts._header')
	<div class="container">
	@yield('content')
	@include('layouts._footer')
</div>
</body>
</html>