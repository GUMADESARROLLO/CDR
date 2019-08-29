<?php 
defined('BASEPATH') OR exit('No direct script access allowed');

class reportes_controller extends CI_Controller {
    public function __construct() {
        parent::__construct();
        $this->load->library('session');

        if($this->session->userdata('logged')==0){
            redirect(base_url().'index.php/login','refresh');
        }
    }

    public function index() {
        $this->load->view('header/header');
        $data['ext'] = $this->reportes_model->getExt();
        $this->load->view('pages/reportes/reportes',$data);
        $this->load->view('footer/footer');
        $this->load->view('jsView/js_reportes');
    }

    public function generandoMenuTipoRpt($val) {
        $this->reportes_model->generandoOpciones($val);
    }

    public function generarReporte($d1,$d2,$ex,$tm) {

        $this->reportes_model->generandoDataRpt($d1,$d2,$ex,$tm);
    }

    public function toExcel($d1,$d2,$ex,$tm) {
        $this->reportes_model->generarExcel($d1,$d2,$ex,$tm);
    }
}
?>