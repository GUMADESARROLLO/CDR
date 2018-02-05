<script>
$(document).ready(function() {
	$('.modal').modal();
	inicializarDatatable("1");
	inicializaControlFecha();
});

var val = document.myForm.group1;

for(var i = 0; i < val.length; i++) {
    val[i].onclick = function() {
    	var table = $('#tblReportes').DataTable();
    	table.destroy();
    	$('#tblReportes').empty(); 
    	inicializarDatatable(this.value);
		
		$.getJSON('TipoRpt/' + this.value, function (data) {
			$("#menu-reporte").empty();
			$("#menu-reporte").append(data[0]['menu']);			
			inicializaControlFecha();
		});
    };
}

function inicializarDatatable(opc) {
	switch (opc) {
		//CONFIGURANDO DATATABLE PARA REPORTE MOVIMIENTO
		case "1":
			$('#tblReportes').dataTable({
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
		            [20, 10, -1],
		            [20, 30, "Todo"]
		        ],
				"columns": [
					{ "title": "RECIBO" },
					{ "title": "FECHA" },
					{ "title": "ENTRADA" },
					{ "title": "SALIDA" }
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
			});
		break;
		//CONFIGURANDO DATATABLE PARA REPORTE TALONARIO
		case "2":
			$('#tblReportes').dataTable({
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
		            [20, 10, -1],
		            [20, 30, "Todo"]
		        ],
				"columns": [
					{ "title": "CODIGO" },
					{ "title": "CONCEPTO" },
					{ "title": "FECHA" },
					{ "title": "MONTO" }
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
			});
		break;
		//CONFIGURANDO DATATABLE PARA REPORTE DE AUDITORIA
		case "3":
			$('#tblReportes').dataTable({
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
		            [20, 10, -1],
		            [20, 30, "Todo"]
		        ],
				"columns": [
					{ "title": "ITEM" },
					{ "title": "FECHA" },
					{ "title": "CANTIDAD" },
					{ "title": "VALOR" },
					{ "title": "TIPO" }
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
			});

		break;
	}
}

function generandoDataRpt(opc) {
	switch (opc) {
    case "1":
    	loadingPage(true);      
	    $('#tblReportes').DataTable({
        	ajax: 'reporteData/' + opc,
       		"destroy": true,
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
	            { "data": "RECIBO" },
	            { "data": "FECHA" },
	            { "data": "ENTRADA" },
	            { "data": "SALIDA" }
	        ],
	        "fnInitComplete": function () {
	        	loadingPage(false);
	        }
	    });
	break;
    case "2":
    	loadingPage(true);      
	    $('#tblReportes').DataTable({
        	ajax: 'reporteData/' + opc,
       		"destroy": true,
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
	            { "data": "CODIGO" },
	            { "data": "CONCEPTO" },
	            { "data": "FECHA" },
	            { "data": "MONTO" }
	        ],
	        "fnInitComplete": function () {
	        	loadingPage(false);
	        }
	    });        
	break;
    case "3":
    	loadingPage(true);      
	    $('#tblReportes').DataTable({
        	ajax: 'reporteData/' + opc,
       		"destroy": true,
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
	            { "data": "ITEM" },
	            { "data": "FECHA" },
	            { "data": "CANTIDAD" },
	            { "data": "VALOR" },
	            { "data": "TIPO" }
	        ],
	        "fnInitComplete": function () {
	        	loadingPage(false);
	        }
	    });
        
	break;
}
}
</script>