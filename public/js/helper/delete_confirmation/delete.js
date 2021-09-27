remove = function (id, link,datatable, callback) {

    swal.fire({
        title: 'delete_title',
        text: 'delete_confirmation',
        type: "warning",
        showCancelButton: true,
        confirmButtonColor: '#3cc4fa',
        cancelButtonColor: '#ff3e51',
        confirmButtonText:'yes_delete',
        cancelButtonText: 'cpanel.cancel',

    })
        .then(willDelete => {
            if (willDelete.value) {
                $.ajax({
                    url: baseUrl +'/'+ link,
                    type: "post",
                    data: {
                        _token: $('input[name=_token]').val(),
                        id: id
                    },
                    success: function (result) {
                        if(result.status)
                        {
                            let msg = result.message ?? 'deleted_success';
                            toastr.success(msg);
                        }
                        else
                        {
                            let msg = result.message ?? 'error';
                            toastr.error(msg);
                        }

                        if(datatable){
                            datatable.reload();


                        }else if(callback){
                            callback(id);
                        }

                    },
                    error: function (xhr, ajaxOptions, thrownError) {
                        swalException('internet_error');
                    },
                    complete: function(){
                    }
                });
            }
        });


};

