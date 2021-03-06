
								<div class="col-xl-4">
														<div class="card card-custom card-stretch gutter-b">
																			<!--begin::Body-->
																			<div class="card-body">
																				<!--begin::Top-->
																				<div class="d-flex align-items-center">
																					<!--begin::Symbol-->
																					<div class="symbol symbol-45 symbol-light mr-5">
																										<span class="symbol-label">
																											<span class="svg-icon svg-icon-primary svg-icon-2x"><!--begin::Svg Icon | path:C:\wamp64\www\keenthemes\legacy\metronic\theme\html\demo1\dist/../src/media/svg/icons\Devices\Gamepad2.svg--><svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="24px" height="24px" viewBox="0 0 24 24" version="1.1">
																												<g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
																													<rect x="0" y="0" width="24" height="24"/>
																													<path d="M12.9486833,8.31622777 L11.0513167,7.68377223 C11.8160243,5.38964935 13.0426772,3.95855428 14.7574644,3.5298575 C15.650287,3.30665184 17,1.86951059 17,1 L19,1 C19,2.79715607 17.0163797,5.02668149 15.2425356,5.4701425 C14.2906561,5.70811238 13.517309,6.61035065 12.9486833,8.31622777 Z" fill="#000000" fill-rule="nonzero" opacity="0.3"/>
																													<path d="M7.81798367,7 L16.2025685,7 C17.5586976,6.72948613 18.9494633,7.42723712 19.526457,8.72046451 L22.9501217,16.3939916 C23.4665806,17.5515411 23.1998005,18.9087734 22.2836331,19.7847233 L21.8392372,20.2096113 C21.8188115,20.2291404 21.7980738,20.2483405 21.7770321,20.2672042 C20.6904893,21.2412841 19.0200246,21.1501149 18.0459447,20.0635721 L15.2994684,17 L8.86456314,17 L6.11808685,20.0635721 C5.14400696,21.1501149 3.47354224,21.2412841 2.38699945,20.2672042 C2.36595778,20.2483405 2.34522009,20.2291404 2.3247944,20.2096113 L1.85770343,19.7630245 C0.952705301,18.8977536 0.680264004,17.5614241 1.17430192,16.4109277 L4.46146538,8.75590867 C5.02845054,7.43553556 6.44099515,6.71763226 7.81798367,7 Z M8,14 C9.1045695,14 10,13.1045695 10,12 C10,10.8954305 9.1045695,10 8,10 C6.8954305,10 6,10.8954305 6,12 C6,13.1045695 6.8954305,14 8,14 Z M17,12 C17.5522847,12 18,11.5522847 18,11 C18,10.4477153 17.5522847,10 17,10 C16.4477153,10 16,10.4477153 16,11 C16,11.5522847 16.4477153,12 17,12 Z M15,14 C15.5522847,14 16,13.5522847 16,13 C16,12.4477153 15.5522847,12 15,12 C14.4477153,12 14,12.4477153 14,13 C14,13.5522847 14.4477153,14 15,14 Z" fill="#000000"/>
																												</g>
																											</svg><!--end::Svg Icon-->
																											</span>
																										</span>
																					</div>
																					<!--end::Symbol-->
																					<!--begin::Info-->
																					<div class="d-flex flex-column flex-grow-1">
																						<a href="javascript:"
																						class="text-dark-75 text-hover-primary mb-1 font-size-lg font-weight-bolder">

																							<span>{{$interest->name}}</span>
																						</a>

																						
																					</div>
																					<!--end::Info-->
																					<div class=" ml-2"  title="Quick actions" data-placement="left">
																															<span class="switch switch-icon">
																																	<label>
																																		<input type="checkbox" class="activate_interest_switch"onclick="updateStatus('is_active',this.checked,'{{$interest->id}}','/user/interest/status/update')"
																																			{{$interest->is_active ? 'checked' : ''}}
																																			name="is_active" />
																																		<span></span>
																																	</label>
																																</span>
																					</div>
																				</div>
																				<!--end::Top-->
																				<!--begin::Bottom-->
																				<div class="pt-3">
																					<!--begin::Action-->
																					<div class="pt-5">
																						<!--begin::Lable-->

																						<div class="card-toolbar mt-1 text-right">
																							<a href="#" class="btn btn-sm btn-icon btn-light-danger mr-2 delete_interest_btn"
																							onclick="remove('{{$interest->id}}','user/interest/delete')">
																								<i class="flaticon2-rubbish-bin"></i>
																							</a>
																							<a href="#" class="btn btn-sm btn-icon btn-light-success mr-2 edit_interest_btn"
																							onclick="fillInterestModal('{{$interest->id}}','{{$interest->name}}')" data-toggle = "modal" data-target = "#save_interest_modal"
																							>
																								<i class="flaticon2-edit"></i>
																							</a>

																						</div>
																						<!--end::Lable-->
																					</div>
																					<!--end::Action-->
																				</div>
																				<!--end::Bottom-->

																			</div>
																			<!--end::Body-->
																		</div>
																	</div>
												