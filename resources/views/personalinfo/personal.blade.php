@extends('layouts.cpanel.app')
@section('title', "personal information")
@section('style')
<style>
.datepicker.datepicker-dropdown.dropdown-menu.datepicker-orient-left.datepicker-orient-top {
    z-index: 100 !important;
	
}
span.select2.select2-container.select2-container--default {
	    width: 100% !important;
}
</style>
@endsection
@section('subheader')
  	<!--begin::Subheader-->
	  <div class="subheader py-2 py-lg-4 subheader-solid" id="kt_subheader">
							<div class="container-fluid d-flex align-items-center justify-content-between flex-wrap flex-sm-nowrap">
								<!--begin::Details-->
								<div class="d-flex align-items-center flex-wrap mr-2">
									<!--begin::Title-->
									<h5 class="text-dark font-weight-bold mt-2 mb-2 mr-5">Personal Information </h5>
									<!--end::Title-->
									
								</div>
								<!--end::Details-->
								<!--begin::Toolbar-->
								<div class="d-flex align-items-center">
									<!--begin::Button-->
									<button type="submit" form="save_person_form" class="btn btn-primary font-weight-bolder">
														<i class="ki ki-check icon-sm"></i>Save Form</button>										<!--end::Button-->
									
								</div>
								<!--end::Toolbar-->
							</div>
						</div>
                  
