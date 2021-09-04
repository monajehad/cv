@extends('layouts.cpanel.app')
@section('title', "course")
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
												<i class="flaticon-presentation-1 icon-lg text-primary"></i>
														

											</span>
										<h5 class="text-dark font-weight-bold my-1 mr-5">Course</h5>
										<!--end::Page Title-->
                                    </div>
                                </div>
                                <div class="d-flex align-items-center">
									<!--begin::Actions-->
									<a href="#" class="btn btn-light-primary font-weight-bolder btn-sm add_course_btn"  aria-haspopup="true" aria-expanded="false" data-toggle="modal" data-target="#save_course_modal">Add course</a>
                            </div>
                            </div>
                          
</div>

@endsection
@section('content')
	<!--begin::Entry-->
    <div class="d-flex flex-column-fluid">

							<!--begin::Container-->
							<div class="container" >
							  @if($courses->isEmpty())
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
											<a href="#"  class="btn btn-primary add_course_btn" aria-haspopup="true" aria-expanded="false" data-toggle="modal" data-target="#save_course_modal">Add course</a>
											<!--end::Action-->
										</div>
										<!--end::Wrapper-->
										<!--begin::Illustration-->
										<div class="text-center px-4">
											<img class="mw-100 h-300px" alt="" src="{{asset('metronic/media/course.jpg')}}" />
										</div>
										<!--end::Illustration-->
									</div>
									<!--end::Card body-->
								 </div>
							  
							  @else
								
                                <!--begin::Card-->
									<div class="row" id="course_container">
								@foreach($courses as $course)
									<div class="col-xl-6">
									<div class="card card-custom gutter-b">
										<!--begin::Body-->
										<div class="card-body">
											<!--begin::Top-->
											<div class="d-flex align-items-center">
												<!--begin::Symbol-->
												<div class="symbol symbol-45 symbol-light mr-5">
																	<span class="symbol-label">
																		<span class="svg-icon svg-icon-primary svg-icon-2x"><!--begin::Svg Icon | path:C:\wamp64\www\keenthemes\legacy\metronic\theme\html\demo1\dist/../src/media/svg/icons\Media\Youtube.svg--><svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="24px" height="24px" viewBox="0 0 24 24" version="1.1">
																			<g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
																				<rect x="0" y="0" width="24" height="24"/>
																				<path d="M4.22266882,4 L19.8367728,4.00001353 C21.3873185,4.00001353 22.6823897,5.1816009 22.8241881,6.72564925 C22.9414021,8.00199653 23.0000091,9.40113909 23.0000091,10.9230769 C23.0000091,12.7049599 22.9196724,14.4870542 22.758999,16.26936 L22.7589943,16.2693595 C22.6196053,17.8155637 21.3235899,19 19.7711155,19 L4.22267091,19.0000022 C2.6743525,19.0000022 1.38037032,17.8217109 1.23577882,16.2801587 C1.07859294,14.6043323 1,13.0109461 1,11.5 C1,9.98905359 1.07859298,8.39566699 1.23577893,6.7198402 L1.23578022,6.71984032 C1.38037157,5.17828994 2.67435224,4 4.22266882,4 Z" fill="#000000" opacity="0.3"/>
																				<path d="M11.1821576,14.8052934 L15.5856084,11.7952868 C15.8135802,11.6394552 15.8720614,11.3283211 15.7162299,11.1003494 C15.6814583,11.0494808 15.6375838,11.0054775 15.5868174,10.970557 L11.1833666,7.94156929 C10.9558527,7.78507001 10.6445485,7.84263875 10.4880492,8.07015268 C10.4307018,8.15352258 10.3999996,8.25233045 10.3999996,8.35351969 L10.3999996,14.392514 C10.3999996,14.6686564 10.6238572,14.892514 10.8999996,14.892514 C11.000689,14.892514 11.0990326,14.8621141 11.1821576,14.8052934 Z" fill="#000000"/>
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

														<span>{{$course->name}} </span>
													</a>

													<div class="d-flex ">
														<div class="d-flex align-items-center pr-5">
																								<span class="svg-icon svg-icon-md svg-icon-primary pr-1">
																									<!--begin::Svg Icon | path:assets/media/svg/icons/Home/Clock.svg-->
																									<svg xmlns="http://www.w3.org/2000/svg"
																										xmlns:xlink="http://www.w3.org/1999/xlink"
																										width="24px" height="24px" viewBox="0 0 24 24"
																										version="1.1">
																										<g stroke="none" stroke-width="1" fill="none"
																										fill-rule="evenodd">
																											<rect x="0" y="0" width="24"
																												height="24"></rect>
																											<path d="M12,22 C7.02943725,22 3,17.9705627 3,13 C3,8.02943725 7.02943725,4 12,4 C16.9705627,4 21,8.02943725 21,13 C21,17.9705627 16.9705627,22 12,22 Z"
																												fill="#000000" opacity="0.3"></path>
																											<path d="M11.9630156,7.5 L12.0475062,7.5 C12.3043819,7.5 12.5194647,7.69464724 12.5450248,7.95024814 L13,12.5 L16.2480695,14.3560397 C16.403857,14.4450611 16.5,14.6107328 16.5,14.7901613 L16.5,15 C16.5,15.2109164 16.3290185,15.3818979 16.1181021,15.3818979 C16.0841582,15.3818979 16.0503659,15.3773725 16.0176181,15.3684413 L11.3986612,14.1087258 C11.1672824,14.0456225 11.0132986,13.8271186 11.0316926,13.5879956 L11.4644883,7.96165175 C11.4845267,7.70115317 11.7017474,7.5 11.9630156,7.5 Z"
																												fill="#000000"></path>
																										</g>
																									</svg>
																									<!--end::Svg Icon-->
																								</span>
															<span class="text-muted font-weight-bold">{{$course->start_date}} </span>
														</div>
														<div class="d-flex align-items-center">
																								<span class="svg-icon svg-icon-md svg-icon-primary pr-1">
																									<!--begin::Svg Icon | path:assets/media/svg/icons/Home/Clock.svg-->
																									<svg xmlns="http://www.w3.org/2000/svg"
																										xmlns:xlink="http://www.w3.org/1999/xlink"
																										width="24px" height="24px" viewBox="0 0 24 24"
																										version="1.1">
																										<g stroke="none" stroke-width="1" fill="none"
																										fill-rule="evenodd">
																											<rect x="0" y="0" width="24"
																												height="24"></rect>
																											<path d="M12,22 C7.02943725,22 3,17.9705627 3,13 C3,8.02943725 7.02943725,4 12,4 C16.9705627,4 21,8.02943725 21,13 C21,17.9705627 16.9705627,22 12,22 Z"
																												fill="#000000" opacity="0.3"></path>
																											<path d="M11.9630156,7.5 L12.0475062,7.5 C12.3043819,7.5 12.5194647,7.69464724 12.5450248,7.95024814 L13,12.5 L16.2480695,14.3560397 C16.403857,14.4450611 16.5,14.6107328 16.5,14.7901613 L16.5,15 C16.5,15.2109164 16.3290185,15.3818979 16.1181021,15.3818979 C16.0841582,15.3818979 16.0503659,15.3773725 16.0176181,15.3684413 L11.3986612,14.1087258 C11.1672824,14.0456225 11.0132986,13.8271186 11.0316926,13.5879956 L11.4644883,7.96165175 C11.4845267,7.70115317 11.7017474,7.5 11.9630156,7.5 Z"
																												fill="#000000"></path>
																										</g>
																									</svg>
																									<!--end::Svg Icon-->
																								</span>
															<span class="text-muted font-weight-bold">{{$course->end_date}} </span>
														</div>
													

													</div>
												<div class="d-flex">
												<div class="d-flex align-items-center pr-5">
																							<span class="svg-icon svg-icon-md svg-icon-primary pr-1"><!--begin::Svg Icon | path:C:\wamp64\www\keenthemes\legacy\metronic\theme\html\demo1\dist/../src/media/svg/icons\Devices\Watch2.svg--><svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="24px" height="24px" viewBox="0 0 24 24" version="1.1">
																								<g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
																									<rect x="0" y="0" width="24" height="24"/>
																									<path d="M9,17 L15,17 L15,20.5 C15,21.3284271 14.3284271,22 13.5,22 L10.5,22 C9.67157288,22 9,21.3284271 9,20.5 L9,17 Z" fill="#000000" opacity="0.3"/>
																									<path d="M12,17 C14.7614237,17 17,14.7614237 17,12 C17,9.23857625 14.7614237,7 12,7 C9.23857625,7 7,9.23857625 7,12 C7,14.7614237 9.23857625,17 12,17 Z" fill="#000000" opacity="0.3"/>
																									<path d="M10.5,2 L13.5,2 C14.3284271,2 15,2.67157288 15,3.5 L15,7 L9,7 L9,3.5 C9,2.67157288 9.67157288,2 10.5,2 Z" fill="#000000" opacity="0.3"/>
																									<path d="M12,17 C14.7614237,17 17,14.7614237 17,12 C17,9.23857625 14.7614237,7 12,7 C9.23857625,7 7,9.23857625 7,12 C7,14.7614237 9.23857625,17 12,17 Z M12,19 C8.13400675,19 5,15.8659932 5,12 C5,8.13400675 8.13400675,5 12,5 C15.8659932,5 19,8.13400675 19,12 C19,15.8659932 15.8659932,19 12,19 Z" fill="#000000" fill-rule="nonzero"/>
																								</g>
																							</svg><!--end::Svg Icon--></span>
																			<span class="text-muted font-weight-bold">{{$course->hours}} h</span>
														</div>
													<div class="d-flex align-items-center">
																							<span class="svg-icon svg-icon-md svg-icon-primary pr-1"><!--begin::Svg Icon | path:C:\wamp64\www\keenthemes\legacy\metronic\theme\html\demo1\dist/../src/media/svg/icons\Files\File-done.svg--><svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="24px" height="24px" viewBox="0 0 24 24" version="1.1">
																								<g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
																									<polygon points="0 0 24 0 24 24 0 24"/>
																									<path d="M5.85714286,2 L13.7364114,2 C14.0910962,2 14.4343066,2.12568431 14.7051108,2.35473959 L19.4686994,6.3839416 C19.8056532,6.66894833 20,7.08787823 20,7.52920201 L20,20.0833333 C20,21.8738751 19.9795521,22 18.1428571,22 L5.85714286,22 C4.02044787,22 4,21.8738751 4,20.0833333 L4,3.91666667 C4,2.12612489 4.02044787,2 5.85714286,2 Z M10.875,15.75 C11.1145833,15.75 11.3541667,15.6541667 11.5458333,15.4625 L15.3791667,11.6291667 C15.7625,11.2458333 15.7625,10.6708333 15.3791667,10.2875 C14.9958333,9.90416667 14.4208333,9.90416667 14.0375,10.2875 L10.875,13.45 L9.62916667,12.2041667 C9.29375,11.8208333 8.67083333,11.8208333 8.2875,12.2041667 C7.90416667,12.5875 7.90416667,13.1625 8.2875,13.5458333 L10.2041667,15.4625 C10.3958333,15.6541667 10.6354167,15.75 10.875,15.75 Z" fill="#000000" fill-rule="nonzero" opacity="0.3"/>
																									<path d="M10.875,15.75 C10.6354167,15.75 10.3958333,15.6541667 10.2041667,15.4625 L8.2875,13.5458333 C7.90416667,13.1625 7.90416667,12.5875 8.2875,12.2041667 C8.67083333,11.8208333 9.29375,11.8208333 9.62916667,12.2041667 L10.875,13.45 L14.0375,10.2875 C14.4208333,9.90416667 14.9958333,9.90416667 15.3791667,10.2875 C15.7625,10.6708333 15.7625,11.2458333 15.3791667,11.6291667 L11.5458333,15.4625 C11.3541667,15.6541667 11.1145833,15.75 10.875,15.75 Z" fill="#000000"/>
																								</g>
																							</svg><!--end::Svg Icon--></span>
																			<span class="text-muted font-weight-bold">{{$course->source}}</span>
														</div>
													
												</div>

												</div>
												<!--end::Info-->
												<div class=" ml-2"  title="Quick actions" data-placement="left">
																						<span class="switch switch-icon">
																								<label>
																									<input type="checkbox" class="activate_course_switch"onclick="updateStatus('is_active',this.checked,'{{$course->id}}','/user/course/status/update')"
                                                                                                        {{$course->is_active ? 'checked' : ''}}
                                                                                                        name="is_active" />
																									<span></span>
																								</label>
																							</span>
												</div>
											</div>
											<!--end::Top-->
											<!--begin::Bottom-->
											<div class="pt-3">
												<!--begin::Text-->
												<p class="text-dark-75 font-size-lg font-weight-normal pt-5">{{$course->details}}</p>
												<!--end::Text-->

												<!--begin::Action-->
												<div class="pt-5">
													<!--begin::Lable-->

													<div class="card-toolbar mt-1 text-right">
														<a href="#" class="btn btn-sm btn-icon btn-light-danger mr-2 delete_course_btn"
														onclick="remove('{{$course->id}}','user/course/delete')">
															<i class="flaticon2-rubbish-bin"></i>
														</a>
														<a href="#" class="btn btn-sm btn-icon btn-light-success mr-2 edit_course_btn"
														onclick="fillCourseModal('{{$course->id}}','{{$course->name}}','{{$course->hours}}','{{$course->source}}','{{$course->details}}','{{$course->start_date}}','{{$course->end_date}}')" data-toggle = "modal" data-target = "#save_course_modal"
														>
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
						   @endforeach
																	</div>
					@endif
							</div>
							<!--end::Container-->
						</div>
						<!--end::Entry-->


@include('course.save_course')
@endsection
@section('script')
<script src="{{asset('js/blades/user/course/save_course.js')}}"></script>
<script src="{{asset('js/blades/user/course/edit_course.js')}}"></script>

<script src="{{asset('js/blades/user/upstatus.js')}}"></script>


    
    <script>
         new KTAvatar('kt_user_avatar_1');
    </script>

@endsection

