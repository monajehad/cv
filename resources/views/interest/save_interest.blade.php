<!--begin::Modal Content-->
<div class="modal fade" id="save_interest_modal" tabindex="-1" role="dialog" aria-labelledby="staticBackdrop" aria-hidden="true">
															<div class="modal-dialog modal-dialog-scrollable modal-dialog-centered modal-lg" role="document">
																<div class="modal-content">
																	<div class="modal-header">
																		<h5 class="modal-title" id="exampleModalLabel">Add New Interest</h5>
																		<button type="button" class="close" data-dismiss="modal" aria-label="Close">
																			<i aria-hidden="true" class="ki ki-close"></i>
																		</button>
																	</div>
																	<div class="modal-body" style="overflow:hidden;">
																		<div data-scroll="true" data-height="300">
																		<form class="form pt-9 pl-9" id="save_interest_form" method="POST" action="{{route('user.interest.save')}}">
																			@csrf
																			<input name="interest_id" value="0" id="interest_id" type="hidden">
                                                                                
																				<div class="form-group row">
																					<label class="col-xl-3 col-lg-3 text-left col-form-label">Interest Name <span style="color:red;font-size: large;">*</span>
                                                                                      </label>
																					<div class="col-lg-9 col-xl-6">
																						<input class="form-control form-control-lg form-control-solid" type="text" id="name" name="name" placeholder="Interset Name" />
																					</div>
																				</div>
																
																				
																				
                                                                                                                                    
																			</form>
																		</div>
																	</div>
																	<div class="modal-footer">
																		<button type="button" class="btn btn-light-primary font-weight-bold" data-dismiss="modal">Cancel</button>
																		<button type="submit" form="save_interest_form" class="btn btn-primary font-weight-bold">Save</button>
																	</div>
																</div>
															</div>
														</div>
														<!--end::Modal Content-->