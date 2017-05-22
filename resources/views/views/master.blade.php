<!DOCTYPE html>
<html>
<head>
	<title>@yield('title')</title>
	<link rel="stylesheet" type="text/css" href="{{asset('public/index.php',true)}}">
</head>
<style type="text/css">
#header{
	margin:auto;
	background: red;
	width: 500px;
	height: 400px;
}
#content{
	margin:auto;
	background: yellow;
	width: 500px;
	height: 500px
}
#footer{
	margin:auto;
	background: green;
	width: 500px;
	height: 300px;
}

</style>
<body>
@include('views.marquee',['mar_content'=>'Chào bạn đến với Laravel'])
<div id="header"></div>
<div id="content">
	@yield ('noidung')
</div>
<div id="footer"></div>
</body>
</html>