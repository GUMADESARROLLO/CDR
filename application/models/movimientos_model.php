<?php 
class movimientos_model extends CI_Model {
    public function __construct() {
        parent::__construct();
        $this->load->database();
    }

    public function listarArticulos1() {
        $temp = array();
        for($i=0; $i <= 30; $i++) {
            $temp[] = array(
                'value' => $i,
                'desc' => 'Matricula-'.$i
            );
        }
        echo json_encode($temp);
    }

    public function guardarUsuario1($objetoPersona) {
        $this->db->insert('usuarios', $objetoPersona);
    }

    public function listandoMovimientos() {
        //$this->db->select('*');
        //$query = $this->db->get('movimientos');

        $columns = array(
                0 =>'id_movimiento', 
                1 =>'no_recibo', 
                2 => 'concepto_recibo',
                3=> 'fecha_recibo',
                4=> 'recibido_de'
            );

        $totalData  = $this->db->count_all('movimientos');
        $totalFiltered =  $totalData; 

        //Only select column that want to show in datatable or you can filte it mnually when send it
        $this->db->start_cache();
        $this->db->select($columns);
        // if there is a search parameter, $_REQUEST['search']['value'] contains search parameter
        if( !empty($_REQUEST['search']['value']) ) {
                $search_value = $_REQUEST['search']['value'];

                $this->db->like('id_movimiento', $search_value);
                $this->db->like('no_recibo', $search_value);
                $this->db->or_like('concepto_recibo', $search_value);
                $this->db->or_like('fecha_recibo', $search_value);
                $this->db->or_like('recibido_de', $search_value);
                $this->db->stop_cache();

                $totalFiltered  = $this->db->get('movimientos')->num_rows();
        }

        $this->db->stop_cache();
        
        $this->db->order_by($columns[$_REQUEST['order'][0]['column']], $_REQUEST['order'][0]['dir']);
        $this->db->limit($_REQUEST['length'], $_REQUEST['start']);

        $query = $this->db->get('movimientos');

        //Reset Key Array
        $data = array();
        foreach ($query->result_array() as $val) {
                $data[] = array_values($val);
        }


        //Prepare Return Data
        $return = array(
                "draw"            => $_REQUEST['draw'] ,   // for every request/draw by clientside , they send a number as a parameter, when they recieve a response/data they first check the draw number, so we are sending same number in draw. 
                "recordsTotal"    => $totalData,  // total number of records
                "recordsFiltered" => $totalFiltered, // total number of records after searching, if there is no searching then totalFiltered = totalData
                "data"            => $data  // total data array
            );

        echo json_encode($return);
    }
}