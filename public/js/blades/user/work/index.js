let nextUrl = null;
work_data = [];


$(document).on('click', '#refresh_work_btn', function () {
    refreshWork();

});

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
                
        },
 
        success: function (result) {
            if (result.status) {
                let works = result.data.works;
                console.log('works', result.data);
                if (works.length == 0) {
                    $('#add_your_first_work').show();
                } else {

                    $('#add_your_first_work').hide();
                }


                works.forEach(function (work) {
                    workContainer.append(work.work_card);
                    work_data[work.id] = work;
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

$('.i7_max_length').maxlength({
    threshold: 5,
    warningClass: "label label-danger label-rounded label-inline",
    limitReachedClass: "label label-primary label-rounded label-inline",
    appendToParent: true

});


fillWorkModal = function(id)
{
    resetForm('save_work_form');
    var row = work_data[id];
    $('#work_id').val(id);

    $('#company_name').val(row.company_name);
    $('#job_title').val(row.job_title);
    $('#date').val(row.start_date+' | '+row.end_date);
    $('#details').val(row.details);


    $('.i7_max_length').maxlength({
        threshold: 5,
        warningClass: "label label-danger label-rounded label-inline",
        limitReachedClass: "label label-primary label-rounded label-inline",
        appendToParent: true

    });

   

}

$(document).on('click','.add_work_btn',function (){

    resetForm('save_work_form');
});
