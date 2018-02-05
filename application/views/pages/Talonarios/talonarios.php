<div class="container"><br><br>
	<div class="row">
		<div class="col s12 m12">
			<a href="#modalNuevTalonario" class="waves-effect waves-light modal-trigger right"><i class="small material-icons">add_circle</i></a>
		</div>
	</div>
	<div class="row">
		<div class="col s12 m3 container-input">
			<i class="material-icons">today</i>
			<input type="text" name="desde1" placeholder="Desde" value="">
		</div>
		<div class="col s12 m3 container-input">
			<i class="material-icons">today</i>
			<input type="text" name="hasta2" placeholder="Hasta">
		</div>
		<div class="col s12 m5">
			<div class="container-button">
				<input type="text" class="form-control" placeholder="Buscar en talonarios" >
				<span class="input-group-btn">
					<button class="button1 btn-secondary" type="button"><i class="material-icons">search</i></button>
				</span>
			</div>
		</div>
        <div class="col s12 m1">
            <select id="select1">
                <option value="10">10</option>
                <option value="20">20</option>
                <option value="-1">*</option>
            </select>
        </div>
	</div>
	<div class="divider"></div>
	<div class="row">
		<div class="col s12 m12">
            <table id="tblTalonarios" class="display" cellspacing="0" width="100%">
                <thead>
	                <tr>
	                    <th>CÓDIGO</th>
	                    <th>INICIA</th>
	                    <th>FINALIZA</th>
	                    <th>ACTUAL</th>
                        <th>CREADO</th>
	                </tr>
                </thead>
                <tbody>
                	<tr>
                		<td><a id="cod-001" href="#modalDetalleTal" class="modal-trigger">00001</a></td>
                		<td>1</td>
                		<td>200</td>
                		<td>0</td>
                        <td>Bismarck Escobar</td>
                	</tr>
                	<tr>
                        <td>00002</td>
                        <td>1</td>
                        <td>200</td>
                        <td>0</td>
                        <td>Bismarck Escobar</td>
                	</tr>
                	<tr>
                        <td>00003</td>
                        <td>1</td>
                        <td>200</td>
                        <td>0</td>
                        <td>Bismarck Escobar</td>
                	</tr>
                	<tr>
                        <td>00004</td>
                        <td>1</td>
                        <td>200</td>
                        <td>0</td>
                        <td>Bismarck Escobar</td>
                	</tr>
					<tr>
                        <td>00005</td>
                        <td>1</td>
                        <td>200</td>
                        <td>0</td>
                        <td>Bismarck Escobar</td>
                	</tr>
                	<tr>
                        <td>00006</td>
                        <td>1</td>
                        <td>200</td>
                        <td>0</td>
                        <td>Bismarck Escobar</td>
                	</tr>
                	<tr>
                        <td>00007</td>
                        <td>1</td>
                        <td>200</td>
                        <td>0</td>
                        <td>Bismarck Escobar</td>
                	</tr>
                	<tr>
                        <td>00008</td>
                        <td>1</td>
                        <td>200</td>
                        <td>0</td>
                        <td>Bismarck Escobar</td>
                	</tr>
                </tbody>
            </table>
		</div>
	</div>
