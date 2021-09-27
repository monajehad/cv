<!--begin::Modal Content-->
<div class="modal fade" id="save_skill_modal" tabindex="-1" role="dialog" aria-labelledby="staticBackdrop" aria-hidden="true">
															<div class="modal-dialog modal-dialog-scrollable modal-dialog-centered modal-lg" role="document">
																<div class="modal-content">
																	<div class="modal-header">
																		<h5 class="modal-title" id="exampleModalLabel">Add New Skill</h5>
																		<button type="button" class="close" data-dismiss="modal" aria-label="Close">
																			<i aria-hidden="true" class="ki ki-close"></i>
																		</button>
																	</div>
																	<div class="modal-body" style="overflow:hidden;">
																		<div data-scroll="true" data-height="300">
																		<form class="form pt-9 pl-9" id="save_skill_form" method="POST" action="{{route('user.skill.save')}}">
																			@csrf
																			<input name="skill_id" value="0" id="skill_id" type="hidden">
                                                                                
																				<div class="form-group row">
																					<label class="col-xl-3 col-lg-3 text-left col-form-label required">skill Name 
                                                                                      </label>
																					<div class="col-lg-9 col-xl-6">
																						<input class="form-control form-control-lg form-control-solid" type="text" id="name" name="name" placeholder="Skill Name" />
																					</div>
																				</div>
																				
																				
																				
                                                                                <div class="form-group row">
																					 <label class="col-xl-3 col-lg-3 text-left col-form-label required">level </label>
																					  <div class="col-lg-9 col-xl-6">
																					  <div class="ion-range-slider">
																							<input type="hidden" id="kt_slider_1" name="level" />
																						</div>
                                                                                            <!-- <select class="form-control selectpicker form-control-solid " id="level" name="level" >
																						       <option value="junior">junior</option>
																						       <option value="good"> Good</option>
                                                                                               <option value="advanced">advanced </option> -->
																				
																					
																			

																						    </select>
                                                                                      </div>
																				</div>
                                                                                
																			</form>
																		</div>
																	</div>
																	<div class="modal-footer">
																		<button type="button" class="btn btn-light-primary font-weight-bold" data-dismiss="modal">Cancel</button>
																		<button type="submit" form="save_skill_form" class="btn btn-primary font-weight-bold">Save</button>
																	</div>
																</div>
															</div>
														</div>
														<!--end::Modal Content-->