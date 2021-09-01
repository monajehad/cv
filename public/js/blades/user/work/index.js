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
        data: {},
        success: function (result) {
            if (result.status) {
                let works = result.data.works;
                console.log('works', result.data);
                if (educations.length == 0) {

                } else {


                }

                works.forEach(function (work) {
                    workContainer.append(work.work_card);
                });


            }

        },
        complete: function () {

        },
        error: function () {
        }
    });

}

