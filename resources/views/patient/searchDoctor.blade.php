@extends('Patient/main')

@section('title')
Search
@endsection

@section('header')
@include('Patient/modules/header')
@endsection

@section('content')
<div class="row" style="width: 100%;">
	<div class="col-lg-6 cg">
		<div class="kt-portlet">
			<div class="kt-portlet__head">
				<div class="kt-portlet__head-label">
					<h3 class="kt-portlet__head-title">
						Search
					</h3>
				</div>
			</div>
			<div class="kt-portlet__body">
				<!-- <ul class="nav nav-tabs nav-fill" role="tablist">
					<li class="nav-item">
						<a class="nav-link active" data-toggle="tab" href="#kt_tabs_2_1">Bệnh nhân</a>
					</li>
				</ul>  -->                   

				<div class="tab-content">
					<div class="tab-pane active" id="kt_tabs_1_1" role="tabpanel">
						<div class="form-group">
							<label>Nhập tên Bác Sĩ:</label>
							<input type="text" class="form-control search-input" aria-describedby="emailHelp" placeholder="Họ và tên">
							<!-- <span class="form-text text-muted">We'll never share your email with anyone else.</span> -->
						</div>
					</div>
				</div>      
			</div>
		</div>
	</div>
</div>
	
	<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.0.0/jquery.min.js"></script>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/typeahead.js/0.11.1/typeahead.bundle.min.js"></script>
	<script>
		jQuery(document).ready(function($) {
			var engine = new Bloodhound({
				remote: {
					url: "{!!URL::to('patient/searchDoctorByName')!!}?name=%QUERY%",
					wildcard: '%QUERY%'
				},
				datumTokenizer: Bloodhound.tokenizers.whitespace('q'),
				queryTokenizer: Bloodhound.tokenizers.whitespace
			});

			$(".search-input").typeahead({
				hint: true,
				highlight: true,
				minLength: 1
			}, {
				source: engine.ttAdapter(),
				name: 'usersList',
				templates: {
					empty: [
					'<div class="list-group search-results-dropdown"><div class="list-group-item">Không có kết quả phù hợp.</div></div>'
					],
					header: [
					'<div class="list-group search-results-dropdown">'
					],
					suggestion: function (data) {
						var url = "{!!URL::to('patient/doctorDetail/" + data.id + "')!!}";
						return '<a href="' + url + '" class="list-group-item">' + data.name + '</a>'
					}
				}
			});

			$(".search-drug-input").typeahead({
				hint: true,
				highlight: true,
				minLength: 1
			}, {
				source: engine.ttAdapter(),
				name: 'usersList',
				templates: {
					empty: [
					'<div class="list-group search-results-dropdown"><div class="list-group-item">Không có kết quả phù hợp.</div></div>'
					],
					header: [
					'<div class="list-group search-results-dropdown">'
					],
					suggestion: function (data) {
						var url = "{!!URL::to('patient/doctorDetail/" + data.id + "')!!}";
						return '<a href="' + url + '" class="list-group-item">' + data.name + '</a>'
					}
				}
			});
		});
	</script>
@endsection

@section('footer')
@include('Patient/modules/footer')
@endsection