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
					
							<div class="card" id="add_your_first_skill"  style="display: none;">
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
						
                               
                              <!--begin::Card-->
							  <div class="row" id="skill_container" >
							



                   		
				        	</div>
				
				</div>
							<!--end::Container-->
			</div>
						<!--end::Entry-->


@include('skill.save_skill')
@endsection
@section('script')
<script src="{{asset('js/blades/user/skill/save_skill.js')}}"></script>
<script src="{{asset('js/blades/user/skill/index.js')}}"></script>

<script src="{{asset('js/blades/user/upstatus.js')}}"></script>


    
   

@endsection

