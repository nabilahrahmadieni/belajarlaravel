<!DOCTYPE html>
<html>
<head>
	<link rel="stylesheet" type="text/css" href="bootstrap/css/bootstrap.min.css">
	<title>@yield('title')</title>
	<style type="text/css">
		@import url('https://fonts.googleapis.com/css2?family=Cinzel:wght@700&display=swap');
		.navbar {
			background-color: #a8d8ea;
		}
		.hzz {
			font-family: 'Cinzel';
			margin-right: 10px;
			margin-top: 5px;
		}
		.kkv {
			background-color: #aa96da;
		}
	</style>
</head>
<body>
@include('master._navigasi')
@yield('content')
</body>
</html>