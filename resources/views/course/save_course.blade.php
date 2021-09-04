<!--begin::Modal Content-->
<div class="modal fade" id="save_course_modal" tabindex="-1" role="dialog" aria-labelledby="staticBackdrop" aria-hidden="true">
															<div class="modal-dialog modal-dialog-scrollable modal-dialog-centered modal-lg" role="document">
																<div class="modal-content">
																	<div class="modal-header">
																		<h5 class="modal-title" id="exampleModalLabel">Add New Course</h5>
																		<button type="button" class="close" data-dismiss="modal" aria-label="Close">
																			<i aria-hidden="true" class="ki ki-close"></i>
																		</button>
																	</div>
																	<div class="modal-body" style="overflow:hidden;">
																		<div data-scroll="true" data-height="450">
																			<form class="form pt-9 pl-9" id="save_course_form">
																			@csrf
																			<input name="course_id" value="0" id="course_id" type="hidden">
                                                                                      
																				<div class="form-group row">
																					<label class="col-xl-3 col-lg-3 text-left col-form-label">Course Name <span style="color:red;font-size: large;">*</span>
                                                                                      </label>
																					<div class="col-lg-9 col-xl-6">
																						<input class="form-control form-control-lg form-control-solid" id="course_name" type="text" name="name" placeholder="Course Name" />
																					</div>
																				</div>
																				<div class="form-group row">
																					<label class="col-xl-3 col-lg-3 text-left col-form-label">Hours <span style="color:red;font-size: large;">*</span>
                                                                                      </label>
																					<div class="col-lg-9 col-xl-6">
																						<input class="form-control form-control-lg form-control-solid" id="hours" type="text" name="hours" placeholder=" Hours" />
																					</div>
																				</div>
																				<div class="form-group row">
																					<label class="col-xl-3 col-lg-3 text-left col-form-label">source of the course <span style="color:red;font-size: large;">*</span></label>
																					<div class="col-lg-9 col-xl-6">
																						<input class="form-control form-control-lg form-control-solid" id="source" type="text" name="source" placeholder="Source" />
																					</div>
																				</div>
																				
																				<div class="form-group row">
																					<label class="col-xl-3 col-lg-3 text-left col-form-label">Date(start-end) <span style="color:red;font-size: large;">*</span></label>
																					<div class="col-lg-9 col-xl-6">
																						<div class="input-group input-group-lg input-group-solid"  id='kt_daterangepicker_2'>
                                                                                           <input type='text' class="form-control form-control-lg form-control-solid" id="date" name="date" readonly="readonly" placeholder="Select date range" />
                                                                                                <div class="input-group-append">
                                                                                                    <span class="input-group-text">
                                                                                                        <i class="la la-calendar-check-o"></i>
                                                                                                    </span>
                                                                                                 </div>
                                                                                        </div>
                                                                                    </div>
																				</div>
                                                                                <div class="form-group row">
																					<label class="col-xl-3 col-lg-3 text-left col-form-label">Description</label>
																					<div class="col-lg-9 col-xl-6">
																						  <div class=" input-group-solid"  >
																						  <textarea  name="details"  class="form-control i7_max_length" id="details" maxlength="500" placeholder="" rows="6"></textarea>
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
																		<button type="submit" form="save_course_form" class="btn btn-primary font-weight-bold">Save</button>
																	</div>
																</div>
															</div>
														</div>
														<!--end::Modal Content-->