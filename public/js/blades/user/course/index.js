courses_data = [];

$(document).ready(function () {
    refreshCourse();
});

function refreshCourse() {
    let courseContainer = $(`#course_container`);

    let URL = baseUrl + `/user/course/index`;
    courseContainer.empty();

    $.ajax({
        url: URL,
        type: 'GET',
        data: {},
        success: function (result) {
            if (result.status) {
                let courses = result.data.courses;
                console.log('courses', result.data);
                if (courses.length == 0) {
                    $('#add_your_first_course').show();
                } else {

                    $('#add_your_first_course').hide();
                }

                courses.forEach(function (course) {
                    courseContainer.append(course.course_card);
                    courses_data[course.id] = course;
                });


            }

        },
        complete: function () {

        },
        error: function () {
        }
    });

}


fillCourseModal = function(id,name,hours,source,details,start_date,end_date)
{

    resetForm('save_course_form');
    $('#course_id').val(id);

    $('#course_name').val(name);
    $('#hours').val(hours);
    $('#source').val(source);
    $('#details').val(details);
    $('#start_date').val(start_date);
    $('#end_date').val(end_date);
    $('.kt_datepicker_5').datepicker('update', [new Date(start_date), new Date(end_date)]);

   // range picker
   $('#kt_datepicker_5').datepicker({
    rtl: KTUtil.isRTL(),
    todayHighlight: true,
    templates: arrows,
    format: 'yyyy-mm-dd',
});



    $('.i7_max_length').maxlength({
        threshold: 5,
        warningClass: "label label-danger label-rounded label-inline",
        limitReachedClass: "label label-primary label-rounded label-inline",
        appendToParent: true

    });

    



}