@extends('layouts.cpanel.app')
@section('title', "skill")
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
										<span class="card-icon mr-3">
														<i class="flaticon2-user-1 icon-lg text-primary"></i>
											</span>
										<h5 class="text-dark font-weight-bold my-1 mr-5">Skill</h5>
										<!--end::Page Title-->
                                    </div>
                                </div>
                                <div class="d-flex align-items-center">
									<!--begin::Actions-->
									<a href="#" class="btn btn-light-primary font-weight-bolder btn-sm"  aria-haspopup="true" aria-expanded="false" data-toggle="modal" data-target="#add_new_skill">Add skill</a>
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
											<a href="#" class="btn btn-primary" aria-haspopup="true" aria-expanded="false" data-toggle="modal" data-target="#add_new_skill">Add skill</a>
											<!--end::Action-->
										</div>
										<!--end::Wrapper-->
										<!--begin::Illustration-->
										<div class="text-center px-4">
											<img class="mw-100 h-300px" alt="" src="{{asset('metronic/media/skill.jpg')}}" />
										</div>
										<!--end::Illustration-->
									</div>
									<!--end::Card body-->
								</div>
								<br>
                                <br>
                                <!--begin::Card-->
									<div class="card card-custom">
										<div class="row">
								    	  <div class="col-xl-4">
											<div class="card-body "> 
                                            <div class="d-flex align-items-center bg-light-info rounded p-5 mb-9">
													<!--begin::Title-->
													<div class="d-flex flex-column flex-grow-1 mr-2">
														<h3 class="font-weight-bold text-dark-75  font-size-h5 mb-1">  Skill Name</h3>
														<span class="text-muted font-weight-bold">Level</span>
														<!-- <span class="text-muted font-weight-bold">Degree</span> -->
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
										</div>
									</div>
										<!--end::Card-->
							</div>
							<!--end::Container-->
						</div>
						<!--end::Entry-->


@include('skill.save_skill')
@endsection
@section('script')



    
    <script>
         new KTAvatar('kt_user_avatar_1');
    </script>

@endsection

