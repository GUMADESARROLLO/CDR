<?php 
defined('BASEPATH') OR exit('No direct script access allowed');

class movimientos_controller extends CI_Controller {
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
        $this->load->view('pages/movimientos/movimientos');
        $this->load->view('footer/footer');
        $this->load->view('jsView/js_movimientos');   
    }

    public function crearMovimiento() {
        $data['menu_usuario']=$this->main_model->generarMenu($this->session->userdata('rol'));
        
        $this->load->view('header/header',$data);
        $this->load->view('pages/movimientos/nuevoMovimiento');
        $this->load->view('footer/footer');
        $this->load->view('jsView/js_movimientos');
    }

    public function listarArticulos() {
        $this->movimientos_model->listarArticulos1();
    }

    public function listandoMovimientos() {
        $this->movimientos_model->listandoMovimientos();
    }
}
?>