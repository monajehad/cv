@extends('layouts.cpanel.app')
@section('title', "testimonial")
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
												<i class="flaticon2-hangouts-logo icon-lg text-primary"></i>
														

												</span>
										<h5 class="text-dark font-weight-bold my-1 mr-5">Testimonial</h5>
										<!--end::Page Title-->
                                    </div>
                                </div>
                                <div class="d-flex align-items-center">
									<!--begin::Actions-->
									<a href="#" class="btn btn-light-primary font-weight-bolder btn-sm"  aria-haspopup="true" aria-expanded="false" data-toggle="modal" data-target="#add_new_testimonial">Add course</a>
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
                                     <div class=" col-8 mx-auto">
									 <div class="card card-custom card-stretch gutter-b">
											<div class="card-body d-flex p-0">
												<div class="flex-grow-1 bg-light-success p-12 pb-40 card-rounded flex-grow-1 bgi-no-repeat" style="background-position: calc(80% + 0.9rem) bottom; background-size: 50% auto; background-image: url({{asset('metronic/media/test.jpg')}})">
													<p class="text-success pt-10 pb-5 font-size-h3 font-weight-bolder line-height-lg">Start with a branding
													<br />site design modern
													<br />content creation</p>
													<a href="#" class="btn btn-success font-weight-bolder btn-sm"  aria-haspopup="true" aria-expanded="false" data-toggle="modal" data-target="#add_new_testimonial">Add course</a>
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
										
											<div class="card-body col-8 mx-auto"> 
                                            <div class="d-flex align-items-center bg-light-info rounded p-5 mb-9">
													<!--begin::Title-->
													<div class="d-flex flex-column flex-grow-1 mr-2">
														<h3 class="font-weight-bold text-dark-75  font-size-h5 mb-1">  Person's Name</h3>
														<span class="text-muted font-weight-bold">Person's Email   </span>
														<span class="text-muted font-weight-bold">Person's Phone</span>
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


@include('testimonials.save_testimonials')
@endsection
@section('script')



    
    <script>
         new KTAvatar('kt_user_avatar_1');
    </script>

@endsection

