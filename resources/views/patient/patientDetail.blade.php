@extends('patient/main')

@section('title')
Search
@endsection

@section('header')
@include('patient/modules/header')
@endsection

@section('content')
<div class="col-lg-6">
	<!--Begin::Portlet-->
	<div class="kt-portlet">
		<div class="kt-portlet__head">
			<div class="kt-portlet__head-label">
				<h3 class="kt-portlet__head-title">
					Thông tin bệnh nhân
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
										Bệnh nhân: {{$patient->name}}                                                     
									</a>
								</div>
							</div>
							<span class="kt-notes__body">                                        
								<p>Mã số: <a href="#">#{{$patient->id}}</a></p>
								<p>Ngày sinh: {{$patient->birthday}}</p>
								<p>Địa chỉ: {{$patient->address}}</p>
								<p>Số điện thoại: {{$patient->phone}}</p>
							</span>  
						</div>                                             
					</div> 
					@if($medicalReport->count() > 0)
					@foreach($medicalReport as $med)
					<div class="kt-notes__item"> 
						<div class="kt-notes__media">
							<h3 class="kt-notes__user kt-font-brand kt-font-boldest">
								PK                                                    
							</h3>                                 
						</div>                             
						<div class="kt-notes__content"> 
							<div class="kt-notes__section">     
								<div class="kt-notes__info">
									<a href="{{URL::to('patient/reportDetail', $med->id)}}" class="kt-notes__title">
										Phiếu khám lần {{$medicalReport->count()-$loop->index}}                                             
									</a>
									<span class="kt-notes__desc">
										({{$med->date}})
									</span>
								</div>
							</div>

						</div>  
					</div> 
					@endforeach
					@else 
						<div class="kt-notes__item"> 
						<div class="kt-notes__media">
							<h3 class="kt-notes__user kt-font-brand kt-font-boldest">
								PK                                                    
							</h3>                                 
						</div>                             
						<div class="kt-notes__content"> 
							<div class="kt-notes__section">     
								<div class="kt-notes__info">
										Lịch sử khám trống                                                 
								</div>
							</div>

						</div>  
					</div> 
					@endif
				</div>
			</div>
		</div>
	</div>
	<!--End::Portlet-->
</div>
@endsection

@section('footer')
@include('patient/modules/footer')
@endsection