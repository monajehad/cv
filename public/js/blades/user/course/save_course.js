$("#save_course_form").validate({
    rules: {

        "name": {required: true},
         "hours": {required: true},
         "source": {required: true},

    },
    
    submitHandler: function (form) {

        saveCourse(form);
        return false;
    }
});


function saveCourse(form) {
    let form_data = new FormData(form);
    
    $.ajax({
        url: baseUrl+"/user/course/save",
        type: 'POST',
        cache: false,
        contentType: false,
        processData: false,
        data: form_data,
        error: function (jqXHR, error, errorThrown) {
            if (jqXHR.responseJSON) {
                let errors = jqXHR.responseJSON.errors;
                showValidationErrors(errors,'#save_course_form');

            } else {
                swalException();
             
            }
        },
        success: function (result) {
            if (result.status) {
                $('#save_course_modal').modal('toggle');
                resetForm('save_course_form');
                $('#course_id').val(0);
                toastr.success(result.message);
                $('#course_container').reload();
            } else {
                toastr.error(result.message);
              
            }
        },
        complete: function () {
        }
    });
}


$(document).on('click','.add_course_btn',function (){
    resetForm('save_course_form');
    $('#course_id').val(0);
});





