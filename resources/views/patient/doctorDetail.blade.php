@extends('patient/main')

@section('title')
Doctor Detail
@endsection

@section('header')
@include('Patient/modules/header')
@endsection

@section('content')
<div class="col-lg-6">
	<!--Begin::Portlet-->
	<div class="kt-portlet">
		<div class="kt-portlet__head">
			<div class="kt-portlet__head-label">
				<h3 class="kt-portlet__head-title">
					Thông tin Bác Sĩ
				</h3>
			</div>
		</div>
		<div class="kt-portlet__body">                   
			<div class="kt-notes">
				<div class="kt-notes__items">
					<div class="kt-notes__item"> 
						<div class="kt-notes__media">
							<img class="kt-hidden-" src="assets/media/users/100_12.jpg" alt="image">
							<span class="kt-notes__icon kt-font-boldest kt-hidden">
								<i class="flaticon2-cup"></i>                                    
							</span> 
							<h3 class="kt-notes__user kt-font-boldest kt-hidden">
								N S                                                       
							</h3>                                 
						</div>    
						<div class="kt-notes__content"> 
							<div class="kt-notes__section">     
								<div class="kt-notes__info">
									<a href="#" class="kt-notes__title">
										Bác sĩ: {{$doctor->name}}                                                     
									</a>
								</div>
							</div>
							<span class="kt-notes__body">                                        
								<p>Mã số: <a href="#">#{{$doctor->id}}</a></p>
								<p>Email: {{$doctor->email}}</p>
								<p>Địa chỉ: {{$doctor->address}}</p>
								<p>Số điện thoại: {{$doctor->phone}}</p>
							</span>  
						</div>                                             
					</div> 
				
				</div>
			</div>
		</div>
	</div>
	<!--End::Portlet-->
</div>
@endsection

@section('footer')
@include('Doctor/modules/footer')
@endsection