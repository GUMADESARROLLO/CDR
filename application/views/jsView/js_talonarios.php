<script>
$(document).ready(function() {
	$('.modal').modal();
	$("#tblTalonarios").DataTable({
	        "ordering": true,
	        "info": false,
	        "bPaginate": true,
	        "bfilter": false,
	        "searching": false,
	        "pagingType": "full_numbers",
	        "aaSorting": [
	            [0, "asc"]
	        ],
	        "lengthMenu": [
	            [10, 20, -1],
	            [10, 20, "Todo"]
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

	$("#tblDetalleTal").DataTable({
	        "ordering": true,
	        "info": false,
	        "bPaginate": true,
	        "bfilter": false,
	        "searching": false,
	        "pagingType": "full_numbers",
	        "aaSorting": [
	            [0, "asc"]
	        ],
	        "lengthMenu": [
	            [5, 10, -1],
	            [5, 10, "Todo"]
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

	$('input[name="desde1"],[name="hasta2"]').daterangepicker({
	 "locale": {
	        "format": "MM/DD/YYYY",
	        "separator": " - ",
	        "applyLabel": "Apply",
	        "cancelLabel": "Cancel",
	        "fromLabel": "From",
	        "toLabel": "To",
	        "customRangeLabel": "Custom",
	        "daysOfWeek": [
	            "D",
	            "L",
	            "M",
	            "M",
	            "M",
	            "V",
	            "S"
	        ],
	        "monthNames": [
	            "Enero",
	            "Febrero",
	            "Marzo",
	            "Abril",
	            "Mayo",
	            "Junio",
	            "Julio",
	            "Agosto",
	            "Septiembre",
	            "Octubre",
	            "Noviembre",
	            "Diciembre"
	        ],	        
	        "firstDay": 0
	    },
        singleDatePicker: true,
        showDropdowns: true
	});
});

$('#select1').on('change', function() {
    var cantRows = $('#select1').val();
    var table = $('#tblTalonarios').DataTable();  
    
    table.page.len( cantRows ).draw();
});

$('#select2').on('change', function() {
    var cantRows = $('#select2').val();
    var table = $('#tblDetalleTal').DataTable();  
    
    table.page.len( cantRows ).draw();
});
</script>