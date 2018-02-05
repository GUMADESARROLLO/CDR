<?php 
defined('BASEPATH') OR exit('No direct script access allowed');

class talonarios_controller extends CI_Controller {
    public function __construct() {
        parent::__construct();
        $this->load->library('session');

        if($this->session->userdata('logged')==0){
            redirect(base_url().'index.php/login','refresh');
        }
    }

    public function index() {
        $data['menu_usuario']=$this->main_model->generarMenu($this->session->userdata('rol'));        
        $this->load->view('header/header',$data);
        $this->load->view('pages/Talonarios/talonarios');
        $this->load->view('footer/footer');
        $this->load->view('jsView/js_talonarios');
    }
}
?>