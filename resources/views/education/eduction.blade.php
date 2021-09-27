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
                    <span class="svg-icon svg-icon-primary">

												<!--begin::Svg Icon | path:C:\wamp64\www\keenthemes\legacy\metronic\theme\html\demo1\dist/../src/media/svg/icons\Home\Book-open.svg--><svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="24px" height="24px" viewBox="0 0 24 24" version="1.1">
                                                <g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
                                            <rect x="0" y="0" width="24" height="24"/>
                                            <path d="M13.6855025,18.7082217 C15.9113859,17.8189707 18.682885,17.2495635 22,17 C22,16.9325178 22,13.1012863 22,5.50630526 L21.9999762,5.50630526 C21.9999762,5.23017604 21.7761292,5.00632908 21.5,5.00632908 C21.4957817,5.00632908 21.4915635,5.00638247 21.4873465,5.00648922 C18.658231,5.07811173 15.8291155,5.74261533 13,7 C13,7.04449645 13,10.79246 13,18.2438906 L12.9999854,18.2438906 C12.9999854,18.520041 13.2238496,18.7439052 13.5,18.7439052 C13.5635398,18.7439052 13.6264972,18.7317946 13.6855025,18.7082217 Z" fill="#000000"/>
                                            <path d="M10.3144829,18.7082217 C8.08859955,17.8189707 5.31710038,17.2495635 1.99998542,17 C1.99998542,16.9325178 1.99998542,13.1012863 1.99998542,5.50630526 L2.00000925,5.50630526 C2.00000925,5.23017604 2.22385621,5.00632908 2.49998542,5.00632908 C2.50420375,5.00632908 2.5084219,5.00638247 2.51263888,5.00648922 C5.34175439,5.07811173 8.17086991,5.74261533 10.9999854,7 C10.9999854,7.04449645 10.9999854,10.79246 10.9999854,18.2438906 L11,18.2438906 C11,18.520041 10.7761358,18.7439052 10.4999854,18.7439052 C10.4364457,18.7439052 10.3734882,18.7317946 10.3144829,18.7082217 Z" fill="#000000" opacity="0.3"/>
                                            </g>
                                            </svg><!--end::Svg Icon-->
											</span>
                    </span>
                    <h5 class="text-dark font-weight-bold my-1 mr-5 ml-3">Education</h5>
                    <!--end::Page Title-->
                </div>
            </div>
            <div class="d-flex align-items-center">
                <!--begin::Actions-->
                <a href="#" class="btn btn-light-primary font-weight-bolder btn-sm" aria-haspopup="true"
                   aria-expanded="false" data-toggle="modal" data-target="#save_education_modal" id="add_education_btn">Add education
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
            <div class="card" id="add_your_first_education" style="display: none;">
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
                           data-toggle="modal" data-target="#save_education_modal">Add education
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

            <!--begin::Row-->
            <div class="row" id="education_container">
                

            </div>

        </div>
        <!--end::Container-->
    </div>
    <!--end::Entry-->


    @include('education.save_education')
@endsection
@section('script')

    <script src="{{asset('js/blades/user/education/index.js')}}"></script>
    <script src="{{asset('js/blades/user/education/save_education.js')}}"></script>


@endsection

