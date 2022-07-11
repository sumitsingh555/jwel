(function($) {
    "use strict";
    $(document).ready(function () {
        $('#SubcategoryTable').DataTable({
            processing: true,
            serverSide: true,
            ajax: $('#table-url').data("url"),
            columns: [
                {
                    data: 'Category_Name',
                    name: 'Category_Name'
                },
                {
                    data: 'Subcategory_Name',
                    name: 'Subcategory_Name'
                },
                {
                    data: 'Subcategory_Slug',
                    name: 'Subcategory_Slug'
                },
                {
                    data: 'Description',
                    name: 'Description'
                },
                {
                    data: 'Category_Icon',
                    name: 'Category_Icon'
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
