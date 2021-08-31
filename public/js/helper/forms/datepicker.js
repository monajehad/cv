// Class definition

var KTBootstrapDatepicker = function () {

    var arrows;
    if (KTUtil.isRTL()) {
        arrows = {
            leftArrow: '<i class="la la-angle-left"></i>',
            rightArrow: '<i class="la la-angle-right"></i>'

        }
    } else {
        arrows = {
            leftArrow: '<i class="la la-angle-right"></i>',
            rightArrow: '<i class="la la-angle-left"></i>'
        }
    }

    // Private functions
    var demos = function () {



        // enable clear button
        $('.i7datePicker').datepicker({
            rtl: KTUtil.isRTL(),
            todayBtn: "linked",
            clearBtn: true,
            todayHighlight: true,
            templates: arrows,
            format: 'yyyy-mm-dd',
        });

        // range picker
        $('.i7dateRangePicker').datepicker({
            rtl: KTUtil.isRTL(),
            todayHighlight: true,
            templates: arrows,
            format: 'yyyy-mm-dd',

        });

    };

    return {
        // public functions
        init: function() {
            demos();
        }
    };
}();

jQuery(document).ready(function() {
    KTBootstrapDatepicker.init();
});
