(function($) {
   
    "use strict";
    $(document).ready(function () {
        $('#DiamondclarityTable').DataTable({
            processing: true,
            serverSide: true,
            ajax: $('#table-url').data("url"),
            columns: [
                {
                    data: 'diamond_clarity',
                    name: 'diamond_clarity'
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
