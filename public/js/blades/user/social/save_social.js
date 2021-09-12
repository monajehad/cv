let SaveSocialFormHtml = $("#save_social_form");
SaveSocialFormHtml.validate({
    /*rules: {

        "link": {required: true},
        "social_website_id": {required: true},
         

    },
    */
    submitHandler: function (form) {

        saveSocial(form);
        return false;
    }
});


function saveSocial(form) {
    let form_data = new FormData(form);
    let socialContainer = $(`#social_container`);
    console.log(form_data);

    $.ajax({
        url:  SaveSocialFormHtml.attr('action'),
        type: SaveSocialFormHtml.attr('method'),
        cache: false,
        contentType: false,
        processData: false,
        data: form_data,
        error: function (jqXHR, error, errorThrown) {
            if (jqXHR.responseJSON) {
                let errors = jqXHR.responseJSON.errors;
                showValidationErrors(errors,'#save_social_form');

            } else {
                swalException();
             
            }
        },
        success: function (result) {
            if (result.status) {
                $('#save_social_modal').modal('hide');
                let social = result.data.social;


                refreshSocial();
                toastr.success(result.message);
                $('#add_your_first_social').hide();
                resetForm('save_social_form');
            } else {
                toastr.error(result.message);
            }
        },

complete: function () {
}
});
}


$(document).on('click','.add_social_btn',function (){
    resetForm('save_social_form');
    $('#social_id').val(null);
});





