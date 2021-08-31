"use strict";
// Class definition
var KTKBootstrapTouchspin = function() {

    // Private functions
    var demos = function() {
        // minimum setup none_zero_float_input
        $(".float_input").TouchSpin({
            buttondown_class: "btn btn-secondary",
            buttonup_class: "btn btn-secondary",
            max: 99999,
            step: .1,
            decimals: 2,

        });

        $(".none_zero_float_input").TouchSpin({
            buttondown_class: "btn btn-secondary",
            buttonup_class: "btn btn-secondary",
            min: 1,
            max: 99999999999999,
            step: .1,
            decimals: 2,

        });

        $(".integer_input").TouchSpin({
            buttondown_class: "btn btn-secondary",
            buttonup_class: "btn btn-secondary",
            max: 99999999999999,
            step: 1,

        });


        $(".none_zero_integer_input").TouchSpin({
            buttondown_class: "btn btn-secondary",
            buttonup_class: "btn btn-secondary",
            min: 1,
            max: 9999999,
            step: 1,

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
    KTKBootstrapTouchspin.init();
});
