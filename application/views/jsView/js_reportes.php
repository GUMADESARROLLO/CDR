<script>
$(document).ready(function() {
	$('.modal').modal();
	inicializarDatatable("1");
	inicializaControlFecha();
	inicializaControlChosen();
});

var val = document.myForm.group1;

for(var i = 0; i < val.length; i++) {
    val[i].onclick = function() {
    	var table = $('#tblReportes').DataTable();
    	table.destroy();
    	inicializarDatatable(this.value);
		
		$.getJSON('TipoRpt/' + this.value, function (data) {
			$("#menu-reporte").empty();
			$("#menu-reporte").append(data[0]['menu']);		
			inicializaControlFecha();
			inicializaControlChosen();
		});
    };
}



function inicializarDatatable(opc) {
	$('#data-reporte').show();
	switch (opc) {
		//CONFIGURANDO DATATABLE PARA REPORTE MOVIMIENTO
		case "1":
			$("#content-recibos").remove();
			$('#tblReportes')
				.empty()
				.show()
				.dataTable({
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
			$("#content-recibos").remove();
			$('#tblReportes')
				.empty()
				.show()
				.dataTable({
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
			$("#content-recibos").remove();
			$('#tblReportes')
				.empty()
				.show()
				.dataTable({
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
		case "4":
			$('#data-reporte').hide();
			$("#data-reporte-tmp")
				.empty()
				.append(`<div id="content-recibos" class="col s12 m12">
							<div class="card">
								<div class="card-content">
									<p class="title-modals">Recibos pendientes a utilizar</p>
									<div class="divider"></div><br>
									<div id="list-consecutivos">
										<p>Aqui apareceran los consecutivos pendientes a utilizar</p>
									</div>
								</div>
							</div>
						</div>`);
		break;
		case "5":
			$('#data-reporte').hide();
			$("#data-reporte-tmp")
				.empty()
				.append(`<div id="content-recibos" class="col s12 m12">
							<div class="card">
								<div class="card-content">
									<p class="title-modals">Recibos pendientes a utilizar</p>
									<div class="divider"></div><br>
									<div id="list-consecutivos">
										<p>Aqui apareceran los consecutivos pendientes a utilizar</p>
									</div>
								</div>
							</div>
						</div>`);
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
	case "4":
		loadingPage(true);
		$("#list-consecutivos").empty();
	    $.ajax({
	        url: 'reporteData/' + opc,
	        type: "post",
	        async: true,
	        success: function(data) {
	        	var html1=""; var html2=""; var cont=0;
	        	var cant = Object.keys(JSON.parse(data)).length;

	        	$.each(JSON.parse(data), function(i, item) {
					html2+='<div class="col s12 m1">' +
								'<div class="chip">' +
									item +
								'</div>' +
							'</div>';							
					if ( cont==11 ) {
						html1='<div class="row">' + html2 + '</div>';
						$("#list-consecutivos").append(html1);
						cont=0; html2='';
	                }else {	                	
	                	if (cant<i) {
	                		html1='<div class="row">' + html2 + '</div>';
							$("#list-consecutivos").append(html1);
	                	}
	                	cont=cont+1;
	                }
				});
				loadingPage(false);
	        }
	    });		
	break;
}
}
</script>