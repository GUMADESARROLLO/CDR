<?php 
defined('BASEPATH') OR exit('No direct script access allowed');

class usuarios_controller extends CI_Controller {
    public function __construct() {
        parent::__construct();
        $this->load->library('session');

        if($this->session->userdata('logged')==0){
            redirect(base_url().'index.php/login','refresh');
        }
    }

    public function index() {

    }

    public function actualizarUsuario() {
        $this->usuarios_model->actualizarUsuario($this->input->post('url_foto'), $this->input->post('idUsuario'));
    }
}
?>