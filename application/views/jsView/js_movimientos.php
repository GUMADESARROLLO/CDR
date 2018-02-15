<script>
$(document).ready(function() {
    inicializaControlFecha();
    var pathname = window.location.pathname;
    if (pathname.match(/crear.*/)) {
		$(".nav-wrapper ul li a").each(function() {
			if($(this).attr("id") == "movimientos") {
				$(this).parent().addClass("active");
				$(this).append(' [Nuevo]')
			}
		});
    };

	$('.modal').modal();
	
	$("#tblMovimientos").DataTable({
        "processing": true,
        "serverSide": true,
        "ajax": {
            "url": "listarMovimientos",
            "dataType": "json",
            "type": "POST"
        }
	});

	$("#tblDetalleArt").DataTable({
        "ordering": false,
        "info": false,
        "bPaginate": false,
        "bfilter": false,
       	"lengthMenu": [[10,20,30,-1], [10,20,30,"Todo"]],
        "searching": false,
        "pagingType": "full_numbers",
        "aaSorting": [
            [0, "asc"]
        ],
        "lengthMenu": [
            [20, 10, -1],
            [20, 30, "Todo"]
        ],
        "language": {
            "zeroRecords": "NO HAY ARTUCULOS SELECCIONADOS",
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
});

$('#select1').on('change', function() {
    var cantRows = $('#select1').val();
    var table = $('#tblMovimientos').DataTable();  
    
    table.page.len( cantRows ).draw();
})

var cantRows=0;
$("#agArticulo").on('click', function() {
    cantRows = cantRows + 1;
    console.log(cantRows)
    var table = $('#tblDetalleArt').DataTable();
    $.ajax({
        url: "agregarArtDatatable",
        type: "POST",
        async: true,
        success: function(data) {
            var select = '<select name="selectRpt" id="select-'+cantRows+'" style="height:20px" id="selectRpt" class="select';
                select +=' chosen-select browser-default"><option value="">Seleccionar todo</option>';
            
            if (data!=0) {
                $.each(JSON.parse(data), function(i, item) {
                    select += '<option value="' + item['value'] + '">' + item['desc'] + '</option>';
                });
            }
            table.row.add( [
                "<center><input readonly type='text' id='1' value='' style='height:32px; width:80%; text-align:center;' /><center>",
                select + '</select>',
                "<center><input type='text' value='' style='height:32px; width:80%; text-align:center;' /></center>",
                '<center><a class="btn-cancel" href="#"><i class="material-icons quitar">close</i></a></center>'
            ]).draw(false);
            inicializaControlChosen();
        }
    });
});

$('#tblDetalleArt tbody').on( 'click', 'i.quitar', function () {
    cantRows = cantRows -1;
    var tabla = $('#tblDetalleArt').DataTable();
    tabla
    .row( $(this).parents('tr'))
    .remove()
    .draw();
} );

$(document).on('change', '.select', function(){
    $(this).val();
})

function guardarMovimiento() {
    var tabla = $('#tblDetalleArt').DataTable();
    tabla.rows().eq(0).each(function(index) {
        var row = tabla.row(index);
        var data = row.data();
        var v1 = data[1];
        alert(v1);

        /*if ($('#chkUser'+data[0]).is(':checked')) { 
            agentesSeleccionados[pos] = ID_Campannas + "," + data[0];
            pos++;
        }*/
    });
}

</script>