

swalException = function (msg)
{
    swal.fire(
        {
            text: msg ?? "error",
            icon: "error",
            timer: 20000,
            showCancelButton: false,
            showConfirmButton: true,
            confirmButtonText: "ok",
        }
    );
};

swalSuccess = function(msg='', title = '')
{
    swal.fire(
        {
            title: title,
            text: msg ? msg :"done",
            icon: "success",
            timer: 20000,
            showCancelButton: false,
            showConfirmButton: true,
            confirmButtonText: "ok",
        }
    );
};

swalWarning = function(msg='', title = '')
{
    swal.fire(
        {
            title: title,
            text: msg ? msg :"warning",
            icon: "warning",
            timer: 20000,
            showCancelButton: false,
            showConfirmButton: true,
            confirmButtonText: "ok",
        }
    );
};

swalInfo = function(msg='', title = '')
{
    swal.fire(
        {
            title: title,
            text: msg ? msg :"info",
            icon: "info",
            timer: 20000,
            showCancelButton: false,
            showConfirmButton: true,
            confirmButtonText: "ok",
        }
    );
};


