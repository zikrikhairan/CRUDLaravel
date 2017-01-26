<html>
<head>
<title></title>
<link rel="stylesheet" href="{{asset('/assets//css/bootstrap.min.css')}}">
<link rel="stylesheet" href="{{asset('/assets//css/bootstrap-theme.min.css')}}">
<style>
		@import url(//fonts.googleapis.com/css?family=Lato:700);
		body {
			margin:10;
			font-family:'Myriad Pro', sans-serif;
			color: #FF2716;
			background: #999999;
			font-size: 20px;
		}
		.header-text 
		{
		color: #52A549;
		}
		.navbar {
		padding: 10 20px;
		font-size: 25px;
		color: #52A549;
		}

Nothing special here
	</style>
</head>
<body>
@show
@yield('content')
</div>
</body>
</html>