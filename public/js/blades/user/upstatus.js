

updateStatus = function (key, status, id ,rl) {

    $.ajax({
        url: baseUrl + rl,
        type: "post",
        data: {
            'status': status,
            'id': id,
            'key': key,
        },
        error: function (jqXHR, error, errorThrown) {
            if (jqXHR.responseJSON) {
                let errors = jqXHR.responseJSON.errors;
                swalException();

            } else {

                swalException();
            }
        },
        success: function (result) {
            if (result.status) {
                toastr.success(result.message);
            } else {
                toastr.error(result.message);
            }
        },
        complete: function () {
        }
    });
};


$('.i7_max_length').maxlength({
    threshold: 5,
    warningClass: "label label-danger label-rounded label-inline",
    limitReachedClass: "label label-primary label-rounded label-inline",
    appendToParent: true

});