let nextUrl = null;


$(document).on('click', '#refresh_education_btn', function () {
    refreshEducation();

});

$(document).ready(function () {
    refreshEducation();
});

function refreshEducation() {
    let educationContainer = $(`#education_container`);

    let URL = baseUrl + `/user/education/index`;
    educationContainer.empty();

    $.ajax({
        url: URL,
        type: 'GET',
        data: {},
        success: function (result) {
            if (result.status) {
                let educations = result.data.educations;
                console.log('educations', result.data);
                if (educations.length == 0) {

                } else {


                }

                educations.forEach(function (education) {
                    educationContainer.append(education.education_card);
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
        url: baseUrl + "/user/education/status/update",
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

