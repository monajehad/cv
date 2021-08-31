// Class definition

var KTBootstrapTimepicker = function () {

    // Private functions
    var demos = function () {

        // minimum setup
        $('.i7_time_picker').timepicker({
            minuteStep: 1,
            defaultTime: '8:00',
            showSeconds: false,
            showMeridian: false,
            snapToStep: true
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
    KTBootstrapTimepicker.init();
});
