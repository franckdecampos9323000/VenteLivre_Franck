    $("#kt_datatable_dom_positioning").DataTable({
            responsive: true,
            "language": {
                "url": "{!!asset('/plugins/dataTable.french.lang')!!}",
                "lengthMenu": "Show _MENU_",
            },
            "dom": "<'row'" +
                "<'col-sm-6 d-flex align-items-center justify-conten-start'l>" +
                "<'col-sm-6 d-flex align-items-center justify-content-end'f>" +
                ">" +
                "<'table-responsive'tr>" +
                "<'row'" +
                "<'col-sm-12 col-md-5 d-flex align-items-center justify-content-center justify-content-md-start'i>" +
                "<'col-sm-12 col-md-7 d-flex align-items-center justify-content-center justify-content-md-end'p>" +
                ">",
            "paging": true,
            "pageLength": 10
        });

        $("#kt_datatable_dom_positioning_row").DataTable({
            responsive: true,
            order: [
                [2, 'asc']
            ],
            rowGroup: {
                dataSrc: 2
            },
            "language": {
                "url": "{!!asset('/plugins/dataTable.french.lang')!!}",
                "lengthMenu": "Show _MENU_",
            },
            "dom": "<'row'" +
                "<'col-sm-6 d-flex align-items-center justify-conten-start'l>" +
                "<'col-sm-6 d-flex align-items-center justify-content-end'f>" +
                ">" +

                "<'table-responsive'tr>" +

                "<'row'" +
                "<'col-sm-12 col-md-5 d-flex align-items-center justify-content-center justify-content-md-start'i>" +
                "<'col-sm-12 col-md-7 d-flex align-items-center justify-content-center justify-content-md-end'p>" +
                ">",
            "paging": true,
            "pageLength": 10
        });

        $("#kt_datatable_dom_positioning_row2").DataTable({
            responsive: true,
            order: [
                [1, 'asc']
            ],
            rowGroup: {
                dataSrc: 1
            },
            "language": {
                "url": "{!!asset('/plugins/dataTable.french.lang')!!}",
                "lengthMenu": "Show _MENU_",
            },
            "dom": "<'row'" +
                "<'col-sm-6 d-flex align-items-center justify-conten-start'l>" +
                "<'col-sm-6 d-flex align-items-center justify-content-end'f>" +
                ">" +

                "<'table-responsive'tr>" +

                "<'row'" +
                "<'col-sm-12 col-md-5 d-flex align-items-center justify-content-center justify-content-md-start'i>" +
                "<'col-sm-12 col-md-7 d-flex align-items-center justify-content-center justify-content-md-end'p>" +
                ">",
            "paging": true,
            "pageLength": 10
        });

        $("#kt_datatable_dom_positioning_row3").DataTable({
            responsive: true,
            order: [
                [3, 'asc']
            ],
            rowGroup: {
                dataSrc: 3
            },
            "language": {
                "url": "{!!asset('/plugins/dataTable.french.lang')!!}",
                "lengthMenu": "Show _MENU_",
            },
            "dom": "<'row'" +
                "<'col-sm-6 d-flex align-items-center justify-conten-start'l>" +
                "<'col-sm-6 d-flex align-items-center justify-content-end'f>" +
                ">" +

                "<'table-responsive'tr>" +

                "<'row'" +
                "<'col-sm-12 col-md-5 d-flex align-items-center justify-content-center justify-content-md-start'i>" +
                "<'col-sm-12 col-md-7 d-flex align-items-center justify-content-center justify-content-md-end'p>" +
                ">",
            "paging": true,
            "pageLength": 10
        });

        $("#kt_datatable_dom_positioning_row4").DataTable({
            responsive: true,
            order: [
                [3, 'asc']
            ],
            rowGroup: {
                dataSrc: 3
            },
            "language": {
                "url": "{!!asset('/plugins/dataTable.french.lang')!!}",
                "lengthMenu": "Show _MENU_",
            },
            "dom": "<'row'" +
                "<'col-sm-6 d-flex align-items-center justify-conten-start'l>" +
                "<'col-sm-6 d-flex align-items-center justify-content-end'f>" +
                ">" +

                "<'table-responsive'tr>" +

                "<'row'" +
                "<'col-sm-12 col-md-5 d-flex align-items-center justify-content-center justify-content-md-start'i>" +
                "<'col-sm-12 col-md-7 d-flex align-items-center justify-content-center justify-content-md-end'p>" +
                ">",
            "paging": true,
            "pageLength": 10
        });
