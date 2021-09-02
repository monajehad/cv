let SaveWorkFormHtml = $("#save_work_form");
SaveWorkFormHtml.validate({
    rules: {

        "company_name": {required: true},
         "job_title": {required: true},
    },
    
    submitHandler: function (form) {

        saveWork(form);
        return false;
    }
});


function saveWork(form) {
    let form_data = new FormData(form);
    let workContainer = $(`#work_container`);

    $.ajax({
        url:  SaveWorkFormHtml.attr('action'),
        type: SaveWorkFormHtml.attr('method'),
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
                $('#save_work_modal').modal('hide');
                let work = result.data.work;

                workContainer.prepend(work.work_card);
                toastr.success(result.message);
            } else {
                toastr.error(result.message);
            }
        },
        complete: function () {
        }
    });
}






