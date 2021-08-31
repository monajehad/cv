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

