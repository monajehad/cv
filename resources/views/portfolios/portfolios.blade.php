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

									<div class="card">
									<!--begin::Card body-->
								    <div class="card-body p-0">
										<!--begin::Wrapper-->
										<div class="card-px text-center py-10 my-5">
											<!--begin::Title-->
											<h2 class="fs-2x fw-bolder mb-10">Welcome!</h2>
											<!--end::Title-->
											<!--begin::Description-->
											<p class="text-gray-400 fs-4 fw-bold mb-10">There are no customers added yet.
											<br />Kickstart your CRM by adding a your first customer</p>
											<!--end::Description-->
											<!--begin::Action-->
											<a href="{{route('user.portfolios.create')}}" class="btn btn-primary add_portfolios_btn" >Add portfolios</a>
											<!--end::Action-->
										</div>
										<!--end::Wrapper-->
										<!--begin::Illustration-->
										<div class="text-center px-4">
											<img class="mw-100 h-300px" alt="" src="{{asset('metronic/media/port.jpg')}}" />
										</div>
										<!--end::Illustration-->
									</div>
									<!--end::Card body-->
								</div>
								
								<br>
                                <br>
                              <!--begin::Card-->
								<div class="row">
								   <div class="col-xl-12">
									<div class="card card-custom gutter-b">
										<!--begin::Body-->
										<div class="card-body">
											<!--begin::Top-->
											<div class="d-flex ">
												<!--begin::Symbol-->
											<div class="flex-shrink-0 mr-7 mt-lg-0 mt-3">
												<div class="symbol symbol-50 symbol-lg-120">
																	<span class="symbol-label">
																		<span class="svg-icon svg-icon-primary svg-icon-8x"><!--begin::Svg Icon | path:C:\wamp64\www\keenthemes\legacy\metronic\theme\html\demo1\dist/../src/media/svg/icons\Files\Selected-file.svg--><svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="24px" height="24px" viewBox="0 0 24 24" version="1.1">
																				<g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
																					<polygon points="0 0 24 0 24 24 0 24"/>
																					<path d="M4.85714286,1 L11.7364114,1 C12.0910962,1 12.4343066,1.12568431 12.7051108,1.35473959 L17.4686994,5.3839416 C17.8056532,5.66894833 18,6.08787823 18,6.52920201 L18,19.0833333 C18,20.8738751 17.9795521,21 16.1428571,21 L4.85714286,21 C3.02044787,21 3,20.8738751 3,19.0833333 L3,2.91666667 C3,1.12612489 3.02044787,1 4.85714286,1 Z M8,12 C7.44771525,12 7,12.4477153 7,13 C7,13.5522847 7.44771525,14 8,14 L15,14 C15.5522847,14 16,13.5522847 16,13 C16,12.4477153 15.5522847,12 15,12 L8,12 Z M8,16 C7.44771525,16 7,16.4477153 7,17 C7,17.5522847 7.44771525,18 8,18 L11,18 C11.5522847,18 12,17.5522847 12,17 C12,16.4477153 11.5522847,16 11,16 L8,16 Z" fill="#000000" fill-rule="nonzero" opacity="0.3"/>
																					<path d="M6.85714286,3 L14.7364114,3 C15.0910962,3 15.4343066,3.12568431 15.7051108,3.35473959 L20.4686994,7.3839416 C20.8056532,7.66894833 21,8.08787823 21,8.52920201 L21,21.0833333 C21,22.8738751 20.9795521,23 19.1428571,23 L6.85714286,23 C5.02044787,23 5,22.8738751 5,21.0833333 L5,4.91666667 C5,3.12612489 5.02044787,3 6.85714286,3 Z M8,12 C7.44771525,12 7,12.4477153 7,13 C7,13.5522847 7.44771525,14 8,14 L15,14 C15.5522847,14 16,13.5522847 16,13 C16,12.4477153 15.5522847,12 15,12 L8,12 Z M8,16 C7.44771525,16 7,16.4477153 7,17 C7,17.5522847 7.44771525,18 8,18 L11,18 C11.5522847,18 12,17.5522847 12,17 C12,16.4477153 11.5522847,16 11,16 L8,16 Z" fill="#000000" fill-rule="nonzero"/>
																				</g>
																			</svg><!--end::Svg Icon-->
																		</span>
																	</span>
												 </div>
											</div>
												<!--end::Symbol-->
													<!--begin: Info-->
											<div class="flex-grow-1">
												<!--begin: Title-->
												<div class="d-flex align-items-center justify-content-between flex-wrap">
													<div class="mr-3">
														<!--begin::Name-->
														<a href="#" class="d-flex align-items-center  add_portfolios_btn text-dark text-hover-primary font-size-h5 font-weight-bold mr-3">Portfolios_name
														<i class="flaticon2-correct text-success icon-md ml-2"></i></a>
														<!--end::Name-->
														<!--begin::Contacts-->
														<div class="d-flex flex-wrap my-2">
															<a href="#" class="text-muted text-hover-primary font-weight-bold mr-lg-8 mr-5 mb-lg-0 mb-2">
															<span class="svg-icon svg-icon-md svg-icon-gray-500 mr-1">
																<!--begin::Svg Icon | path:C:\wamp64\www\keenthemes\legacy\metronic\theme\html\demo1\dist/../src/media/svg/icons\Communication\Forward.svg-->
																<svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="24px" height="24px" viewBox="0 0 24 24" version="1.1">
														  		   <g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
																													<rect x="0" y="0" width="24" height="24"/>
																													<path d="M12.6571817,10 L12.6571817,5.67013288 C12.6571817,5.25591932 12.3213953,4.92013288 11.9071817,4.92013288 C11.7234961,4.92013288 11.5461972,4.98754181 11.4089088,5.10957589 L4.25168161,11.4715556 C3.94209454,11.7467441 3.91420899,12.2207984 4.1893975,12.5303855 C4.19915701,12.541365 4.209237,12.5520553 4.21962441,12.5624427 L11.3768516,19.7196699 C11.6697448,20.0125631 12.1446186,20.0125631 12.4375118,19.7196699 C12.5781641,19.5790176 12.6571817,19.3882522 12.6571817,19.1893398 L12.6571817,15 C14.004369,14.9188289 16.83481,14.9157978 21.1485046,14.9909069 L21.1485051,14.9908794 C21.4245904,14.9956866 21.6522988,14.7757721 21.6571059,14.4996868 C21.6571564,14.4967857 21.6571817,14.4938842 21.6571817,14.4909827 L21.6572352,10.5050185 C21.6572352,10.2288465 21.4333536,10.0049649 21.1571817,10.0049649 C21.1555649,10.0049649 21.1539481,10.0049728 21.1523314,10.0049884 C16.0215539,10.0547574 13.1898373,10.0530946 12.6571817,10 Z" fill="#000000" fill-rule="nonzero" transform="translate(12.828591, 12.429736) scale(-1, 1) translate(-12.828591, -12.429736) "/>
																												</g>
																								</svg><!--end::Svg Icon-->
															</span>link</a>
															<a href="#" class="text-muted text-hover-primary font-weight-bold mr-lg-8 mr-5 mb-lg-0 mb-2">
															<span class="svg-icon svg-icon-md svg-icon-gray-500 mr-1">
																<!--begin::Svg Icon | path:C:\wamp64\www\keenthemes\legacy\metronic\theme\html\demo1\dist/../src/media/svg/icons\Design\Image.svg-->
																<svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="24px" height="24px" viewBox="0 0 24 24" version="1.1">
																		<g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
																			<polygon points="0 0 24 0 24 24 0 24"/>
																			<path d="M6,5 L18,5 C19.6568542,5 21,6.34314575 21,8 L21,17 C21,18.6568542 19.6568542,20 18,20 L6,20 C4.34314575,20 3,18.6568542 3,17 L3,8 C3,6.34314575 4.34314575,5 6,5 Z M5,17 L14,17 L9.5,11 L5,17 Z M16,14 C17.6568542,14 19,12.6568542 19,11 C19,9.34314575 17.6568542,8 16,8 C14.3431458,8 13,9.34314575 13,11 C13,12.6568542 14.3431458,14 16,14 Z" fill="#000000"/>
																		</g>
																	</svg><!--end::Svg Icon-->
															</span>type_media</a>
															
														</div>
														<!--end::Contacts-->
													</div>
													
												</div>
												<!--end: Title-->
												<!--begin: Content-->
												<div class="d-flex align-items-center flex-wrap justify-content-between">
													<div class="flex-grow-1 font-weight-bold text-dark-50 py-5 py-lg-2 mr-5">details
													<br /></div>
													
												</div>
												
														
													</div>
													
												<!--end: Content-->
											</div>
											<div class="d-flex flex-wrap align-items-center py-2">
														<div class="d-flex align-items-center mr-10">
															<div class="mr-6">
																<div class="font-weight-bold mb-2">Start Date</div>
																<span class="btn btn-sm btn-text btn-light-primary text-uppercase font-weight-bold">07 May, 2020</span>
															</div>
															<div class="">
																<div class="font-weight-bold mb-2">end Date</div>
																<span class="btn btn-sm btn-text btn-light-danger text-uppercase font-weight-bold">10 June, 2021</span>
															</div>
														</div>
											<!--end: Info-->
										</div>
										<div class="separator separator-solid my-7"></div>
										<!--begin: Items-->
										<div class="d-flex align-items-center flex-wrap">
											<!--begin: Item-->
											<div class="d-flex align-items-center flex-lg-fill mr-5 my-1">
												Media
											</div>
											<!--end: Item-->
											
											
										</div>
										<!--begin: Items-->
									</div>
							  	</div>

										</div>
										<!--end::Body-->
									</div>
								</div>
																	</div>
							</div>
							<!--end::Container-->
						</div>
						<!--end::Entry-->



@endsection
@section('script')



    
    

@endsection

