<?php

class konsultasi_model extends CI_Model{

    function __construct() {
        parent::__construct();
    }

    function getAllKonsul(){
        $query = $this->db->query("SELECT k.no_konsul, k.id_konsul, k.nama_konsul, ar.mb AS mbr, ar.md AS mdr, ab.mb AS mbb, ab.md AS mdb, at.mb AS mbt, at.md AS mdt FROM konsultasi k JOIN anem_ringan ar ON k.id_konsul = ar.id_konsul JOIN anem_berat ab ON k.id_konsul = ab.id_konsul JOIN anem_sedang at ON k.id_konsul = at.id_konsul");
        return $query->result_array();
    }

    function getKonsulByType($type){
        $params = array('type' => $type );
        return $this->db->get_where('konsultasi', $params, 4, 0)->result_array();
    }

    function getKonsulNilai($id_konsul, $hasil){
        $params = array($id_konsul, $hasil);
        $sql = "SELECT mb, md FROM konsultasi k INNER JOIN diagnosa d USING(id_konsul) WHERE k.`id_konsul` = ? AND d.`hasil` = ?";
        $query = $this->db->query($sql, $params);
        return $query->row_array();
    }

    function getPureKonsul(){
        return $this->db->get('konsultasi')->result_array();
    }

}