</div>
<!--MODAL: DETALLE DE TALONARIO-->
<div id="modalDetalleTal" class="modal modal-fixed-footer">
    <div class="modal-content">
        <div class="row right">
            <div class="col s12 m12">
                <a href="#" class="modal-action modal-close"><i class="material-icons cancel tiny ">clear</i></a>
            </div>
        </div>
        <p class="title-modals">Movimientos de:<span class="title-modals">00001</span></p>
        <div class="divider"></div><br>
        <div class="row">
            <div class="col s12 m11">
                <div class="container-button">
                    <input type="text" class="form-control" placeholder="Datos a buscar" >
                    <span class="input-group-btn">
                        <button class="button1 btn-secondary" type="button"><i class="material-icons">search</i></button>
                    </span>
                </div>
            </div>
            <div class="col s12 m1">
                <select id="select2">
                    <option value="5">5</option>
                    <option value="10">10</option>
                    <option value="-1">*</option>
                </select>
            </div>
        </div>
        <div class="row">
            <div class="col s12 m12">
                <table id="tblDetalleTal" class="display" cellspacing="0" width="100%">
                    <thead>
                        <tr>
                            <th>CÓDIGO</th>
                            <th>CONCEPTO</th>
                            <th>FECHA</th>
                            <th>USUARIO</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td><a href="#modalDetalleTal" class="modal-trigger">00001</a></td>
                            <td>Lorem Ipsum es simplemente el texto de relleno de las imprentas y archivos de texto</td>
                            <td>29/01/2018</td>
                            <td>Bismarck Escobar</td>
                        </tr>
                        <tr>
                            <td><a href="#modalDetalleTal" class="modal-trigger">00001</a></td>
                            <td>Lorem Ipsum es simplemente el texto de relleno de las imprentas y archivos de texto</td>
                            <td>29/01/2018</td>
                            <td>Bismarck Escobar</td>
                        </tr>
                        <tr>
                            <td><a href="#modalDetalleTal" class="modal-trigger">00001</a></td>
                            <td>Lorem Ipsum es simplemente el texto de relleno de las imprentas y archivos de texto</td>
                            <td>29/01/2018</td>
                            <td>Bismarck Escobar</td>
                        </tr>
                        <tr>
                            <td><a href="#modalDetalleTal" class="modal-trigger">00001</a></td>
                            <td>Lorem Ipsum es simplemente el texto de relleno de las imprentas y archivos de texto</td>
                            <td>29/01/2018</td>
                            <td>Bismarck Escobar</td>
                        </tr>
                        <tr>
                            <td><a href="#modalDetalleTal" class="modal-trigger">00001</a></td>
                            <td>Lorem Ipsum es simplemente el texto de relleno de las imprentas y archivos de texto</td>
                            <td>29/01/2018</td>
                            <td>Bismarck Escobar</td>
                        </tr>
                        <tr>
                            <td><a href="#modalDetalleTal" class="modal-trigger">00001</a></td>
                            <td>Lorem Ipsum es simplemente el texto de relleno de las imprentas y archivos de texto</td>
                            <td>29/01/2018</td>
                            <td>Bismarck Escobar</td>
                        </tr>
                        <tr>
                            <td><a href="#modalDetalleTal" class="modal-trigger">00001</a></td>
                            <td>Lorem Ipsum es simplemente el texto de relleno de las imprentas y archivos de texto</td>
                            <td>29/01/2018</td>
                            <td>Bismarck Escobar</td>
                        </tr>
                        <tr>
                            <td><a href="#modalDetalleTal" class="modal-trigger">00001</a></td>
                            <td>Lorem Ipsum es simplemente el texto de relleno de las imprentas y archivos de texto</td>
                            <td>29/01/2018</td>
                            <td>Bismarck Escobar</td>
                        </tr>
                        <tr>
                            <td><a href="#modalDetalleTal" class="modal-trigger">00001</a></td>
                            <td>Lorem Ipsum es simplemente el texto de relleno de las imprentas y archivos de texto</td>
                            <td>29/01/2018</td>
                            <td>Bismarck Escobar</td>
                        </tr>
                        <tr>
                            <td><a href="#modalDetalleTal" class="modal-trigger">00001</a></td>
                            <td>Lorem Ipsum es simplemente el texto de relleno de las imprentas y archivos de texto</td>
                            <td>29/01/2018</td>
                            <td>Bismarck Escobar</td>
                        </tr>
                        <tr>
                            <td><a href="#modalDetalleTal" class="modal-trigger">00001</a></td>
                            <td>Lorem Ipsum es simplemente el texto de relleno de las imprentas y archivos de texto</td>
                            <td>29/01/2018</td>
                            <td>Bismarck Escobar</td>
                        </tr>
                        <tr>
                            <td><a href="#modalDetalleTal" class="modal-trigger">00001</a></td>
                            <td>Lorem Ipsum es simplemente el texto de relleno de las imprentas y archivos de texto</td>
                            <td>29/01/2018</td>
                            <td>Bismarck Escobar</td>
                        </tr>
                        <tr>
                            <td><a href="#modalDetalleTal" class="modal-trigger">00001</a></td>
                            <td>Lorem Ipsum es simplemente el texto de relleno de las imprentas y archivos de texto</td>
                            <td>29/01/2018</td>
                            <td>Bismarck Escobar</td>
                        </tr>
                        <tr>
                            <td><a href="#modalDetalleTal" class="modal-trigger">00001</a></td>
                            <td>Lorem Ipsum es simplemente el texto de relleno de las imprentas y archivos de texto</td>
                            <td>29/01/2018</td>
                            <td>Bismarck Escobar</td>
                        </tr>
                    </tbody>
                </table>
            </div>
        </div>
    </div>
    <div class="modal-footer left">
        <a href="#!" class="modal-action modal-close waves-effect waves-red btn-flat "><i class="small material-icons">print</i></a>
    </div>
</div>

<!--MODAL: NUEVO MOVIMIENTO-->
<div id="modalNuevTalonario" class="modal modal-fixed-footer">
	<div class="modal-content">
        <div class="row right">
            <div class="col s12 m12">
                <a href="#" class="modal-action modal-close"><i class="material-icons cancel tiny ">clear</i></a>
            </div>
        </div>
		<p class="title-modals">Nuevo Talonario</p>
        <div class="divider"></div><br>
        <div class="row">
            <div class="col s12 m12">                
                <form id="formNuevTalonario" action="<?php echo base_url('index.php/nuevoTalonario');?>" method="post" name="formNuevTalonario">
                    <div class="row">
                        <div class="col s12 m12">
                            <input name="codTalonario" id="codTalonario" type="text" placeholder="INGRESE EL CÓDIGO">
                        </div>
                    </div>
                    <div class="row">
                        <div class="col s12 m6">
                            <input name="codTalonario" id="codTalonario" type="text" placeholder="EMPIEZA EN">
                        </div>
                        <div class="col s12 m6">
                            <input name="codTalonario" id="codTalonario" type="text" placeholder="TERMINA EN">
                        </div>
                    </div>
                </form>
            </div>
        </div>
	</div>
    <div class="modal-footer">
        <a href="#!" class="modal-action modal-close waves-effect waves-red btn-flat "><i class="small material-icons">save</i></a>
    </div>
</div>


