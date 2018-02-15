<script>
$(document).ready(function() {
	$('.tooltipped').tooltip({delay: 50});
});

$("#cphp").click( function() {
	if ( $(".change-photo").length > 0 ) {
		$(".change-photo").remove();
	}else {
		var hmtl = 
		`<div class="change-photo " style="display: block;">
			<p class="title-modals">Seleccione una imagén</p>
			<div class="divider"></div><br>
			<div class="row center">
				<div class="col s3">
					<a href="#">
						<img class="img-profile-n" src="<?php echo base_url();?>assets/images/1.png">
					</a>
				</div>
				<div class="col s3">
					<a href="#">
						<img class="img-profile-n" src="<?php echo base_url();?>assets/images/2.png">
					</a>								
				</div>
				<div class="col s3">
					<a href="#">
						<img class="img-profile-n" src="<?php echo base_url();?>assets/images/3.png">
					</a>
				</div>
				<div class="col s3">
					<a href="#">
						<img class="img-profile-n" src="<?php echo base_url();?>assets/images/4.png">
					</a>
				</div>
			</div>
			<div class="row center">
				<div class="col s3">
					<a href="#">
						<img class="img-profile-n" src="<?php echo base_url();?>assets/images/5.png">
					</a>
				</div>
				<div class="col s3">
					<a href="#">
						<img class="img-profile-n" src="<?php echo base_url();?>assets/images/6.png">
					</a>								
				</div>
				<div class="col s3">
					<a href="#">
						<img class="img-profile-n" src="<?php echo base_url();?>assets/images/7.png">
					</a>
				</div>
				<div class="col s3">
					<a href="#">
						<img class="img-profile-n" src="<?php echo base_url();?>assets/images/8.png">
					</a>
				</div>
			</div>
			<div class="divider"></div>
			<div class="row" style="margin-top:15px">
				<div class="col s12 m12 center">
        			<a href="#!" onclick="guardarNuevaFoto()" class="waves-effect waves-red btn-flat"><i class="small material-icons">save</i></a>
        		</div>
			</div>
		</div>`;
		$("#cphp").after(hmtl)
	}
});

var url;
$(document).on('click', '.img-profile-n', function(){
	url="";
	url = $(this).attr("src");
	$("#ic").remove();
	$(this).before('<i id="ic" class="material-icons">done</i>');
});

function guardarNuevaFoto() {
	if (url==null) {
		Materialize.toast('Tiene que seleccionar una imagén', 4000, 'rounded')
	}else {
	    var form_data = {
	        url_foto: url,
	        idUsuario: $("#usuario1").val()
	    };
	    $.ajax({
	        url: "actualizarUsuario",
	        type: "post",
	        data: form_data,
	        async: true,
	        success: function(data) {
	        	if (data=="1") {
	        		location.reload();	
	        	}else {
	        		Materialize.toast('Ups...! ocurrio un problema', 4000, 'rounded')
	        	}
	        	
	        }
	    });
	}
}  
</script>