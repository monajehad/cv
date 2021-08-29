<!--begin::Modal Content-->
<div class="modal fade" id="add_new_work" tabindex="-1" role="dialog" aria-labelledby="staticBackdrop" aria-hidden="true">
															<div class="modal-dialog modal-dialog-scrollable modal-dialog-centered modal-lg" role="document">
																<div class="modal-content">
																	<div class="modal-header">
																		<h5 class="modal-title" id="exampleModalLabel">Add New Work <span style="color:red;font-size: large;">*</span></h5>
																		<button type="button" class="close" data-dismiss="modal" aria-label="Close">
																			<i aria-hidden="true" class="ki ki-close"></i>
																		</button>
																	</div>
																	<div class="modal-body" style="overflow:hidden;">
																		<div data-scroll="true" data-height="600">
																			<form class="form pt-9 pl-9">
																				<div class="form-group row">
																					<label class="col-xl-3 col-lg-3 text-left col-form-label">Company Name <span style="color:red;font-size: large;">*</span>
                                                                                      </label>
																					<div class="col-lg-9 col-xl-6">
																						<input class="form-control form-control-lg form-control-solid" type="text" name="company_name" placeholder="Company Name" />
																					</div>
																				</div>
																				<div class="form-group row">
																					<label class="col-xl-3 col-lg-3 text-left col-form-label">Job Title <span style="color:red;font-size: large;">*</span></label>
																					<div class="col-lg-9 col-xl-6">
																						<input class="form-control form-control-lg form-control-solid" type="text" name="job_title" placeholder="Work Name" />
																					</div>
																				</div>
																				
																				
																				<div class="form-group row">
																					<label class="col-xl-3 col-lg-3 text-left col-form-label">Date(start-end) <span style="color:red;font-size: large;">*</span></label>
																					<div class="col-lg-9 col-xl-6">
																						<div class="input-group input-group-lg input-group-solid"  id='kt_daterangepicker_2'>
                                                                                           <input type='text' class="form-control form-control-lg form-control-solid" name="date"readonly="readonly" placeholder="Select date range" />
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
																						  <div class="input-group input-group-lg input-group-solid"  >
                                                                                             <textarea class="form-control form-control-solid" rows="5" name="description" placeholder="description"></textarea>
                                                                                          </div>
                                                                                      </div>
																				</div>
                                                                                
																			</form>
																		</div>
																	</div>
																	<div class="modal-footer">
																		<button type="button" class="btn btn-light-primary font-weight-bold" data-dismiss="modal">Cancel</button>
																		<button type="button" class="btn btn-primary font-weight-bold">Save</button>
																	</div>
																</div>
															</div>
														</div>
														<!--end::Modal Content-->