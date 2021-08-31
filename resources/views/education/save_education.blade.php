<!--begin::Modal Content-->
<div class="modal fade" id="save_education_modal" tabindex="-1" role="dialog" aria-labelledby="staticBackdrop"
     aria-hidden="true">
    <div class="modal-dialog modal-dialog-scrollable modal-dialog-centered modal-lg" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">Add New Education</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <i aria-hidden="true" class="ki ki-close"></i>
                </button>
            </div>
            <div class="modal-body" style="overflow:hidden;">
                <div data-scroll="true" data-height="450">
                    <form id="save_education_form" class="form pt-9 pl-9" method="POST" action="{{route('user.education.save')}}">
                        @csrf
                        <input name="education_id" id="education_id" type="hidden">
                        <div class="ps__rail-y" style="top: 165px; right: 0px; height: 600px;">
                            <div class="ps__thumb-y" tabindex="0" style="top: 298px; height: 300px;"></div>
                        </div>
                        <div class="form-group row">
                            <label class="col-xl-3 col-lg-3 text-left col-form-label">Place Name
                                <span style="color:red;font-size: large;">*</span>
                            </label>
                            <div class="col-lg-9 col-xl-6">
                                <input name="place_name" class="form-control form-control-lg form-control-solid" type="text"
                                        placeholder="Place Name"/>
                                <span class="text-danger lev"></span>
                            </div>
                        </div>
                        <div class="form-group row">
                            <label class="col-xl-3 col-lg-3 text-left col-form-label">Specialization
                                <span style="color:red;font-size: large;">*</span>
                            </label>
                            <div class="col-lg-9 col-xl-6">
                                <input name="specialization" class="form-control form-control-lg form-control-solid" type="text"
                                        placeholder="Specialization"/>
                                <span class="text-danger lev"></span>
                            </div>
                        </div>
                        <div class="form-group row">
                            <label class="col-xl-3 col-lg-3 text-left col-form-label">Degree
                                <span style="color:red;font-size: large;">*</span>
                            </label>
                            <div class="col-lg-9 col-xl-6 ">
                                <select name="degree" class="form-control form-control-lg form-control-solid selectpicker">
                                    <option value="bachelors">Bachelors</option>
                                    <option value="masters">Masters</option>
                                    <option value="diploma">diploma</option>
                                    <option value="doctorate">
                                        Doctorate
                                    </option>
                                    <option value="other">other</option>

                                </select>
                                <span class="text-danger lev"></span>
                            </div>
                        </div>

                        <div class="form-group row">
                            <label class="col-xl-3 col-lg-3 text-left col-form-label">Date(start-end)
                                <span style="color:red;font-size: large;">*</span>
                            </label>
                            <div class="col-lg-9 col-xl-6">
                                <div class="input-group input-group-lg input-group-solid" id='kt_daterangepicker_2'>
                                    <input name="date" type="text" class="form-control form-control-lg form-control-solid"
                                            readonly="readonly" placeholder="Select date range"/>
                                    <div class="input-group-append">
                                        <span class="input-group-text">
                                            <i class="la la-calendar-check-o"></i>
                                        </span>
                                    </div>
                                    <span class="text-danger lev"></span>
                                </div>
                            </div>
                        </div>
                        <div class="form-group row">
                            <label class="col-xl-3 col-lg-3 text-left col-form-label">Description</label>
                            <div class="col-lg-9 col-xl-6">
                                <div class=" input-group-solid">
                                    <!-- <textarea name="content" class="form-control" data-provide="markdown" rows="10"></textarea> -->
                                    <div name="details" id="kt_quil_1" style="height: 325px;" >Compose a message</div>
                                    <span class="text-danger lev"></span>
                                </div>
                            </div>
                        </div>

                    </form>
                </div>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-light-primary font-weight-bold" data-dismiss="modal">Cancel
                </button>
                <button form="save_education_form" type="submit" class="btn btn-primary font-weight-bold">Save</button>
            </div>
        </div>
    </div>
</div>
<!--end::Modal Content-->