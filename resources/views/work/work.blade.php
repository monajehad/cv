@extends('layouts.cpanel.app')
@section('title', "work")
@section('style')

@endsection
@section('subheader')
  
<!-- begin:: Subheader -->
<div class="subheader py-2 py-lg-6 subheader-solid" id="kt_subheader">
							<div class="container-fluid d-flex align-items-center justify-content-between flex-wrap flex-sm-nowrap">
								<!--begin::Info-->
								<div class="d-flex align-items-center flex-wrap mr-1">
									<!--begin::Mobile Toggle-->
									<button class="burger-icon burger-icon-left mr-4 d-inline-block d-lg-none" id="kt_subheader_mobile_toggle">
										<span></span>
									</button>
									<!--end::Mobile Toggle-->
									<!--begin::Page Heading-->
									<div class="d-flex align-items-baseline flex-wrap mr-5">
										<!--begin::Page Title-->
										<h5 class="text-dark font-weight-bold my-1 mr-5">Work</h5>
										<!--end::Page Title-->
                                    </div>
                                </div>
                                <div class="d-flex align-items-center">
									<!--begin::Actions-->
									<a href="#" class="btn btn-light-primary font-weight-bolder btn-sm"  aria-haspopup="true" aria-expanded="false" data-toggle="modal" data-target="#add_new_work">Add work</a>
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
								<div class="card card-custom card-sticky" id="kt_page_sticky_card">
									<!-- <div class="card-header">
										<div class="card-title">
											<h3 class="card-label">Education
											<i class="mr-2"></i>
										</div>
										<div class="card-toolbar">
											
										</div>
									</div> -->
									<div class="card-body">
									 <!--begin::Engage Widget 1-->
                                     <div class="card card-custom card-stretch gutter-b col-8 mx-auto">
											<div class="card-body d-flex p-0">
												<div class="flex-grow-1 p-8 card-rounded bgi-no-repeat d-flex align-items-center" style="background-color: #FFF4DE; background-position: left bottom; background-size: auto 100%; background-image: url({{asset('metronic/media/svg/humans/custom-2.svg')}})">
													<div class="row">
														<div class="col-12 col-xl-5"></div>
														<div class="col-12 col-xl-7">
															<h4 class="text-danger font-weight-bolder">Welcome to the
                                                            
                                                                 Work Information section</h4>
															<p class="text-dark-50 my-5 font-size-xl font-weight-bold">add your work through the button to
                                                             add it inside your cv</p>
															<a href="#" class="btn btn-danger font-weight-bold py-2 px-6" aria-haspopup="true" aria-expanded="false" data-toggle="modal" data-target="#add_new_work">Add work </a>
														</div>
													</div>
												</div>
											</div>
										</div>
										<!--end::Engage Widget 1-->
									</div>
								</div>
								<!--end::Card-->
								<br>
                                <br>
                                <!--begin::Card-->
										<div class="card card-custom">
											<div class="card-header">
												<div class="card-title">
													<span class="card-icon">
                                                    
                                                            <span class="svg-icon svg-icon-primary">
                                                                <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="24px" height="24px" viewBox="0 0 24 24" version="1.1">
                                                                        <g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
                                                                            <rect x="0" y="0" width="24" height="24"/>
                                                                            <path d="M5,8.6862915 L5,5 L8.6862915,5 L11.5857864,2.10050506 L14.4852814,5 L19,5 L19,9.51471863 L21.4852814,12 L19,14.4852814 L19,19 L14.4852814,19 L11.5857864,21.8994949 L8.6862915,19 L5,19 L5,15.3137085 L1.6862915,12 L5,8.6862915 Z M12,15 C13.6568542,15 15,13.6568542 15,12 C15,10.3431458 13.6568542,9 12,9 C10.3431458,9 9,10.3431458 9,12 C9,13.6568542 10.3431458,15 12,15 Z" fill="#000000"/>
                                                                        </g>
                                                                    </svg><!--end::Svg Icon-->
                                                            </span>
                                                    </span>
													<h3 class="card-label">Your Work

													</h3>
												</div>

											</div>
											<div class="card-body col-8 mx-auto"> 
                                            <div class="d-flex align-items-center bg-light-info rounded p-5 mb-9">
													<!--begin::Title-->
													<div class="d-flex flex-column flex-grow-1 mr-2">
														<h3 class="font-weight-bold text-dark-75  font-size-h5 mb-1">  Company Name</h3>
														<span class="text-muted font-weight-bold">Work Name</span>
														<!-- <span class="text-muted font-weight-bold">Degree</span> -->
                                                        <div class="font-weight-bold text-success mt-2 mb-5">start - end</div>
                                                        <p class="text-dark-75  font-size-lg m-0">Lorem ipsum dolor sit, amet consectetur adipisicing elit. Quaerat voluptates impedit praesentium adipisci necessitatibus porro ea a, aliquam quasi sapiente repudiandae iusto harum esse incidunt recusandae eveniet nemo, sequi enim!</p>
														<!--begin::Lable-->
                                                       
                                                        <div class="card-toolbar mt-4 text-right">
                                                            <a href="#" class="btn btn-sm btn-icon btn-light-danger mr-2">
                                                                <i class="flaticon2-rubbish-bin"></i>
                                                            </a>
                                                            <a href="#" class="btn btn-sm btn-icon btn-light-success mr-2">
                                                                <i class="flaticon2-edit"></i>
                                                            </a>
                                                        
												        </div>
													<!--end::Lable-->
                                                    </div>
													<!--end::Title-->
												
												</div>
                                            </div>
										</div>
										<!--end::Card-->
							</div>
							<!--end::Container-->
						</div>
						<!--end::Entry-->


@include('work.save_work')
@endsection
@section('script')



    
    <script>
         new KTAvatar('kt_user_avatar_1');
    </script>

@endsection