@endsection
@section('content')
<!--begin::Portlet-->
						<!--begin::Entry-->
						<div class="d-flex flex-column-fluid">
							<!--begin::Container-->
							<div class="container">
								<!--begin::Card-->
								<div class="card card-custom card-sticky" id="kt_page_sticky_card">
									
									<div class="card-body">
										<!--begin::Form-->
										<form class="form pt-9 pl-9" id="save_person_form"  >
											@csrf
											<input name="people_id" value="{{$person->id ?? ''}}" id="person_id" type="hidden">
                                                                                    
											<div class="row">
											  <div class="col-xl-2"></div>
											   	<div class="col-xl-8">
													<div class="my-5">
                                                                    <h3 class="text-dark font-weight-bold mb-10">Customer Info:</h3>
                                                                <div class="form-group row">
                                                                    <label class="col-xl-3 col-lg-3 col-form-label">Avatar</label>
                                                                    <div class="col-lg-9 col-xl-6">
																		<div class="image-input image-input-outline" id="kt_image_1">
                                                                            
																				<div class="image-input-wrapper" style="background-image: url({{$person->img ??''}})"></div>
																				<label class="btn btn-xs btn-icon btn-circle btn-white btn-hover-text-primary btn-shadow" data-action="change" data-toggle="tooltip" title="" data-original-title="Change avatar">
																					<i class="fa fa-pen icon-sm text-muted"></i>
																					<input type="file" name="img" accept=".png, .jpg, .jpeg" />
																					<input type="hidden" name="profile_avatar_remove" />
																				</label>
																				<span class="btn btn-xs btn-icon btn-circle btn-white btn-hover-text-primary btn-shadow" data-action="cancel" data-toggle="tooltip" title="Cancel avatar">
																					<i class="ki ki-bold-close icon-xs text-muted"></i>
																				</span>
																			</div>
																			<span class="form-text text-muted">Allowed file types: png, jpg, jpeg.</span>
																		</div>
                                                                       
                                                                </div>   
                                                            
                                                            
                                                                <div class="form-group row">
                                                                        <label class="col-3">Full Name <span style="color:red;font-size: large;">*</span></label>
                                                                        <div class="col-9">
                                                                            <input class="form-control form-control-solid" type="text" name="name" placeholder="full name" value="{{$person->name??''}}"/>
															                	<span class="text-danger lev"></span>	
                                                                      
																		</div>
                                                                    </div>
                                                                    <div class="form-group row">
                                                                        <label class="col-3">Email <span style="color:red;font-size: large;">*</span></label>
                                                                        <div class="col-9">
                                                                            <div class="input-group input-group-solid">
                                                                                <div class="input-group-prepend">
                                                                                    <span class="input-group-text">
                                                                                        <i class="la la-at"></i>
                                                                                    </span>
                                                                                </div>
                                                                                <input type="text" class="form-control form-control-solid" name="email"  placeholder="Email"
																				value="{{$person->email??''}}" />
                                                                               <span class="text-danger lev"></span>	

                                                                            </div>
                                                                        </div>
                                                                    </div>
																	<div class="form-group row">
                                                                        <label class="col-3">Gender <span style="color:red;font-size: large;">*</span></label>
                                                                        <div class="col-9 radio-inline">
																			<label class="radio">
																			<input type="radio" name="gender" value="female " {{ ($person->gender ?? '') == 'female' ? 'checked':'' }} />
																			<span></span>female</label>
																			<label class="radio">
																			<input type="radio" name="gender" value="male" {{ ($person->gender ?? '') == 'male' ? 'checked':'' }} />
																			<span></span>male</label>
																		</div>
                                                                    </div>
                                                                    <div class="form-group row">
                                                                        <label class="col-3">Contact Phone <span style="color:red;font-size: large;">*</span></label>
                                                                        <div class="col-9">
                                                                            <div class="input-group input-group-solid">
                                                                                <div class="input-group-prepend">
                                                                                    <span class="input-group-text">
                                                                                        <i class="la la-phone"></i>
                                                                                    </span>
                                                                                </div>
                                                                                <input type="text" class="form-control form-control-solid" name="mobile" 
																				value="{{$person->mobile??''}}" placeholder="Phone" />
																				<span class="text-primary d-block"></span>
																			</div>
                                                                            <span class="form-text text-muted">We'll never share your email with anyone else.</span>
																              <span class="text-danger lev"></span>	

                                                                        </div>
                                                                    </div>
                                                        <div class="form-group row">
                                                             <label class="col-3">Birthday <span style="color:red;font-size: large;">*</span></label>
                                                            <div class="col-9">
                                                                    <div class="input-group date input-group-solid">
                                                                        <input type="text" class="form-control form-control-solid" readonly="readonly" value="{{$person->birthday??'05/20/2017'}}" 
																		id="kt_datepicker_3" name="birthday" />
                                                                        <div class="input-group-append">
                                                                            <span class="input-group-text">
                                                                                <i class="la la-calendar"></i>
                                                                            </span>
                                                                        </div>
                                                                    </div>
                                                                <span class="form-text text-muted">Enable clear and today helper buttons</span>
																<span class="text-danger lev"></span>	

                                                            </div>
                                                        </div>
                                                                    <div class="form-group row">
                                                                        <label class="col-3"> Original Nationality <span style="color:red;font-size: large;">*</span></label>
                                                                        <div class="col-9">
                                                                            <input class="form-control form-control-solid" type="text" placeholder="nationality" 
																			value="{{$person->nationality??''}}"name="nationality" id="nationality" />
                                                                            <span class="form-text text-muted">If you want your invoices addressed to a company. Leave blank to use your full name.</span>
                                                                        </div>
                                                                    </div>
                                                                <div class="form-group row">
                                                                    <label class="col-3">Marital <span style="color:red;font-size: large;">*</span></label>
                                                                    <div class=" col-9 ">
                                                                        <div class="input-group input-group-solid" >
                                                                            <select class="form-control form-control-solid selectpicker"  id="marital" name="marital">
																			<?php 
																				 $maritals = array('Single', 'Married', 'Widowed', 'Separated','Divorced');
																				  ?>
																			   @foreach($maritals as $type)
																		        <option value="{{$type}}" {{ ($person->marital ??'') == $type ? 'selected':'' }}>  {{$type }}	</option>
																				@endforeach
																		
                                                                            </select>
																        <span class="text-danger lev"></span>	

                                                                        </div>
                                                                    </div>
                                                                 </div>
                                                                
                                            <div class="form-group row">
												<label class="col-form-label  col-3 ">Language <span style="color:red;font-size: large;">*</span></label>
												  <div class="col-9 ">
													<select class="form-control select2 form-control-solid " id="kt_select2_3"  " name="language_id[]" multiple="multiple">
                                                    <?php $languages = \App\Models\Language::all(); ?>
														  @foreach($languages as $language)       
                                                                <option value="{{$language->code}}" {{ ($language->code) == '$person->language_id' ? 'selected':'' }} >{{$language->name}}</option>
                                                                   @endforeach        

													</select>
													<span class="text-danger lev"></span>	

												</div>
											</div>
                                       
											<div class="form-group row">
												<label class="col-form-label col-3 ">Country <span style="color:red;font-size: large;">*</span></label>
												<div class=" col-9 ">
													<select class="form-control select2 form-control-solid  kt_select2_1 select2"  id="country" name="country_id">
												    	<?php $countries = \App\Models\country::all(); ?>
														  @foreach($countries as $country)
													                <option value="{{$country->id}}" {{ ($country->code) == '$person->peopleaddress->country_id' ? 'selected':'' }} > {{$country->name}}	</option>
																	@endforeach
													</select>
													<span class="text-danger lev"></span>	

												</div>
											</div>
											
                                                         
                                                          <div class="form-group row">
                                                                <label class="col-3">City <span style="color:red;font-size: large;">*</span></label>
                                                                 <div class="col-9">
                                                                  <input class="form-control form-control-solid" type="text" name="city" value="{{$person->peopleaddress->city??''}}" placeholder="city"/>
                                                                </div>
                                                           </div> 

														   <div class="form-group row">
                                                                <label class="col-3">Street <span style="color:red;font-size: large;">*</span></label>
                                                                 <div class="col-9">
                                                                  <input class="form-control form-control-solid" type="text" name="street" value="{{$person->peopleaddress->street??''}}" placeholder="Street"/>
																<span class="text-danger lev"></span>	
                                                               
																</div>
                                                           </div> 

                                                         <div class="form-group row">
                                                            <label class="col-3">description</label>
                                                            <div class="col-9">
															<textarea  name="details" id="details" class="form-control i7_max_length" value="{{$person->details??''}}" maxlength="500" placeholder="" rows="6"></textarea>
																<span class="form-text text-muted">maximum 500 character</span>
																<span class="text-danger lev"></span>	
															</div>
                                                          </div>    
                                                    </div>  
												</div>
												<div class="col-xl-2"></div>
											</div>
										</form>
										<!--end::Form-->
									</div>
								</div>
								<!--end::Card-->
								
							</div>
							<!--end::Container-->
						</div>
						<!--end::Entry-->

<!--end::Portlet-->

@endsection
@section('script')



<script src="{{asset('js/blades/user/personal/save_person.js')}}"></script>
    
    <script>
         new KTAvatar('kt_image_1');
    </script>

@endsection

