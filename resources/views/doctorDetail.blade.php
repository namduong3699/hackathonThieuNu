<!DOCTYPE html>
<html lang="en">
	<head>
		<meta charset="utf-8"/>
		
		<title>Metronic | Dashboard</title>
		<meta name="description" content="Latest updates and statistic charts">
		<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
		<!--begin::Fonts -->
		<script src="../../../../ajax.googleapis.com/ajax/libs/webfont/1.6.16/webfont.js"></script>
		<script>
		WebFont.load({
		google: {"families":["Poppins:300,400,500,600,700","Roboto:300,400,500,600,700"]},
		active: function() {
		sessionStorage.fonts = true;
		}
		});
		</script>
		<!--end::Fonts -->
		<!--begin::Page Vendors Styles(used by this page) -->
		<link href="assets/vendors/custom/fullcalendar/fullcalendar.bundle.css" rel="stylesheet" type="text/css" />
		<!--end::Page Vendors Styles -->
		
		
		<!--begin::Global Theme Styles(used by all pages) -->
		<link href="assets/vendors/global/vendors.bundle.css" rel="stylesheet" type="text/css" />
		<link href="assets/css/demo3/style.bundle.css" rel="stylesheet" type="text/css" />
		<!--end::Global Theme Styles -->
		<!--begin::Layout Skins(used by all pages) -->
		<!--end::Layout Skins -->
		<link rel="shortcut icon" href="assets/media/logos/favicon.ico" />
	</head>
	<body>
		<div class="kt-content  kt-grid__item kt-grid__item--fluid kt-grid kt-grid--hor" id="kt_content">
			
			<!-- begin:: Content Head -->
			<div class="kt-subheader  kt-grid__item" id="kt_subheader">
				<div class="kt-container  kt-container--fluid ">
					<div class="kt-subheader__main">
						<button class="kt-subheader__mobile-toggle" id="kt_subheader_mobile_toggle"><span></span></button>
						<h3 class="kt-subheader__title">Thông tin cá nhân</h3>
						<div class="kt-input-icon kt-input-icon--right kt-subheader__search kt-hidden">
							<input type="text" class="form-control" placeholder="Search order..." id="generalSearch">
							<span class="kt-input-icon__icon kt-input-icon__icon--right">
								<span><i class="flaticon2-search-1"></i></span>
							</span>
						</div>
					</div>
					<div class="kt-subheader__toolbar">
						<div class="kt-subheader__wrapper">
							<a href="file:///C:/Users/ASUS/Downloads/medcare/index.html#" class="btn kt-subheader__btn-secondary">Trang chủ</a>
							<a href="#" class="btn kt-subheader__btn-secondary">Thông tin</a>
							<a href="#" class="btn kt-subheader__btn-secondary">Liên lạc</a>
							<a href="search.html" class="btn kt-subheader__btn-primary">
								<i class="fas fa-search"></i>
								Tìm kiếm
							</a>
						</div>
					</div>
				</div>
			</div>
		</div>
		<!-- end:: Content Head -->
		<!-- begin:: Content -->
		<div class="kt-container  kt-container--fluid  kt-grid__item kt-grid__item--fluid">
			
			<!--Begin::App-->
			<div class="kt-grid kt-grid--desktop kt-grid--ver kt-grid--ver-desktop kt-app">
				<!--Begin:: App Aside Mobile Toggle-->
				<button class="kt-app__aside-close" id="kt_user_profile_aside_close">
				<i class="la la-close"></i>
				</button>
				<!--End:: App Aside Mobile Toggle-->
				<!--Begin:: App Aside-->
				<div class="kt-grid__item kt-app__toggle kt-app__aside" id="kt_user_profile_aside" style="opacity: 1;">
					<!--begin:: Widgets/Applications/User/Profile1-->
					<div class="kt-portlet ">
						<div class="kt-portlet__head  kt-portlet__head--noborder">
							<div class="kt-portlet__head-label">
								<h3 class="kt-portlet__head-title">
								</h3>
							</div>
						</div>
						<div class="kt-portlet__body kt-portlet__body--fit-y">
							<!--begin::Widget -->
							<div class="kt-widget kt-widget--user-profile-1">
								<div class="kt-widget__head">
									<div class="kt-widget__media">
										<img src="assets/media/users/100_1.jpg" alt="image">
									</div>
									<div class="kt-widget__content">
										<div class="kt-widget__section">
											<a href="#" class="kt-widget__username">
												Jason Muller
												<i class="flaticon2-correct kt-font-success"></i>
											</a>
											<span class="kt-widget__subtitle">
												Bác sĩ
											</span>
										</div>
									</div>
								</div>
								<div class="kt-widget__body">
									<div class="kt-widget__content">
										<div class="kt-widget__info">
											<span class="kt-widget__label">Email:</span>
											<a href="#" class="kt-widget__data">matt@fifestudios.com</a>
										</div>
										<div class="kt-widget__info">
											<span class="kt-widget__label">SĐT:</span>
											<a href="#" class="kt-widget__data">44(76)34254578</a>
										</div>
										<div class="kt-widget__info">
											<span class="kt-widget__label">Địa chỉ:</span>
											<span class="kt-widget__data">Melbourne</span>
										</div>
									</div>
									<div class="kt-widget__items">
										<a href="overview.html" class="kt-widget__item ">
											<span class="kt-widget__section">
												<span class="kt-widget__icon">
													<svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="24px" height="24px" viewBox="0 0 24 24" version="1.1" class="kt-svg-icon">
														<g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
														<polygon id="Bound" points="0 0 24 0 24 24 0 24"></polygon>
													<path d="M12.9336061,16.072447 L19.36,10.9564761 L19.5181585,10.8312381 C20.1676248,10.3169571 20.2772143,9.3735535 19.7629333,8.72408713 C19.6917232,8.63415859 19.6104327,8.55269514 19.5206557,8.48129411 L12.9336854,3.24257445 C12.3871201,2.80788259 11.6128799,2.80788259 11.0663146,3.24257445 L4.47482784,8.48488609 C3.82645598,9.00054628 3.71887192,9.94418071 4.23453211,10.5925526 C4.30500305,10.6811601 4.38527899,10.7615046 4.47382636,10.8320511 L4.63,10.9564761 L11.0659024,16.0730648 C11.6126744,16.5077525 12.3871218,16.5074963 12.9336061,16.072447 Z" id="Shape" fill="#000000" fill-rule="nonzero"></path>
												<path d="M11.0563554,18.6706981 L5.33593024,14.122919 C4.94553994,13.8125559 4.37746707,13.8774308 4.06710397,14.2678211 C4.06471678,14.2708238 4.06234874,14.2738418 4.06,14.2768747 L4.06,14.2768747 C3.75257288,14.6738539 3.82516916,15.244888 4.22214834,15.5523151 C4.22358765,15.5534297 4.2250303,15.55454 4.22647627,15.555646 L11.0872776,20.8031356 C11.6250734,21.2144692 12.371757,21.2145375 12.909628,20.8033023 L19.7677785,15.559828 C20.1693192,15.2528257 20.2459576,14.6784381 19.9389553,14.2768974 C19.9376429,14.2751809 19.9363245,14.2734691 19.935,14.2717619 L19.935,14.2717619 C19.6266937,13.8743807 19.0546209,13.8021712 18.6572397,14.1104775 C18.654352,14.112718 18.6514778,14.1149757 18.6486172,14.1172508 L12.9235044,18.6705218 C12.377022,19.1051477 11.6029199,19.1052208 11.0563554,18.6706981 Z" id="Path" fill="#000000" opacity="0.3"></path>
											</g>
										</svg>                            </span>
										<span class="kt-widget__desc">
											Tổng quan
										</span>
									</span>
								</a>
								<a href="personal-information.html" class="kt-widget__item kt-widget__item--active">
									<span class="kt-widget__section">
										<span class="kt-widget__icon">
											<svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="24px" height="24px" viewBox="0 0 24 24" version="1.1" class="kt-svg-icon">
												<g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
												<polygon id="Shape" points="0 0 24 0 24 24 0 24"></polygon>
											<path d="M12,11 C9.790861,11 8,9.209139 8,7 C8,4.790861 9.790861,3 12,3 C14.209139,3 16,4.790861 16,7 C16,9.209139 14.209139,11 12,11 Z" id="Mask" fill="#000000" fill-rule="nonzero" opacity="0.3"></path>
										<path d="M3.00065168,20.1992055 C3.38825852,15.4265159 7.26191235,13 11.9833413,13 C16.7712164,13 20.7048837,15.2931929 20.9979143,20.2 C21.0095879,20.3954741 20.9979143,21 20.2466999,21 C16.541124,21 11.0347247,21 3.72750223,21 C3.47671215,21 2.97953825,20.45918 3.00065168,20.1992055 Z" id="Mask-Copy" fill="#000000" fill-rule="nonzero"></path>
									</g>
								</svg>                            </span>
								<span class="kt-widget__desc">
									Thông tin cá nhân
								</span>
							</span>
						</a>
						<a href="change-password.html" class="kt-widget__item ">
							<span class="kt-widget__section">
								<span class="kt-widget__icon">
									<svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="24px" height="24px" viewBox="0 0 24 24" version="1.1" class="kt-svg-icon">
										<g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
											<rect id="bound" x="0" y="0" width="24" height="24"></rect>
										<path d="M4,4 L11.6314229,2.5691082 C11.8750185,2.52343403 12.1249815,2.52343403 12.3685771,2.5691082 L20,4 L20,13.2830094 C20,16.2173861 18.4883464,18.9447835 16,20.5 L12.5299989,22.6687507 C12.2057287,22.8714196 11.7942713,22.8714196 11.4700011,22.6687507 L8,20.5 C5.51165358,18.9447835 4,16.2173861 4,13.2830094 L4,4 Z" id="Path-50" fill="#000000" opacity="0.3"></path>
									<path d="M12,11 C10.8954305,11 10,10.1045695 10,9 C10,7.8954305 10.8954305,7 12,7 C13.1045695,7 14,7.8954305 14,9 C14,10.1045695 13.1045695,11 12,11 Z" id="Mask" fill="#000000" opacity="0.3"></path>
								<path d="M7.00036205,16.4995035 C7.21569918,13.5165724 9.36772908,12 11.9907452,12 C14.6506758,12 16.8360465,13.4332455 16.9988413,16.5 C17.0053266,16.6221713 16.9988413,17 16.5815,17 C14.5228466,17 11.463736,17 7.4041679,17 C7.26484009,17 6.98863236,16.6619875 7.00036205,16.4995035 Z" id="Mask-Copy" fill="#000000" opacity="0.3"></path>
							</g>
						</svg>                            </span>
						<span class="kt-widget__desc">
							Đổi mật khẩu
						</span>
					</span>
					<span class="kt-badge kt-badge--unified-danger kt-badge--sm kt-badge--rounded kt-badge--bolder">5</span>
				</a>
				<a href="email-settings.html" class="kt-widget__item ">
					<span class="kt-widget__section">
						<span class="kt-widget__icon">
							<svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="24px" height="24px" viewBox="0 0 24 24" version="1.1" class="kt-svg-icon">
								<g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
									<rect id="bound" x="0" y="0" width="24" height="24"></rect>
								<path d="M6,2 L18,2 C18.5522847,2 19,2.44771525 19,3 L19,12 C19,12.5522847 18.5522847,13 18,13 L6,13 C5.44771525,13 5,12.5522847 5,12 L5,3 C5,2.44771525 5.44771525,2 6,2 Z M7.5,5 C7.22385763,5 7,5.22385763 7,5.5 C7,5.77614237 7.22385763,6 7.5,6 L13.5,6 C13.7761424,6 14,5.77614237 14,5.5 C14,5.22385763 13.7761424,5 13.5,5 L7.5,5 Z M7.5,7 C7.22385763,7 7,7.22385763 7,7.5 C7,7.77614237 7.22385763,8 7.5,8 L10.5,8 C10.7761424,8 11,7.77614237 11,7.5 C11,7.22385763 10.7761424,7 10.5,7 L7.5,7 Z" id="Combined-Shape" fill="#000000" opacity="0.3"></path>
							<path d="M3.79274528,6.57253826 L12,12.5 L20.2072547,6.57253826 C20.4311176,6.4108595 20.7436609,6.46126971 20.9053396,6.68513259 C20.9668779,6.77033951 21,6.87277228 21,6.97787787 L21,17 C21,18.1045695 20.1045695,19 19,19 L5,19 C3.8954305,19 3,18.1045695 3,17 L3,6.97787787 C3,6.70173549 3.22385763,6.47787787 3.5,6.47787787 C3.60510559,6.47787787 3.70753836,6.51099993 3.79274528,6.57253826 Z" id="Combined-Shape" fill="#000000"></path>
						</g>
					</svg>                            </span>
					<span class="kt-widget__desc">
						Thiết lập email
					</span>
				</span>
			</a>
			<a href="#" class="kt-widget__item" data-toggle="kt-tooltip" title="" data-placement="right" data-original-title="Coming soon...">
				<span class="kt-widget__section">
					<span class="kt-widget__icon">
						<svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="24px" height="24px" viewBox="0 0 24 24" version="1.1" class="kt-svg-icon">
							<g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
								<rect id="bound" x="0" y="0" width="24" height="24"></rect>
								<rect id="Rectangle-7-Copy" fill="#000000" x="2" y="5" width="19" height="4" rx="1"></rect>
								<rect id="Rectangle-7-Copy-4" fill="#000000" opacity="0.3" x="2" y="11" width="19" height="10" rx="1"></rect>
							</g>
						</svg>                            </span>
						<span class="kt-widget__desc">
							Credit Cards
						</span>
					</span>
				</a>
			</div>
		</div>
	</div>
	<!--end::Widget -->
