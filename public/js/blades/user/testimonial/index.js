testimonials_data = [];

$(document).ready(function () {
    refreshTestimonial();
});

function refreshTestimonial() {
    let testimonialContainer = $(`#testimonial_container`);

    let URL = baseUrl + `/user/testimonial/index`;
    testimonialContainer.empty();

    $.ajax({
        url: URL,
        type: 'GET',
        data: {},
        success: function (result) {
            if (result.status) {
                let testimonials = result.data.testimonials;
                console.log('testimonials', result.data);
                if (testimonials.length == 0) {
                    $('#add_your_first_testimonial').show();
                } else {

                    $('#add_your_first_testimonial').hide();
                }

                testimonials.forEach(function (testimonial) {
                    testimonialContainer.append(testimonial.testimonial_card);
                    testimonials_data[testimonial.id] = testimonial;
                });


            }

        },
        complete: function () {

        },
        error: function () {
        }
    });

}

fillTestimonialModal = function(id,person_name,person_email,person_mobile,about)
{

    resetForm('save_testimonial_form');
    $('#testimonial_id').val(id);
    $('#person_name').val(person_name);
    $('#person_email').val(person_email);
    $('#person_mobile').val(person_mobile);
    $('#about').val(about);



    
    



}