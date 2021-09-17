
$("#save_portfolios_form").validate({
    rules: {

        "portfolio_name": {required: true},
        "link"          : {required: true},
        "start_date"    : {required: true},
        "end_date"      : {required: true},
        // "type"          : {required: true},

     
//"roles[]": {required: true},
    },
    focusInvalid: false,
    invalidHandler: function (form, validator) {

        if (!validator.numberOfInvalids())
            return;

        $('html, body').animate({
            scrollTop: $(validator.errorList[0].element).offset().top-180
        }, 2000);

    },
    submitHandler: function (form) {

        savePortfolios(form);
        return false;
    }
});


function savePortfolios(form) {
    let form_data = new FormData(form);
    var url = "/user/portfolios/store";
    if($('#portfolio_id').val() != 0) url = "/user/portfolios/update";
    $.ajax({
        url: baseUrl + url,
        type: 'POST',
        cache: false,
        contentType: false,
        processData: false,
        data: form_data,
        error: function (jqXHR, error, errorThrown) {
            if (jqXHR.responseJSON) {
                let errors = jqXHR.responseJSON.errors;
                showValidationErrors(errors,'#save_portfolios_form');
                KTUtil.scrollTop();

            } else {
                swalException();
                KTUtil.scrollTop();

            }
        },
        success: function (result) {
            if (result.status) {
                user = result.data;
                toastr.success(result.message);
                 window.location.replace(baseUrl+'/user/portfolios/index')

            } else {
                toastr.error(result.message);
                KTUtil.scrollTop();

            }
        },
        complete: function () {
        }
    });
}




$(document).on('click','.add_portfolios_btn',function (){
    resetForm('save_portfolio_form');
    $('#portfolios_id').val(null);
});


 




