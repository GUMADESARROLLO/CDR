<div class="container"><br><br>
	<div class="row">
		<div class="col s12 m4">
			<div class="card">
                <div class="card-content">
                    <p class="title-modals">Tipo Reporte</p>
                    <div class="divider"></div><br>
                    <form action="#" name="myForm">
                        <p>
                            <input name="group1" type="radio" class="with-gap" checked="checked" id="test1" value="1" />
                            <label for="test1">Movimientos</label>
                        </p>
                        <p>
                            <input name="group1" type="radio" class="with-gap" id="test2" value="2" />
                            <label for="test2">Talonarios</label>
                        </p>
                        <p>
                            <input name="group1" type="radio" class="with-gap" id="test3" value="3" />
                            <label for="test3">Auditoria</label>
                        </p>
                        <p>
                            <input name="group1" type="radio" class="with-gap" id="test4" value="4" />
                            <label for="test4">Consecutivos</label>
                        </p>
                        <p>
                            <input name="group1" type="radio" class="with-gap" id="test5" value="5" />
                            <label for="test5">General</label>
                        </p>
                    </form>
                </div>
            </div>
		</div>
        <div class="col s12 m8">
            <div class="card">
                <div class="card-content">
                    <div class="row">
                        <div class="col s12 m12">
                            <p class="title-modals">Rangos</p>
                        </div>
                    </div>                    
                    <div class="divider"></div>
                    <div class="row" id="menu-reporte"><br>
                        <div class="col s12 m5 container-input">
                            <i class="material-icons">today</i>
                            <input type="text" name="desde1" class="input-fecha" placeholder="Desde" value="">
                        </div>
                        <div class="col s12 m5 container-input">
                            <i class="material-icons">today</i>
                            <input type="text" name="hasta2" class="input-fecha" placeholder="Hasta">
                        </div>
                        <div class="col s12 m2 center" >
                            <a href="#!" id="generaRpt" onclick="generandoDataRpt('1')" class=""><i class="small material-icons">play_circle_filled</i></a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
	</div>
	<div class="divider"></div>
	<br>
	<div class="row" id="data-reporte">
        <div class="col s12 m12">
            <div class="container-button">
                <input type="text" class="form-control" placeholder="Buscar en Reporte" >
                <span class="input-group-btn">
                    <button class="button1 btn-secondary" type="button"><i class="material-icons">search</i></button>
                </span>
            </div>
        </div>
		<div class="col s12 m12">
             <table id="tblReportes" class="display" cellspacing="0" width="100%"></table>
		</div>
	</div>
    <div class="row" id="data-reporte-tmp"></div>
</div>