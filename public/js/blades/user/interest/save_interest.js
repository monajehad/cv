let SaveInterestFormHtml = $("#save_interest_form");
SaveInterestFormHtml.validate({
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
    let skillContainer = $(`#skill_container`);

    $.ajax({
        url:  SaveInterestFormHtml.attr('action'),
        type: SaveInterestFormHtml.attr('method'),
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
                $('#save_interest_modal').modal('hide');
                let interest = result.data.interest;
                refreshInterest();
                toastr.success(result.message);
                resetForm('save_interest_form');
                
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
    $('#interest_id').val(null);
});





