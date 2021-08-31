// Class definition

var KTBootstrapMaxlength = function () {

    // Private functions
    var demos = function () {

        // textarea example
        $('.i7Maxlength').maxlength({
            threshold: 5,
            warningClass: "kt-badge kt-badge--primary kt-badge--rounded kt-badge--inline",
            limitReachedClass: "kt-badge kt-badge--brand kt-badge--rounded kt-badge--inline"
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
    KTBootstrapMaxlength.init();
});
