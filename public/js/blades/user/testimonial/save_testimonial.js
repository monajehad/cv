let SaveTestimonialFormHtml = $("#save_testimonial_form");
SaveTestimonialFormHtml.validate({
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
    let testimonialContainer = $(`#testimonial_container`);

    $.ajax({
        url:  SaveTestimonialFormHtml.attr('action'),
        type: SaveTestimonialFormHtml.attr('method'),
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
                $('#save_testimonial_modal').modal('hide');
                let testimonial = result.data.testimonial;
                
                refreshTestimonial();
                toastr.success(result.message);
                $('#add_your_first_testimonial').hide();
                resetForm('save_testimonial_form');
                
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
    $('#testimonial_id').val(null);
});





