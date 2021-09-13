 
$("#save_person_form").validate({
    rules: {

        "email"       : {required: true},
        'name'        : {required: true},
        'email'       : {required: true},
        'gender'      : {required: true},
        'mobile'      : {required: true},
         'birthday'    : {required: true},
        'nationality' : {required: true},
        'marital'     : {required: true},
        //'language'    : {required: true},

     //   "roles[]": {required: true},
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

        savePerson(form);
        return false;
    }
});


function savePerson(form) {
    let form_data = new FormData(form);
    var url = "/user/personal/save";
    console.log(form_data);
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
                showValidationErrors(errors,'#save_person_form');
                KTUtil.scrollTop();

            } else {
                swalException();
                KTUtil.scrollTop();

            }
        },
        success: function (result) {
            if (result.status) {
                person = result.data;
                toastr.success(result.message);
                window.location.replace(baseUrl+'/user/personal/index')
                
            } else {
                toastr.error(result.message);
                KTUtil.scrollTop();

            }
        },
        complete: function () {
        }
    });
}





