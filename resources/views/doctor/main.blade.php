<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title> @yield('title')</title>
	<base href="{{ asset('') }}public/doctor/">
	<script src="../../../../../../ajax.googleapis.com/ajax/libs/webfont/1.6.16/webfont.js"></script>
	<script>
		WebFont.load({
			google: {"families":["Poppins:300,400,500,600,700","Roboto:300,400,500,600,700"]},
			active: function() {
				sessionStorage.fonts = true;
			}
		});
	</script>
	<link href="assets/vendors/global/vendors.bundle.css" rel="stylesheet" type="text/css" />
	<link href="assets/css/demo3/style.bundle.css" rel="stylesheet" type="text/css" />

</head>
<body>
	@section('header');
	@section('content')
	@show
	@section('footer');
</body>
</html>