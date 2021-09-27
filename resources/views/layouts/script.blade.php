<script>
	var baseUrl = @json(url('/'));

	// $("input[required]").parent("label").addClass("required");
</script>

<!--begin::Global Theme Bundle(used by all pages)-->
<script src="{{asset('metronic/plugins/global/plugins.bundle.js')}}"></script>
		<script src="{{asset('metronic/plugins/custom/prismjs/prismjs.bundle.js')}}"></script>
		<script src="{{asset('metronic/js/scripts.bundle.js')}}"></script>
		<!--end::Global Theme Bundle-->
		<!--begin::Page Vendors(used by this page)-->
		<script src="{{asset('metronic/plugins/custom/fullcalendar/fullcalendar.bundle.js')}}"></script>
		<!--end::Page Vendors-->
		<!--begin::Page Scripts(used by this page)-->
		<script src="{{asset('metronic/js/pages/widgets.js')}}"></script>
		<script src="{{asset('metronic/js/pages/crud/forms/widgets/bootstrap-datepicker.js')}}"></script>
		<script src="{{asset('metronic/js/pages/crud/forms/widgets/select2.js')}}"></script>
		<script src="{{asset('metronic/js/pages/crud/forms/widgets/bootstrap-daterangepicker.js')}}"></script>
		<!-- <script src="{{asset('metronic/js/pages/crud/forms/editors/quill.js')}}"></script> -->
		<script src="{{asset('metronic/js/pages/crud/forms/widgets/ion-range-slider.js')}}"></script>

		<!-- <script src="{{asset('metronic/js/pages/crud/file-upload/image-input.js')}}"></script> -->
		<script src="{{asset('metronic/js/aside-menu.js')}}"></script>

		<script src="https://unpkg.com/filepond-plugin-image-preview/dist/filepond-plugin-image-preview.js"></script>
<script src="http://ajax.aspnetcdn.com/ajax/jquery.validate/1.11.1/jquery.validate.min.js"></script>
<script src="https://unpkg.com/filepond-plugin-image-resize/dist/filepond-plugin-image-resize.js"></script>

		<script src="{{asset('js/helper/aside_menu_mark.js')}}"></script>
		<script src="{{asset('js/helper/block_ui.js')}}"></script>
		<script src="{{asset('js/helper/laravel_validation_errors.js')}}"></script>
		<script src="{{asset('js/helper/reset_form.js')}}"></script>
		<script src="{{asset('js/helper/toastr_msg/toastr_general_options.js')}}"></script>
		<script src="{{asset('js/helper/sweet_alert_msg/general_sweet_alert.js')}}"></script>
		<script src="{{asset('js/helper/delete_confirmation/delete.js')}}"></script>

		<script src="https://unpkg.com/filepond/dist/filepond.js"></script>


