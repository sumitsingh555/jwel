(function($) {
    "use strict";
    $(document).ready(function () {
        $('#ProductTable').DataTable({
            processing: true,
            serverSide: true,
            ajax: $('#table-url').data("url"),
            columns: [
                {
                    data: 'PrimaryImage',
                    name: 'PrimaryImage'
                },
                {
                    data: 'ProductName',
                    name: 'ProductName'
                },
                {
                    data: 'Category',
                    name: 'Category'
                },
                {
                   data: 'Subcategory',
                   name: 'Subcategory' 
                   
                },
                {
                    data: 'Brand',
                    name: 'Brand'
                },
                {
                    data: 'Price',
                    name: 'Price'
                },
                {
                    data: 'type',
                    name: 'type'
                },
                {
                    data: 'Status',
                    name: 'Status'
                },
                {
                    data: 'action',
                    name: 'action',
                    orderable: false
                }
            ]
        });
    });
})(jQuery)
