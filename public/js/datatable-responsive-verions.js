/*=========================================================================================
    File Name: datatables-responsive.js
    Description: Responsive Datatable
    ----------------------------------------------------------------------------------------
    Item Name: Stack - Responsive Admin Theme
    Version: 1.0
    Author: PIXINVENT
    Author URL: http://www.themeforest.net/user/pixinvent
==========================================================================================*/

function filterByColumnWithIndexThreee() {
    this.api().columns(3).every(function () {
        const column = this;
        const text = $(column.header()).text();
        $(column.header()).text('');
        const select = $(`<select><option value="">${text}</option></select>`)
            .appendTo($(column.header()))
            .on('change', function () {
                const val = $.fn.dataTable.util.escapeRegex(
                    $(this).val()
                );

                column
                    .search(val ? '^' + val + '$' : '', true, false)
                    .draw();
            });
        column.data().unique().sort().each(function (d, j) {
            select.append('<option value="' + d + '">' + d + '</option>')
        });
    });
}

$(document).ready(function () {
    // for ar language --->to translate search,show,entries
    if ($('table').hasClass('ar-language-file')) {
        /************************************
         *        js of Language file        *
         ************************************/
        if ($('table').hasClass('prevent-init-sort')) { //prevent init sort
            $('.prevent-init-sort').DataTable({
                "language": {
                    "url": "https://cdn.datatables.net/plug-ins/9dcbecd42ad/i18n/Arabic.json"
                },
                responsive: true,
                /* Disable initial sort */
                "aaSorting": [],
                colReorder: true,
                stateSave: true
            });
        } else if ($('table').hasClass('filter-by-status-column-3')) { //prevent init sort
            $('.ar-language-file').DataTable({ //use default sort
                "language": {
                    "url": "https://cdn.datatables.net/plug-ins/9dcbecd42ad/i18n/Arabic.json"
                },
                responsive: true,
                /* Disable initial sort */
                // "aaSorting": []
                initComplete: filterByColumnWithIndexThreee,
                colReorder: true,
                stateSave: true
            });
        } else {
            $('.ar-language-file').DataTable({ //use default sort
                "language": {
                    "url": "https://cdn.datatables.net/plug-ins/9dcbecd42ad/i18n/Arabic.json"
                },
                responsive: true,
                /* Disable initial sort */
                // "aaSorting": [],
                colReorder: true,
                stateSave: true
            });
        }
        // for en language
    } else {
        /***********************************
         *       Configuration option       *
         ***********************************/
        if ($('table').hasClass('prevent-init-sort')) {

            $('.prevent-init-sort').DataTable({ //prevent init sort
                "language": {
                    "url": "https://cdn.datatables.net/plug-ins/9dcbecd42ad/i18n/English.json"
                },
                responsive: true,
                /* Disable initial sort */
                "aaSorting": [],
                "dom": 'Zlfrtip',
                colReorder: true,
                stateSave: true
            });
        } else if ($('table').hasClass('filter-by-status-column-3')) { //prevent init sort
            $('.dataex-res-configuration').DataTable({ //use default sort
                "language": {
                    "url": "https://cdn.datatables.net/plug-ins/9dcbecd42ad/i18n/English.json"
                },
                responsive: true,
                initComplete: filterByColumnWithIndexThreee,
                "dom": 'Zlfrtip',
                colReorder: true,
                stateSave: true
            });
        } else {
            $('.dataex-res-configuration').DataTable({ //use default sort
                "language": {
                    "url": "https://cdn.datatables.net/plug-ins/9dcbecd42ad/i18n/English.json"
                },
                responsive: true,
                "dom": 'Zlfrtip',
                colReorder: true,
                stateSave: true
            });
        }
    }
});
