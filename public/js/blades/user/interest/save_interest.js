$("#save_interest_form").validate({
    rules: {

        "name": {required: true},
         

    },
    
    submitHandler: function (form) {

        saveInterest(form);
        return false;
    }
});


function saveInterest(form) {
    let form_data = new FormData(form);
    $.ajax({
        url: baseUrl+ "/user/interest/save",
        type: 'POST',
        cache: false,
        contentType: false,
        processData: false,
        data: form_data,
        error: function (jqXHR, error, errorThrown) {
            if (jqXHR.responseJSON) {
                let errors = jqXHR.responseJSON.errors;
                showValidationErrors(errors,'#save_interest_form');

            } else {
                swalException();
             
            }
        },
        success: function (result) {
            if (result.status) {
                $('#save_interest_modal').modal('toggle');
                resetForm('save_interest_form');
                $('#interest_id').val(0);
                toastr.success(result.message);
                $('#interest_container').reload();
            } else {
                toastr.error(result.message);
              
            }
        },
        complete: function () {
        }
    });
}


$(document).on('click','.add_interest_btn',function (){
    resetForm('save_interest_form');
    $('#interest_id').val(0);
});





