@extends('Patient/main')

@section('title')
Index
@endsection

@section('header')
@include('patient/modules/header')
@endsection

@section('content')
<div class="kt-container  kt-container--fluid  kt-grid__item kt-grid__item--fluid">
			<!--begin::Portlet-->
			<div class="kt-portlet">
				<!--begin::Form-->
				<form class="kt-form" action="{{URL::to('patient/index')}}" method="post">
					<div class="kt-portlet__body">
						<div class="kt-form__section kt-form__section--first">
							<div class="form-group row">
								<label class="col-lg-2 col-form-label">Họ và tên:</label>
								<div class="col-lg-4">
									<input type="text" class="form-control" name="name" placeholder="Điền họ tên">
								</div>
							</div>
							<div class="form-group row">
								<label class="col-lg-2 col-form-label">Email:</label>
								<div class="col-lg-4">
									<input type="email" class="form-control" name="email" placeholder="Nhập email của bạn">
								</div>
							</div>
							<div class="form-group row">
								<label class="col-lg-2 col-form-label">Liên hệ</label>
								<div class="col-lg-4">
									<div class="input-group">
										<input type="text" class="form-control" name="phone" placeholder="SĐT">
									</div>
								</div>
							</div><div class="form-group row">
							<label class="col-lg-2 col-form-label">CMND</label>
							<div class="col-lg-4">
								<div class="input-group">
									<input type="text" class="form-control" name="identity_number" placeholder="Nhập số CMND">
								</div>
							</div>
						</div>
					</div>
				</div>
				<div class="kt-portlet__foot">
					<div class="kt-form__actions">
						<div class="row">
							<div class="col-lg-2"></div>
							<div class="col-lg-2">
								<button type="submit" class="btn btn-success">Đặt lịch</button>
								<button type="reset" class="btn btn-secondary">Hủy</button>
							</div>
						</div>
					</div>
				</div>
			</form>
			<!--end::Form-->
		</div>
		<!--end::Portlet-->
	</div>
@endsection

@section('footer')
@include('patient/modules/footer')
@endsection