@extends('layouts.cpanel.app')
@section('title', "interset")
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
                                                    <span class="svg-icon svg-icon-primary svg-icon-2x"><!--begin::Svg Icon | path:C:\wamp64\www\keenthemes\legacy\metronic\theme\html\demo1\dist/../src/media/svg/icons\Devices\Midi.svg--><svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="24px" height="24px" viewBox="0 0 24 24" version="1.1">
                                                        <g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
                                                            <rect x="0" y="0" width="24" height="24"/>
                                                            <path d="M4,6 L21,6 C21.5522847,6 22,6.44771525 22,7 L22,18 C22,18.5522847 21.5522847,19 21,19 L4,19 C3.44771525,19 3,18.5522847 3,18 L3,7 C3,6.44771525 3.44771525,6 4,6 Z" fill="#000000" opacity="0.3"/>
                                                            <rect fill="#000000" opacity="0.3" x="7" y="13" width="1" height="6"/>
                                                            <rect fill="#000000" opacity="0.3" x="12" y="13" width="1" height="6"/>
                                                            <rect fill="#000000" opacity="0.3" x="17" y="13" width="1" height="6"/>
                                                            <path d="M6,6 L9,6 L9,12 C9,12.5522847 8.55228475,13 8,13 L7,13 C6.44771525,13 6,12.5522847 6,12 L6,6 Z" fill="#000000"/>
                                                            <path d="M11,6 L14,6 L14,12 C14,12.5522847 13.5522847,13 13,13 L12,13 C11.4477153,13 11,12.5522847 11,12 L11,6 Z" fill="#000000"/>
                                                            <path d="M16,6 L19,6 L19,12 C19,12.5522847 18.5522847,13 18,13 L17,13 C16.4477153,13 16,12.5522847 16,12 L16,6 Z" fill="#000000"/>
                                                        </g>
                                                    </svg><!--end::Svg Icon--></span>
													</span>
										<h5 class="text-dark font-weight-bold my-1 mr-5">interset</h5>
										<!--end::Page Title-->
                                    </div>
                                </div>
                                <div class="d-flex align-items-center">
									<!--begin::Actions-->
									<a href="#" class="btn btn-light-primary font-weight-bolder btn-sm"  aria-haspopup="true" aria-expanded="false" data-toggle="modal" data-target="#add_new_interset">Add interset</a>
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
											<a href="#" class="btn btn-primary" aria-haspopup="true" aria-expanded="false" data-toggle="modal" data-target="#add_new_interset">Add interset</a>
											<!--end::Action-->
										</div>
										<!--end::Wrapper-->
										<!--begin::Illustration-->
										<div class="text-center px-4">
											<img class="mw-100 h-300px" alt="" src="{{asset('metronic/media/interset.jpg')}}" />
										</div>
										<!--end::Illustration-->
									</div>
									<!--end::Card body-->
								</div>
								<br>
                                <br>
                                <!--begin::Card-->
								@include('interset.card_interset')
										
										<!--end::Card-->
							</div>
							<!--end::Container-->
						</div>
						<!--end::Entry-->


@include('interset.save_interset')
@endsection
@section('script')



    
    <script>
         new KTAvatar('kt_user_avatar_1');
    </script>

@endsection

