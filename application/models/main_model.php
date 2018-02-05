<?php 
class main_model extends CI_Model {
    public function __construct() {
        parent::__construct();
        $this->load->database();
        $this->load->library('persona');
    }

    public function generarMenu($idUser) {
        $menu='';
        switch ($idUser) {
            case '0':
                //menu: Administrador
                $menu='
                    <li><a href="'.base_url("index.php/main").'">Resumen</a></li>
                    <li><a href="'.base_url("index.php/movimientos").'">Movimientos</a></li>
                    <li><a href="'.base_url("index.php/talonarios").'">Talonarios</a></li>
                    <li><a href="'.base_url("index.php/reportes").'">Reportes</a></li>';
            break;
        }
        return $menu;
    }

    public function guardarUsuario1($objetoPersona) {
        $this->db->insert('usuarios', $objetoPersona);
    }
}