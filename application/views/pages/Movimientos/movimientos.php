<div class="container"><br><br>
    <div class="row">
        <div class="col s12 m12">
            <a href="#modalNuevMov" class="waves-effect waves-light modal-trigger right"><i class="small material-icons">add_circle</i></a>
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
		<div class="col s12 m5 container-button">
			<div class="container-button">
				<input type="text" class="form-control" placeholder="Buscar en movimientos" >
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
            <table id="tblMovimientos" class="display" cellspacing="0" width="100%">
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
                		<td>00001</td>
                		<td>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.</td>
                		<td>29/01/2018</td>
                		<td>Bismarck Escobar</td>
                	</tr>
                	<tr>
                		<td>00002</td>
                		<td>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.</td>
                		<td>29/01/2018</td>
                		<td>Bismarck Escobar</td>
                	</tr>
                	<tr>
                		<td>00004</td>
                		<td>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.</td>
                		<td>29/01/2018</td>
                		<td>Bismarck Escobar</td>
                	</tr>
                	<tr>
                		<td>00004</td>
                		<td>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.</td>
                		<td>29/01/2018</td>
                		<td>Bismarck Escobar</td>
                	</tr>
					<tr>
                		<td>00004</td>
                		<td>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.</td>
                		<td>29/01/2018</td>
                		<td>Bismarck Escobar</td>
                	</tr>
                	<tr>
                		<td>00004</td>
                		<td>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.</td>
                		<td>29/01/2018</td>
                		<td>Bismarck Escobar</td>
                	</tr>
                	<tr>
                		<td>00004</td>
                		<td>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.</td>
                		<td>29/01/2018</td>
                		<td>Bismarck Escobar</td>
                	</tr>
                	<tr>
                		<td>00004</td>
                		<td>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.</td>
                		<td>29/01/2018</td>
                		<td>Bismarck Escobar</td>
                	</tr>
                </tbody>
            </table>
		</div>
	</div>
</div>
<!--MODAL: NUEVO MOVIMIENTO-->
<div id="modalNuevMov" class="modal modal-fixed-footer">
	<div class="modal-content">
        <div class="row right">
            <div class="col s12 m12">
                <a href="#" class="modal-action modal-close"><i class="material-icons tiny cancel">clear</i></a>
            </div>
        </div>
		<p class="title-modals">Numero de movimiento: <span class="title-modals">00001</span></p>
		<div class="divider"></div><br>
		<div class="row">
			<div class="col s12 m6">
                <select name="" id="" class="chosen-select browser-default">
                	<option value="" disabled selected><span>Tipo de movimiento</span></option>
                	<option value="1">Entrada</option>
                	<option value="2">Salida</option>
                </select>
			</div>
			<div class="col s12 m6">
                <select name="" id="" class="chosen-select browser-default">
                	<option value="" disabled selected><span>Talonario</span></option>
                	<option value="1">ETL-00001</option>
                	<option value="2">ETL-00002</option>
                	<option value="3">ETL-00003</option>
                	<option value="3">ETL-00003</option>
                	<option value="3">ETL-00003</option>
                	<option value="3">ETL-00003</option>
                </select>
			</div>
		</div>
	</div>
    <div class="modal-footer">
        <a href="#!" class="modal-action modal-close waves-effect waves-red btn-flat "><i class="small material-icons">save</i></a>
    </div>
</div>


