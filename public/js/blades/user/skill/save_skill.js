$("#save_skill_form").validate({
    rules: {

        "name": {required: true},
         "level": {required: true},
         

    },
    
    submitHandler: function (form) {

        saveSkill(form);
        return false;
    }
});


function saveSkill(form) {
    let form_data = new FormData(form);
    $.ajax({
        url: baseUrl+ "/user/skill/save",
        type: 'POST',
        cache: false,
        contentType: false,
        processData: false,
        data: form_data,
        error: function (jqXHR, error, errorThrown) {
            if (jqXHR.responseJSON) {
                let errors = jqXHR.responseJSON.errors;
                showValidationErrors(errors,'#save_skill_form');

            } else {
                swalException();
             
            }
        },
        success: function (result) {
            if (result.status) {
                $('#save_skill_modal').modal('toggle');
                resetForm('save_skill_form');
                $('#skill_id').val(0);
                toastr.success(result.message);
                $('#skill_container').reload();
            } else {
                toastr.error(result.message);
              
            }
        },
        complete: function () {
        }
    });
}


$(document).on('click','.add_skill_btn',function (){
    resetForm('save_skill_form');
    $('#skill_id').val(0);
});





