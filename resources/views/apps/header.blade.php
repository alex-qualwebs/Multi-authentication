<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>header</title>
	
	@stack('boot')
	@stack('css')
	
</head>
<body>
<div class="head">
	<div class="text-center text-white bg-dark" style="width:100%;height:50px;background-color:lightgrey;font-size:20px">welcome to world</div>
</div>
@yield('content')

	
</body>
</html>