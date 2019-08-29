<script>
$(document).ready(function() {
	$('.modal').modal();
	inicializarDatatable();
	inicializaControlFecha();
	inicializaControlChosen();
});

$('#Id_To_Excel').click(function(){
    var d1  = $('#Id_Desde').val();
    var d2  = $('#Id_Hasta').val();
    var ex = $('#Id_ext').val();
    var tm = $('#Id_Time').val();
    var url = "Reporte_Excel/" + d1 + "/" + d2 + "/" + ex + "/" + tm;

    window.open(url, '_blank');
});



$('#Id_To_Avg').click(function(){
    var d1  = $('#Id_Desde').val();
    var d2  = $('#Id_Hasta').val();
    var ex  = $('#Id_ext').val();
    var url = "Reporte_AVG/" + d1 + "/" + d2 + "/" + ex ;

    window.open(url, '_blank');
});

$('#Id_Buscar').on( 'keyup', function () {
    console.log(this.value);
    var table = $('#tblReportes').DataTable();
    table.search(this.value).draw();
});


function inicializarDatatable() {
	$('#data-reporte').show();
    $("#content-recibos").remove();
    $('#tblReportes')
        .empty()
        .show()
        .dataTable({
            "ordering": true,
            "info": false,
            "bPaginate": true,
            "bfilter": false,
            "searching": true,
            "pagingType": "full_numbers",
            "aaSorting": [
                [0, "asc"]
            ],
            "lengthMenu": [
                [20, 10, -1],
                [20, 30, "Todo"]
            ],
            "columns": [
                { "title": "FECHA" },
                { "title": "HORA" },
                { "title": "ORIGEN" },
                { "title": "DESTINO" },
                { "title": "CANAL" },
                { "title": "CANAL DESTINO" },
                { "title": "ESTADO" },
                { "title": "DURACION" }
            ],
            "language": {
                "zeroRecords": "NO HAY RESULTADOS",
                "paginate": {
                    "first":      "Primera",
                    "last":       "Última ",
                    "next":       "Siguiente",
                    "previous":   "Anterior"
                },
                "lengthMenu": "_MENU_",
                "emptyTable": "NO HAY DATOS DISPONIBLES",
                "search":     "BUSCAR"
            }
        });
    $("#tblReportes_filter").hide();
}

function generandoDataRpt() {

    var d1 = $('#Id_Desde').val();
    var d2 = $('#Id_Hasta').val();
    var ex = $('#Id_ext').val();
    var tm = $('#Id_Time').val();

    console.log(tm);

    loadingPage(true);
    $('#tblReportes').DataTable({
        ajax: 'reporteData/' + d1 + '/' + d2 + "/" + ex + "/" + tm,
        "destroy": true,
        "ordering": true,
        "info": false,
        "bPaginate": true,
        "bfilter": false,
        "searching": true,
        "pagingType": "full_numbers",
        "aaSorting": [
            [0, "asc"]
        ],
        "lengthMenu": [
            [20, 10, -1],
            [20, 30, "Todo"]
        ],
        "language": {
            "zeroRecords": "NO HAY RESULTADOS",
            "paginate": {
                "first":      "Primera",
                "last":       "Última ",
                "next":       "Siguiente",
                "previous":   "Anterior"
            },
            "lengthMenu": "_MENU_",
            "emptyTable": "NO HAY DATOS DISPONIBLES",
            "search":     "BUSCAR"
        },
        columns: [
            { "data": "FECHA" },
            { "data": "HORA" },
            { "data": "ORIGEN" },
            { "data": "DESTINO" },
            { "data": "channel" },
            { "data": "dstchannel" },
            { "data": "disposition" },
            { "data": "DURACION" }
        ],
        "fnInitComplete": function (dta) {

            loadingPage(false);
        }
    });
    $("#tblReportes_filter").hide();
}

</script>