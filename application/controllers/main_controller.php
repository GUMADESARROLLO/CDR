<?php 
defined('BASEPATH') OR exit('No direct script access allowed');

class main_controller extends CI_Controller {
    public function __construct() {
        parent::__construct();
        $this->load->library('session');
        $this->load->library('persona');

        if($this->session->userdata('logged')==0){
            redirect(base_url().'index.php/login','refresh');
        }
    }

    public function index() {
        $_data['info']=$this->login_model->info_cliente($this->session->userdata('idUser'));
        $_data['ultimoAcceso']=$this->login_model->ultimoAcceso($this->session->userdata('idUser'));
        
        $data['menu_usuario']=$this->main_model->generarMenu($this->session->userdata('rol'));

        //$persona = new materias();

        // Usamos los métodos
        /*$persona->set_idUser('6');
        $persona->set_userName("dd");
        $persona->set_password("123456");
        $persona->set_nombre("cualquiera 454545");
        $persona->set_rol("1");
        $persona->set_activo("1");*/

        //$this->main_model->guardarUsuario1($persona);

        $this->load->view('header/header',$data);
        $this->load->view('pages/main',$_data);
        $this->load->view('footer/footer');
        $this->load->view('jsView/js_main');
    }
}
?>