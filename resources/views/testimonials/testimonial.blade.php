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
									<a href="#" class="btn btn-light-primary font-weight-bolder btn-sm"  aria-haspopup="true" aria-expanded="false" data-toggle="modal" data-target="#add_new_testimonial">Add testimonial</a>
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
											<a href="#" class="btn btn-primary" aria-haspopup="true" aria-expanded="false" data-toggle="modal" data-target="#add_new_testimonial">Add testimonial</a>
											<!--end::Action-->
										</div>
										<!--end::Wrapper-->
										<!--begin::Illustration-->
										<div class="text-center px-4">
											<img class="mw-100 h-300px" alt="" src="{{asset('metronic/media/test.jpg')}}" />
										</div>
										<!--end::Illustration-->
									</div>
									<!--end::Card body-->
								</div>
								<br>
                                <br>
                                <!--begin::Card-->
									<div class="row">
									<div class="col-xl-6">
									<div class="card card-custom gutter-b">
										<!--begin::Body-->
										<div class="card-body">
											<!--begin::Top-->
											<div class="d-flex align-items-center">
												<!--begin::Symbol-->
												<div class="symbol symbol-45 symbol-light mr-5">
																	<span class="symbol-label">
																		<span class="svg-icon svg-icon-primary svg-icon-2x"><!--begin::Svg Icon | path:C:\wamp64\www\keenthemes\legacy\metronic\theme\html\demo1\dist/../src/media/svg/icons\General\User.svg--><svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="24px" height="24px" viewBox="0 0 24 24" version="1.1">
																			<g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
																				<polygon points="0 0 24 0 24 24 0 24"/>
																				<path d="M12,11 C9.790861,11 8,9.209139 8,7 C8,4.790861 9.790861,3 12,3 C14.209139,3 16,4.790861 16,7 C16,9.209139 14.209139,11 12,11 Z" fill="#000000" fill-rule="nonzero" opacity="0.3"/>
																				<path d="M3.00065168,20.1992055 C3.38825852,15.4265159 7.26191235,13 11.9833413,13 C16.7712164,13 20.7048837,15.2931929 20.9979143,20.2 C21.0095879,20.3954741 20.9979143,21 20.2466999,21 C16.541124,21 11.0347247,21 3.72750223,21 C3.47671215,21 2.97953825,20.45918 3.00065168,20.1992055 Z" fill="#000000" fill-rule="nonzero"/>
																			</g>
																		</svg><!--end::Svg Icon-->
																		</span>
																	</span>
												</div>
												<!--end::Symbol-->
												<!--begin::Info-->
												<div class="d-flex flex-column flex-grow-1">
													<a href="javascript:"
													class="text-dark-75 text-hover-primary mb-1 font-size-lg font-weight-bolder">

														<span>Person's Name </span>
													</a>

													<div class="d-flex">
														<div class="d-flex align-items-center pr-5">
																								<span class="svg-icon svg-icon-md svg-icon-primary pr-1">
																									<!--begin::Svg Icon | path:C:\wamp64\www\keenthemes\legacy\metronic\theme\html\demo1\dist/../src/media/svg/icons\Communication\Mail.svg--><svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="24px" height="24px" viewBox="0 0 24 24" version="1.1">
																											<g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
																												<rect x="0" y="0" width="24" height="24"/>
																												<path d="M5,6 L19,6 C20.1045695,6 21,6.8954305 21,8 L21,17 C21,18.1045695 20.1045695,19 19,19 L5,19 C3.8954305,19 3,18.1045695 3,17 L3,8 C3,6.8954305 3.8954305,6 5,6 Z M18.1444251,7.83964668 L12,11.1481833 L5.85557487,7.83964668 C5.4908718,7.6432681 5.03602525,7.77972206 4.83964668,8.14442513 C4.6432681,8.5091282 4.77972206,8.96397475 5.14442513,9.16035332 L11.6444251,12.6603533 C11.8664074,12.7798822 12.1335926,12.7798822 12.3555749,12.6603533 L18.8555749,9.16035332 C19.2202779,8.96397475 19.3567319,8.5091282 19.1603533,8.14442513 C18.9639747,7.77972206 18.5091282,7.6432681 18.1444251,7.83964668 Z" fill="#000000"/>
																											</g>
																										</svg><!--end::Svg Icon-->
																								</span>
															<span class="text-muted font-weight-bold">person email</span>
														</div>
														<div class="d-flex align-items-center pr-5">
																								<span class="svg-icon svg-icon-md svg-icon-primary pr-1">
																									<!--begin::Svg Icon | path:C:\wamp64\www\keenthemes\legacy\metronic\theme\html\demo1\dist/../src/media/svg/icons\Communication\Call#1.svg--><svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="24px" height="24px" viewBox="0 0 24 24" version="1.1">
																										<g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
																											<rect x="0" y="0" width="24" height="24"/>
																											<path d="M11.914857,14.1427403 L14.1188827,11.9387145 C14.7276032,11.329994 14.8785122,10.4000511 14.4935235,9.63007378 L14.3686433,9.38031323 C13.9836546,8.61033591 14.1345636,7.680393 14.7432841,7.07167248 L17.4760882,4.33886839 C17.6713503,4.14360624 17.9879328,4.14360624 18.183195,4.33886839 C18.2211956,4.37686904 18.2528214,4.42074752 18.2768552,4.46881498 L19.3808309,6.67676638 C20.2253855,8.3658756 19.8943345,10.4059034 18.5589765,11.7412615 L12.560151,17.740087 C11.1066115,19.1936265 8.95659008,19.7011777 7.00646221,19.0511351 L4.5919826,18.2463085 C4.33001094,18.1589846 4.18843095,17.8758246 4.27575484,17.613853 C4.30030124,17.5402138 4.34165566,17.4733009 4.39654309,17.4184135 L7.04781491,14.7671417 C7.65653544,14.1584211 8.58647835,14.0075122 9.35645567,14.3925008 L9.60621621,14.5173811 C10.3761935,14.9023698 11.3061364,14.7514608 11.914857,14.1427403 Z" fill="#000000"/>
																										</g>
																									</svg><!--end::Svg Icon-->
																								</span>
															<span class="text-muted font-weight-bold">person mobile</span>
														</div>
														
													</div>
												</div>
												<!--end::Info-->
												<div class=" ml-2"  title="Quick actions" data-placement="left">
																						<span class="switch switch-icon">
																								<label>
																									<input type="checkbox" class="activate_education_switch"
																										
																										name="select" />
																									<span></span>
																								</label>
																							</span>
												</div>
											</div>
											<!--end::Top-->
											<!--begin::Bottom-->
											<div class="pt-3">
												<!--begin::Text-->
												<p class="text-dark-75 font-size-lg font-weight-normal pt-5">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Quod minima ad quibusdam explicabo nam laudantium unde tempora, dignissimos, minus consequuntur magni qui omnis labore sunt aliquam sint eum cupiditate iusto.</p>
												<!--end::Text-->

												<!--begin::Action-->
												<div class="pt-5">
													<!--begin::Lable-->

													<div class="card-toolbar mt-1 text-right">
														<a href="#" class="btn btn-sm btn-icon btn-light-danger mr-2 delete_education_btn">
															<i class="flaticon2-rubbish-bin"></i>
														</a>
														<a href="#" class="btn btn-sm btn-icon btn-light-success mr-2 edit_education_btn">
															<i class="flaticon2-edit"></i>
														</a>

													</div>
													<!--end::Lable-->
												</div>
												<!--end::Action-->
											</div>
											<!--end::Bottom-->

										</div>
										<!--end::Body-->
									</div>
								</div>
																	</div>
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

