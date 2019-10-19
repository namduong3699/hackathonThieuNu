<div class="kt-content  kt-grid__item kt-grid__item--fluid kt-grid kt-grid--hor" id="kt_content">
			
			<!-- begin:: Content Head -->
			<div class="kt-subheader  kt-grid__item" id="kt_subheader">
				<div class="kt-container  kt-container--fluid ">
					<div class="kt-subheader__main">
						<button class="kt-subheader__mobile-toggle" id="kt_subheader_mobile_toggle"><span></span></button>
						<h3 class="subheader__title">Đặt lịch khám</h3>
						<div class="kt-input-icon kt-input-icon--right kt-subheader__search kt-hidden">
							<input type="text" class="form-control" placeholder="Search order..." id="generalSearch">
							<span class="kt-input-icon__icon kt-input-icon__icon--right">
								<span><i class="flaticon2-search-1"></i></span>
							</span>
						</div>
					</div>
					<div class="kt-subheader__toolbar">
						<div class="kt-subheader__wrapper">
							<a href="{{URL::to('patient/index')}}" class="btn kt-subheader__btn-secondary">Trang chủ</a>
							<a href="{{URL::to('patient/patientDetail')}}" class="btn kt-subheader__btn-secondary">Thông tin Cá Nhân</a>
							<a href="{{URL::to('patient/index')}}" class="btn kt-subheader__btn-secondary">Liên lạc</a>
							<a href="{{URL::to('logout')}}" class="btn kt-subheader__btn-secondary">Đăng xuất</a>
							<a href="{{URL::to('patient/searchDoctor')}}" class="btn kt-subheader__btn-primary">
								<i class="fas fa-search"></i>
								Tìm kiếm Bác Sĩ
							</a>
						</div>
					</div>
				</div>
			</div>
		</div>