</div>
</div>
<!--end:: Widgets/Applications/User/Profile1-->
</div>
<!--End:: App Aside-->
<!--Begin:: App Content-->
<div class="kt-grid__item kt-grid__item--fluid kt-app__content">
<div class="row">
<div class="col-xl-12">
	<div class="kt-portlet">
		<div class="kt-portlet__head">
			<div class="kt-portlet__head-label">
				<h3 class="kt-portlet__head-title">Thông tin cá nhân <small>Cập nhật thông tin cá nhân</small></h3>
			</div>
		</div>
		<form class="kt-form kt-form--label-right">
			<div class="kt-portlet__body">
				<div class="kt-section kt-section--first">
					<div class="kt-section__body">
						<div class="row">
							<label class="col-xl-3"></label>
							<div class="col-lg-9 col-xl-6">
								<h3 class="kt-section__title kt-section__title-sm">Thông tin cơ bản:</h3>
							</div>
						</div>
						<div class="form-group row">
							<label class="col-xl-3 col-lg-3 col-form-label">Avatar</label>
							<div class="col-lg-9 col-xl-6">
								<div class="kt-avatar kt-avatar--outline kt-avatar--circle" id="kt_apps_user_add_avatar">
									<div class="kt-avatar__holder" style="background-image: url(_http_/keenthemes.com/metronic/preview/default/custom/user/assets/media/users/100_1.html);"></div>
									<label class="kt-avatar__upload" data-toggle="kt-tooltip" title="" data-original-title="Change avatar">
										<i class="fa fa-pen"></i>
										<input type="file" name="profile_avatar" accept=".png, .jpg, .jpeg">
									</label>
									<span class="kt-avatar__cancel" data-toggle="kt-tooltip" title="" data-original-title="Cancel avatar">
										<i class="fa fa-times"></i>
									</span>
								</div>
							</div>
						</div>
						<div class="form-group row">
							<label class="col-xl-3 col-lg-3 col-form-label">Tên</label>
							<div class="col-lg-9 col-xl-6">
								<input class="form-control" type="text" value="Nick">
							</div>
						</div>
						<div class="form-group row">
							<label class="col-xl-3 col-lg-3 col-form-label">Hộ</label>
							<div class="col-lg-9 col-xl-6">
								<input class="form-control" type="text" value="Bold">
							</div>
						</div>
						<div class="form-group row">
							<label class="col-xl-3 col-lg-3 col-form-label">Bệnh viện</label>
							<div class="col-lg-9 col-xl-6">
								<input class="form-control" type="text" value="Loop Inc.">
							</div>
						</div>
						<div class="row">
							<label class="col-xl-3"></label>
							<div class="col-lg-9 col-xl-6">
								<h3 class="kt-section__title kt-section__title-sm">Thông tin liên lạc:</h3>
							</div>
						</div>
						<div class="form-group row">
							<label class="col-xl-3 col-lg-3 col-form-label">SĐT</label>
							<div class="col-lg-9 col-xl-6">
								<div class="input-group">
									<div class="input-group-prepend"><span class="input-group-text"><i class="la la-phone"></i></span></div>
									<input type="text" class="form-control" value="+35278953712" placeholder="Phone" aria-describedby="basic-addon1">
								</div>
							</div>
						</div>
						<div class="form-group row">
							<label class="col-xl-3 col-lg-3 col-form-label">Email</label>
							<div class="col-lg-9 col-xl-6">
								<div class="input-group">
									<div class="input-group-prepend"><span class="input-group-text"><i class="la la-at"></i></span></div>
									<input type="text" class="form-control" value="nick.bold@loop.com" placeholder="Email" aria-describedby="basic-addon1">
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
			<div class="kt-portlet__foot">
				<div class="kt-form__actions">
					<div class="row">
						<div class="col-lg-3 col-xl-3">
						</div>
						<div class="col-lg-9 col-xl-9">
							<button type="reset" class="btn btn-success">Thay đổi</button>&nbsp;
							<button type="reset" class="btn btn-secondary">Hủy</button>
						</div>
					</div>
				</div>
			</div>
		</form>
	</div>
</div>
</div>
</div>
<!--End:: App Content-->
</div>
<!--End::App-->
</div>
<!-- end:: Content -->				</div>
<div class="kt-footer  kt-grid__item kt-grid kt-grid--desktop kt-grid--ver-desktop" id="kt_footer">
<div class="kt-container  kt-container--fluid ">
<div class="kt-footer__copyright">
2019&nbsp;©&nbsp;<a href="http://keenthemes.com/metronic" target="_blank" class="kt-link">Keenthemes</a>
</div>
<div class="kt-footer__menu">
<a href="http://keenthemes.com/metronic" target="_blank" class="kt-footer__menu-link kt-link">About</a>
<a href="http://keenthemes.com/metronic" target="_blank" class="kt-footer__menu-link kt-link">Team</a>
<a href="http://keenthemes.com/metronic" target="_blank" class="kt-footer__menu-link kt-link">Contact</a>
</div>
</div>
</div>
</body>
</html>