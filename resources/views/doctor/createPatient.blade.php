@extends('Doctor/main')

@section('title')
Create Patient 
@endsection

@section('header')
@include('Doctor/modules/header')
@endsection

@section('content')
<div class="kt-wizard-v4 wd-100" id="kt_apps_user_add_user" data-ktwizard-state="first">
	<!--begin: Form Wizard Nav -->

	<!--end: Form Wizard Nav -->

	<div class="kt-portlet kt-p30">
		<div class="kt-portlet__body kt-portlet__body--fit">
			<div class="kt-grid">
				<div class="kt-grid__item kt-grid__item--fluid kt-wizard-v4__wrapper">
					<!--begin: Form Wizard Form-->
					<form class="kt-form" action="{{URL::to('doctor/createPatient')}}" method="post" id="kt_apps_user_add_user_form" novalidate="novalidate">
						@csrf
						<!--begin: Form Wizard Step 1-->
						<div class="kt-wizard-v4__content" data-ktwizard-type="step-content" data-ktwizard-state="current">

							@if($errors->has('emailAlreadyExists'))
							<div class="alert alert-danger fade show" role="alert">
								<div class="alert-icon"><i class="flaticon-questions-circular-button"></i></div>
								<div class="alert-text">Email đã được sử dụng!</div>
								<div class="alert-close">
									<button type="button" class="close" data-dismiss="alert" aria-label="Close">
										<span aria-hidden="true"><i class="la la-close"></i></span>
									</button>
								</div>
							</div>
							@elseif(isset($success) && $success == true)
							<div class="alert alert-success fade show" role="alert">
								<div class="alert-icon"><i class="flaticon-warning"></i></div>
								<div class="alert-text">Tạo tài khoản thành công!</div>
								<div class="alert-close">
									<button type="button" class="close" data-dismiss="alert" aria-label="Close">
										<span aria-hidden="true"><i class="la la-close"></i></span>
									</button>
								</div>
							</div>
							@endif

							<div class="kt-heading kt-heading--md">Thêm tài khoản bệnh nhân:</div>
							<div class="kt-section kt-section--first">
								<div class="kt-wizard-v4__form">
									<div class="row">
										<div class="col-xl-12">
											<div class="kt-section__body">
												<div class="form-group row">
													<label class="col-xl-3 col-lg-3 col-form-label">Ảnh đại diện</label>
													<div class="col-lg-9 col-xl-6">
														<div class="kt-avatar kt-avatar--outline kt-avatar--circle" id="kt_apps_user_add_avatar">
															<div class="kt-avatar__holder"></div>
															<label class="kt-avatar__upload" data-toggle="kt-tooltip" title="" data-original-title="Change avatar">
																<i class="fa fa-pen"></i>
																<input type="file" name="avatar" accept="image/x-png,image/gif,image/jpeg">
															</label>
															<span class="kt-avatar__cancel" data-toggle="kt-tooltip" title="" data-original-title="Cancel avatar">
																<i class="fa fa-times"></i>
															</span>
														</div>
													</div>
												</div>
												<div class="form-group row">
													<label class="col-xl-3 col-lg-3 col-form-label">Họ và tên</label>
													<div class="col-lg-9 col-xl-9">
														<input class="form-control" name="name" type="text" placeholder="name">
													</div>
												</div>

												<div class="form-group row">
													<label class="col-xl-3 col-lg-3 col-form-label">Mật khẩu</label>
													<div class="col-lg-9 col-xl-9">
														<input class="form-control" name="password" type="password" placeholder="password">
													</div>
												</div>

												<div class="form-group row">
													<label class="col-xl-3 col-lg-3 col-form-label">Ngày sinh</label>
													<div class="col-lg-9 col-xl-9">
														<input class="form-control" name="birthday" type="date" id="example-date-input">
													</div>
												</div>

												<div class="form-group row">
													<label class="col-xl-3 col-lg-3 col-form-label">Địa chỉ</label>
													<div class="col-lg-9 col-xl-9">
														<input class="form-control" name="address" type="text" placeholder="address">
													</div>
												</div>

												<div class="form-group row">
													<label class="col-xl-3 col-lg-3 col-form-label">Điện thoại</label>
													<div class="col-lg-9 col-xl-9">
														<div class="input-group">
															<div class="input-group-prepend"><span class="input-group-text"><i class="la la-phone"></i></span></div>
															<input type="text" name="phone" class="form-control" placeholder="Phone" aria-describedby="basic-addon1">
														</div>
													</div>
												</div>

												<div class="form-group row">
													<label class="col-xl-3 col-lg-3 col-form-label">Địa chỉ Email</label>
													<div class="col-lg-9 col-xl-9">
														<div class="input-group">
															<div class="input-group-prepend"><span class="input-group-text"><i class="la la-at"></i></span></div>
															<input type="text" name="email" class="form-control" placeholder="Email" aria-describedby="basic-addon1">
														</div>
													</div>
												</div>
											</div>
										</div>
									</div>
								</div>
							</div>
						</div>

						<div class="kt-form__actions">

							<input type="submit" class="btn btn-success btn-md btn-tall btn-wide kt-font-bold kt-font-transform-u" data-ktwizard-type="action-submit">
						</div>
						<!--end: Form Actions -->
					</form>
					<!--end: Form Wizard Form-->
				</div>
			</div>
		</div>
	</div>
</div>
@endsection

@section('footer')
@include('Doctor/modules/footer')
@endsection