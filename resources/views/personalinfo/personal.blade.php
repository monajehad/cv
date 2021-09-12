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
											<input name="people_id" value="{{$person->id??0}}" id="person_id" type="hidden">
                                                                                    
											<div class="row">
											  <div class="col-xl-2"></div>
											   	<div class="col-xl-8">
													<div class="my-5">
                                                                    <h3 class="text-dark font-weight-bold mb-10">Customer Info:</h3>
                                                                <div class="form-group row">
                                                                    <label class="col-xl-3 col-lg-3 col-form-label">Avatar</label>
                                                                    <div class="col-lg-9 col-xl-6">
																		<div class="image-input image-input-outline" id="kt_image_1">
                                                                        
																				<div class="image-input-wrapper" style="background-image: url({{
																				  $person->img ?? 'metronic/media/users/blank.png'}})"></div>
																				<label class="btn btn-xs btn-icon btn-circle btn-white btn-hover-text-primary btn-shadow" data-action="change" data-toggle="tooltip" title="" data-original-title="Change avatar">
																					<i class="fa fa-pen icon-sm text-muted"></i>
																					<input type="file" name="profile_avatar" accept=".png, .jpg, .jpeg" />
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
																			<input type="radio" name="gender" value="{{$person->female??''}}" />
																			<span></span>male</label>
																			<label class="radio">
																			<input type="radio" name="gender" value="{{$person->male??''}}" />
																			<span></span>female</label>
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
                                                                            <select class="form-control form-control-solid selectpicker" value="$person->marital??''" id="marital" name="marital">
																			<?php 
																				 $maritals = array('Single', 'Married', 'Widowed', 'Separated','Divorced');
																				  ?>
																			   @foreach($maritals as $type)
																		        <option value="{{$type??''}}">  {{$type }}	</option>
																				@endforeach
																		
                                                                            </select>
																        <span class="text-danger lev"></span>	

                                                                        </div>
                                                                    </div>
                                                                 </div>
                                                                
                                            <div class="form-group row">
												<label class="col-form-label  col-3 ">Language <span style="color:red;font-size: large;">*</span></label>
												  <div class="col-9 ">
													<select class="form-control select2 form-control-solid " id="kt_select2_3"  value="{{$person->language??''}}" name="language" multiple="multiple">
                                                                            <option value="af">Afrikaans</option>
                                                                            <option value="sq">Albanian - shqip</option>
                                                                            <option value="am">Amharic - አማርኛ</option>
                                                                            <option value="ar">Arabic - العربية</option>
                                                                            <option value="an">Aragonese - aragonés</option>
                                                                            <option value="hy">Armenian - հայերեն</option>
                                                                            <option value="ast">Asturian - asturianu</option>
                                                                            <option value="az">Azerbaijani - azərbaycan dili</option>
                                                                            <option value="eu">Basque - euskara</option>
                                                                            <option value="be">Belarusian - беларуская</option>
                                                                            <option value="bn">Bengali - বাংলা</option>
                                                                            <option value="bs">Bosnian - bosanski</option>
                                                                            <option value="br">Breton - brezhoneg</option>
                                                                            <option value="bg">Bulgarian - български</option>
                                                                            <option value="ca">Catalan - català</option>
                                                                            <option value="ckb">Central Kurdish - کوردی (دەستنوسی عەرەبی)</option>
                                                                            <option value="zh">Chinese - 中文</option>
                                                                            <option value="zh-HK">Chinese (Hong Kong) - 中文（香港）</option>
                                                                            <option value="zh-CN">Chinese (Simplified) - 中文（简体）</option>
                                                                            <option value="zh-TW">Chinese (Traditional) - 中文（繁體）</option>
                                                                            <option value="co">Corsican</option>
                                                                            <option value="hr">Croatian - hrvatski</option>
                                                                            <option value="cs">Czech - čeština</option>
                                                                            <option value="da">Danish - dansk</option>
                                                                            <option value="nl">Dutch - Nederlands</option>
                                                                            <option value="en">English</option>
                                                                            <option value="en-AU">English (Australia)</option>
                                                                            <option value="en-CA">English (Canada)</option>
                                                                            <option value="en-IN">English (India)</option>
                                                                            <option value="en-NZ">English (New Zealand)</option>
                                                                            <option value="en-ZA">English (South Africa)</option>
                                                                            <option value="en-GB">English (United Kingdom)</option>
                                                                            <option value="en-US">English (United States)</option>
                                                                            <option value="eo">Esperanto - esperanto</option>
                                                                            <option value="et">Estonian - eesti</option>
                                                                            <option value="fo">Faroese - føroyskt</option>
                                                                            <option value="fil">Filipino</option>
                                                                            <option value="fi">Finnish - suomi</option>
                                                                            <option value="fr">French - français</option>
                                                                            <option value="fr-CA">French (Canada) - français (Canada)</option>
                                                                            <option value="fr-FR">French (France) - français (France)</option>
                                                                            <option value="fr-CH">French (Switzerland) - français (Suisse)</option>
                                                                            <option value="gl">Galician - galego</option>
                                                                             <option value="ka">Georgian - ქართული</option>
                                                                            <option value="de">German - Deutsch</option>
                                                                            <option value="de-AT">German (Austria) - Deutsch (Österreich)</option>
                                                                            <option value="de-DE">German (Germany) - Deutsch (Deutschland)</option>
                                                                            <option value="de-LI">German (Liechtenstein) - Deutsch (Liechtenstein)</option>
                                                                            <option value="de-CH">German (Switzerland) - Deutsch (Schweiz)</option>
                                                                            <option value="el">Greek - Ελληνικά</option>
                                                                            <option value="gn">Guarani</option>
                                                                            <option value="gu">Gujarati - ગુજરાતી</option>
                                                                            <option value="ha">Hausa</option>
                                                                            <option value="haw">Hawaiian - ʻŌlelo Hawaiʻi</option>
                                                                            <option value="he">Hebrew - עברית</option>
                                                                            <option value="hi">Hindi - हिन्दी</option>
                                                                            <option value="hu">Hungarian - magyar</option>
                                                                            <option value="is">Icelandic - íslenska</option>
                                                                            <option value="id">Indonesian - Indonesia</option>
                                                                            <option value="ia">Interlingua</option>
                                                                            <option value="ga">Irish - Gaeilge</option>
                                                                            <option value="it">Italian - italiano</option>
                                                                            <option value="it-IT">Italian (Italy) - italiano (Italia)</option>
                                                                            <option value="it-CH">Italian (Switzerland) - italiano (Svizzera)</option>
                                                                            <option value="ja">Japanese - 日本語</option>
                                                                            <option value="kn">Kannada - ಕನ್ನಡ</option>
                                                                            <option value="kk">Kazakh - қазақ тілі</option>
                                                                            <option value="km">Khmer - ខ្មែរ</option>
                                                                            <option value="ko">Korean - 한국어</option>
                                                                            <option value="ku">Kurdish - Kurdî</option>
                                                                            <option value="ky">Kyrgyz - кыргызча</option>
                                                                            <option value="lo">Lao - ລາວ</option>
                                                                            <option value="la">Latin</option>
                                                                            <option value="lv">Latvian - latviešu</option>
                                                                            <option value="ln">Lingala - lingála</option>
                                                                            <option value="lt">Lithuanian - lietuvių</option>
                                                                            <option value="mk">Macedonian - македонски</option>
                                                                            <option value="ms">Malay - Bahasa Melayu</option>
                                                                            <option value="ml">Malayalam - മലയാളം</option>
                                                                            <option value="mt">Maltese - Malti</option>
                                                                            <option value="mr">Marathi - मराठी</option>
                                                                            <option value="mn">Mongolian - монгол</option>
                                                                            <option value="ne">Nepali - नेपाली</option>
                                                                            <option value="no">Norwegian - norsk</option>
                                                                            <option value="nb">Norwegian Bokmål - norsk bokmål</option>
                                                                            <option value="nn">Norwegian Nynorsk - nynorsk</option>
                                                                            <option value="oc">Occitan</option>
                                                                            <option value="or">Oriya - ଓଡ଼ିଆ</option>
                                                                            <option value="om">Oromo - Oromoo</option>
                                                                            <option value="ps">Pashto - پښتو</option>
                                                                            <option value="fa">Persian - فارسی</option>
                                                                            <option value="pl">Polish - polski</option>
                                                                            <option value="pt">Portuguese - português</option>
                                                                            <option value="pt-BR">Portuguese (Brazil) - português (Brasil)</option>
                                                                            <option value="pt-PT">Portuguese (Portugal) - português (Portugal)</option>
                                                                            <option value="pa">Punjabi - ਪੰਜਾਬੀ</option>
                                                                            <option value="qu">Quechua</option>
                                                                            <option value="ro">Romanian - română</option>
                                                                            <option value="mo">Romanian (Moldova) - română (Moldova)</option>
                                                                            <option value="rm">Romansh - rumantsch</option>
                                                                            <option value="ru">Russian - русский</option>
                                                                            <option value="gd">Scottish Gaelic</option>
                                                                            <option value="sr">Serbian - српски</option>
                                                                            <option value="sh">Serbo-Croatian - Srpskohrvatski</option>
                                                                            <option value="sn">Shona - chiShona</option>
                                                                            <option value="sd">Sindhi</option>
                                                                            <option value="si">Sinhala - සිංහල</option>
                                                                            <option value="sk">Slovak - slovenčina</option>
                                                                            <option value="sl">Slovenian - slovenščina</option>
                                                                            <option value="so">Somali - Soomaali</option>
                                                                            <option value="st">Southern Sotho</option>
                                                                            <option value="es">Spanish - español</option>
                                                                            <option value="es-AR">Spanish (Argentina) - español (Argentina)</option>
                                                                            <option value="es-419">Spanish (Latin America) - español (Latinoamérica)</option>
                                                                            <option value="es-MX">Spanish (Mexico) - español (México)</option>
                                                                            <option value="es-ES">Spanish (Spain) - español (España)</option>
                                                                            <option value="es-US">Spanish (United States) - español (Estados Unidos)</option>
                                                                            <option value="su">Sundanese</option>
                                                                            <option value="sw">Swahili - Kiswahili</option>
                                                                            <option value="sv">Swedish - svenska</option>
                                                                            <option value="tg">Tajik - тоҷикӣ</option>
                                                                            <option value="ta">Tamil - தமிழ்</option>
                                                                            <option value="tt">Tatar</option>
                                                                            <option value="te">Telugu - తెలుగు</option>
                                                                            <option value="th">Thai - ไทย</option>
                                                                            <option value="ti">Tigrinya - ትግርኛ</option>
                                                                            <option value="to">Tongan - lea fakatonga</option>
                                                                            <option value="tr">Turkish - Türkçe</option>
                                                                            <option value="tk">Turkmen</option>
                                                                            <option value="tw">Twi</option>
                                                                            <option value="uk">Ukrainian - українська</option>
                                                                            <option value="ur">Urdu - اردو</option>
                                                                            <option value="ug">Uyghur</option>
                                                                            <option value="uz">Uzbek - o‘zbek</option>
                                                                            <option value="vi">Vietnamese - Tiếng Việt</option>
                                                                            <option value="wa">Walloon - wa</option>
                                                                            <option value="cy">Welsh - Cymraeg</option>
                                                                            <option value="fy">Western Frisian</option>
                                                                            <option value="xh">Xhosa</option>
                                                                            <option value="yi">Yiddish</option>
                                                                            <option value="yo">Yoruba - Èdè Yorùbá</option>
                                                                            <option value="zu">Zulu - isiZulu</option>

													</select>
													<span class="text-danger lev"></span>	

												</div>
											</div>
                                       
											<div class="form-group row">
												<label class="col-form-label col-3 ">Country <span style="color:red;font-size: large;">*</span></label>
												<div class=" col-9 ">
													<select class="form-control select2 form-control-solid  kt_select2_1 select2" value="{{$person->peopleaddress_id??''}}" id="country" name="country_id">
												    	<?php $countries = \App\Models\country::all(); ?>
														  @foreach($countries as $country)
													                <option value="{{$country->code}}"> {{$country->name}}	</option>
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
         new KTAvatar('kt_user_avatar_1');
    </script>

@endsection

