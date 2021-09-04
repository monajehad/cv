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
									<a href="#" class="btn btn-light-primary add_skill_btn font-weight-bolder btn-sm"  aria-haspopup="true" aria-expanded="false" data-toggle="modal" data-target="#save_skill_modal">Add skill</a>
                            </div>
                            </div>
                          
</div>

@endsection
@section('content')
	<!--begin::Entry-->
    <div class="d-flex flex-column-fluid">
							<!--begin::Container-->
			  <div class="container">
					@if($skills->isEmpty())
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
											<a href="#" class="btn btn-primary add_skill_btn" aria-haspopup="true" aria-expanded="false" data-toggle="modal" data-target="#save_skill_modal">Add skill</a>
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
						 @else
                               
                              <!--begin::Card-->
							  <div class="row" id="skill_container">
								@foreach($skills as $skill)

									<div class="col-xl-6">
									<div class="card card-custom gutter-b">
										<!--begin::Body-->
										<div class="card-body">
											<!--begin::Top-->
											<div class="d-flex align-items-center">
												<!--begin::Symbol-->
												<div class="symbol symbol-45 symbol-light mr-5">
																	<span class="symbol-label">
																		<span class="svg-icon svg-icon-primary svg-icon-2x"><!--begin::Svg Icon | path:C:\wamp64\www\keenthemes\legacy\metronic\theme\html\demo1\dist/../src/media/svg/icons\Tools\Pantone.svg--><svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="24px" height="24px" viewBox="0 0 24 24" version="1.1">
																				<g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
																					<polygon points="0 0 24 0 24 24 0 24"/>
																					<path d="M22,15 L22,19 C22,20.1045695 21.1045695,21 20,21 L8,21 C5.790861,21 4,19.209139 4,17 C4,14.790861 5.790861,13 8,13 L20,13 C21.1045695,13 22,13.8954305 22,15 Z M7,19 C8.1045695,19 9,18.1045695 9,17 C9,15.8954305 8.1045695,15 7,15 C5.8954305,15 5,15.8954305 5,17 C5,18.1045695 5.8954305,19 7,19 Z" fill="#000000" opacity="0.3"/>
																					<path d="M15.5421357,5.69999981 L18.3705628,8.52842693 C19.1516114,9.30947552 19.1516114,10.5758055 18.3705628,11.3568541 L9.88528147,19.8421354 C8.3231843,21.4042326 5.79052439,21.4042326 4.22842722,19.8421354 C2.66633005,18.2800383 2.66633005,15.7473784 4.22842722,14.1852812 L12.7137086,5.69999981 C13.4947572,4.91895123 14.7610871,4.91895123 15.5421357,5.69999981 Z M7,19 C8.1045695,19 9,18.1045695 9,17 C9,15.8954305 8.1045695,15 7,15 C5.8954305,15 5,15.8954305 5,17 C5,18.1045695 5.8954305,19 7,19 Z" fill="#000000" opacity="0.3"/>
																					<path d="M5,3 L9,3 C10.1045695,3 11,3.8954305 11,5 L11,17 C11,19.209139 9.209139,21 7,21 C4.790861,21 3,19.209139 3,17 L3,5 C3,3.8954305 3.8954305,3 5,3 Z M7,19 C8.1045695,19 9,18.1045695 9,17 C9,15.8954305 8.1045695,15 7,15 C5.8954305,15 5,15.8954305 5,17 C5,18.1045695 5.8954305,19 7,19 Z" fill="#000000"/>
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

														<span> {{$skill->name}}</span>
													</a>

											<div class="d-flex">
														
														<div class="d-flex align-items-center pr-5">
																								<span class="svg-icon svg-icon-md svg-icon-primary pr-1">
																								<!--begin::Svg Icon | path:C:\wamp64\www\keenthemes\legacy\metronic\theme\html\demo1\dist/../src/media/svg/icons\Media\Equalizer.svg--><svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="24px" height="24px" viewBox="0 0 24 24" version="1.1">
																									<g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
																										<rect x="0" y="0" width="24" height="24"/>
																										<rect fill="#000000" opacity="0.3" x="13" y="4" width="3" height="16" rx="1.5"/>
																										<rect fill="#000000" x="8" y="9" width="3" height="11" rx="1.5"/>
																										<rect fill="#000000" x="18" y="11" width="3" height="9" rx="1.5"/>
																										<rect fill="#000000" x="3" y="13" width="3" height="7" rx="1.5"/>
																									</g>
																								</svg><!--end::Svg Icon-->
																																																</span>
															<span class="text-muted font-weight-bold">{{$skill->level}}</span>
														</div>
														
													</div>
												</div>
												<!--end::Info-->
												<div class=" ml-2"  title="Quick actions" data-placement="left">
																						<span class="switch switch-icon">
																								<label>
																									<input type="checkbox" class="activate_skill_switch"onclick="updateStatus('is_active',this.checked,'{{$skill->id}}','/user/skill/status/update')"
                                                                                                        {{$skill->is_active ? 'checked' : ''}}
                                                                                                        name="is_active" />
																									<span></span>
																								</label>
																							</span>
												</div>
											</div>
											<!--end::Top-->
											<!--begin::Bottom-->
											<div class="pt-3">
												<!--begin::Action-->
												<div class="pt-5">
													<!--begin::Lable-->

													<div class="card-toolbar mt-1 text-right">
														<a href="#" class="btn btn-sm btn-icon btn-light-danger mr-2 delete_skill_btn"
														onclick="remove('{{$skill->id}}','user/skill/delete')">
															<i class="flaticon2-rubbish-bin"></i>
														</a>
														<a href="#" class="btn btn-sm btn-icon btn-light-success mr-2 edit_skill_btn"
														onclick="fillSkillModal('{{$skill->id}}','{{$skill->name}}','{{$skill->level}}')" data-toggle = "modal" data-target = "#save_skill_modal"
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


@include('skill.save_skill')
@endsection
@section('script')
<script src="{{asset('js/blades/user/skill/save_skill.js')}}"></script>
<script src="{{asset('js/blades/user/skill/edit_skill.js')}}"></script>

<script src="{{asset('js/blades/user/upstatus.js')}}"></script>


    
    <script>
         new KTAvatar('kt_user_avatar_1');
    </script>

@endsection

