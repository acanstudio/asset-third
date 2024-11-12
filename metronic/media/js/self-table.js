var SelfTable = function () {

    var initTable1 = function() {

        /* Formating function for row details */
        function fnFormatDetails ( oTable, nTr, nHr )
        {
            var hDatas = [];
            for ( var i = 0, iLen = nHr.length; i < iLen; i++) {
                hDatas.push(nHr.eq(i).text());
            }
            var aData = oTable.fnGetData( nTr );
            var sOut = '<table>';
            for ( var j = 2, jLen = hDatas.length; j < jLen; j++) {
                sOut += '<tr><td>' + hDatas[j] + ':</td><td>'+aData[j]+'</td></tr>';
            }
            //sOut += '<tr><td>Others:</td><td>Could provide a link here</td></tr>';
            sOut += '</table>';

            return sOut;
        }

        /*
         * Insert a 'details' column to the table
         */
        var nCloneTh = document.createElement( 'th' );
        var nCloneTd = document.createElement( 'td' );
        nCloneTd.innerHTML = '<span class="row-details row-details-close"></span>';

        $('#table_self_advanced thead tr').each( function () {
            this.insertBefore( nCloneTh, this.childNodes[0] );
        } );

        $('#table_self_advanced tbody tr').each( function () {
            this.insertBefore(  nCloneTd.cloneNode( true ), this.childNodes[0] );
        } );

        /*
         * Initialse DataTables, with no sorting on the 'details' column
         */
        var oTable = $('#table_self_advanced').dataTable( {
            "bPaginate": false,
            "bFilter": false,
            "bInfo": false,
            "bSort": false,
            "sDom": '',
            /*"aoColumnDefs": [
                {"bSortable": false, "aTargets": [ 0 ] }
            ],
            "aaSorting": [[1, 'asc']],
             "aLengthMenu": [
                [5, 15, 20, -1],
                [5, 15, 20, "All"] // change per page values here
            ],
            // set the initial value
            "iDisplayLength": 10,*/
        });

        //jQuery('#table_self_advanced_wrapper .dataTables_filter input').addClass("m-wrap small"); // modify table search input
        //jQuery('#table_self_advanced_wrapper .dataTables_length select').addClass("m-wrap small"); // modify table per page dropdown
        //jQuery('#table_self_advanced_wrapper .dataTables_length select').select2(); // initialzie select2 dropdown

        /* Add event listener for opening and closing details
         * Note that the indicator for showing which row is open is not controlled by DataTables,
         * rather it is done here
         */
        $('#table_self_advanced').on('click', ' tbody td .row-details', function () {
            var nTr = $(this).parents('tr')[0];
            var nHr = $('#table_self_advanced thead tr th');
            if ( oTable.fnIsOpen(nTr) )
            {
                /* This row is already open - close it */
                $(this).addClass("row-details-close").removeClass("row-details-open");
                oTable.fnClose( nTr );
            }
            else
            {
                /* Open this row */
                $(this).addClass("row-details-open").removeClass("row-details-close");
                oTable.fnOpen( nTr, fnFormatDetails(oTable, nTr, nHr), 'details' );
            }
        });
    }
    return {

        //main function to initiate the module
        init: function () {
            if (!jQuery().dataTable) {
                return;
            }

            initTable1();
        }

    };

}();
