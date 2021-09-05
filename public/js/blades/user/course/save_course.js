let SaveCourseFormHtml = $("#save_course_form");
SaveCourseFormHtml.validate({
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
    let courseContainer = $(`#course_container`);

    $.ajax({
        url:  SaveCourseFormHtml.attr('action'),
        type: SaveCourseFormHtml.attr('method'),
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
                $('#save_course_modal').modal('hide');
                let course = result.data.course;


                refreshCourse();
                toastr.success(result.message);
                $('#add_your_first_course').hide();
                resetForm('save_course_form');
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
    $('#course_id').val(null);
});





