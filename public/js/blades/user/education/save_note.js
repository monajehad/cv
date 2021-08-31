let AddNoteToHistoryformHtml = $("#add_note_to_history_form");
AddNoteToHistoryformHtml.validate({
    rules: {

        // "comment": {required: true},
    },
    
    submitHandler: function (form) {

        saveNoteToHistory(form);
        return false;
    }
});


function saveNoteToHistory(form) {
    let form_data = new FormData(form);
    let orderHistoryContainer = $(`#order_history_container`);

    $.ajax({
        url:  AddNoteToHistoryformHtml.attr('action'),
        type: AddNoteToHistoryformHtml.attr('method'),
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
                let history_record = result.data.history_record;

                orderHistoryContainer.prepend(history_record.history_card);
                toastr.success(result.message);
            } else {
                toastr.error(result.message);
            }
        },
        complete: function () {
        }
    });
}





