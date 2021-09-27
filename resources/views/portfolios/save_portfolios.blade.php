@extends('layouts.cpanel.app')

@php
    $add = 'add_portfolios';
    $edit = 'edit_portfolios';
    $title = 'portfolio';
	$page_title =  ($portfolio??false) ? $edit :  $add ;

   
@endphp
@section('title',$page_title)
@section('style')
<style>
	.image-input .image-input-wrapper {
    width: 200px !important;
    height: 200px !important;
   
}

	</style>
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
								<a href="{{route('user.portfolios.index')}}" class="btn btn-light-primary px-4  add_portfolios_btn mr-5" > < Back</a>

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
													     <input value="{{$portfolio->id ??''}}" type="hidden" id="portfolio_id" name="portfolio_id">

																         	<div class="form-group row">
																					<label class="col-xl-3 col-lg-3 text-left col-form-label required">Portfolios Name 
                                                                                      </label>
																					<div class="col-lg-9 col-xl-6">
																						<input class="form-control form-control-lg form-control-solid"
																						 type="text" name="portfolio_name" placeholder="Portfolios Name" 
																						 value="{{ $portfolio->portfolio_name ?? ''}}"/>
																					</div>
																				</div>
																				<div class="form-group row">
																					<label class="col-xl-3 col-lg-3 text-left col-form-label required">Link </label>
																					<div class="col-lg-9 col-xl-6">
																						<input class="form-control form-control-lg form-control-solid"
																						value="{{ $portfolio->link ?? ''}}" type="text" name="link" placeholder="http://" />
																					</div>
																					
																				
																				</div>
																				
																				<div class="form-group row">
																					<label class="col-xl-3 col-lg-3 text-left col-form-label required"> date(start-end)</label>
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
																				 <textarea  name="details" class="form-control i7_max_length" id="details" maxlength="500" placeholder="" rows="6">
																				 {{ $portfolio->details ?? ''}}
																				 </textarea>
																							<span class="form-text text-muted">maximum 500 character</span>
																							<span class="text-danger lev"></span>
																				</div>
																				</div>
																				<div class="form-group row">
																					<label class="col-xl-3 col-lg-3 text-left col-form-label"> media_type </label>
																				   <div class="col-lg-9 col-xl-6 input-group-solid">
																					   <select class="form-control selectpicker" name="type">
																					      <?php $type_media = \App\Models\Portfolio_media::all();
																						   $types_media = array('doc', 'video', 'image', 'sound');
																						  ?>
																					      @foreach($types_media as $type)
																						   <option value="{{$type }}" {{ ( $portfolioss ->type ?? '') == $type  ? "selected":"" }} >  {{$type }}	</option>
																						   
																						@endforeach
</select>
																						
                                                                                   </div>
																				</div>

																				<div class="form-group row">
																					<label class="col-xl-3 col-lg-3 text-left col-form-label"> upload project media </label>
																				   <div class="col-lg-9 col-xl-6 input-group-solid">
																				   <input type="file" class="filepond" multiple  data-allow-reorder="true"
                                                                                      id="upload" name="name_media[]" value="{{ $portfolioss->name ?? ''}}" >
																					   
 
                                                                                   </div>
																				   
	
																			</div>
																	
	<div class="row form-group ">
		@if($portfoliosimage??false)
		<?php $i=1;?>
      @foreach($portfoliosimage as $image)
		<div class="col-lg-3 col-sm-6 c mt-5">
		

													<div class="image-input image-input-outline" id="kt_image_{{$i++}}" style="background-image: url(assets/media/users/blank.png)">
													@if($image->type=='video')
														<video class="image-input-wrapper" controls>
															<source src="{{$image->name ?? ''}}"  >
														</video>
													@elseif($image->type=='doc')
														
														<br>
														<br>
														<a  href="{{$image->name ?? ''}}" target="_blank">
															View Document
														</a > 
														<br>
														<br>
														<br>
													@elseif($image->type=='sound')
														<audio  class="image-input-wrapper" controls>
															<source src="{{$image->name ?? ''}}"  >
														</audio >
													@else
														<div class="image-input-wrapper" style="background-image: url('{{$image->name?? ''}}')"></div>
													@endif
														<label class="btn btn-xs btn-icon btn-circle btn-white btn-hover-text-primary btn-shadow" data-action="change" data-toggle="tooltip" title="" data-original-title="Change avatar">
															<i class="fa fa-pen icon-sm text-muted"></i>
															<input type="file" name="name[{{$image->id}}]" accept=".png, .jpg, .jpeg" />
															<input type="hidden" name="profile_avatar_remove[]" value="{{$image->id}}" />
														</label>
														<span class="btn btn-xs btn-icon btn-circle btn-white btn-hover-text-primary btn-shadow" data-action="cancel" data-toggle="tooltip" title="Cancel avatar">
															<i class="ki ki-bold-close icon-xs text-muted"></i>
														</span>
														<span class="btn btn-xs btn-icon btn-circle btn-white btn-hover-text-primary btn-shadow" data-action="remove" data-toggle="tooltip" title="Remove avatar">
															<i class="ki ki-bold-close icon-xs text-muted"></i>
														</span>
																			
					
													</div>
                 </div>
   @endforeach
   @endif
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
	
    FilePond.registerPlugin(FilePondPluginImagePreview);

    FilePond.registerPlugin(FilePondPluginImageResize);

const inputElement = document.querySelector('input[id="upload"]');
    let pond = FilePond.create(inputElement);
	pond.setOptions({
	allowImagePreview:true,
    maxFiles: 10,
	allowImageResize:true,
	imageResizeTargetWidth	:100,
	width:100,
	imagePreviewMinHeight:50,
	imagePreviewMaxHeight:100,

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

// var KTImageInputDemo = function () {
// 	// Private functions
// 	var initDemos = function () {
// 		// Example 1
// 		let i=1;
// 		let portImg = $portfoliosimage[];

// 		 for (i = 0; i < $portImg.length; i++) {
// 		var avatar1 = new KTImageInput(`kt_image_${i}`);


// 		 }
// 	}

// 	return {
// 		// public functions
// 		init: function() {
// 			initDemos();
// 		}
// 	};
// }();

// KTUtil.ready(function() {
// 	KTImageInputDemo.init();
// });  


var KTImageInputDemo = function () {
	// Private functions
	var initDemos = function () {
		// Example 1
		let i=1;
		// let portImg = new Array();
		// let portImg = $portfoliosimage;
		// var avatar1 = new KTImageInput('kt_image_1');

		for (i = 0; i < 9; i++) {
		var avatar1 = new KTImageInput(`kt_image_${i}`);
		}


	
	}

	return {
		// public functions
		init: function() {
			initDemos();
		}
	};
}();

KTUtil.ready(function() {
	KTImageInputDemo.init();
});
	   </script>
@endsection
