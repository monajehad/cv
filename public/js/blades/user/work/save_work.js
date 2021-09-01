let SaveEducationFormHtml = $("#save_education_form");
SaveEducationFormHtml.validate({
    rules: {

        // "place_name": {required: true},
        // "sepcialization": {required: true},
    },
    
    submitHandler: function (form) {

        saveEducation(form);
        return false;
    }
});


function saveEducation(form) {
    let form_data = new FormData(form);
    let educationContainer = $(`#education_container`);

    $.ajax({
        url:  SaveEducationFormHtml.attr('action'),
        type: SaveEducationFormHtml.attr('method'),
        cache: false,
        contentType: false,
        processData: false,
        data: form_data,
        error: function (jqXHR, error, errorThrown) {
            if (jqXHR.responseJSON) {
                let errors = jqXHR.responseJSON.errors;
                showValidationErrors(errors);

            } else {
                swalException();
            }
        },
        success: function (result) {
            if (result.status) {
                let education = result.data.education;

                educationContainer.prepend(education.history_card);
                toastr.success(result.message);
            } else {
                toastr.error(result.message);
            }
        },
        complete: function () {
        }
    });
}





