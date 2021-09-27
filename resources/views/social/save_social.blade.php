<!--begin::Modal Content-->
<div class="modal fade" id="save_social_modal" tabindex="-1" role="dialog" aria-labelledby="staticBackdrop" aria-hidden="true">
															<div class="modal-dialog modal-dialog-scrollable modal-dialog-centered modal-lg" role="document">
																<div class="modal-content">
																	<div class="modal-header">
																		<h5 class="modal-title" id="exampleModalLabel">Add New Social</h5>
																		<button type="button" class="close" data-dismiss="modal" aria-label="Close">
																			<i aria-hidden="true" class="ki ki-close"></i>
																		</button>
																	</div>
																	<div class="modal-body" style="overflow:hidden;">
																		<div data-scroll="true" data-height="600">
																		<form class="form pt-9 pl-9" id="save_social_form" method="POST" action="{{route('user.social.save')}}">
																			@csrf
																			<input name="social_id" value="0" id="social_id" type="hidden">
                                                                                
																				<div class="form-group row">
																					<label class="col-xl-3 col-lg-3 text-left col-form-label required">link 
                                                                                      </label>
																					<div class="col-lg-9 col-xl-6">
																						<input class="form-control form-control-lg form-control-solid" type="text" id="link" name="link" value="{{$social->link??'Http://'}}"  />
																					</div>
																				</div>
																				<div class="form-group row">
																					<label class="col-xl-3 col-lg-3 text-left col-form-label required"> Social media </label>
																					<div class="col-lg-9 col-xl-6">
																					   <select class="form-control form-control-lg form-control-solid selectpicker"  name="social_website_id"id="social_website_id">
                                                                                        <?php $socials = \App\Models\Social_website::all(); ?>
																						@foreach($socials as $social)
																					     <option value="{{$social->id}}" class="form-control selectpicker   " data-icon="{{$social->icon_name}} mr-3 text-primary  icon-lg"  >
																								  {{$social->name}}																												
                                                                                          </option>
																						@endforeach
																																																																			
                                                                                        </select>																					
																			    	</div>
																				
																				</div>
																				
                                                                                
																			</form>
																		</div>
																	</div>
																	
																	<div class="modal-footer">
																		<button type="button" class="btn btn-light-primary font-weight-bold" data-dismiss="modal">Cancel</button>
																		<button type="submit" form="save_social_form" class="btn btn-primary font-weight-bold">Save</button>
																	</div>
																</div>
															</div>
														</div>
														<!--end::Modal Content-->