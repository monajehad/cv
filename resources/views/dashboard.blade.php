@extends('layouts.cpanel.app')
@section('title', "Dashboard")
@section('subheader')
    <div class="kt-subheader  kt-grid__item" id="kt_subheader">
        <div class="kt-container  kt-container--fluid ">
            <div class="kt-subheader__main">
                <h3 class="kt-subheader__title">dashboard</h3>
                <span class="kt-subheader__separator kt-subheader__separator--v"></span>
                <span class="kt-subheader__desc">statistics</span>
            </div>
            <div class="kt-subheader__toolbar">
                <div class="kt-subheader__wrapper">
                    <a href="#" class="btn kt-subheader__btn-daterange" id="kt_dashboard_daterangepicker"
                       data-toggle="kt-tooltip" title="select_date" data-placement="left">
                        <span class="kt-subheader__btn-daterange-title"
                              id="kt_dashboard_daterangepicker_title"></span>&nbsp;
                        <span class="kt-subheader__btn-daterange-date"
                              id="kt_dashboard_daterangepicker_date"></span>
                        <i class="flaticon2-calendar-1"></i>
                    </a>
                </div>
            </div>
        </div>
    </div>
@endsection