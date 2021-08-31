
$(document).ready(function () {
    var path = window.location.href;
    $('.kt-aside-menu .kt-menu__item a').filter(function () {
        return this.href == path;
    }).parent().addClass('kt-menu__item--active');

    $('.kt-aside-menu .kt-menu__item').filter(function () {
        return $('a', this).attr('href') === path;
    }).closest('.kt-menu__item--submenu').addClass('kt-menu__item--open');


    blockPage = function(text = "Loading"){
        KTApp.blockPage({overlayColor:"#000000",type:"loader",state:"success",message: text});
    }

    unBlockPage = function(){
        KTApp.unblockPage();
    }

    blockModal = function(id){
        KTApp.block(id+' '+'.modal-content',{overlayColor:"#000000",state:"success"});
    }

    unBlockModal = function(id){
        KTApp.unblock(id+' '+'.modal-content');
    }

    block = function(id, state = 'warning'){
        KTApp.block(id,{overlayColor:"#ffffff",state: state});
    }

    unBlock = function(id){
        KTApp.unblock(id);
    }


});

$( document ).ready(function() {
    $.ajaxSetup({

        beforeSend: function (xhr) {
            xhr.setRequestHeader('X-CSRF-TOKEN', $('meta[name="csrf-token"]').attr('content'));
            removeValidationErrors();
            blockPage();
        },
        complete: function()
        {
            unBlockPage();
        },
        statusCode: {
            419: function() {
                window.location.reload();

            },
            401: function() {
                window.location.reload();

            },
            404: function() {
                swalException("No data")
            },
            500: function() {

                swalException("error")
            }
        }
    });
    $( document ).ajaxComplete(function( event, request, settings ) {
        unBlockPage();
        removeValidationErrors();
    });
    // $(document).ajaxStart($.blockUI).ajaxStop($.unblockUI);

});



function submitOnEnter(formId, callback){
    $(document).on('keypress',  formId + ' input',function(event){

        var keycode = (event.keyCode ? event.keyCode : event.which);
        if(keycode == '13'){
            event.preventDefault();
            callback();
        }
    });

}


function preventOnEnter(form){
    $(document).on('keypress',  form + ' input',function(event){

        var keycode = (event.keyCode ? event.keyCode : event.which);
        if(keycode == '13'){
            event.preventDefault();
        }
    });
}

preventOnEnter('form');




$(".english_letters_only").keypress(function(event){
    var ew = event.which;
    if(ew == 32)
        return true;
    if(48 <= ew && ew <= 57)
        return true;
    if(65 <= ew && ew <= 90)
        return true;
    if(97 <= ew && ew <= 122)
        return true;
    return false;
});
