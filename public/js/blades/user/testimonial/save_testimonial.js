$("#save_testimonial_form").validate({
    rules: {

        "person_name": {required: true},
         "person_email": {required: true},
         "person_mobile": {required: true},
       //  "about": {required: true},

    },
    
    submitHandler: function (form) {

        saveTestimonial(form);
        return false;
    }
});


function saveTestimonial(form) {
    let form_data = new FormData(form);
    $.ajax({
        url: baseUrl+ "/user/testimonial/save",
        type: 'POST',
        cache: false,
        contentType: false,
        processData: false,
        data: form_data,
        error: function (jqXHR, error, errorThrown) {
            if (jqXHR.responseJSON) {
                let errors = jqXHR.responseJSON.errors;
                showValidationErrors(errors,'#save_testimonial_form');

            } else {
                swalException();
             
            }
        },
        success: function (result) {
            if (result.status) {
                $('#save_testimonial_modal').modal('toggle');
                resetForm('save_testimonial_form');
                $('#testimonial_id').val(0);
                toastr.success(result.message);
                $('#testimonial_container').reload();
            } else {
                toastr.error(result.message);
              
            }
        },
        complete: function () {
        }
    });
}


$(document).on('click','.add_testimonial_btn',function (){
    resetForm('save_testimonial_form');
    $('#testimonial_id').val(0);
});





