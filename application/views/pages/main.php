<input type="hidden" name="usuario1" id="usuario1" value="<?php echo $info[0]['idUser']?>">
<div class="container"><br><br>
	<div class="row">
		<div class="col s3 image-perfil">
			<div class="img-perfil">
				<img class="img-responsive" src="<?php echo $info[0]['url']?>">
			</div>
			<div class="btn-c-perfil">
                <a id="cphp" href="#!" class="btn-floating waves-effect waves-light green"><i class="material-icons">add</i></a>
			</div>			
		</div>
		<div class="col s7 info-cliente-container">
			<div class="info-cliente-container">
				<?php					
					if ($info) {
						$pn = explode(" ", $info[0]['nombre']);
						echo '<h4>Hola '.$pn[0].'!</h4>';
						echo 'Tu último acceso fue el '.date('d/m/Y', strtotime($ultimoAcceso[0]['fecha']));
					}
				?>				
			</div>
		</div>
	</div>
	<div class="divider"></div>
	<br><br>
	<div class="row">
		<div class="col s12 m4">
			<div class="card">
				<div class="card-content">
					<span class="card-title"><b>Última salida</b></span>
					<p>I am a very simple card. I am good at containing small bits of information.
					I am convenient because I require little markup to use effectively.</p>
				</div>
				<div class="card-action">
					<a href="#">Ver detalle</a>
				</div>
			</div>
		</div>
		<div class="col s12 m8">
			<ul class="collection with-header">
				<li class="collection-header"><h5><b>Movimientos del mes</b></h5></li>
        <li class="collection-item dismissable"><div>Entrada<span class="secondary-content">C$ 70,000.00</span></div></li>
        <li class="collection-item dismissable"><div>Salida<span class="secondary-content">C$ 45,000.00</span></div></li>
			</ul>
		</div>
	</div>
</div>
<div class="container">
	<div class="row">
		<div class="col s12">
			
		</div>
	</div>
</div>