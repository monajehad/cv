@extends('layouts.cpanel.app')
@section('title', "personal information")
@section('style')
<style>
.datepicker.datepicker-dropdown.dropdown-menu.datepicker-orient-left.datepicker-orient-top {
    z-index: 100 !important;
}
</style>
@endsection
@section('subheader')
  
<!-- begin:: Subheader -->
<div class="subheader py-2 py-lg-6 subheader-solid" id="kt_subheader">
							<div class="container-fluid d-flex align-items-center justify-content-between flex-wrap flex-sm-nowrap">
								<!--begin::Info-->
								<div class="d-flex align-items-center flex-wrap mr-1">
									<!--begin::Mobile Toggle-->
									<button class="burger-icon burger-icon-left mr-4 d-inline-block d-lg-none" id="kt_subheader_mobile_toggle">
										<span></span>
									</button>
									<!--end::Mobile Toggle-->
									<!--begin::Page Heading-->
									<div class="d-flex align-items-baseline flex-wrap mr-5">
										<!--begin::Page Title-->
										<h5 class="text-dark font-weight-bold my-1 mr-5">Personal Information</h5>
										<!--end::Page Title-->
                                    </div>
                                </div>
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
									<div class="card-header">
										<div class="card-title">
											<h3 class="card-label">Personal Information
											<i class="mr-2"></i>
										</div>
										<div class="card-toolbar">
											<div class="btn-group">
												<button type="button" class="btn btn-primary font-weight-bolder">
												<i class="ki ki-check icon-sm"></i>Save Form</button>
												
											</div>
										</div>
									</div>
									<div class="card-body">
										<!--begin::Form-->
										<form class="form" id="kt_form">
											<div class="row">
											  <div class="col-xl-2"></div>
											   	<div class="col-xl-8">
													<div class="my-5">
                                                                    <h3 class="text-dark font-weight-bold mb-10">Customer Info:</h3>
                                                                <div class="form-group row">
                                                                    <label class="col-xl-3 col-lg-3 col-form-label">Avatar</label>
                                                                    <div class="col-lg-9 col-xl-6">
                                                                        <div class="image-input image-input-outline" id="kt_profile_avatar" style="background-image: url({{asset('metronic/media/users/blank.png')}}">
                                                                            <div class="image-input-wrapper" style="background-image: url(assets/media/users/300_21.jpg)"></div>
                                                                            <label class="btn btn-xs btn-icon btn-circle btn-white btn-hover-text-primary btn-shadow" data-action="change" data-toggle="tooltip" title="" data-original-title="Change avatar">
                                                                                <i class="fa fa-pen icon-sm text-muted"></i>
                                                                                <input type="file" name="profile_avatar" accept=".png, .jpg, .jpeg" />
                                                                                <input type="hidden" name="profile_avatar_remove" />
                                                                            </label>
                                                                            <span class="btn btn-xs btn-icon btn-circle btn-white btn-hover-text-primary btn-shadow" data-action="cancel" data-toggle="tooltip" title="Cancel avatar">
                                                                                <i class="ki ki-bold-close icon-xs text-muted"></i>
                                                                            </span>
                                                                            <span class="btn btn-xs btn-icon btn-circle btn-white btn-hover-text-primary btn-shadow" data-action="remove" data-toggle="tooltip" title="Remove avatar">
                                                                                <i class="ki ki-bold-close icon-xs text-muted"></i>
                                                                            </span>
                                                                        </div>
                                                                        <span class="form-text text-muted">Allowed file types: png, jpg, jpeg.</span>
                                                                    </div>
                                                                </div>   
                                                            
                                                            
                                                                <div class="form-group row">
                                                                        <label class="col-3">Full Name</label>
                                                                        <div class="col-9">
                                                                            <input class="form-control form-control-solid" type="text" name="fullname" placeholder="full name" />
                                                                        </div>
                                                                    </div>
                                                                    <div class="form-group row">
                                                                        <label class="col-3">Email</label>
                                                                        <div class="col-9">
                                                                            <div class="input-group input-group-solid">
                                                                                <div class="input-group-prepend">
                                                                                    <span class="input-group-text">
                                                                                        <i class="la la-at"></i>
                                                                                    </span>
                                                                                </div>
                                                                                <input type="text" class="form-control form-control-solid" name="email" value="" placeholder="Email" />
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                    <div class="form-group row">
                                                                        <label class="col-3">Contact Phone</label>
                                                                        <div class="col-9">
                                                                            <div class="input-group input-group-solid">
                                                                                <div class="input-group-prepend">
                                                                                    <span class="input-group-text">
                                                                                        <i class="la la-phone"></i>
                                                                                    </span>
                                                                                </div>
                                                                                <input type="text" class="form-control form-control-solid" name="mobile" value="+45678967456" placeholder="Phone" />
                                                                            </div>
                                                                            <span class="form-text text-muted">We'll never share your email with anyone else.</span>
                                                                        </div>
                                                                    </div>
                                                        <div class="form-group row">
                                                             <label class="col-3">Birthday</label>
                                                            <div class="col-9">
                                                                    <div class="input-group date input-group-solid">
                                                                        <input type="text" class="form-control form-control-solid" readonly="readonly" value="05/20/2017" id="kt_datepicker_3" name="birthday" />
                                                                        <div class="input-group-append">
                                                                            <span class="input-group-text">
                                                                                <i class="la la-calendar"></i>
                                                                            </span>
                                                                        </div>
                                                                    </div>
                                                                <span class="form-text text-muted">Enable clear and today helper buttons</span>
                                                            </div>
                                                        </div>
                                                                    <div class="form-group row">
                                                                        <label class="col-3">Nationality</label>
                                                                        <div class="col-9">
                                                                            <input class="form-control form-control-solid" type="text" placeholder="nationality" name="nationality" value="" />
                                                                            <span class="form-text text-muted">If you want your invoices addressed to a company. Leave blank to use your full name.</span>
                                                                        </div>
                                                                    </div>
                                                                <div class="form-group row">
                                                                    <label class="col-3">Marital</label>
                                                                    <div class=" col-9 ">
                                                                        <div class="input-group input-group-solid">
                                                                            <select class="form-control form-control-solid " id="kt_select2_1" name="marital">
                                                                              <option value="Single">Single</option>
                                                                              <option value="Married">Married</option>
                                                                              <option value="Widowed">Widowed</option>
                                                                              <option value="Separated">Separated</option>
                                                                              <option value="Divorced">Divorced</option>
                                                                            </select>
                                                                        </div>
                                                                    </div>
                                                                 </div>
                                                                
                                            <div class="form-group row">
												<label class="col-form-label  col-3 ">Language </label>
												<div class="col-9 ">
													<select class="form-control select2 form-control-solid " id="kt_select2_3" name="language" multiple="multiple">
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
												</div>
											</div>
                                       
											<div class="form-group row">
												<label class="col-form-label col-3 ">Country </label>
												<div class=" col-9 ">
													<select class="form-control select2 form-control-solid " id="kt_select2_2" name="country">
                                                    <option value="AF">Afghanistan</option>
																	<option value="AX">Åland Islands</option>
																	<option value="AL">Albania</option>
																	<option value="DZ">Algeria</option>
																	<option value="AS">American Samoa</option>
																	<option value="AD">Andorra</option>
																	<option value="AO">Angola</option>
																	<option value="AI">Anguilla</option>
																	<option value="AQ">Antarctica</option>
																	<option value="AG">Antigua and Barbuda</option>
																	<option value="AR">Argentina</option>
																	<option value="AM">Armenia</option>
																	<option value="AW">Aruba</option>
																	<option value="AU">Australia</option>
																	<option value="AT">Austria</option>
																	<option value="AZ">Azerbaijan</option>
																	<option value="BS">Bahamas</option>
																	<option value="BH">Bahrain</option>
																	<option value="BD">Bangladesh</option>
																	<option value="BB">Barbados</option>
																	<option value="BY">Belarus</option>
																	<option value="BE">Belgium</option>
																	<option value="BZ">Belize</option>
																	<option value="BJ">Benin</option>
																	<option value="BM">Bermuda</option>
																	<option value="BT">Bhutan</option>
																	<option value="BO">Bolivia, Plurinational State of</option>
																	<option value="BQ">Bonaire, Sint Eustatius and Saba</option>
																	<option value="BA">Bosnia and Herzegovina</option>
																	<option value="BW">Botswana</option>
																	<option value="BV">Bouvet Island</option>
																	<option value="BR">Brazil</option>
																	<option value="IO">British Indian Ocean Territory</option>
																	<option value="BN">Brunei Darussalam</option>
																	<option value="BG">Bulgaria</option>
																	<option value="BF">Burkina Faso</option>
																	<option value="BI">Burundi</option>
																	<option value="KH">Cambodia</option>
																	<option value="CM">Cameroon</option>
																	<option value="CA">Canada</option>
																	<option value="CV">Cape Verde</option>
																	<option value="KY">Cayman Islands</option>
																	<option value="CF">Central African Republic</option>
																	<option value="TD">Chad</option>
																	<option value="CL">Chile</option>
																	<option value="CN">China</option>
																	<option value="CX">Christmas Island</option>
																	<option value="CC">Cocos (Keeling) Islands</option>
																	<option value="CO">Colombia</option>
																	<option value="KM">Comoros</option>
																	<option value="CG">Congo</option>
																	<option value="CD">Congo, the Democratic Republic of the</option>
																	<option value="CK">Cook Islands</option>
																	<option value="CR">Costa Rica</option>
																	<option value="CI">Côte d'Ivoire</option>
																	<option value="HR">Croatia</option>
																	<option value="CU">Cuba</option>
																	<option value="CW">Curaçao</option>
																	<option value="CY">Cyprus</option>
																	<option value="CZ">Czech Republic</option>
																	<option value="DK">Denmark</option>
																	<option value="DJ">Djibouti</option>
																	<option value="DM">Dominica</option>
																	<option value="DO">Dominican Republic</option>
																	<option value="EC">Ecuador</option>
																	<option value="EG">Egypt</option>
																	<option value="SV">El Salvador</option>
																	<option value="GQ">Equatorial Guinea</option>
																	<option value="ER">Eritrea</option>
																	<option value="EE">Estonia</option>
																	<option value="ET">Ethiopia</option>
																	<option value="FK">Falkland Islands (Malvinas)</option>
																	<option value="FO">Faroe Islands</option>
																	<option value="FJ">Fiji</option>
																	<option value="FI">Finland</option>
																	<option value="FR">France</option>
																	<option value="GF">French Guiana</option>
																	<option value="PF">French Polynesia</option>
																	<option value="TF">French Southern Territories</option>
																	<option value="GA">Gabon</option>
																	<option value="GM">Gambia</option>
																	<option value="GE">Georgia</option>
																	<option value="DE">Germany</option>
																	<option value="GH">Ghana</option>
																	<option value="GI">Gibraltar</option>
																	<option value="GR">Greece</option>
																	<option value="GL">Greenland</option>
																	<option value="GD">Grenada</option>
																	<option value="GP">Guadeloupe</option>
																	<option value="GU">Guam</option>
																	<option value="GT">Guatemala</option>
																	<option value="GG">Guernsey</option>
																	<option value="GN">Guinea</option>
																	<option value="GW">Guinea-Bissau</option>
																	<option value="GY">Guyana</option>
																	<option value="HT">Haiti</option>
																	<option value="HM">Heard Island and McDonald Islands</option>
																	<option value="VA">Holy See (Vatican City State)</option>
																	<option value="HN">Honduras</option>
																	<option value="HK">Hong Kong</option>
																	<option value="HU">Hungary</option>
																	<option value="IS">Iceland</option>
																	<option value="IN">India</option>
																	<option value="ID">Indonesia</option>
																	<option value="IR">Iran, Islamic Republic of</option>
																	<option value="IQ">Iraq</option>
																	<option value="IE">Ireland</option>
																	<option value="IM">Isle of Man</option>
																	<option value="IL">Israel</option>
																	<option value="IT">Italy</option>
																	<option value="JM">Jamaica</option>
																	<option value="JP">Japan</option>
																	<option value="JE">Jersey</option>
																	<option value="JO">Jordan</option>
																	<option value="KZ">Kazakhstan</option>
																	<option value="KE">Kenya</option>
																	<option value="KI">Kiribati</option>
																	<option value="KP">Korea, Democratic People's Republic of</option>
																	<option value="KR">Korea, Republic of</option>
																	<option value="KW">Kuwait</option>
																	<option value="KG">Kyrgyzstan</option>
																	<option value="LA">Lao People's Democratic Republic</option>
																	<option value="LV">Latvia</option>
																	<option value="LB">Lebanon</option>
																	<option value="LS">Lesotho</option>
																	<option value="LR">Liberia</option>
																	<option value="LY">Libya</option>
																	<option value="LI">Liechtenstein</option>
																	<option value="LT">Lithuania</option>
																	<option value="LU">Luxembourg</option>
																	<option value="MO">Macao</option>
																	<option value="MK">Macedonia, the former Yugoslav Republic of</option>
																	<option value="MG">Madagascar</option>
																	<option value="MW">Malawi</option>
																	<option value="MY">Malaysia</option>
																	<option value="MV">Maldives</option>
																	<option value="ML">Mali</option>
																	<option value="MT">Malta</option>
																	<option value="MH">Marshall Islands</option>
																	<option value="MQ">Martinique</option>
																	<option value="MR">Mauritania</option>
																	<option value="MU">Mauritius</option>
																	<option value="YT">Mayotte</option>
																	<option value="MX">Mexico</option>
																	<option value="FM">Micronesia, Federated States of</option>
																	<option value="MD">Moldova, Republic of</option>
																	<option value="MC">Monaco</option>
																	<option value="MN">Mongolia</option>
																	<option value="ME">Montenegro</option>
																	<option value="MS">Montserrat</option>
																	<option value="MA">Morocco</option>
																	<option value="MZ">Mozambique</option>
																	<option value="MM">Myanmar</option>
																	<option value="NA">Namibia</option>
																	<option value="NR">Nauru</option>
																	<option value="NP">Nepal</option>
																	<option value="NL">Netherlands</option>
																	<option value="NC">New Caledonia</option>
																	<option value="NZ">New Zealand</option>
																	<option value="NI">Nicaragua</option>
																	<option value="NE">Niger</option>
																	<option value="NG">Nigeria</option>
																	<option value="NU">Niue</option>
																	<option value="NF">Norfolk Island</option>
																	<option value="MP">Northern Mariana Islands</option>
																	<option value="NO">Norway</option>
																	<option value="OM">Oman</option>
																	<option value="PK">Pakistan</option>
																	<option value="PW">Palau</option>
																	<option value="PS">Palestinian Territory, Occupied</option>
																	<option value="PA">Panama</option>
																	<option value="PG">Papua New Guinea</option>
																	<option value="PY">Paraguay</option>
																	<option value="PE">Peru</option>
																	<option value="PH">Philippines</option>
																	<option value="PN">Pitcairn</option>
																	<option value="PL">Poland</option>
																	<option value="PT">Portugal</option>
																	<option value="PR">Puerto Rico</option>
																	<option value="QA">Qatar</option>
																	<option value="RE">Réunion</option>
																	<option value="RO">Romania</option>
																	<option value="RU">Russian Federation</option>
																	<option value="RW">Rwanda</option>
																	<option value="BL">Saint Barthélemy</option>
																	<option value="SH">Saint Helena, Ascension and Tristan da Cunha</option>
																	<option value="KN">Saint Kitts and Nevis</option>
																	<option value="LC">Saint Lucia</option>
																	<option value="MF">Saint Martin (French part)</option>
																	<option value="PM">Saint Pierre and Miquelon</option>
																	<option value="VC">Saint Vincent and the Grenadines</option>
																	<option value="WS">Samoa</option>
																	<option value="SM">San Marino</option>
																	<option value="ST">Sao Tome and Principe</option>
																	<option value="SA">Saudi Arabia</option>
																	<option value="SN">Senegal</option>
																	<option value="RS">Serbia</option>
																	<option value="SC">Seychelles</option>
																	<option value="SL">Sierra Leone</option>
																	<option value="SG">Singapore</option>
																	<option value="SX">Sint Maarten (Dutch part)</option>
																	<option value="SK">Slovakia</option>
																	<option value="SI">Slovenia</option>
																	<option value="SB">Solomon Islands</option>
																	<option value="SO">Somalia</option>
																	<option value="ZA">South Africa</option>
																	<option value="GS">South Georgia and the South Sandwich Islands</option>
																	<option value="SS">South Sudan</option>
																	<option value="ES">Spain</option>
																	<option value="LK">Sri Lanka</option>
																	<option value="SD">Sudan</option>
																	<option value="SR">Suriname</option>
																	<option value="SJ">Svalbard and Jan Mayen</option>
																	<option value="SZ">Swaziland</option>
																	<option value="SE">Sweden</option>
																	<option value="CH">Switzerland</option>
																	<option value="SY">Syrian Arab Republic</option>
																	<option value="TW">Taiwan, Province of China</option>
																	<option value="TJ">Tajikistan</option>
																	<option value="TZ">Tanzania, United Republic of</option>
																	<option value="TH">Thailand</option>
																	<option value="TL">Timor-Leste</option>
																	<option value="TG">Togo</option>
																	<option value="TK">Tokelau</option>
																	<option value="TO">Tonga</option>
																	<option value="TT">Trinidad and Tobago</option>
																	<option value="TN">Tunisia</option>
																	<option value="TR">Turkey</option>
																	<option value="TM">Turkmenistan</option>
																	<option value="TC">Turks and Caicos Islands</option>
																	<option value="TV">Tuvalu</option>
																	<option value="UG">Uganda</option>
																	<option value="UA">Ukraine</option>
																	<option value="AE">United Arab Emirates</option>
																	<option value="GB">United Kingdom</option>
																	<option value="US" selected="selected">United States</option>
																	<option value="UM">United States Minor Outlying Islands</option>
																	<option value="UY">Uruguay</option>
																	<option value="UZ">Uzbekistan</option>
																	<option value="VU">Vanuatu</option>
																	<option value="VE">Venezuela, Bolivarian Republic of</option>
																	<option value="VN">Viet Nam</option>
																	<option value="VG">Virgin Islands, British</option>
																	<option value="VI">Virgin Islands, U.S.</option>
																	<option value="WF">Wallis and Futuna</option>
																	<option value="EH">Western Sahara</option>
																	<option value="YE">Yemen</option>
																	<option value="ZM">Zambia</option>
																	<option value="ZW">Zimbabwe</option>
													</select>
												</div>
											</div>
											
                                                         
                                                          <div class="form-group row">
                                                                <label class="col-3">City</label>
                                                                 <div class="col-9">
                                                                  <input class="form-control form-control-solid" type="text" name="city" value="" placeholder="city"/>
                                                                </div>
                                                           </div> 

                                                         <div class="form-group row">
                                                            <label class="col-3">description</label>
                                                            <div class="col-9">
															  <textarea name="content" class="form-control" data-provide="markdown" rows="10"></textarea>
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



    
    <script>
         new KTAvatar('kt_user_avatar_1');
    </script>

@endsection

