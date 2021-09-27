@extends('layouts.cpanel.app')
@section('title', "design")
@section('style')

@endsection
@section('subheader')

    <!-- begin:: Subheader -->
    <div class="subheader py-2 py-lg-6 subheader-solid" id="kt_subheader">
        <div class="container-fluid d-flex align-items-center justify-content-between flex-wrap flex-sm-nowrap">
            <!--begin::Info-->
            <div class="d-flex align-items-center flex-wrap mr-1">
                <!--begin::Mobile Toggle-->
                <button class="burger-icon burger-icon-left mr-4 d-inline-block d-lg-none"
                        id="kt_subheader_mobile_toggle">
                    <span></span>
                </button>
                <!--end::Mobile Toggle-->
                <!--begin::Page Heading-->
                <div class="d-flex align-items-baseline flex-wrap mr-5 ">
                    <!--begin::Page Title-->
                    <span class="card-icon">
                    <span class="svg-icon svg-icon-primary">
									<!--begin::Svg Icon | path:C:\wamp64\www\keenthemes\legacy\metronic\theme\html\demo1\dist/../src/media/svg/icons\Home\Flower3.svg--><svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="24px" height="24px" viewBox="0 0 24 24" version="1.1">
                                                     <g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
																		<polygon points="0 0 24 0 24 24 0 24"/>
																		<path d="M1.4152146,4.84010415 C11.1782334,10.3362599 14.7076452,16.4493804 12.0034499,23.1794656 C5.02500006,22.0396582 1.4955883,15.9265377 1.4152146,4.84010415 Z" fill="#000000" opacity="0.3"/>
																		<path d="M22.5950046,4.84010415 C12.8319858,10.3362599 9.30257403,16.4493804 12.0067693,23.1794656 C18.9852192,22.0396582 22.5146309,15.9265377 22.5950046,4.84010415 Z" fill="#000000" opacity="0.3"/>
																		<path d="M12.0002081,2 C6.29326368,11.6413199 6.29326368,18.7001435 12.0002081,23.1764706 C17.4738192,18.7001435 17.4738192,11.6413199 12.0002081,2 Z" fill="#000000" opacity="0.3"/>
																	</g>
																</svg><!--end::Svg Icon-->
											</span>
                    </span>
                    <h5 class="text-dark font-weight-bold my-1 mr-5 ml-3">Design</h5>
                    <!--end::Page Title-->
                </div>
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
					<div class="card card-custom card-stretch gutter-b">
						<div class="card-body">
                                <!--begin::Products-->
													<div class="row">
														<!--begin::Product-->
														<div class="col-md-4 col-xxl-4 col-lg-12">
															<!--begin::Card-->
															<div class="card card-custom card-shadowless">
																<div class="card-body p-0">
																	<!--begin::Image-->
																	<div class="overlay">
																		<div class="overlay-wrapper rounded bg-light text-center">
																			<img src="{{asset('metronic/media/users/design1.png')}}" alt="" class="mw-100 w-100 h-250px" />
																		</div>
																		<div class="overlay-layer">
																			<a href="{{route('user.design.showdesign1')}}" target="_blank" class="btn font-weight-bolder btn-sm btn-primary mr-4">Quick View</a>
                                                                            <span class="switch switch-sm switch-icon ml-3">
                                                                                <label>
																				<?php 
																				$designn = \App\Models\Design::where('id',1)->first() ?>
																				
                                                                                    <input type="checkbox"
																					onclick="updateStatus('is_active',this.checked,1,'/user/design/status/update')"
                                                                                                        {{$designn->is_active ? 'checked' : ''}}
                                                                                                        name="is_active" />
                                                                                    <span></span>
                                                                                </label>
                                                                            </span>
																		</div>
																	</div>
																	<!--end::Image-->
																	<!--begin::Details-->
																	<div class="text-center mt-5 mb-md-0 mb-lg-5 mb-md-0 mb-lg-5 mb-lg-0 mb-5 d-flex flex-column">
																		<a href="{{route('user.design.showdesign1')}}" target="_blank" class="font-size-h5 font-weight-bolder text-dark-75 text-hover-primary mb-1"> Design1</a>
																	</div>
																	<!--end::Details-->
																</div>
															</div>
															<!--end::Card-->
														</div>
														<!--end::Product-->
                                                        <!--begin::Product-->
														<div class="col-md-4 col-xxl-4 col-lg-12">
															<!--begin::Card-->
															<div class="card card-custom card-shadowless">
																<div class="card-body p-0">
																	<!--begin::Image-->
																	<div class="overlay">
																		<div class="overlay-wrapper rounded bg-light text-center">
																			<img src="{{asset('metronic/media/users/design2.png')}}" alt="" class="mw-100 w-100 h-250px" />
																		</div>
																		<div class="overlay-layer">
																			<a href="{{route('user.design.showdesign2')}}" target="_blank" class="btn font-weight-bolder btn-sm btn-primary mr-4">Quick View</a>
                                                                            <span class="switch switch-sm switch-icon ml-3">
                                                                                <label>
																				<?php 
																				$designn = \App\Models\Design::where('id',2)->first() ?>
																				
                                                                                    <input type="checkbox"
																					onclick="updateStatus('is_active',this.checked,2,'/user/design/status/update')"
                                                                                                        {{$designn->is_active ? 'checked' : ''}}
                                                                                                        name="is_active" />
                                                                                    <span></span>
                                                                                </label>
                                                                            </span>
																		</div>
																	</div>
																	<!--end::Image-->
																	<!--begin::Details-->
																	<div class="text-center mt-5 mb-md-0 mb-lg-5 mb-md-0 mb-lg-5 mb-lg-0 mb-5 d-flex flex-column">
																		<a href="{{route('user.design.showdesign2')}}" target="_blank" class="font-size-h5 font-weight-bolder text-dark-75 text-hover-primary mb-1"> Design2</a>
																	</div>
																	<!--end::Details-->
																</div>
															</div>
															<!--end::Card-->
														</div>
														<!--end::Product-->
                                                        <!--begin::Product-->
														<div class="col-md-4 col-xxl-4 col-lg-12">
															<!--begin::Card-->
															<div class="card card-custom card-shadowless">
																<div class="card-body p-0">
																	<!--begin::Image-->
																	<div class="overlay">
																		<div class="overlay-wrapper rounded bg-light text-center">
																			<img src="{{asset('metronic/media/users/design1.png')}}" alt="" class="mw-100 w-100 h-250px" />
																		</div>
																		<div class="overlay-layer">
																			<a href="{{route('user.design.showdesign3')}}"  target="_blank" class="btn font-weight-bolder btn-sm btn-primary mr-4">Quick View</a>
                                                                            <span class="switch switch-sm switch-icon ml-3">
                                                                                <label>
																				<?php 
																				$design = \App\Models\Design::where('id',3)->first() ?>
																				
                                                                                    <input type="checkbox" 
																					onclick="updateStatus('is_active',this.checked,3,'/user/design/status/update')"
																				         	{{$design->is_active ? 'checked' : ''}}
                                                                                                        name="is_active" />
                                                                                    <span></span>
                                                                                </label>
                                                                            </span>
																		</div>
																	</div>
																	<!--end::Image-->
																	<!--begin::Details-->
																	<div class="text-center mt-5 mb-md-0 mb-lg-5 mb-md-0 mb-lg-5 mb-lg-0 mb-5 d-flex flex-column">
																		<a href="{{route('user.design.showdesign3')}}"  target="_blank" class="font-size-h5 font-weight-bolder text-dark-75 text-hover-primary mb-1"> Design1</a>
																	</div>
																	<!--end::Details-->
																</div>
															</div>
															<!--end::Card-->
														</div>
														<!--end::Product-->
                                                    </div>
                        </div>
                    </div>
        </div>
 </div>
@endsection
@section('script')

<script src="{{asset('js/blades/user/upstatus.js')}}"></script>
    
@endsection

