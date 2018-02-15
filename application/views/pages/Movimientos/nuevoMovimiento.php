<div class="container">
    <div class="card">
        <div class="card-content">
            <div class="row">
                <div class="col s12 m6">
                    <select id="tipoMov" name="tipoMov" class="chosen-select browser-default">
                        <option value="" disabled selected><span>Tipo de movimiento</span></option>
                        <option value="in-1">Entrada</option>
                        <option value="out-1">Salida</option>
                    </select>
                </div>
                <div class="col s12 m6">
                    <select id="talonario" name="talonario" class="chosen-select browser-default">
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
            <div class="row">
                <div class="col s12 m2">
                    <label for="numRecibo">N° Recibo:</label>
                    <input type="text" name="numRecibo" id="numRecibo" value="25165" disabled="disabled">
                </div>
                <div class="col s12 m3 container-input">
                    <label for="desde1">Fecha:</label>
                    <i class="material-icons">today</i>
                    <input type="text" class="input-fecha" id="desdeFecha" name="desdeFecha" placeholder="Desde" value="">
                </div>
                <div class="col s12 m7">
                    <label for="nombreRecibe">Recibi de: </label>
                    <input type="text" name="nombreRecibe" id="nombreRecibe" >
                </div>
            </div>
            <div class="row">
                <div class="col s12 m12">
                    <label for="concepto">En concepto de: </label>
                    <textarea type="text" name="concepto" id="concepto" ></textarea>
                </div>
            </div>
            <div class="row">
                <div class="col s12 m12 ">
                    <div class="row">
                        <div class="col s12 m6 ">
                            <label for="cuentaDe">Por cuenta de: </label>
                            <input type="text" name="cuentaDe" id="cuentaDe" >
                        </div>
                        <div class="col s12 m6 ">
                            <label for="monto">La suma de: </label>
                            <input type="text" name="monto" id="monto" >
                        </div>
                    </div>          
                </div>
            </div>
            <div class="row">
                <div class="col s12 m12">
                    <table border="1" id="tblDetalleArt" class="display" cellspacing="0" width="100%">
                        <thead>
                            <tr>
                                <th style="text-align:center">CÓDIGO</th>
                                <th style="text-align:center">ARTICULO</th>
                                <th style="text-align:center">CANTIDAD</th>
                                <th style="text-align:center">OPC</th>
                            </tr>
                        </thead>
                        <tbody>
                        </tbody>
                        <tfoot>
                            <tr>
                                <td colspan="4" style="text-align: center;">
                                    <a id="agArticulo" class="btn-add"><i class="tiny material-icons">add</i></a>
                                </td>
                            </tr>
                        </tfoot>
                    </table>
                </div>
            </div>
            <div class="divider"></div>
            <div class="row">
                <div class="col s12 m12 right">
                    <label id="user">Elaborado por: Bismark Escobar</label>
                </div>
            </div>
            <div class="row">
                <div class="col s12 m12 center">
                    <a href="#!" onclick="guardarMovimiento()" class="modal-action modal-close waves-effect waves-red btn-flat "><i class="small material-icons">save</i></a>
                    <a href="#!" class="modal-action modal-close waves-effect waves-red btn-flat "><i style="color: red" class="small material-icons">clear</i></a>
                </div>
            </div>
        </div>
    </div>
</div>


