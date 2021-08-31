remove = function (id, link,datatable, callback) {

    swal.fire({
        title: "Delete confirmation",
        text: "Are you sure you want to delete this item",
        type: "warning",
        showCancelButton: true,
        confirmButtonColor: '#3cc4fa',
        cancelButtonColor: '#ff3e51',
        confirmButtonText: "Yes, delete it",
        cancelButtonText: "No, Cancel",

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
                            let msg = result.message ;
                            toastr.success(msg);
                        }
                        else
                        {
                            let msg = result.message ;
                            toastr.error(msg);
                        }

                        if(datatable){
                            datatable.reload();


                        }else if(callback){
                            callback(id);
                        }

                    },
                    error: function (xhr, ajaxOptions, thrownError) {
                        swalException("error");
                    },
                    complete: function(){
                    }
                });
            }
        });


};

