<div class="container"><br><br>
	<div class="row">
        <div class="col s12 m12">
            <div class="card">
                <div class="card-content">
                    <div class="row">
                        <div class="col s12 m12">
                            <p class="title-modals">Rangos</p>
                        </div>
                    </div>                    
                    <div class="divider"></div>
                    <div class="row" id="menu-reporte"><br>
                        <div class="col s12 m2 container-input">
                            <select id="Id_ext">
                                <option value="0">Todas...</option>
                                <?php
                                foreach ($ext as $vl){
                                    echo '<option value="'.$vl['extension'].'">'.' [ '.$vl['extension'].' ] - '.$vl['name'].'</option>';
                                }

                                ?>
                            </select>

                        </div>
                        <div class="col s12 m3 container-input">
                            <i class="material-icons">today</i>
                            <input type="text" id="Id_Desde" name="desde1" class="input-fecha" placeholder="Desde" value="">
                        </div>
                        <div class="col s12 m3 container-input">
                            <i class="material-icons">today</i>
                            <input type="text" id="Id_Hasta" name="hasta2" class="input-fecha" placeholder="Hasta">
                        </div>
                        <div class="col s12 m3 container-input">
                            <i class="material-icons">alarm</i>
                            <input type="text" id="Id_Time" name="Time" class="input-time" placeholder="00:00:00">
                        </div>
                        <div class="col s12 m1 left" >
                            <a href="#!" id="generaRpt" onclick="generandoDataRpt()" class=""><i class="small material-icons">play_circle_filled</i></a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
	</div>
	<div class="divider"></div>
	<br>
	<div class="row" id="data-reporte">
        <div class="col s10 m10">
            <div class="container-button">
                <input type="text" class="form-control" placeholder="Buscar en Reporte" id="Id_Buscar">
                <span class="input-group-btn">
                    <button class="button1 btn-secondary" type="button"><i class="material-icons">search</i></button>
                </span>
            </div>
        </div>
        <div class="col s12 m1 left" >
            <a href="#" id="Id_To_Avg" >
                <i class="small material-icons tooltipped" data-position="bottom" data-tooltip="Promedios">assessment</i>
            </a>
        </div>
        <div class="col s12 m1 left" >
            <a href="#" id="Id_To_Excel" >
            <!--<img style="width: 45px; height: 45px;" src="<?PHP echo base_url('assets/images/excel.png');?>">-->
                <i class="small material-icons tooltipped" data-position="bottom" data-tooltip="Exportar">cloud_download</i>
            </a>

        </div>
		<div class="col s12 m12">
             <table id="tblReportes" class="display" cellspacing="0" width="100%"></table>
		</div>
	</div>
    <div class="row" id="data-reporte-tmp"></div>
</div>
