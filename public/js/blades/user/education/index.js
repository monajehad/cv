let nextUrl = null;
education_data = [];

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
                    $('#add_your_first_education').show();
                } else {

                    $('#add_your_first_education').hide();
                }

                educations.forEach(function (education) {
                    educationContainer.append(education.education_card);
                    education_data[education.id] = education;
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

$('.i7_max_length').maxlength({
    threshold: 5,
    warningClass: "label label-danger label-rounded label-inline",
    limitReachedClass: "label label-primary label-rounded label-inline",
    appendToParent: true

});

fillEducationModal = function(id)
{
    resetForm('save_education_form');
    var row = education_data[id];
    $('#education_id').val(id);

    $('#place_name').val(row.place_name);
    $('#specialization').val(row.specialization);
    $('#degree').selectpicker('val',row.degree);
    $('#date').val(row.start_date+' | '+row.end_date);
    $('#details').val(row.details);


    $('.i7_max_length').maxlength({
        threshold: 5,
        warningClass: "label label-danger label-rounded label-inline",
        limitReachedClass: "label label-primary label-rounded label-inline",
        appendToParent: true

    });

   
}

$(document).on('click','#add_education_btn',function (){

    resetForm('save_education_form');
});
