$(document).ready(function() {
    $(".button-collapse").sideNav();
	$(".nav-wrapper ul li a").each(function() {
		
		if(this.href.trim() == window.location){
			$(this).parent().addClass("active");
		}
	}); 
});

function inicializaControlFecha() {
    var config = {
        '.chosen-select': {}
    }
    for (var selector in config) {
        $(selector).chosen(config[selector]);
    }
    
    $('input[class="input-fecha"]').daterangepicker({
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
}

function loadingPage(par) {
    if (par==true) {
        $("#loader-1").remove();
        $("#load-1").remove();
        var html = `<div id="loader-1" class="loader-1">
            <div class="preloader-wrapper big active" style="margin-top: 20px;">
            <div class="spinner-layer spinner-blue-only">
            <div class="circle-clipper left">
            <div class="circle"></div>
            </div><div class="gap-patch">
            <div class="circle"></div>
            </div><div class="circle-clipper right">
            <div class="circle"></div>
            </div>
            </div>
            </div>
            </div>
            <div id="load-1" class="load-1"></div>`;
        $(html).appendTo( "body" );
    }else if (par==false) {
        $("#loader-1").remove();
        $("#load-1").remove();
    }
}