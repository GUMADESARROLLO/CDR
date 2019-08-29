<?php 
class reportes_model extends CI_Model {
    public function __construct() {
        parent::__construct();
        include(APPPATH.'libraries\PHPExcel\Classes\PHPExcel.php');
        $this->load->database();
    }
    public function generandoDataRpt($D1,$D2,$ex,$tm) {
        $db_asterisk = $this->load->database('db_asterisk', TRUE);
        $i = 0;
        $strg = "";
        $stTime = "";
        //$ext = $this->getGrup();
        //if ($ext!='') $strg = " AND src IN(". $ext.")";
        if ($ex!='0') $strg = " AND src IN('". $ex."')";
        if ($tm!='00:00:00') $stTime = " AND DURACION <= '". $tm."'";
        $array_planta=$db_asterisk->query("SELECT * FROM rpt_llamadas WHERE ftDate BETWEEN '".date('Y-m-d',strtotime($D1))."' AND '".date('Y-m-d',strtotime($D2))."'".$strg.$stTime);

        $data = array();
        if($array_planta->num_rows() > 0 ) {
            foreach ($array_planta->result_array() as $key){
                $data['data'][$i]['ORIGEN']   = $key['src'];
                $data['data'][$i]['FECHA']    = $key['ftDate'];
                $data['data'][$i]['HORA']    = $key['ftTime'];
                $data['data'][$i]['DESTINO']  = $key['dst'];
                $data['data'][$i]['DURACION'] = $key['DURACION'];

                $data['data'][$i]['channel'] = $key['channel'];
                $data['data'][$i]['dstchannel'] = $key['dstchannel'];
                $data['data'][$i]['disposition'] = $key['disposition'];

                $i++;
            }
        }else{
            $data['data'][0]['ORIGEN']      = "--";
            $data['data'][0]['FECHA']       = "Sin Resultado";
            $data['data'][0]['DESTINO']     = "--";
            $data['data'][0]['DURACION']    = "--";
            $data['data'][0]['channel']     = "--";
            $data['data'][0]['dstchannel']  = "--";
            $data['data'][0]['disposition'] = "--";
        }
        echo json_encode($data);

    }

    public function getGrup(){
        $db_asterisk = $this->load->database('db_asterisk', TRUE);
        $resultado = $db_asterisk->query("SELECT T0.grplist FROM asterisk.ringgroups T0 WHERE T0.grpnum='600'");
        $strg='';
        if($resultado->num_rows() > 0 ) {
            foreach ($resultado->result_array() as $key) {
                $ext = explode("-", $key['grplist']);
                foreach ($ext as $valor){
                    $strg.= "'".$valor."'," ;
                }
                $strg = substr($strg,0,-1);
            }
        }
        return $strg;
    }
    public function getExt(){
        $db_asterisk = $this->load->database('db_asterisk', TRUE);
        ///$resultado = $db_asterisk->query("SELECT T0.extension,T0.name FROM asterisk.users T0 WHERE T0.extension IN (".$this->getGrup().") ORDER BY T0.extension");
         $resultado = $db_asterisk->query("SELECT T0.extension,T0.name FROM asterisk.users T0 ORDER BY T0.extension");
        if($resultado->num_rows() > 0 ) {
            return $resultado->result_array();
        }
        return 0;
    }


