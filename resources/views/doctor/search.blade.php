@extends('doctor/main')
@section('content')
<div class="row">
	<div class="col-lg-6">
		<div class="kt-portlet">
            <div class="kt-portlet__head">
                <div class="kt-portlet__head-label">
                    <h3 class="kt-portlet__head-title">
                        Search
                    </h3>
                </div>
            </div>
            <div class="kt-portlet__body">
                <ul class="nav nav-tabs nav-fill" role="tablist">
                    <li class="nav-item">
                        <a class="nav-link active" data-toggle="tab" href="#kt_tabs_2_1">Bệnh nhân</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" data-toggle="tab" href="#kt_tabs_2_2">Thuốc</a>
                    </li>
                </ul>                    

                <div class="tab-content">
                    <div class="tab-pane active" id="kt_tabs_1_1" role="tabpanel">
                        Nhập tên bệnh nhân:
                    </div>
                    <div class="tab-pane" id="kt_tabs_1_2" role="tabpanel">
                        It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.
                    </div>
                </div>      
            </div>
        </div>
	</div>
</div>
@endsection