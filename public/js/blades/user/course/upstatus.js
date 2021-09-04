

updateStatus = function (key, status, id) {

    $.ajax({
        url: baseUrl + "/user/course/status/update",
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


fillCourseModal = function(id)
{

    
    $('#course_id').val(id);
    $('#course_name').val(name);
    // $('#full_name').val(row.name);
    // $('#mobile').val(row.mobile);
    // $('#password').val(row.password);


    // $('#is_active').prop('checked', row.is_active );







}