    public function generarExcel($f1,$f2,$ex,$tm) {

        $db_asterisk = $this->load->database('db_asterisk', TRUE);
        $D1 = date('Y-m-d', strtotime($f1));
        $D2 = date('Y-m-d', strtotime($f2));

        $strg = "";
        $stTime = "";
        //$ext = $this->getGrup();
        //if ($ext!='') $strg = "AND src IN(". $ext.")";
        if ($ex!='0') $strg = " AND src IN('". $ex."')";
        if ($tm!='00:00:00') $stTime = " AND DURACION <= '". $tm."'";


        $resultado = $db_asterisk->query("SELECT * FROM rpt_llamadas WHERE ftDate BETWEEN '".date('Y-m-d',strtotime($D1))."' AND '".date('Y-m-d',strtotime($D2))."'".$strg.$stTime);

        if($resultado->num_rows() > 0 ) {

            $objPHPExcel = new PHPExcel();

            $tituloReporte = "Reporte de Llamadas";
            $titulosColumnas = array('FECHA','HORA','ORIGEN','DESTINO','CANAL','CANAL DESTINO','ESTADO', 'DURACION');

            $objPHPExcel->setActiveSheetIndex(0)
                ->mergeCells('A1:H1');


            $objPHPExcel->setActiveSheetIndex(0)
                ->setCellValue('A1',$tituloReporte)
                ->setCellValue('A3',  $titulosColumnas[0])
                ->setCellValue('B3',  $titulosColumnas[1])
                ->setCellValue('C3',  $titulosColumnas[2])
                ->setCellValue('D3',  $titulosColumnas[3])
                ->setCellValue('E3',  $titulosColumnas[4])
                ->setCellValue('F3',  $titulosColumnas[5])
                ->setCellValue('G3',  $titulosColumnas[6])
                ->setCellValue('H3',  $titulosColumnas[7]);
            $i=4;
            foreach ($resultado->result_array() as $key) {
                $objPHPExcel->setActiveSheetIndex(0)
                    ->setCellValue('A'.$i,  $key['ftDate'])
                    ->setCellValue('B'.$i,  $key['ftTime'])
                    ->setCellValue('C'.$i,  $key['src'])
                    ->setCellValue('D'.$i,  $key['dst'])
                    ->setCellValue('E'.$i,  $key['channel'])
                    ->setCellValue('F'.$i,  $key['dstchannel'])
                    ->setCellValue('G'.$i,  $key['disposition'])
                    ->setCellValue('H'.$i,  $key['DURACION']);
                $i++;
            }

            $estiloTituloReporte = array(
                'font' => array(
                    'name'      => 'Verdana',
                    'bold'      => true,
                    'italic'    => false,
                    'strike'    => false,
                    'size' =>18,
                    'color'     => array(
                        'rgb' => '212121'
                    )
                ),
                'alignment' =>  array(
                    'horizontal' => PHPExcel_Style_Alignment::HORIZONTAL_CENTER,
                    'vertical'   => PHPExcel_Style_Alignment::VERTICAL_CENTER,
                    'rotation'   => 0,
                    'wrap'       => TRUE,
                )
            );

            $estiloTituloColumnas = array(
                'font' => array(
                    'name'      => 'Arial',
                    'bold'      => true
                ),
                'alignment' =>  array(
                    'horizontal' => PHPExcel_Style_Alignment::HORIZONTAL_CENTER,
                    'vertical'   => PHPExcel_Style_Alignment::VERTICAL_CENTER,
                    'wrap'          => TRUE
                ));

            $estiloInformacion = new PHPExcel_Style();
            $estiloInformacion->applyFromArray(
                array(
                    'font' => array(
                        'name'      => 'Arial',
                        'size' => 11
                    )
                ));
            $objPHPExcel->getActiveSheet()->getColumnDimension('A')->setWidth(25);
            $objPHPExcel->getActiveSheet()->getColumnDimension('B')->setWidth(12);
            $objPHPExcel->getActiveSheet()->getColumnDimension('C')->setWidth(15);

            $objPHPExcel->getActiveSheet()->getColumnDimension('D')->setWidth(22);
            $objPHPExcel->getActiveSheet()->getColumnDimension('E')->setWidth(50);
            $objPHPExcel->getActiveSheet()->getColumnDimension('F')->setWidth(20);
            $objPHPExcel->getActiveSheet()->getColumnDimension('G')->setWidth(20);
            $objPHPExcel->getActiveSheet()->getColumnDimension('H')->setWidth(15);
            $objPHPExcel->getActiveSheet()->getStyle('A1:H1')->applyFromArray($estiloTituloReporte);
            $objPHPExcel->getActiveSheet()->getStyle('A3:H3')->applyFromArray($estiloTituloColumnas);
            $objPHPExcel->getActiveSheet()->setSharedStyle($estiloInformacion, "A4:E".($i-1));

            $objPHPExcel->getActiveSheet()->setTitle('Reporte Llamadas');

            $objPHPExcel->setActiveSheetIndex(0);

            $objPHPExcel->getActiveSheet(0)->freezePane('A4');
            $objPHPExcel->getActiveSheet(0)->freezePaneByColumnAndRow(0,4);

            header('Content-Type: application/vnd.openxmlformats-officedocument.spreadsheetml.sheet');
            header('Content-Disposition: attachment;filename="Reporte de '.$D1.' Hasta '.$D2.'.xlsx"');
            header('Cache-Control: max-age=0');

            $objWriter = PHPExcel_IOFactory::createWriter($objPHPExcel, 'Excel2007');
            $objWriter->save('php://output');
        }
        else{
            print_r('No hay resultados para mostrar');
        }
    }
}