@extends('layouts.cpanel.app')
@section('title', "portfolios")
@section('style')

@endsection
@section('subheader')
  
<!-- begin:: Subheader -->
<div class="subheader py-2 py-lg-6 subheader-solid" id="kt_subheader">
							<div class="container-fluid d-flex align-items-center justify-content-between flex-wrap flex-sm-nowrap">
								<!--begin::Info-->
								<div class="d-flex align-items-center flex-wrap mr-2">
									
									<!--begin::Page Heading-->
									<div class="d-flex align-items-baseline flex-wrap mr-5">
										<!--begin::Page Title-->
										<span class="card-icon mr-3">
														<i class="flaticon-list icon-lg text-primary"></i>
													</span>
										<h5 class="text-dark font-weight-bold my-1 mr-5">Portfolios</h5>
										<!--end::Page Title-->
                                    </div>
									<!--begin::Separator-->
									<div class="subheader-separator subheader-separator-ver mt-2 mb-2 mr-5 bg-gray-200"></div>
									<!--end::Separator-->
									<!--begin::Search Form-->
									<div class="d-flex align-items-center" id="kt_subheader_search">
										<span class="text-dark-50 font-weight-bold" id="kt_subheader_total">Total:
											 </span><span class="kt-subheader__desc" id="kt_subheader_total_value">
										</span>
										<form class="ml-5">
											<div class="input-group input-group-sm input-group-solid" style="max-width: 175px">
												<input type="text" class="form-control" id="generalSearch" placeholder="Search..." />
												<div class="input-group-append">
													<span class="input-group-text">
														<span class="svg-icon">
															<!--begin::Svg Icon | path:assets/media/svg/icons/General/Search.svg-->
															<svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="24px" height="24px" viewBox="0 0 24 24" version="1.1">
																<g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
																	<rect x="0" y="0" width="24" height="24" />
																	<path d="M14.2928932,16.7071068 C13.9023689,16.3165825 13.9023689,15.6834175 14.2928932,15.2928932 C14.6834175,14.9023689 15.3165825,14.9023689 15.7071068,15.2928932 L19.7071068,19.2928932 C20.0976311,19.6834175 20.0976311,20.3165825 19.7071068,20.7071068 C19.3165825,21.0976311 18.6834175,21.0976311 18.2928932,20.7071068 L14.2928932,16.7071068 Z" fill="#000000" fill-rule="nonzero" opacity="0.3" />
																	<path d="M11,16 C13.7614237,16 16,13.7614237 16,11 C16,8.23857625 13.7614237,6 11,6 C8.23857625,6 6,8.23857625 6,11 C6,13.7614237 8.23857625,16 11,16 Z M11,18 C7.13400675,18 4,14.8659932 4,11 C4,7.13400675 7.13400675,4 11,4 C14.8659932,4 18,7.13400675 18,11 C18,14.8659932 14.8659932,18 11,18 Z" fill="#000000" fill-rule="nonzero" />
																</g>
															</svg>
															<!--end::Svg Icon-->
														</span>
														<!--<i class="flaticon2-search-1 icon-sm"></i>-->
													</span>
												</div>
											</div>
										</form>
									</div>
									<!--end::Search Form-->
                                     <!--begin: Selected Rows Group Action Form-->
                                   <div class="mt-5 mb-5 collapse ml-9" id="kt_datatable_group_action_form">
											<div class="d-flex align-items-center">
												<div class="font-weight-bold text-danger mr-3">Selected:
												<span id="kt_datatable_selected_records">0</span>records</div>
												<button class="btn btn-sm btn-danger mr-2" type="button" id="kt_datatable_delete_all">Delete All</button>
												
											</div>
										
                                      </div> 
								</div>
								
                                <div class="d-flex align-items-center">
									<!--begin::Actions-->
									<a href="{{route('user.portfolios.create')}}" class="btn btn-light-primary add_portfolios_btn font-weight-bolder btn-sm"  >Add portfolios</a>
                                </div>
							

							</div>
    	                             	          
</div>
	
			
@endsection
@section('content')
	<!--begin::Entry-->
    <div class="d-flex flex-column-fluid">
							<!--begin::Container-->
							<div class="container">
                             <!--begin::Card-->
                              <div class="card card-custom gutter-b">
								  
									<div class="card-body">
									
										<!--begin: Datatable-->
										<div class="datatable datatable-bordered datatable-head-custom" id="portfolios_datatable"></div>
										<!--end: Datatable-->
									</div>
								</div>
								<!--end::Card-->
								
							
									
							</div>
							<!--end::Container-->
						</div>
						<!--end::Entry-->



@endsection
@section('script')
<script src="{{asset('js/blades/user/portfolios/index.js')}}"></script>


@endsection

