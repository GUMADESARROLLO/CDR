<?php 
class usuarios_model extends CI_Model {
    public function __construct() {
        parent::__construct();
        $this->load->database();
    }

    public function actualizarUsuario($url, $idUsuario) {
    	$this->db->where('IdUser', $idUsuario);
        $result=$this->db->update('usuarios',array('url' => $url));

        echo ($this->db->affected_rows() > 0) ? 1 : 0;
    }
}