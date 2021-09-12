socials_data = [];


$(document).ready(function () {
    refreshSocial();
});

function refreshSocial() {
    let socialContainer = $(`#social_container`);

    let URL = baseUrl + `/user/social/index`;
    socialContainer.empty();

    $.ajax({
        url: URL,
        type: 'GET',
        data: {},
        success: function (result) {
            if (result.status) {
                let socials = result.data.socials;
                console.log('socials', result.data);
                if (socials.length == 0) {
                    $('#add_your_first_social').show();
                } else {

                    $('#add_your_first_social').hide();
                }

                socials.forEach(function (social) {
                    socialContainer.append(social.social_card);
                    socials_data[social.id] = social;
                });


            }

        },
        complete: function () {

        },
        error: function () {
        }
    });

}


fillSocialModal = function(id,link,social_website_id)
{

    resetForm('save_social_form');
    $('#social_id').val(id);
    $('#social_website_id').selectpicker('val',social_website_id);
    $('#link').val(link);
    console.log(id+'||'+link+'||'+social_website_id);
    
    



}