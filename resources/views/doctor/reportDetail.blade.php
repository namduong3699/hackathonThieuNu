@extends('doctor/main')
@section('content')
<div class="col-xl-8 order-lg-2 order-xl-1">
		<div class="kt-portlet kt-portlet--height-fluid kt-portlet--mobile ">
	<div class="kt-portlet__head kt-portlet__head--lg kt-portlet__head--noborder kt-portlet__head--break-sm">
		<div class="kt-portlet__head-label">
			<h3 class="kt-portlet__head-title">
				Chi tiết phiếu khám
			</h3>
		</div>
		<div class="kt-portlet__head-toolbar">
			<div class="dropdown dropdown-inline">
				<button type="button" class="btn btn-clean btn-sm btn-icon btn-icon-md" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
					<i class="flaticon-more-1"></i>
				</button>
				<div class="dropdown-menu dropdown-menu-right dropdown-menu-md dropdown-menu-fit">
                    <!--begin::Nav-->
<ul class="kt-nav">
    <li class="kt-nav__head">
        Export Options                                    
        <span data-toggle="kt-tooltip" data-placement="right" title="" data-original-title="Click to learn more...">
            <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="24px" height="24px" viewBox="0 0 24 24" version="1.1" class="kt-svg-icon kt-svg-icon--brand kt-svg-icon--md1">
    <g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
        <rect x="0" y="0" width="24" height="24"></rect>
        <circle fill="#000000" opacity="0.3" cx="12" cy="12" r="10"></circle>
        <rect fill="#000000" x="11" y="10" width="2" height="7" rx="1"></rect>
        <rect fill="#000000" x="11" y="7" width="2" height="2" rx="1"></rect>
    </g>
</svg>        </span>
   </li>
    <li class="kt-nav__separator"></li>
    <li class="kt-nav__item">
        <a href="#" class="kt-nav__link">
            <i class="kt-nav__link-icon flaticon2-drop"></i>
            <span class="kt-nav__link-text">Activity</span>
        </a>
    </li>
    <li class="kt-nav__item">
        <a href="#" class="kt-nav__link">
            <i class="kt-nav__link-icon flaticon2-calendar-8"></i>
            <span class="kt-nav__link-text">FAQ</span>
        </a>
    </li>
    <li class="kt-nav__item">
        <a href="#" class="kt-nav__link">
            <i class="kt-nav__link-icon flaticon2-telegram-logo"></i>
            <span class="kt-nav__link-text">Settings</span>
        </a>
    </li>
    <li class="kt-nav__item">
        <a href="#" class="kt-nav__link">
            <i class="kt-nav__link-icon flaticon2-new-email"></i>
            <span class="kt-nav__link-text">Support</span>
            <span class="kt-nav__link-badge">
                <span class="kt-badge kt-badge--success kt-badge--rounded">5</span>
            </span>
        </a>
    </li>
    <li class="kt-nav__separator"></li>
    <li class="kt-nav__foot">
        <a class="btn btn-label-danger btn-bold btn-sm" href="#">Upgrade plan</a>                                    
        <a class="btn btn-clean btn-bold btn-sm" href="#" data-toggle="kt-tooltip" data-placement="right" title="" data-original-title="Click to learn more...">Learn more</a>
    </li>
</ul>
<!--end::Nav-->				</div>
			</div>
		</div>
	</div>
	<div class="kt-portlet__body kt-portlet__body--fit">
		<!--begin: Datatable -->
<div class="kt-datatable kt-datatable--default kt-datatable--brand kt-datatable--scroll kt-datatable--loaded" id="kt_datatable_latest_orders" style=""><div class="ps__rail-x" style="left: 0px; bottom: -163px;">
    <div class="ps__thumb-x" tabindex="0" style="left: 0px; width: 0px;"></div>
</div><div class="ps__rail-y" style="top: 163px; height: 447px; right: 0px;">
    <div class="ps__thumb-y" tabindex="0" style="top: 147px; height: 300px;"></div>
