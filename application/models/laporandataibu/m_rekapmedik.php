<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class M_rekapmedik extends CI_Model{

    function get_list_rekapmedik($params){
        $sql = "SELECT * FROM rekap_medik "
            ."INNER JOIN pasien ON rekap_medik.id_pasien=pasien.id_pasien "
            ."WHERE rekap_medik.id_pasien = ? AND pasien_nm LIKE ? LIMIT ?,?";
        $query = $this->db->query($sql,  $params);
        if ($query->num_rows() > 0) {
            $result = $query->result_array();
            $query->free_result();
            return $result;
        } else {
            return array();
        }
    }

    function get_total_rekapmedik($params){
        $sql = "SELECT COUNT(*) as 'total' FROM rekap_medik "
            ."INNER JOIN pasien ON rekap_medik.id_pasien=pasien.id_pasien "
            ."WHERE rekap_medik.id_pasien = ? AND pasien_nm LIKE ?";
        $query = $this->db->query($sql, $params);
        if ($query->num_rows() > 0) {
            $result = $query->row_array();
            $query->free_result();
            return $result['total'];
        } else {
            return array();
        }
    }

    function get_rekapmedik_by_id($params){
        $sql = "SELECT * FROM rekap_medik "
            ."INNER JOIN pasien ON rekap_medik.id_pasien=pasien.id_pasien "
            ."WHERE id_rekapmedik = ?";
        $query = $this->db->query($sql, $params);
        if ($query->num_rows() > 0) {
            $result = $query->row();
            $query->free_result();
            return $result;
        } else {
            return NULL;
        }
    }

}
