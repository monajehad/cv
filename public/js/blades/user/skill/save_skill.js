let SaveSkillFormHtml = $("#save_skill_form");
SaveSkillFormHtml.validate({
    rules: {

        "name": {required: true},
         "level": {required: true},
         

    },
    
    submitHandler: function (form) {

        saveSkill(form);
        return false;
    }
});


function saveSkill(form) {
    let form_data = new FormData(form);
    let skillContainer = $(`#skill_container`);

    $.ajax({
        url:  SaveSkillFormHtml.attr('action'),
        type: SaveSkillFormHtml.attr('method'),
        cache: false,
        contentType: false,
        processData: false,
        data: form_data,
        error: function (jqXHR, error, errorThrown) {
            if (jqXHR.responseJSON) {
                let errors = jqXHR.responseJSON.errors;
                showValidationErrors(errors,'#save_skill_form');

            } else {
                swalException();
             
            }
        },
        success: function (result) {
            if (result.status) {
                $('#save_skill_modal').modal('hide');
                let skill = result.data.skill;


                refreshSkill();
                toastr.success(result.message);
                $('#add_your_first_skill').hide();
                resetForm('save_skill_form');
            } else {
                toastr.error(result.message);
            }
        },

complete: function () {
}
});
}


$(document).on('click','.add_skill_btn',function (){
    resetForm('save_skill_form');
    $('#skill_id').val(null);
});