</div><table class="kt-datatable__table" style="display: block; max-height: 500px;">
        <thead class="kt-datatable__head">
            <tr class="kt-datatable__row" style="left: 0px;">
              <th data-field="ShipName" data-autohide-disabled="false" class="kt-datatable__cell kt-datatable__cell--sort"><span style="width: 100px;">Thời gian khám</span></th>
                <th data-field="ShipName" data-autohide-disabled="false" class="kt-datatable__cell kt-datatable__cell--sort"><span style="width: 100px;">Bác sĩ khám</span></th>
                <th data-field="ShipDate" class="kt-datatable__cell kt-datatable__cell--sort"><span style="width: 100px;">Triệu chứng</span></th>
                <th data-field="Status" class="kt-datatable__cell kt-datatable__cell--sort"><span style="width: 100px;">kết quả xét nghiệm</span></th>
                <th data-field="Type" class="kt-datatable__cell kt-datatable__cell--sort"><span style="width: 100px;">Bệnh</span></th>
                <th data-field="Actions" data-autohide-disabled="false" class="kt-datatable__cell kt-datatable__cell--sort"><span style="width: 80px;">Toa thuốc</span></th>
          <!--       <th data-field="Status" class="kt-datatable__cell kt-datatable__cell--sort"><span style="width: 100px;">Hóa đơn</span></th> -->
            </tr>
        </thead>
        <tbody class="kt-datatable__body ps ps--active-y" style="max-height: 447px;">
            <tr data-row="0" class="kt-datatable__row" style="left: 0px;">
               <td data-field="ShipDate" class="kt-datatable__cell"><span style="width: 100px;"><span class="kt-font-bold">2/12/2018</span></span>
				</td>
               <td data-field="ShipDate" class="kt-datatable__cell"><span style="width: 130px;"><span class="kt-font-bold"><a href="">Bùi Anh Tuấn</a></span></span>
				</td>

 
<td data-field="ShipDate" class="kt-datatable__cell"><span style="width: 100px;"><span class="kt-font-bold">đau bụng buồn nôn</span></span>
</td>
<td data-field="ShipDate" class="kt-datatable__cell"><span style="width: 100px;"><span class="kt-font-bold">không  có gì bất thường</span></span>
</td>
<td data-field="ShipDate" class="kt-datatable__cell"><span style="width: 100px;"><span class="kt-font-bold">đau ruột thừa</span></span>
</td>
<td data-field="ShipDate" class="kt-datatable__cell"><span style="width: 100px;"><span class="kt-font-bold">
    <ul style="list-style: none;">
	<li><a href=""> acbf</a></li>
	<li><a href=""> dfdf</a></li>
	<li><a href="">đfdf</a></li>
</ul></span></span>
</td>
<!-- <td data-field="ShipDate" class="kt-datatable__cell"><span style="width: 100px;"><span class="kt-font-bold">100 000vnd</span></span> -->
</tr>
   <tr data-row="0" class="kt-datatable__row" style="left: 0px;">
               <td data-field="ShipDate" class="kt-datatable__cell"><span style="width: 100px;"><span class="kt-font-bold">2/12/2018</span></span>
				</td>
               <td data-field="ShipDate" class="kt-datatable__cell"><span style="width: 130px;"><span class="kt-font-bold">Bùi Anh Tuấn</span></span>
				</td>

 
<td data-field="ShipDate" class="kt-datatable__cell"><span style="width: 100px;"><span class="kt-font-bold">đau bụng buồn nôn</span></span>
</td>
<td data-field="ShipDate" class="kt-datatable__cell"><span style="width: 100px;"><span class="kt-font-bold">không  có gì bất thường</span></span>
</td>
<td data-field="ShipDate" class="kt-datatable__cell"><span style="width: 100px;"><span class="kt-font-bold">đau ruột thừa</span></span>
</td>
<td data-field="ShipDate" class="kt-datatable__cell"><span style="width: 100px;"><span class="kt-font-bold"><ul>
	<li>acbf</li>
	<li>dfdf</li>
	<li>đfdf</li>
</ul></span></span>
</td>
<!-- <td data-field="ShipDate" class="kt-datatable__cell"><span style="width: 100px;"><span class="kt-font-bold">100 000vnd</span></span>
</td> -->
</tr>
            <tr data-row="0" class="kt-datatable__row" style="left: 0px;">
               <td data-field="ShipDate" class="kt-datatable__cell"><span style="width: 100px;"><span class="kt-font-bold">2/12/2018</span></span>
				</td>
               <td data-field="ShipDate" class="kt-datatable__cell"><span style="width: 130px;"><span class="kt-font-bold">Bùi Anh Tuấn</span></span>
				</td>

 
<td data-field="ShipDate" class="kt-datatable__cell"><span style="width: 100px;"><span class="kt-font-bold">đau bụng buồn nôn</span></span>
</td>
<td data-field="ShipDate" class="kt-datatable__cell"><span style="width: 100px;"><span class="kt-font-bold">không  có gì bất thường</span></span>
</td>
<td data-field="ShipDate" class="kt-datatable__cell"><span style="width: 100px;"><span class="kt-font-bold">đau ruột thừa</span></span>
</td>
<td data-field="ShipDate" class="kt-datatable__cell"><span style="width: 100px;"><span class="kt-font-bold"><ul>
	<li>acbf</li>
	<li>dfdf</li>
	<li>đfdf</li>
