(function($) {
   
    "use strict";
    $(document).ready(function () {
        $('#ProductPurityTable').DataTable({
            processing: true,
            serverSide: true,
            ajax: $('#table-url').data("url"),
            columns: [
                {
                    data: 'Purity',
                    name: 'Purity'
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
