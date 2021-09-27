const general_data = {};

datatable = null;
var datatable_portfolios = function () {
    // Private functions

    var options = {
        // datasource definition
        data: {
            type: "remote",
            source: {
                read: {
                    url: baseUrl + "/user/portfolios/index",
                    method: "GET",
                   
                }
            },
            pageSize: 10,
              serverPaging: true,
            serverFiltering: true,
            serverSorting: true,
            saveState:{cookie:false,webstorage:false}
        },
        // layout definition
        layout: {
            scroll: false, // enable/disable datatable scroll both horizontal and
            // vertical when needed.
            footer: false, // display/hide footer
        },

        // column sorting
        sortable: true,

        pagination: true,

        // columns definition

        columns: [
            {
                field: 'id',
                title: '#',
                sortable: false,
                width: 20,
                selector: {
                    class: 'checkbox--solid'
                },
                textAlign: 'left',
            },
            {
                field: "project",
                title: 'project',
                width: 280,
                textAlign: 'left',
                autoHide: false,
                template: function (t) {
            // console.log(t.portfolios_media);
                    
                    return `<div class="d-flex align-items-center " style="overflow-wrap: anywhere;">
								<div class=" symbol symbol-70 flex-shrink-0">
									<img src=" ${t!=null?(t.portfolio_media.length!=0?t.portfolio_media[0].name:""):""}" style="object-fit: contain; ">
								</div>
								<div class=" mx-2 ">
									<a href="#" class="text-dark-75 font-weight-bold line-height-sm"">${t.portfolio_name}</a>
<br>
									<span class="font-size-sm text-dark-50 text-hover-primary">${t.link}</span>
								</div>
							</div>`;
                }
            }, {
                field: "media_type",
                title: 'media_type',
                filterable: 1,
                sortable: 1,
                width: 90,
                textAlign: "left",
                template: function (t) {
                    console.log();
                        return `<span class="text-dark-75 font-weight-bold line-height-sm">
                      ${t!=null?(t.portfolio_media.length!=0?t.portfolio_media[0].type:""):""}</span> `;

                }
            },
         
            {
                field: "is_active",
                title: 'is_active',
                filterable: 1,
                sortable: 1,
                width: 80,
                textAlign: "left",
                template: function (t) {
                    
                    return `<span class="switch switch-icon">
                    <label>
                        <input type="checkbox" class="activateportoflios_switch"onclick="updateStatus('is_active',this.checked,'${t.id}')"
                            ${t.is_active ? 'checked' : ''}
                            name="is_active" />
                        <span></span>
                    </label>
                </span>`
                }
            },
            {
                field: "date",
                title: 'date(start-end)',
                width: 120,
                textAlign: 'left',
                template: function (t) {
                    return t.start_date +`</br>` + t.end_date;
                }
            },

            {
                field: "actions",
                textAlign: 'left',
                width: 80,
                title:'actions',
                sortable: false,
                autoHide: false,
                overflow: 'visible',
                template: function (t) {
                    return `
                <a href="${baseUrl}/user/portfolios/edit/${t.id}"
                        class="btn btn-sm btn-default btn-text-primary btn-hover-primary btn-icon mr-2"><i class="la la-edit"></i></a>
                        <button onclick="remove(${t.id},'user/portfolios/delete',datatable)" 
                        class="btn btn-sm btn-default btn-text-primary btn-hover-primary btn-icon"
                        
                        ><i class="la la-trash"></i></button>

                        `
                }
            }
        ],
       
    };

    return {
        // public functions
        init: function () {
        
            options.extensions = {
                // boolean or object (extension options)
                checkbox: true,
            };
    
            options.search = {
                input: $('#generalSearch'),
                key: 'generalSearch',
                delay: 500,
            };

            datatable = $('#portfolios_datatable').KTDatatable(options);

       


            datatable.on(
                'datatable-on-check datatable-on-uncheck',
                function (e) {
                    // datatable.checkbox() access to extension methods
                    var checkedNodes = datatable.rows('.datatable-row-active').nodes();
                    var count = checkedNodes.length;
                    $('#kt_datatable_selected_records').html(count);
                    if (count > 0) {
                        $('#kt_datatable_group_action_form').collapse('show');
                    } else {
                        $('#kt_datatable_group_action_form').collapse('hide');
                    }
                });

            datatable.on('kt-datatable--on-layout-updated', function (e) {
                console.log('kt-datatable--on-ajax-done', datatable.getTotalRows());
                $('#kt_subheader_total_value').text(datatable.getTotalRows());

            })

        
        },
    };
}();

jQuery(document).ready(function () {

    datatable_portfolios.init();
    count = datatable.getTotalRows() ?? 0;
    $('#kt_subheader_total_value').text(count);

});



$(document).on('click', '#kt_datatable_delete_all', function () {
    var ids = datatable.checkbox().getSelectedId();
    let url = "user/portfolios/multi/delete";
    remove(ids, url, datatable);
});

$('#refresh_table_btn').on('click', function () {

    datatable.reload();


});
    



updateStatus = function (key, status, id ) {

    $.ajax({
        url: baseUrl +'/user/portfolios/status/update',
        type: "post",
        data: {
            'status': status,
            'id': id,
            'key': key,
        },
        error: function (jqXHR, error, errorThrown) {
            if (jqXHR.responseJSON) {
                let errors = jqXHR.responseJSON.errors;
                swalException();

            } else {

                swalException();
            }
        },
        success: function (result) {
            if (result.status) {
                toastr.success(result.message);
            } else {
                toastr.error(result.message);
            }
        },
        complete: function () {
        }
    });
};


$('.i7_max_length').maxlength({
    threshold: 5,
    warningClass: "label label-danger label-rounded label-inline",
    limitReachedClass: "label label-primary label-rounded label-inline",
    appendToParent: true

});
