<!--begin::Modal Content-->
<div class="modal fade" id="save_testimonial_modal" tabindex="-1" role="dialog" aria-labelledby="staticBackdrop" aria-hidden="true">
															<div class="modal-dialog modal-dialog-scrollable modal-dialog-centered modal-lg" role="document">
																<div class="modal-content">
																	<div class="modal-header">
																		<h5 class="modal-title" id="exampleModalLabel">Add New testimonial</h5>
																		<button type="button" class="close" data-dismiss="modal" aria-label="Close">
																			<i aria-hidden="true" class="ki ki-close"></i>
																		</button>
																	</div>
																	<div class="modal-body" style="overflow:hidden;">
																		<div data-scroll="true" data-height="450">
																		<form class="form pt-9 pl-9" id="save_testimonial_form">
																			@csrf
																			<input name="testimonial_id" value="0" id="testimonial_id" type="hidden">
                                                                                      
																				<div class="form-group row">
																					<label class="col-xl-3 col-lg-3 text-left col-form-label">Person's Name <span style="color:red;font-size: large;">*</span>
                                                                                      </label>
																					<div class="col-lg-9 col-xl-6">
																						<input class="form-control form-control-lg form-control-solid" id="person_name" type="text" name="person_name" placeholder="Person's Name" />
																					</div>
																				</div>
																				<div class="form-group row">
																					<label class="col-xl-3 col-lg-3 text-left col-form-label">Person's email <span style="color:red;font-size: large;">*</span>
                                                                                      </label>
																					<div class="col-lg-9 col-xl-6">
																						<input class="form-control form-control-lg form-control-solid" type="text" id="person_email" name="person_email" placeholder=" Person's email" />
																					</div>
																				</div>
																				<div class="form-group row">
																					<label class="col-xl-3 col-lg-3 text-left col-form-label">Person's Phone <span style="color:red;font-size: large;">*</span>
                                                                                      </label>
																					<div class="col-lg-9 col-xl-6">
																					<div class="input-group input-group-solid">
																								<div class="input-group-prepend">
																									<span class="input-group-text">
																										<i class="la la-phone"></i>
																									</span>
																								</div>
																								<input type="text" class="form-control form-control-solid" id="person_mobile" name="person_mobile" placeholder="+45678967456" placeholder="Phone" />
																							</div>																					</div>
																				</div>
                                                                                <div class="form-group row">
																					<label class="col-xl-3 col-lg-3 text-left col-form-label">About opinion <span style="color:red;font-size: large;">*</span></label>
																					<div class="col-lg-9 col-xl-6">
																					<textarea  name="about" id="about" class="form-control i7_max_length"  maxlength="500" placeholder="" rows="6"></textarea>
																						<span class="form-text text-muted">maximum 500 character</span>
																						<span class="text-danger lev"></span>
																																			</div>
																				</div>
																				
																			</form>
																		</div>
																	</div>
																	<div class="modal-footer">
																		<button type="button" class="btn btn-light-primary font-weight-bold" data-dismiss="modal">Cancel</button>
																		<button type="submit" form="save_testimonial_form" class="btn btn-primary font-weight-bold">Save</button>
																	</div>
																</div>
															</div>
														</div>
														<!--end::Modal Content-->