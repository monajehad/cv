interests_data = [];

$(document).ready(function () {
    refreshInterest();
});

function refreshInterest() {
    let interestContainer = $(`#interest_container`);

    let URL = baseUrl + `/user/interest/index`;
    interestContainer.empty();

    $.ajax({
        url: URL,
        type: 'GET',
        data: {},
        success: function (result) {
            if (result.status) {
                let interests = result.data.interests;
                console.log('interests', result.data);
                if (interests.length == 0) {
                    $('#add_your_first_interest').show();
                } else {

                    $('#add_your_first_interest').hide();
                }

                interests.forEach(function (interest) {
                    interestContainer.append(interest.interest_card);
                    interests_data[interest.id] = interest;
                });


            }

        },
        complete: function () {

        },
        error: function () {
        }
    });

}

fillInterestModal = function(id,name)
{

    resetForm('save_interest_form');
    $('#interest_id').val(id);
    $('#name').val(name);

    
    



}