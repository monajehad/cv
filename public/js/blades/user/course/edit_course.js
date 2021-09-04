
fillCourseModal = function(id,name,hours,source,details,start_date,end_date)
{

    resetForm('save_course_form');
    $('#course_id').val(id);

    $('#course_name').val(name);
    $('#hours').val(hours);
    $('#source').val(source);
    $('#details').val(details);
    $('#date').val(start_date+' | '+end_date);




    $('.i7_max_length').maxlength({
        threshold: 5,
        warningClass: "label label-danger label-rounded label-inline",
        limitReachedClass: "label label-primary label-rounded label-inline",
        appendToParent: true

    });

    



}