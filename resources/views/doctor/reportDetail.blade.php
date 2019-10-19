@extends('doctor/main')

@section('title')
Search
@endsection

@section('header')
@include('Doctor/modules/header')
@endsection

@section('content')
<div class="kt-portlet">
	<div class="kt-portlet__head">
		<div class="kt-portlet__head-label">
			<h3 class="kt-portlet__head-title">
				Chi tiết phiếu khám bệnh
			</h3>
		</div>
	</div>
	<div class="kt-portlet__body">
		<!--begin::Section-->
		<div class="kt-section">
			<span class="kt-section__info">
				Lorem ipsum dolor sit amet, consectetur adipisicing elit. Accusamus, modi.
			</span>
			<div class="kt-section__content">
				<table class="table">
					<thead class="thead-light">
						<tr>
							<th>#</th>
							<th>Bác sĩ</th>
							<th>Thời gian khám</th>
							<th>Triệu chứng</th>
							<th>Bệnh</th>
							<th>Thuốc</th>
							<th>Số lượng</th>
						</tr>
					</thead>
					<tbody class="report-tbody">
						@if($medicalReportdetail->count() >0)
						@foreach($medicalReportdetail as $med)
						<tr class="js-report-row">
							
							<th scope="row">{{$loop->index+1}}</th>
							<td><a href="{{URL::to('doctor/doctorDetail/'.$med->doctor_id)}}">{{$med->doctor}}</a></td>
							<td>{{$med->date}}</td>
							<td>{{$med->sympton}}</td>
							<td>{{$med->disease}}</td>
							<td>{{$med->medicine}}</td>
							<td>{{$med->quantity}}</td>
							
						</tr>
						@endforeach
						@else
						<tr><td>Trống</td></tr>
						@endif
						
					</tbody>
				</table>
			</div>
		</div>
		<!--end::Section-->
		
		<form id="form" action="reportDetail" method="post" class="kt-form kt-form--fit kt-form--label-right">
			<div class="kt-portlet__body">
				<div class="form-group row">
					<label class="col-lg-2 col-form-label">Bệnh:</label>
					<div class="col-lg-3">
						<select id="select-state" class="js-disease" placeholder="Chọn bệnh..." name="disease">
							<option value="">0</option>
							@foreach($diseaseAll as $disease)
							<option value="{{$disease->id}}">{{$disease->name}}</option>
							@endforeach
						</select>
						<span class="form-text text-muted">Vui lòng chọn đúng bệnh!</span>
					</div>
				</div>

				<div class="form-group row">
					<label class="col-lg-2 col-form-label">Triệu chứng:</label>
					<div class="col-lg-3">					
						<textarea name="sympton" class="form-control" class="js-sympton" id="exampleTextarea" rows="3"></textarea>
						<span class="form-text text-muted">Triệu chứng</span>
					</div>
				</div>


				<div class="form-group row form-group-last">
					<label class="col-lg-2 col-form-label">Thuốc:</label>
					<div class="col-lg-3">
						<select id="select-state" class="js-medicine" placeholder="Chọn thuốc..." name="medicine">
							<option value="">0</option> 
							@foreach($medicineAll as $medicine)
							<option value="{{$medicine->id}}">{{$medicine->name}}</option>
							@endforeach
						</select>
						<span class="form-text text-muted">Vui lòng chọn đúng loại thuốc</span>
					</div>
					<label class="col-lg-2 col-form-label">Số lượng:</label>
					<div class="col-lg-3">
						<input type="email" class="form-control js-quantity" placeholder="Nhập số lượng" name="quantity">
						<span class="form-text text-muted"></span>

					</div>
				</div>
				
			</div>
			<div class="kt-portlet__foot kt-portlet__foot--fit-x">
				<div class="kt-form__actions">
					<div class="row">
						<div class="col-lg-2"></div>
						<div class="col-lg-10">
							<button type="reset" class="btn btn-success js-add-medicine">Thêm</button>
							<button type="reset" class="btn btn-secondary">Hủy</button>
						</div>
					</div>
				</div>
			</div>
			<input type="hidden" name="medicalReportId" value="{{$medicalReportId}}">
		</form>
		
	</div>

</div>


<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/selectize.js/0.12.6/js/standalone/selectize.min.js" integrity="sha256-+C0A5Ilqmu4QcSPxrlGpaZxJ04VjsRjKu+G82kl5UJk=" crossorigin="anonymous"></script>
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/selectize.js/0.12.6/css/selectize.bootstrap3.min.css" integrity="sha256-ze/OEYGcFbPRmvCnrSeKbRTtjG4vGLHXgOqsyLFTRjg=" crossorigin="anonymous" />
<script>
	$(document).ready(function () {
		$('.js-disease').selectize({
			sortField: 'text'
		});
		$('.js-medicine').selectize({
			sortField: 'text'
		});

		$('.js-add-medicine').click(function(){
			var medicine = $('.js-medicine').val();
			var quantity = $('.js-quantity').val();
			var disease = $('.js-disease').val();
			var sympton = $('.js-sympton').val();
			if(!isNaN(quantity) && medicine != 0 && disease != 0 && !sympton) {
				console.log('add medicine: ' + medicine + ' ' + quantity);
				$.ajax({
					type: "GET", 
					url: "{!!URL::to('doctor/patientDetail/') !!}", 
					data: $('#form').serialize(),
					complete: function(data){
						// var reportRow = $('.js-report-row:first').clone();
						// reportRow.
						// reportRow.appendTo('.report-tbody');
						location.reload();
					}
				});






				
			}
		});
	});	
</script>
@endsection

@section('footer')
@include('Doctor/modules/footer')
@endsection