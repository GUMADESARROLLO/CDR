<?php 
class reportes_model extends CI_Model {
    public function __construct() {
        parent::__construct();
        $this->load->database();
    }

    public function generandoOpciones($val) {
        $data1=array();
        
        switch ($val) {
            case '1':
                $data1[0]['menu']='<br>             
                    <div class="col s12 m5 container-input">
                        <i class="material-icons">today</i>
                        <input type="text" class="input-fecha" name="desde1" placeholder="Desde" value="">
                    </div>
                    <div class="col s12 m5 container-input">
                        <i class="material-icons">today</i>
                        <input type="text" class="input-fecha" name="hasta2" placeholder="Hasta">
                    </div>
                    <div class="col s12 m2">
                        <a href="#!" id="generaRpt" onclick="generandoDataRpt('."'".$val."'".')"><i class="small material-icons">play_circle_filled</i></a>
                    </div>';
            break;
            case '2':
                $data1[0]['menu']='<br>                   
                    <div class="col s12 m5 container-input">
                        <i class="material-icons">today</i>
                        <input type="text" class="input-fecha" name="desde1" placeholder="Desde" value="">
                    </div>
                    <div class="col s12 m5 container-input">
                        <i class="material-icons">today</i>
                        <input type="text" class="input-fecha" name="hasta2" placeholder="Hasta">
                    </div>
                    <div class="col s12 m2">
                        <a href="#!" onclick="generandoDataRpt('."'".$val."'".')"><i class="small material-icons">play_circle_filled</i></a>
                    </div><br><br><br>
                    <div class="col s12 m12">
                        <select name="" id="" class="chosen-select browser-default">
                            <option value="" disabled selected><span>Talonario</span></option>
                            <option value="1">ETL-00001</option>
                            <option value="2">ETL-00002</option>
                            <option value="3">ETL-00003</option>
                            <option value="3">ETL-00003</option>
                            <option value="3">ETL-00003</option>
                            <option value="3">ETL-00003</option>
                        </select>
                    </div>';
            break;
            case '3':
                $data1[0]['menu']='<br>             
                    <div class="col s12 m5 container-input">
                        <i class="material-icons">today</i>
                        <input type="text" class="input-fecha" name="desde1" placeholder="Desde" value="">
                    </div>
                    <div class="col s12 m5 container-input">
                        <i class="material-icons">today</i>
                        <input type="text" class="input-fecha" name="hasta2" placeholder="Hasta">
                    </div>
                    <div class="col s12 m2">
                        <a href="#!" id="generaRpt" onclick="generandoDataRpt('."'".$val."'".')"><i class="small material-icons">play_circle_filled</i></a>
                    </div>';
            break;
        }
        echo json_encode($data1);
    }

    public function generandoDataRpt($val) {
        $data = array();

        switch ($val) {
            case '1':
                for ($i=0; $i <= 500 ; $i++) {
                    $data['data'][$i]['RECIBO'] = "0000".$i;
                    $data['data'][$i]['FECHA'] = "2018-01-01";
                    $data['data'][$i]['ENTRADA'] = "500";
                    $data['data'][$i]['SALIDA'] = "200";
                }
            break;
            case '2':
                for ($i=0; $i <= 500 ; $i++) {
                    $data['data'][$i]['CODIGO'] = "0000".$i;
                    $data['data'][$i]['CONCEPTO'] = "Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.";
                    $data['data'][$i]['FECHA'] = "2018/01/01";
                    $data['data'][$i]['MONTO'] = "200.5";
                }
            break;
            case '3':
                for ($i=0; $i <= 500 ; $i++) {
                    $data['data'][$i]['ITEM'] = "0000".$i;
                    $data['data'][$i]['FECHA'] = "2018/01/01";
                    $data['data'][$i]['CANTIDAD'] = $i;
                    $data['data'][$i]['VALOR'] = $i;
                    $data['data'][$i]['TIPO'] = "CATEGORIA";
                }
            break;
        }
        echo json_encode($data);
    }
}