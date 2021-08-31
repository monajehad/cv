// Class definition

var KTBootstrapSelect = function () {

    // Private functions
    var demos = function () {
        // minimum setup
        $('.selectpicker').selectpicker();
    };

    return {
        // public functions
        init: function() {
            demos();
        }
    };
}();

jQuery(document).ready(function() {
    KTBootstrapSelect.init();
});
