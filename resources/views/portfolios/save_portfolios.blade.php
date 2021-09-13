@extends('layouts.cpanel.app')

@php
    $add = 'add_portfolios';
    $edit = 'edit_portfolios';
    $title = 'portfolio';
	$page_title =  ($portfolio??false) ? $edit :  $add ;

   
@endphp
@section('title',$page_title)
@section('style')

<link href="{{asset('js/helper/filepond/css/filepond.min.css')}}" rel="stylesheet" />
@endsection
@section('subheader')
  
  <!-- begin:: Subheader -->
  <div class="subheader py-2 py-lg-6 subheader-solid" id="kt_subheader">
							<div class="container-fluid d-flex align-items-center justify-content-between flex-wrap flex-sm-nowrap">
								<!--begin::Info-->
								<div class="d-flex align-items-center flex-wrap mr-2">
									
									<!--begin::Page Heading-->
									<div class="d-flex align-items-baseline flex-wrap mr-5">
										<!--begin::Page Title-->
										<span class="card-icon mr-3">
														<i class="flaticon-list icon-lg text-primary"></i>
													</span>
										<h5 class="text-dark font-weight-bold my-1 mr-5">{{$title}} | {{$page_title}}</h5>
										<div class="subheader-separator subheader-separator-ver mt-2 mb-2 mr-5 bg-gray-200"></div>
										<!--end::Page Title-->
										<!--begin::Search Form-->
									<div class="d-flex align-items-center" id="kt_subheader_search">
										<span class="text-dark-50 font-weight-bold" id="kt_subheader_total">Enter project details and submit</span>
									</div>
									<!--end::Search Form-->
                                    </div>
                                </div>
                                <div class="d-flex align-items-center">
									<!--begin::Actions-->
									<a href="{{route('user.portfolios.create')}}" class="btn btn-primary add_portfolios_btn" >Add portfolios</a>

                            </div>
                            </div>
                          
 </div>

@endsection
@section('content')
  <!--begin::Entry-->
 <div class="d-flex flex-column-fluid">
							<!--begin::Container-->
							<div class="container">

								<div class="card">
									<!--begin::Card body-->
									<div class="card-body p-0">
								                	<form class="form pt-20 pl-20" id="save_portfolios_form">
														@csrf
													     <input value="{{$portfolios->id??0}}" type="hidden" id="portfolios_id" name="portfolios_id">

																         	<div class="form-group row">
																					<label class="col-xl-3 col-lg-3 text-left col-form-label">Portfolios Name <span style="color:red;font-size: large;">*</span>
                                                                                      </label>
																					<div class="col-lg-9 col-xl-6">
																						<input class="form-control form-control-lg form-control-solid"
																						 type="text" name="portfolio_name" placeholder="Portfolios Name" 
																						 value="{{$portfolio->portfolio_name ?? ''}}"/>
																					</div>
																				</div>
																				<div class="form-group row">
																					<label class="col-xl-3 col-lg-3 text-left col-form-label">Link <span style="color:red;font-size: large;">*</span></label>
																					<div class="col-lg-9 col-xl-6">
																						<input class="form-control form-control-lg form-control-solid"
																						value="{{$portfolio->link ?? ''}}" type="text" name="link" placeholder="http://" />
																					</div>
																				</div>
																				
																				<div class="form-group row">
																					<label class="col-xl-3 col-lg-3 text-left col-form-label"> date(start-end) <span style="color:red;font-size: large;">*</span></label>
																					<div class="col-lg-9 col-xl-6">
																						<div class="input-daterange input-group input-group-solid" id="kt_datepicker_5">
																							<input type="text" class="form-control" placeholder="start" 
																							name="start_date" id="start_date"
																							value="{{$portfolio->start_date ?? ''}}"/>
																							<div class="input-group-append">
																								<span class="input-group-text">
																									<i class="la la-ellipsis-h"></i>
																								</span>
																							</div>
																							<input type="text" class="form-control" 
																							name="end_date" placeholder="end" id="end_date"
																							value="{{$portfolio->end_date ?? ''}}"/>
																						</div>
                                                                                    </div>
																				</div>
													
                                                                                <div class="form-group row">
																					<label class="col-xl-3 col-lg-3 text-left col-form-label">Description</label>
                                                                                 <div class="col-lg-9 col-xl-6">
																				 <textarea  name="details" value="{{ $portfolio->details ??''}}" class="form-control i7_max_length" id="details" maxlength="500" placeholder="" rows="6"></textarea>
																							<span class="form-text text-muted">maximum 500 character</span>
																							<span class="text-danger lev"></span>
																				</div>
																				</div>
																				<div class="form-group row">
																					<label class="col-xl-3 col-lg-3 text-left col-form-label"> media_type <span style="color:red;font-size: large;">*</span></label>
																				   <div class="col-lg-9 col-xl-6 input-group-solid">
																					   <select class="form-control selectpicker" name="type">
																					      <?php $type_media = \App\Models\Portfolio_media::all();
																						   $types_media = array('doc', 'video', 'image', 'sound');
																						  ?>
																					      @foreach($types_media as $media)
																						   <option value="{{$media }}" {{ ($media == $portfolio->portfolioMedia ? "selected":"") }} >  {{$media }}	</option>
																						   
																						@endforeach
																					 </select>
																						
                                                                                   </div>
																				</div>

																				<div class="form-group row">
																					<label class="col-xl-3 col-lg-3 text-left col-form-label"> upload project media <span style="color:red;font-size: large;">*</span></label>
																				   <div class="col-lg-9 col-xl-6 input-group-solid">
																				   <input type="file" class="filepond" multiple  data-allow-reorder="true"
                                                                                      id="upload" name="name_media[]" >
																					   
																						
                                                                                   </div>
																				</div>
													
																				<div class="text-right col-9 mb-5">
																				   <button type="submit" form="save_portfolios_form" class="btn btn-success font-weight-bolder text-uppercase px-9 py-4" >Save</button>
																				</div>
													  </form>
									       </div>
								  </div>
						</div>
   </div>
   

@endsection



@section('script')
<script>

const inputElement = document.querySelector('input[id="upload"]');
    let pond = FilePond.create(inputElement);
	pond.setOptions({
    maxFiles: 10,
    // required: true
});

	FilePond.setOptions({
        server: {
            url: '/user/portfolios/store/files',
            
            headers: {
                'X-CSRF-TOKEN': '{{ csrf_token() }}'
            }
        }
    });
</script>

 <script src="{{asset('js/blades/user/portfolios/save_portfolios.js')}}"></script>
 <script src="{{asset('js/helper/filepond/js/filepond.min.js')}}"></script>

   <script>
	   
	   </script>
@endsection
