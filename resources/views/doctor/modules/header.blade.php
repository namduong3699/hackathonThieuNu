<div class="kt-content  kt-grid__item kt-grid__item--fluid kt-grid kt-grid--hor" id="kt_content" style="padding-top: 0">
	<!-- begin:: Content Head -->
	<div class="kt-subheader  kt-grid__item" id="kt_subheader" style="
	margin-top: 0;
	background-color: #34495e;
	padding: 15px;
	color: #fff;
	">
	<div class="kt-container  kt-container--fluid ">
		<div class="kt-subheader__main">
			<button class="kt-subheader__mobile-toggle" id="kt_subheader_mobile_toggle">
				<span></span>
			</button>
			<h3 class="kt-subheader__title fff">Doctor</h3>
			<div class="kt-input-icon kt-input-icon--right kt-subheader__search kt-hidden">
				<input type="text" class="form-control" placeholder="Search order..." id="generalSearch">
				<span class="kt-input-icon__icon kt-input-icon__icon--right">
					<span><i class="flaticon2-search-1"></i>
					</span>
				</span>
			</div>
		</div>
		<div class="kt-subheader__toolbar">
			<div class="kt-subheader__wrapper">
				<a href="{{URL::to('/')}}" class="btn kt-subheader__btn-secondary">Trang chủ</a>
				<a href="{{URL::to('doctor/search')}}" class="btn kt-subheader__btn-secondary">Thông tin bệnh nhân</a>
				<a href="{{URL::to('doctor/createPatient')}}" class="btn kt-subheader__btn-secondary">Tạo tài khoản</a>
				<a href="{{URL::to('logout')}}" class="btn kt-subheader__btn-secondary">Đăng xuất</a>
				<a href="{{URL::to('doctor/search')}}" class="btn kt-subheader__btn-primary">
					<i class="fas fa-search"></i>
					Tìm kiếm
				</a>
			</div>
		</div>
	</div>
</div>
</div>