</ul></span></span>
</td>
<!-- <td data-field="ShipDate" class="kt-datatable__cell"><span style="width: 100px;"><span class="kt-font-bold">100 000vnd</span></span>
</td> -->
</tr>
            <tr data-row="0" class="kt-datatable__row" style="left: 0px;">
               <td data-field="ShipDate" class="kt-datatable__cell"><span style="width: 100px;"><span class="kt-font-bold">2/12/2018</span></span>
				</td>
               <td data-field="ShipDate" class="kt-datatable__cell"><span style="width: 130px;"><span class="kt-font-bold">Bùi Anh Tuấn</span></span>
				</td>

 
<td data-field="ShipDate" class="kt-datatable__cell"><span style="width: 100px;"><span class="kt-font-bold">đau bụng buồn nôn</span></span>
</td>
<td data-field="ShipDate" class="kt-datatable__cell"><span style="width: 100px;"><span class="kt-font-bold">không  có gì bất thường</span></span>
</td>
<td data-field="ShipDate" class="kt-datatable__cell"><span style="width: 100px;"><span class="kt-font-bold">đau ruột thừa</span></span>
</td>
<td data-field="ShipDate" class="kt-datatable__cell"><span style="width: 100px;"><span class="kt-font-bold"><ul>
	<li>acbf</li>
	<li>dfdf</li>
	<li>đfdf</li>
</ul></span></span>
</td>
<!-- <td data-field="ShipDate" class="kt-datatable__cell"><span style="width: 100px;"><span class="kt-font-bold">100 000vnd</span></span>
</td> -->
</tr>



</tbody>
</table>
<div class="kt-datatable__pager kt-datatable--paging-loaded">
    <ul class="kt-datatable__pager-nav">
        <li><a title="First" class="kt-datatable__pager-link kt-datatable__pager-link--first kt-datatable__pager-link--disabled" data-page="1" disabled="disabled"><i class="flaticon2-fast-back"></i></a></li>
        <li><a title="Previous" class="kt-datatable__pager-link kt-datatable__pager-link--prev kt-datatable__pager-link--disabled" data-page="1" disabled="disabled"><i class="flaticon2-back"></i></a></li>
        <li style=""></li>
        <li style="display: none;">
            <input type="text" class="kt-pager-input form-control" title="Page number">
        </li>
        <li><a class="kt-datatable__pager-link kt-datatable__pager-link-number kt-datatable__pager-link--active" data-page="1" title="1">1</a></li>
        <li><a class="kt-datatable__pager-link kt-datatable__pager-link-number" data-page="2" title="2">2</a></li>
        <li><a class="kt-datatable__pager-link kt-datatable__pager-link-number" data-page="3" title="3">3</a></li>
        <li><a class="kt-datatable__pager-link kt-datatable__pager-link-number" data-page="4" title="4">4</a></li>
        <li><a class="kt-datatable__pager-link kt-datatable__pager-link-number" data-page="5" title="5">5</a></li>
        <li></li>
        <li><a title="Next" class="kt-datatable__pager-link kt-datatable__pager-link--next" data-page="2"><i class="flaticon2-next"></i></a></li>
        <li><a title="Last" class="kt-datatable__pager-link kt-datatable__pager-link--last" data-page="20"><i class="flaticon2-fast-next"></i></a></li>
    </ul>
    <div class="kt-datatable__pager-info">
        <div class="dropdown bootstrap-select kt-datatable__pager-size" style="width: 60px;">
            <select class="selectpicker kt-datatable__pager-size" title="Select page size" data-width="60px" data-selected="10" tabindex="-98">
                <option class="bs-title-option" value=""></option>
                <option value="10">10</option>
                <option value="20">20</option>
                <option value="30">30</option>
                <option value="50">50</option>
                <option value="100">100</option>
            </select>
            <button type="button" class="btn dropdown-toggle btn-light" data-toggle="dropdown" role="combobox" aria-owns="bs-select-1" aria-haspopup="listbox" aria-expanded="false" title="Select page size">
                <div class="filter-option">
                    <div class="filter-option-inner">
                        <div class="filter-option-inner-inner">10</div>
                    </div>
                </div>
            </button>
            <div class="dropdown-menu ">
                <div class="inner show" role="listbox" id="bs-select-1" tabindex="-1">
                    <ul class="dropdown-menu inner show" role="presentation"></ul>
                </div>
            </div>
        </div><span class="kt-datatable__pager-detail">Showing 1 - 10 of 200</span></div>
</div>
</div>
		<!--end: Datatable -->
	</div>
</div>     
	</div>
@endsection