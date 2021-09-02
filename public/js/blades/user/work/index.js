let nextUrl = null;


// $(document).on('click', '#refresh_education_btn', function () {
//     refreshWork();

// });

$(document).ready(function () {
    refreshWork();
});

function refreshWork() {
    let workContainer = $(`#work_container`);

    let URL = baseUrl + `/user/work/index`;
    workContainer.empty();

    $.ajax({
        url: URL,
        type: 'GET',
        data: {
                'company_name':company_name,
                'job_title':job_title,
                'start_date':start_date,
                'end_date':end_date,
                'details':details,
        },
 
        success: function (result) {
            if (result.status) {
                let works = result.data.works;
                console.log('works', result.data);
                

                works.forEach(function (work) {
                    workContainer.append(work,work_card);
                });


            }

        },
        complete: function () {

        },
        error: function () {
        }
    });

}

updateStatus = function (key, status, id) {

    $.ajax({
        url: baseUrl + "/user/work/status/update",
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
