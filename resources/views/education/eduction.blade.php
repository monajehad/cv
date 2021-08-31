@extends('layouts.cpanel.app')
@section('title', "education")
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
												<i class="flaticon-layer text-primary"></i>
											</span>
                    <h5 class="text-dark font-weight-bold my-1 mr-5 ml-3">Education</h5>
                    <!--end::Page Title-->
                </div>
            </div>
            <div class="d-flex align-items-center">
                <!--begin::Actions-->
                <a href="#" class="btn btn-light-primary font-weight-bolder btn-sm" aria-haspopup="true"
                   aria-expanded="false" data-toggle="modal" data-target="#add_new_education">Add education
                </a>
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
                            <br/>
                            Kickstart your CRM by adding a your first customer
                        </p>
                        <!--end::Description-->
                        <!--begin::Action-->
                        <a href="#" class="btn btn-primary" aria-haspopup="true" aria-expanded="false"
                           data-toggle="modal" data-target="#add_new_education">Add education
                        </a>
                        <!--end::Action-->
                    </div>
                    <!--end::Wrapper-->
                    <!--begin::Illustration-->
                    <div class="text-center px-4">
                        <img class="mw-100 h-300px" alt="" src="{{asset('metronic/media/education2.jpg')}}"/>
                    </div>
                    <!--end::Illustration-->
                </div>
                <!--end::Card body-->
            </div>

            <br>
            <br>
            <!--begin::Row-->
            <div class="row">
                <div class="col-xl-6">
                    <div class="card-body ">
                        <div class="d-flex align-items-center bg-light-info rounded p-5 mb-9">
                            <!--begin::Title-->
                            <div class="d-flex flex-column flex-grow-1 mr-2">
                                <h3 class="font-weight-bold text-dark-75  font-size-h5 mb-1"> University Name</h3>
                                <span class="text-muted font-weight-bold">Specialization</span>
                                <span class="text-muted font-weight-bold">Degree</span>
                                <div class="font-weight-bold text-success mt-2 mb-5">start - end</div>
                                <p class="text-dark-75  font-size-lg m-0">Lorem ipsum dolor sit, amet consectetur
                                    adipisicing elit. Quaerat voluptates impedit praesentium adipisci necessitatibus
                                    porro ea a, aliquam quasi sapiente repudiandae iusto harum esse incidunt
                                    recusandae eveniet nemo, sequi enim!</p>
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
                <div class="col-xl-6">
                    <div class="card card-custom gutter-b">
                        <!--begin::Body-->
                        <div class="card-body">
                            <!--begin::Top-->
                            <div class="d-flex align-items-center">
                                <!--begin::Symbol-->
                                <div class="symbol symbol-45 symbol-light mr-5">
                                    <span class="symbol-label">
                                        <span class="svg-icon svg-icon-primary svg-icon-2x"><!--begin::Svg Icon | path:C:\wamp64\www\keenthemes\legacy\metronic\theme\html\demo1\dist/../src/media/svg/icons\Home\Book-open.svg--><svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="24px" height="24px" viewBox="0 0 24 24" version="1.1">
                                            <g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
                                            <rect x="0" y="0" width="24" height="24"/>
                                            <path d="M13.6855025,18.7082217 C15.9113859,17.8189707 18.682885,17.2495635 22,17 C22,16.9325178 22,13.1012863 22,5.50630526 L21.9999762,5.50630526 C21.9999762,5.23017604 21.7761292,5.00632908 21.5,5.00632908 C21.4957817,5.00632908 21.4915635,5.00638247 21.4873465,5.00648922 C18.658231,5.07811173 15.8291155,5.74261533 13,7 C13,7.04449645 13,10.79246 13,18.2438906 L12.9999854,18.2438906 C12.9999854,18.520041 13.2238496,18.7439052 13.5,18.7439052 C13.5635398,18.7439052 13.6264972,18.7317946 13.6855025,18.7082217 Z" fill="#000000"/>
                                            <path d="M10.3144829,18.7082217 C8.08859955,17.8189707 5.31710038,17.2495635 1.99998542,17 C1.99998542,16.9325178 1.99998542,13.1012863 1.99998542,5.50630526 L2.00000925,5.50630526 C2.00000925,5.23017604 2.22385621,5.00632908 2.49998542,5.00632908 C2.50420375,5.00632908 2.5084219,5.00638247 2.51263888,5.00648922 C5.34175439,5.07811173 8.17086991,5.74261533 10.9999854,7 C10.9999854,7.04449645 10.9999854,10.79246 10.9999854,18.2438906 L11,18.2438906 C11,18.520041 10.7761358,18.7439052 10.4999854,18.7439052 C10.4364457,18.7439052 10.3734882,18.7317946 10.3144829,18.7082217 Z" fill="#000000" opacity="0.3"/>
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

                                        <span>University Name</span>
                                        <span class="subheader-separator subheader-separator-ver mt-2 mb-2 mr-4 bg-gray-300"></span>
                                        <span>Specialization</span>
                                    </a>

                                    <div class="d-flex">
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
                                            <span class="text-muted font-weight-bold">start date</span>
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
                                            <span class="text-muted font-weight-bold">end date</span>
                                        </div>

                                    </div>
                                </div>
                                <!--end::Info-->
                                <!--begin::Dropdown-->
                                <div class="dropdown dropdown-inline ml-2" data-toggle="tooltip" title=""
                                     data-placement="left" data-original-title="Quick actions">
                                    <a href="#" class="btn btn-hover-light-primary btn-sm btn-icon"
                                       data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                        <i class="ki ki-bold-more-hor"></i>
                                    </a>
                                    <div class="dropdown-menu p-0 m-0 dropdown-menu-md dropdown-menu-right">
                                        <!--begin::Navigation-->
                                        <ul class="navi navi-hover">
                                            <li class="navi-header font-weight-bold py-4">
                                                <span class="font-size-lg">Choose Label:</span>
                                                <i class="flaticon2-information icon-md text-muted"
                                                   data-toggle="tooltip" data-placement="right" title=""
                                                   data-original-title="Click to learn more..."></i>
                                            </li>
                                            <li class="navi-separator mb-3 opacity-70"></li>
                                            <li class="navi-item">
                                                <a href="#" class="navi-link">
																		<span class="navi-text">
																			<span class="label label-xl label-inline label-light-success">Customer</span>
																		</span>
                                                </a>
                                            </li>
                                            <li class="navi-item">
                                                <a href="#" class="navi-link">
																		<span class="navi-text">
																			<span class="label label-xl label-inline label-light-danger">Partner</span>
																		</span>
                                                </a>
                                            </li>
                                            <li class="navi-item">
                                                <a href="#" class="navi-link">
																		<span class="navi-text">
																			<span class="label label-xl label-inline label-light-warning">Suplier</span>
																		</span>
                                                </a>
                                            </li>
                                            <li class="navi-item">
                                                <a href="#" class="navi-link">
																		<span class="navi-text">
																			<span class="label label-xl label-inline label-light-primary">Member</span>
																		</span>
                                                </a>
                                            </li>
                                            <li class="navi-item">
                                                <a href="#" class="navi-link">
																		<span class="navi-text">
																			<span class="label label-xl label-inline label-light-dark">Staff</span>
																		</span>
                                                </a>
                                            </li>
                                            <li class="navi-separator mt-3 opacity-70"></li>
                                            <li class="navi-footer py-4">
                                                <a class="btn btn-clean font-weight-bold btn-sm" href="#">
                                                    <i class="ki ki-plus icon-sm"></i>
                                                    Add new
                                                </a>
                                            </li>
                                        </ul>
                                        <!--end::Navigation-->
                                    </div>
                                </div>
                                <!--end::Dropdown-->
                            </div>
                            <!--end::Top-->
                            <!--begin::Bottom-->
                            <div class="pt-3">
                                <!--begin::Text-->
                                <p class="text-dark-75 font-size-lg font-weight-normal pt-5 mb-6">Outlines keep you
                                    honest. They stop you from indulging in poorly thought-out metaphors about driving
                                    and keep you focused on the overall structure of your post</p>
                                <!--end::Text-->
                                <!--begin::Username-->
                                <span class="text-dark-75 font-size-lg font-weight-normal">Mr. Liam</span>
                                <!--end::Username-->
                                <!--begin::Action-->
                                <div class="pt-5">
                                    <a href="#"
                                       class="btn btn-hover-text-primary btn-hover-icon-primary btn-sm btn-text-dark-50 bg-hover-light-primary rounded font-weight-bolder font-size-sm p-2">
														<span class="svg-icon svg-icon-md svg-icon-dark-25 pr-2">
															<!--begin::Svg Icon | path:assets/media/svg/icons/Communication/Group-chat.svg-->
															<svg xmlns="http://www.w3.org/2000/svg"
                                                                 xmlns:xlink="http://www.w3.org/1999/xlink" width="24px"
                                                                 height="24px" viewBox="0 0 24 24" version="1.1">
																<g stroke="none" stroke-width="1" fill="none"
                                                                   fill-rule="evenodd">
																	<rect x="0" y="0" width="24" height="24"></rect>
																	<path d="M16,15.6315789 L16,12 C16,10.3431458 14.6568542,9 13,9 L6.16183229,9 L6.16183229,5.52631579 C6.16183229,4.13107011 7.29290239,3 8.68814808,3 L20.4776218,3 C21.8728674,3 23.0039375,4.13107011 23.0039375,5.52631579 L23.0039375,13.1052632 L23.0206157,17.786793 C23.0215995,18.0629336 22.7985408,18.2875874 22.5224001,18.2885711 C22.3891754,18.2890457 22.2612702,18.2363324 22.1670655,18.1421277 L19.6565168,15.6315789 L16,15.6315789 Z"
                                                                          fill="#000000"></path>
																	<path d="M1.98505595,18 L1.98505595,13 C1.98505595,11.8954305 2.88048645,11 3.98505595,11 L11.9850559,11 C13.0896254,11 13.9850559,11.8954305 13.9850559,13 L13.9850559,18 C13.9850559,19.1045695 13.0896254,20 11.9850559,20 L4.10078614,20 L2.85693427,21.1905292 C2.65744295,21.3814685 2.34093638,21.3745358 2.14999706,21.1750444 C2.06092565,21.0819836 2.01120804,20.958136 2.01120804,20.8293182 L2.01120804,18.32426 C1.99400175,18.2187196 1.98505595,18.1104045 1.98505595,18 Z M6.5,14 C6.22385763,14 6,14.2238576 6,14.5 C6,14.7761424 6.22385763,15 6.5,15 L11.5,15 C11.7761424,15 12,14.7761424 12,14.5 C12,14.2238576 11.7761424,14 11.5,14 L6.5,14 Z M9.5,16 C9.22385763,16 9,16.2238576 9,16.5 C9,16.7761424 9.22385763,17 9.5,17 L11.5,17 C11.7761424,17 12,16.7761424 12,16.5 C12,16.2238576 11.7761424,16 11.5,16 L9.5,16 Z"
                                                                          fill="#000000" opacity="0.3"></path>
																</g>
															</svg>
                                                            <!--end::Svg Icon-->
														</span>
                                        107 Comments
                                    </a>
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


    @include('education.save_education')
@endsection
@section('script')




    <script>
        new KTAvatar('kt_user_avatar_1');
    </script>

@endsection

