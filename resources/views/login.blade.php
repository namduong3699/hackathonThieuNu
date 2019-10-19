<!DOCTYPE html>
<!-- 
Template Name: Metronic - Responsive Admin Dashboard Template build with Twitter Bootstrap 4 & Angular 8
Author: KeenThemes
Website: http://www.keenthemes.com/
Contact: support@keenthemes.com
Follow: www.twitter.com/keenthemes
Dribbble: www.dribbble.com/keenthemes
Like: www.facebook.com/keenthemes
Purchase: http://themeforest.net/item/metronic-responsive-admin-dashboard-template/4021469?ref=keenthemes
Renew Support: http://themeforest.net/item/metronic-responsive-admin-dashboard-template/4021469?ref=keenthemes
License: You must have a valid license purchased only from themeforest(the above link) in order to legally use the theme for your project.
-->
<html lang="en" >
<!-- begin::Head -->

<!-- Mirrored from keenthemes.com/metronic/preview/demo3/custom/pages/user/login-1.html by HTTrack Website Copier/3.x [XR&CO'2014], Thu, 18 Jul 2019 03:31:45 GMT -->
<!-- Added by HTTrack --><meta http-equiv="content-type" content="text/html;charset=UTF-8" /><!-- /Added by HTTrack -->
<head>
	<base href="{{ asset('') }}public/login/">
	<meta charset="utf-8"/>

	<title>Metronic | Login Page 1</title>
	<meta name="description" content="Login page example"> 
	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

	<!--begin::Fonts -->
	<script src="../../../../../../../ajax.googleapis.com/ajax/libs/webfont/1.6.16/webfont.js"></script>
	<script>
		WebFont.load({
			google: {"families":["Poppins:300,400,500,600,700","Roboto:300,400,500,600,700"]},
			active: function() {
				sessionStorage.fonts = true;
			}
		});
	</script>
	<!--end::Fonts -->



	<!--begin::Page Custom Styles(used by this page) --> 
	<link href="assets/css/demo3/pages/login/login-1.css" rel="stylesheet" type="text/css" />
	<!--end::Page Custom Styles -->

	<!--begin::Global Theme Styles(used by all pages) -->
	<link href="assets/vendors/global/vendors.bundle.css" rel="stylesheet" type="text/css" />
	<link href="assets/css/demo3/style.bundle.css" rel="stylesheet" type="text/css" />
	<!--end::Global Theme Styles -->

	<!--begin::Layout Skins(used by all pages) -->
	<!--end::Layout Skins -->

	<link rel="shortcut icon" href="assets/media/logos/favicon.ico" />
</head>
<!-- end::Head -->

<!-- begin::Body -->
<body  class="kt-quick-panel--right kt-demo-panel--right kt-offcanvas-panel--right kt-header--fixed kt-header-mobile--fixed kt-subheader--fixed kt-subheader--enabled kt-subheader--solid kt-aside--enabled kt-aside--fixed kt-page--loading"  >


	<!-- begin:: Page -->
	<div class="kt-grid kt-grid--ver kt-grid--root kt-page">
		<div class="kt-grid kt-grid--hor kt-grid--root  kt-login kt-login--v1" id="kt_login">
			<div class="kt-grid__item kt-grid__item--fluid kt-grid kt-grid--desktop kt-grid--ver-desktop kt-grid--hor-tablet-and-mobile">
				<!--begin::Aside-->
				<div class="kt-grid__item kt-grid__item--order-tablet-and-mobile-2 kt-grid kt-grid--hor kt-login__aside" style="background-image: url(assets/media/bg/bg-4.jpg);">
					<div class="kt-grid__item">
						<a href="#" class="kt-login__logo">
							<img src="assets/media/logos/logo-4.png">
						</a>
					</div>
					<div class="kt-grid__item kt-grid__item--fluid kt-grid kt-grid--ver">
						<div class="kt-grid__item kt-grid__item--middle">
							<h3 class="kt-login__title">Welcome to Thieu Nu!</h3>
							<h4 class="kt-login__subtitle">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Veritatis totam expedita quam? Voluptas, ullam, mollitia.</h4>
						</div>
					</div>
					<div class="kt-grid__item">
						<div class="kt-login__info">
							<div class="kt-login__copyright">
								&copy Thieu nu
							</div>
							<div class="kt-login__menu">
								<a href="#" class="kt-link">Privacy</a>
								<a href="#" class="kt-link">Legal</a>
								<a href="#" class="kt-link">Contact</a>
							</div>
						</div>
					</div>
				</div>
				<!--begin::Aside-->

				<!--begin::Content-->
				<div class="kt-grid__item kt-grid__item--fluid  kt-grid__item--order-tablet-and-mobile-1  kt-login__wrapper">
					<!--begin::Head-->
					<!-- <div class="kt-login__head">
						<span class="kt-login__signup-label">Don't have an account yet?</span>&nbsp;&nbsp;
						<a href="#" class="kt-link kt-login__signup-link">Sign Up!</a>
					</div> -->
					<!--end::Head-->

					<!--begin::Body-->
					<div class="kt-login__body">

						<!--begin::Signin-->
						<div class="kt-login__form">
							<div class="kt-login__title">
								<h3>Sign In</h3>
							</div>			

							<!--begin::Form-->
							<form class="kt-form" action="{{url('login')}}" novalidate="novalidate" method="post">
								@csrf
								<div class="form-group">
									<input class="form-control" type="text" placeholder="Email" name="email" autocomplete="off">
								</div>
								<div class="form-group">
									<input class="form-control" type="password" placeholder="Password" name="password">
								</div>
								<!--begin::Action-->
								<div class="kt-login__actions">
									<a href="#" class="kt-link kt-login__link-forgot" style="visibility: hidden;">
										Forgot Password ?
									</a>
									<input type=submit id="" class="btn btn-primary btn-elevate kt-login__btn-primary" value="Sign In"></button>
								</div>
								<!--end::Action-->
							</form>
							<!--end::Form-->

							<!--begin::Divider-->

							<!--end::Divider-->

							<!--begin::Options-->

							<!--end::Options-->
						</div>
						<!--end::Signin-->
					</div>
					<!--end::Body-->
				</div>
				<!--end::Content-->
			</div>
		</div>



	</div>
	
	<!-- end:: Page -->


	<!-- begin::Global Config(global config for global JS sciprts) -->
	<script>
		var KTAppOptions = {"colors":{"state":{"brand":"#2c77f4","light":"#ffffff","dark":"#282a3c","primary":"#5867dd","success":"#34bfa3","info":"#36a3f7","warning":"#ffb822","danger":"#fd3995"},"base":{"label":["#c5cbe3","#a1a8c3","#3d4465","#3e4466"],"shape":["#f0f3ff","#d9dffa","#afb4d4","#646c9a"]}}};
	</script>
	<!-- end::Global Config -->

	<!--begin::Global Theme Bundle(used by all pages) -->
	<script src="assets/vendors/global/vendors.bundle.js" type="text/javascript"></script>
	<script src="assets/js/demo3/scripts.bundle.js" type="text/javascript"></script>
	<!--end::Global Theme Bundle -->




	<!--begin::Page Scripts(used by this page) -->
	<script src="assets/js/demo3/pages/login/login-1.js" type="text/javascript"></script>
	<!--end::Page Scripts -->
</body>
<!-- end::Body -->

<!-- Mirrored from keenthemes.com/metronic/preview/demo3/custom/pages/user/login-1.html by HTTrack Website Copier/3.x [XR&CO'2014], Thu, 18 Jul 2019 03:31:53 GMT -->
</html>