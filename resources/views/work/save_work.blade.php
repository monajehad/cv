<!--begin::Modal Content-->
<div class="modal fade" id="save_work_modal" tabindex="-1" role="dialog" aria-labelledby="staticBackdrop" aria-hidden="true">
															<div class="modal-dialog modal-dialog-scrollable modal-dialog-centered modal-lg" role="document">
																<div class="modal-content">
																	<div class="modal-header">
																		<h5 class="modal-title" id="exampleModalLabel">Add New Work <span style="color:red;font-size: large;">*</span></h5>
																		<button type="button" class="close" data-dismiss="modal" aria-label="Close">
																			<i aria-hidden="true" class="ki ki-close"></i>
																		</button>
																	</div>
																	<div class="modal-body" style="overflow:hidden;">
																		<div data-scroll="true" data-height="450">
																			<form class="form pt-9 pl-9" id="save_work_form"  method="POST" action="{{route('user.work.save')}}">
                                                                               @csrf 
																			   <input name="work_id" id="work_id" type="hidden">

																				<div class="form-group row">
																					<label class="col-xl-3 col-lg-3 text-left col-form-label">Company Name <span style="color:red;font-size: large;">*</span>
                                                                                      </label>
																					<div class="col-lg-9 col-xl-6">
																						<input class="form-control form-control-lg form-control-solid" type="text" id="company_name" name="company_name" placeholder="Company Name" />
																					</div>
																				</div>
																				<div class="form-group row">
																					<label class="col-xl-3 col-lg-3 text-left col-form-label">Job Title <span style="color:red;font-size: large;">*</span></label>
																					<div class="col-lg-9 col-xl-6">
																						<input class="form-control form-control-lg form-control-solid" type="text" id="job_title" name="job_title" placeholder="Work Name" />
																					</div>
																				</div>
																				
																				
																				<div class="form-group row">
																					<label class="col-xl-3 col-lg-3 text-left col-form-label">Date(start-end) <span style="color:red;font-size: large;">*</span></label>
																					<div class="col-lg-9 col-xl-6">
																					<div class="input-daterange input-group input-group-solid" id="kt_datepicker_5">
																							<input type="text" class="form-control" placeholder="start" name="start_date" id="start_date"/>
																							<div class="input-group-append">
																								<span class="input-group-text">
																									<i class="la la-ellipsis-h"></i>
																								</span>
																							</div>
																							<input type="text" class="form-control" placeholder="end" name="end_date" id="end_date"/>
																						</div>
                                                                                    </div>
																				</div>
                                                                                <div class="form-group row">
																					<label class="col-xl-3 col-lg-3 text-left col-form-label">Description</label>
																					<div class="col-lg-9 col-xl-6">
																						
																					  <div class=" input-group-solid"  >
																						  <textarea  name="details" id="details" class="form-control i7_max_length"  maxlength="500" placeholder="" rows="6"></textarea>
																							<span class="form-text text-muted">maximum 500 character</span>
																							<span class="text-danger lev"></span>
																						   </div>
                                                                                      </div>
												
																				</div>
                                                                                
																			</form>
																		</div>
																	</div>
																	<div class="modal-footer">
																		<button type="button" class="btn btn-light-primary font-weight-bold" data-dismiss="modal">Cancel</button>
																		<button type="submit" form="save_work_form" class="btn btn-primary font-weight-bold">Save</button>
																	</div>
																</div>
															</div>
														</div>
														<!--end::Modal Content-->